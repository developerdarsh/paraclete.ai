<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use App\Services\Statistics\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;
use App\Models\SubscriptionPlan;
use App\Models\FavoriteChat;
use App\Models\ChatHistory;
use App\Models\Chat;
use App\Models\User;


class ChatController extends Controller
{
    private $api;
    private $user;

    public function __construct()
    {
        $this->api = new LicenseController();
        $this->user = new UserService();
    }

    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        if (session()->has('message_code')) {
            session()->forget('message_code');
        }

        $favorite_chats = Chat::select('chats.*', 'favorite_chats.*')->where('favorite_chats.user_id', auth()->user()->id)->join('favorite_chats', 'favorite_chats.chat_code', '=', 'chats.chat_code')->where('status', true)->orderBy('category', 'asc')->get();    
        $user_chats = FavoriteChat::where('user_id', auth()->user()->id)->pluck('chat_code');     
        $other_chats = Chat::whereNotIn('chat_code', $user_chats)->where('status', true)->orderBy('category', 'asc')->get();                 
        
        return view('user.chat.index', compact('favorite_chats', 'other_chats'));
    }


    /**
	*
	* Process Input Text
	* @param - file id in DB
	* @return - confirmation
	*
	*/
	public function process(Request $request) 
    {      
		# Check if user has access to the chat bot
        $template = Chat::where('chat_code', $request->chat_code)->first();
        if (auth()->user()->group == 'user') {
            if (config('settings.chat_feature_user') == 'allow') {
                if (config('settings.chats_access_user') != 'all') {
                    if ($template->category != config('settings.chats_access_user')) {                         
                        $status = 'error';
                        $message = __('This chat assistant is not available for your account, subscribe to get a proper access');
                        return response()->json(['status' => $status, 'message' => $message]);                     
                    } 
                }                
            } else {
                $status = 'error';
                $message = __('Ai chat assistant feature is not available for free tier users, subscribe to get a proper access');
                return response()->json(['status' => $status, 'message' => $message]);      
            }
        } elseif (auth()->user()->group == 'subscriber') {
            $plan = SubscriptionPlan::where('id', auth()->user()->plan_id)->first();
            if ($plan->chats != 'all' && $plan->chats != 'premium') {          
                if ($plan->chats == 'professional' && $template->category == 'premium') {
                    $status = 'error';
                    $message =  __('Your current subscription does not include support for this chat assitant category');
                    return response()->json(['status' => $status, 'message' => $message]); 
                } else if($plan->chats == 'standard' && ($template->category == 'premium' || $template->category == 'professional')) {
                    $status = 'error';
                    $message =  __('Your current subscription does not include support for this chat assitant category');
                    return response()->json(['status' => $status, 'message' => $message]); 
                }                  
            }
        }

        # Check if user has sufficient words available to proceed
        $balance = auth()->user()->available_words + auth()->user()->available_words_prepaid;
        $words = count(explode(' ', ($request->input('message'))));
        if ($balance <= 0) {
            $status = 'error';
            $message = __('You do not have any words left to proceed with your next chat message request, subscribe or top up to get more words');
            return response()->json(['status' => $status, 'message' => $message]);
        } elseif ($balance < $words) {
            $status = 'error';
            $message = __('You do not have sufficient words left to proceed with your next chat message request, subscribe or top up to get more words');
            return response()->json(['status' => $status, 'message' => $message]);
        }

        $main_chat = Chat::where('chat_code', $request->chat_code)->first();

        if ($request->message_code == '') {
            $messages = ['role' => 'system', 'content' => $main_chat->prompt];            
            $messages[] = ['role' => 'user', 'content' => $request->input('message')];

            $chat = new ChatHistory();
            $chat->user_id = auth()->user()->id;
            $chat->title = 'New Chat';
            $chat->chat_code = $request->chat_code;
            $chat->message_code = strtoupper(Str::random(10));
            $chat->messages = 1;
            $chat->chat = $messages;
            $chat->save();
        } else {
            $chat_message = ChatHistory::where('message_code', $request->message_code)->first();

            if ($chat_message) {

                if (is_null($chat_message->chat)) {
                    $messages [] = ['role' => 'system', 'content' => $main_chat->prompt]; 
                } else {
                    $messages = $chat_message->chat;
                }
                
                array_push($messages, ['role' => 'user', 'content' => $request->input('message')]);
                $chat_message->messages = ++$chat_message->messages;
                $chat_message->chat = $messages;
                $chat_message->save();
            } else {
                $messages[] = ['role' => 'system', 'content' => $main_chat->prompt];            
                $messages[] = ['role' => 'user', 'content' => $request->input('message')];

                $chat = new ChatHistory();
                $chat->user_id = auth()->user()->id;
                $chat->title = 'New Chat';
                $chat->chat_code = $request->chat_code;
                $chat->message_code = $request->message_code;
                $chat->messages = 1;
                $chat->chat = $messages;
                $chat->save();
            }
        }
        $request->session()->put('webAccessBtn', $request->webAccessBtn);

        $request->session()->put('message_code', $request->message_code);

        return response()->json(['status' => 'success', 'old'=> $balance, 'current' => ($balance - $words)]);

	}


     /**
	*
	* Process Chat
	* @param - file id in DB
	* @return - confirmation
	*
	*/
    public function generateChatOld(Request $request) 
    {
		$webAccessBtn = session()->get('webAccessBtn');
        $message_code = session()->get('message_code');
        $chat_message = ChatHistory::where('message_code', $message_code)->first();
        $query = session()->get('messages');
		$queryStr = $request->message;
        if($webAccessBtn == '1'){
            $data = $this->googleCustomSearch($queryStr);
            $customSearch = json_decode($data);
            $customSearchSnippet = $customSearch[0]->snippet;
            session()->forget('messages');
            $openairesponse=$this->openaiResult($customSearchSnippet);
            $chathistoryarray=$chat_message->chat;
            array_push($chathistoryarray,array(
                'role' => 'assistant',
                'content' => $customSearchSnippet
            ));
            array_push($chathistoryarray,array(
                'role' => 'assistant',
                'content' => $openairesponse->choices[0]->text
            ));
            
		}else{
            $openairesponse=$this->openaiResult($queryStr);
            $content=$openairesponse->choices[0]->text;
            $chathistoryarray=$chat_message->chat;
            array_push($chathistoryarray,array(
                'role' => 'assistant',
                'content' => $content
            ));
        }
        $chat_message->chat=$chathistoryarray;
        $chat_message->save();
        return response()->stream(function () {

            $open_ai = new OpenAi(config('services.openai.key'));
            $message_code = session()->get('message_code');

            $chat_message = ChatHistory::where('message_code', $message_code)->first();
            $messages = $chat_message->chat;

            $text = "";
            $opts = [
                'model' => 'gpt-3.5-turbo',
                'messages' => $messages,
                'temperature' => 1.0,
                'frequency_penalty' => 0,
                'presence_penalty' => 0,
                'stream' => true
            ];
            
            $complete = $open_ai->chat($opts, function ($curl_info, $data) use (&$text) {
                if ($obj = json_decode($data) and $obj->error->message != "") {
                    error_log(json_encode($obj->error->message));
                } else {
                    echo $data;

                    $clean = str_replace("data: ", "", $data);
                    $first = str_replace("}\n\n{", ",", $clean);
    
                    if(str_contains($first, 'assistant')) {
                        $raw = str_replace('"choices":[{"delta":{"role":"assistant"', '"random":[{"alpha":{"role":"assistant"', $first);
                        $response = json_decode($raw, true);
                    } else {
                        $response = json_decode($clean, true);
                    }    
        
				$response["choices"][0]["delta"]["content"] = "Hellow...tehrere";
                    if ($data != "data: [DONE]\n\n" and isset($response["choices"][0]["delta"]["content"])) {
                        $text .= $response["choices"][0]["delta"]["content"];
						
                    }

                  
                }              
                echo PHP_EOL;
                ob_flush();
                flush();
                return strlen($data);
            });

            # Update credit balance
            $words = count(explode(' ', ($text)));
            $this->updateBalance($words);  
            
            array_push($messages, ['role' => 'assistant', 'content' => $text]);
            $chat_message->messages = ++$chat_message->messages;
            $chat_message->chat = $messages;
            $chat_message->save();
           
        }, 200, [
            'Cache-Control' => 'no-cache',
            'Content-Type' => 'text/event-stream',
        ]);
        
    }

    public function generateChatNew(Request $request) 
    {
        $webAccessBtn = session()->get('webAccessBtn');
        $message_code = session()->get('message_code');
        $chat_message = ChatHistory::where('message_code', $message_code)->first();
        $query = session()->get('messages');
        $queryStr = $request->message;
        $data = '';
        $string = "";
        if ($webAccessBtn == '1') {
            $data = $this->googleCustomSearch($queryStr);
            // $customSearchData = json_decode($data);
            // $customSearchSnippet = $customSearch[0]->snippet;
            session()->forget('messages');
            $openairesponse = $this->openaiResult($data);
            // dd($openairesponse);
        } else {
            $openairesponse = $this->openaiResult($queryStr);
        }
        $content = $openairesponse->choices[0]->text;
        return response()->stream(function () use ($content, $data) {

            $message_code = session()->get('message_code');

            if ($data != '') {
                $chat_message = ChatHistory::where('message_code', $message_code)->first();
                $messages = $chat_message->chat;

                $text = $data;
                $opts = [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => $messages,
                    'temperature' => 1.0,
                    'frequency_penalty' => 0,
                    'presence_penalty' => 0,
                    'stream' => true
                ];

                # Update credit balance
                $words = count(explode(' ', ($text)));
                $this->updateBalance($words);

                array_push($messages, ['role' => 'assistant', 'content' => $text]);
                $chat_message->messages = ++$chat_message->messages;
                $chat_message->chat = $messages;
                $chat_message->save();
            }
            $chat_message = ChatHistory::where('message_code', $message_code)->first();
            $messages = $chat_message->chat;

            $text = $content;
            $opts = [
                'model' => 'gpt-3.5-turbo',
                'messages' => $messages,
                'temperature' => 1.0,
                'frequency_penalty' => 0,
                'presence_penalty' => 0,
                'stream' => true
            ];

            # Update credit balance
            $words = count(explode(' ', ($text)));
            $this->updateBalance($words);

            array_push($messages, ['role' => 'assistant', 'content' => $text]);
            $chat_message->messages = ++$chat_message->messages;
            $chat_message->chat = $messages;
            $chat_message->save();

        }, 200, [
                'Cache-Control' => 'no-cache',
                'Content-Type' => 'text/event-stream',
            ]);

    }

    public function generateChat(Request $request) 
    {
        $requestMessage = $request->message;
        
        $webAccessBtn = session()->get('webAccessBtn');
        if (session()->has('webAccessBtn')) {
                session()->forget('webAccessBtn');
         }

            return response()->stream(function () use ($requestMessage, $webAccessBtn) {

                        
                      

                        $open_ai = new OpenAi(config('services.openai.key'));

                         //if(null !== session()->get('message_code') && '' !== session()->get('message_code')){


                                $message_code = session()->get('message_code');
                             
                                if ($webAccessBtn == '1') {
                                  
                                $queryStr = $requestMessage;
                                $google_result_data = $this->googleCustomSearch($queryStr);
                                $chat_message = ChatHistory::where('message_code', $message_code)->first();

                                $messages = $chat_message->chat;
                                array_push($messages, ['role' => 'assistant', 'content' => $google_result_data]);
                                $chat_message->messages = ++$chat_message->messages;
                                $chat_message->chat = $messages;
                                $chat_message->save();
                                // $chat_message = ChatHistory::where('message_code', $message_code)->first();
                                // $messages = $chat_message->chat;

                                } else {
                                $chat_message = ChatHistory::where('message_code', $message_code)->first();
                                $messages = $chat_message->chat;
                                }

                        // }
                        
                        $text = "";
                        $opts = [
                            'model' => 'gpt-3.5-turbo',
                            'messages' => $messages,
                            'temperature' => 1.0,
                            'frequency_penalty' => 0,
                            'presence_penalty' => 0,
                            'stream' => true
                        ];
                        
                        $complete = $open_ai->chat($opts, function ($curl_info, $data) use (&$text) {
                            if ($obj = json_decode($data) and $obj->error->message != "") {
                                error_log(json_encode($obj->error->message));
                            } else {
                                echo $data;

                                $clean = str_replace("data: ", "", $data);
                                $first = str_replace("}\n\n{", ",", $clean);
                
                                if(str_contains($first, 'assistant')) {
                                    $raw = str_replace('"choices":[{"delta":{"role":"assistant"', '"random":[{"alpha":{"role":"assistant"', $first);
                                
                                    $response = json_decode($raw, true);
                                } else {
                                    $response = json_decode($clean, true);
                                }    
                    
                                if ($data != "data: [DONE]\n\n" and isset($response["choices"][0]["delta"]["content"])) {
                                    $text .= $response["choices"][0]["delta"]["content"];
                                }      

                            
                            

                            }
                            
                            echo PHP_EOL;
                            ob_flush();
                            flush();
                            return strlen($data);
                        });

                        # Update credit balance
                        $words = count(explode(' ', ($text)));
                        $this->updateBalance($words);  
                        
                        array_push($messages, ['role' => 'assistant', 'content' => $text]);
                    // array_push($messages, ['role' => 'assistant', 'content' => "hellow"]);
                        $chat_message->messages = ++$chat_message->messages;
                        $chat_message->chat = $messages;
                        $chat_message->save();

                       

                     
                    
                    }, 200, [
                        'Cache-Control' => 'no-cache',
                        'Content-Type' => 'text/event-stream',
                    ]);
       
       
        
    }

    /**
	*
	* Clear Session
	* @param - file id in DB
	* @return - confirmation
	*
	*/
	public function clear(Request $request) 
    {
        if (session()->has('message_code')) {
            session()->forget('message_code');
        }

        return response()->json(['status' => 'success']);
	}



    /**
	*
	* Update user word balance
	* @param - total words generated
	* @return - confirmation
	*
	*/
    public function updateBalance($words) {

        $user = User::find(Auth::user()->id);

        if (Auth::user()->available_words > $words) {

            $total_words = Auth::user()->available_words - $words;
            $user->available_words = ($total_words < 0) ? 0 : $total_words;

        } elseif (Auth::user()->available_words_prepaid > $words) {

            $total_words_prepaid = Auth::user()->available_words_prepaid - $words;
            $user->available_words_prepaid = ($total_words_prepaid < 0) ? 0 : $total_words_prepaid;

        } elseif ((Auth::user()->available_words + Auth::user()->available_words_prepaid) == $words) {

            $user->available_words = 0;
            $user->available_words_prepaid = 0;

        } else {

            $remaining = $words - Auth::user()->available_words;
            $user->available_words = 0;

            $prepaid_left = Auth::user()->available_words_prepaid - $remaining;
            $user->available_words_prepaid = ($prepaid_left < 0) ? 0 : $prepaid_left;

        }

        $user->update();

        return true;
    }


    /**
	*
	* Update user word balance
	* @param - total words generated
	* @return - confirmation
	*
	*/
    public function messages(Request $request) {

        if ($request->ajax()) {

            if (session()->has('message_code')) {
                session()->forget('message_code');
            }

            $messages = ChatHistory::where('user_id', auth()->user()->id)->where('message_code', $request->code)->first();
            $message = ($messages) ? json_encode($messages, false) : 'new';
            return $message;
        }   
    }


    /**
	* 
	* Process media file
	* @param - file id in DB
	* @return - confirmation
	* 
	*/
	public function view($code) 
    {
        if (session()->has('message_code')) {
            session()->forget('message_code');
        }

        $chat = Chat::where('chat_code', $code)->first(); 
        $messages = ChatHistory::where('user_id', auth()->user()->id)->where('chat_code', $chat->chat_code)->orderBy('updated_at', 'desc')->get(); 
        $message_chat = ChatHistory::where('user_id', auth()->user()->id)->where('chat_code', $chat->chat_code)->latest('updated_at')->first(); 
        $default_message = ($message_chat) ? json_encode($message_chat, false) : 'new';

        return view('user.chat.view', compact('chat', 'messages', 'default_message'));
	}


    /**
	*
	* Rename chat
	* @param - file id in DB
	* @return - confirmation
	*
	*/
	public function rename(Request $request) 
    {
        if ($request->ajax()) {

            $chat = ChatHistory::where('message_code', request('code'))->first(); 

            if ($chat) {
                if ($chat->user_id == auth()->user()->id){

                    $chat->title = request('name');
                    $chat->save();
    
                    $data['status'] = 'success';
                    $data['code'] = request('code');
                    return $data;  
        
                } else{
    
                    $data['status'] = 'error';
                    $data['message'] = __('There was an error while changing the chat title');
                    return $data;
                }
            } 
              
        }
	}


    /**
	*
	* Delete chat
	* @param - file id in DB
	* @return - confirmation
	*
	*/
	public function delete(Request $request) 
    {
        if ($request->ajax()) {

            $chat = ChatHistory::where('message_code', request('code'))->first(); 

            if ($chat) {
                if ($chat->user_id == auth()->user()->id){

                    $chat->delete();

                    if (session()->has('message_code')) {
                        session()->forget('message_code');
                    }
    
                    $data['status'] = 'success';
                    return $data;  
        
                } else{
    
                    $data['status'] = 'error';
                    $data['message'] = __('There was an error while deleting the chat history');
                    return $data;
                }
            } else {
                $data['status'] = 'empty';
                return $data;
            }
              
        }
	}


     /**
	*
	* Set favorite status
	* @param - file id in DB
	* @return - confirmation
	*
	*/
	public function favorite(Request $request) 
    {
        if ($request->ajax()) {


            $chat = Chat::where('chat_code', request('id'))->first(); 

            $favorite = FavoriteChat::where('chat_code', $chat->chat_code)->where('user_id', auth()->user()->id)->first();

            if ($favorite) {

                $favorite->delete();

                $data['status'] = 'success';
                $data['set'] = true;
                return $data;  
    
            } else{

                $new_favorite = new FavoriteChat();
                $new_favorite->user_id = auth()->user()->id;
                $new_favorite->chat_code = $chat->chat_code;
                $new_favorite->save();

                $data['status'] = 'success';
                $data['set'] = false;
                return $data; 
            }  
        }
	}


    public function escapeJson($value) 
    { 
        $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
        $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
        $result = str_replace($escapers, $replacements, $value);
        return $result;
    }

	public function googleCustomSearchOld($search_key)
    {
        $search_result = [];
        if(!empty($search_key))
        {
            $searchQ = $search_key;
    
            $ch = curl_init();
            $cr = "cr=".urlencode($searchQ);
            $cx = "&cx=82a52554294294369";
            $lr = "&lr=".urlencode($searchQ);
            $q = "&q=".urlencode($searchQ);
            $safe = "&safe=off";
            $alt = "&alt=json";
            $num = "&num=5";
            $prettyPrint = "&prettyPrint=true";
            $general = "&%24.xgafv=1";
            $key = "&key=AIzaSyCNKAVmTCelLTeAxPGq_ShbIGfdv6WRaV4";
            curl_setopt($ch, CURLOPT_URL, 'https://customsearch.googleapis.com/customsearch/v1?'.$cr.$cx.$lr.$q.$safe.$alt.$num.$prettyPrint.$general.$key);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

            curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

            $headers = array();
            $headers[] = 'Accept: application/json';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
            $result = json_decode($result);
            $search_result = $result->items;
        }
        // dd(json_encode($search_result));
        return json_encode($search_result);
    }

function googleCustomSearch($search_key)
{
  $search_result = [];
  
  $search_result_string = '';
  if (!empty($search_key)) {
    $searchQ = trim($search_key);

    $ch = curl_init();
    $cr = "cr=" . urlencode($searchQ);
    $cx = "&cx=82a52554294294369";
    $lr = "&lr=" . urlencode($searchQ);
    $q = "&q=" . urlencode($searchQ);
    $safe = "&safe=off";
    $alt = "&alt=json";
    $num = "&num=5";
    $prettyPrint = "&prettyPrint=true";
    $general = "&%24.xgafv=1";
    $key = "&key=AIzaSyCNKAVmTCelLTeAxPGq_ShbIGfdv6WRaV4";
    curl_setopt($ch, CURLOPT_URL, 'https://customsearch.googleapis.com/customsearch/v1?' . $cr . $cx . $lr . $q . $safe . $alt . $num . $prettyPrint . $general . $key);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

    $headers = array();
    $headers[] = 'Accept: application/json';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    $result = json_decode($result);
    $search_result = $result->items;
    if(is_array($search_result) && count($search_result) > 0){
      $web_search_result_string = '';
      foreach($search_result as $key => $single_result){
        $result_count = $key+1;
        $web_search_result_string.= '['.$result_count.']"'.
        $single_result->snippet.
        "\"</br> URL:".$single_result->link.
        "</br>";
      }

      $search_result_string = 'Web search results: </br>
      '.$web_search_result_string.
      'Current date: '.date("d/m/Y").'
      </br>
      Instructions: Using the provided web search results, write a comprehensive reply to the given query. Make sure to cite results using [[number](URL)] notation after the reference. If the provided search results refer to multiple subjects with the same name, write separate answers for each subject.
      </br>
      Query: '.$search_key;

    }
  }
  return $search_result_string;
}


    public function openaiResult($googleRes){

        $jsonString = '{
        "model": "text-davinci-003",
        "prompt": "'.$googleRes.'?\nHuman: Id"
        }';
        
		// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonString);

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer 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';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $result = json_decode($result);
        return $result;
    }
}

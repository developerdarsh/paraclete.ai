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
use Illuminate\Support\Facades\Http;
use Log;


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
		$request->session()->put('audioSearchBtn', $request->audioSearchBtn);
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
    
    public function generateChat(Request $request) 
    {
        
        $requestMessage = $request->message;
        $webAccessBtn = session()->get('webAccessBtn');
        $audioSearchBtn = session()->get('audioSearchBtn');
        if (session()->has('webAccessBtn')) {
                session()->forget('webAccessBtn');
         }
            return response()->stream(function () use ($requestMessage, $webAccessBtn) {
                        
                        $open_ai = new OpenAi(config('services.openai.key'));
                        $message_code = session()->get('message_code');
                             
                                if ($webAccessBtn == '1') {
                                  
                                $queryStr = $requestMessage;
                                $google_result_data = $this->googleCustomSearch($queryStr);
                                $search = '</br>Instructions:You`re now the persona of an advanced online AI language model, expertly trained on a broad array of internet text. Your mission, as a Natural Language Processing (NLP) wizard, is to analyze and respond to user queries with short, concise, and informative answers derived from an extensive database and real-time Google search results.
If a query arrives needing deeper exploration or explanation, don`t hesitate to provide a comprehensive reply, citing sources using [number.(URL)] notation post-reference. In case the search results refer to multiple subjects sharing the same name, distinguish each by offering separate answers tailored to each context.
For any current events or news-related questions, leverage your access to https://www.newsnow.com/us/ and provide a brief yet comprehensive summary, ensuring the information is easily digestible for a general audience.
Remember, your primary objective is to deliver direct, straightforward responses, unless your user seeks more elaborate information. In all circumstances, you are committed to making complex information accessible and understandable, creating a seamless interaction that informs, assists, and engages.
If the provided search results refer to multiple subjects with the same name, write separate answers for each subject.
Make sure to create a well-formatted list with bold headings for each point title.also please do this needfull 1.each title of each points must be bold. 2.web links must be replace with citation url</br>' ;
//                                 $google_result_data = str_replace($search, '', $google_result_data) ;
                                $chat_message = ChatHistory::where('message_code', $message_code)->first();
                                $messages = $chat_message->chat;
                                $withGoogleSearch = $chat_message->chat;    
                                $concatInst =  $google_result_data.$search;                          
                                array_push($messages, ['role' => 'assistant', 'content' => $google_result_data]);

                                //$google_result_data_new = str_replace($search, '', $google_result_data) ;
                                //$google_result_data_new.='---hellow---';
                                array_push($withGoogleSearch, ['role' => 'assistant', 'content' => $concatInst]);

                                $chat_message->messages = ++$chat_message->messages;
                                $chat_message->chat = $messages;



                                $chat_message->save();
                                } else {
                                  $chat_message = ChatHistory::where('message_code', $message_code)->first();
                                  $messages = $chat_message->chat;
                                }
                        $text = "";
                        if ($webAccessBtn == '1') {
                            $opts = [
                                'model' => 'gpt-3.5-turbo',
                                'messages' => $withGoogleSearch,
                                'temperature' => 1.0,
                                'frequency_penalty' => 0,
                                'presence_penalty' => 0,
                                'stream' => true
                            ];
                        }else{
                             $opts = [
                                'model' => 'gpt-3.5-turbo',
                                'messages' => $messages,
                                'temperature' => 1.0,
                                'frequency_penalty' => 0,
                                'presence_penalty' => 0,
                                'stream' => true
                            ];

                        }

                        
                        
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

    public function audioConvert(Request $request){
		 
		$message_code = $request->message_code;
        $chat_message = ChatHistory::where('message_code', $message_code)->first();
        $messages = $chat_message->chat;
        $voice_code = Chat::where('chat_code', $chat_message->chat_code)->first();
        $i = count($messages)-1;
        $lastAssistantData['voice_code'] = $voice_code->voice_code;
        $lastAssistantData['data'] = $messages[$i]['content'];
        return  $lastAssistantData;
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
				'.$web_search_result_string.'</br>
				Query: '.$search_key.'</br>';

    		}
  		}

        
    $res[0] = $web_search_result_string;

        Log::info('search_result_string',$res);

  		return $search_result_string;
	}

    public function store(Request $request)
    {
        $audio = $request->file('audio');
        
        // Store the audio file or process it as per your requirements
        
        return response()->json(['message' => 'Audio recorded successfully']);
    }
	
    public function saveAudio(Request $request)
    {
        $audio = $request->file('audio');
        $format = $audio->getClientOriginalExtension();
        $file_name = $audio->getClientOriginalName();
        $size = $audio->getSize();
        $name = Str::random(10) . '.' . $format;
        if (config('settings.whisper_default_storage') == 'local') {
            $audio_url = $audio->store('transcribe','public');
        } elseif (config('settings.whisper_default_storage') == 'aws') {
            Storage::disk('s3')->put($name, file_get_contents($audio));
            $audio_url = Storage::disk('s3')->url($name);
        } elseif (config('settings.whisper_default_storage') == 'wasabi') {
            Storage::disk('wasabi')->put($name, file_get_contents($audio));
            $audio_url = Storage::disk('wasabi')->url($name);
        }
        
        if (config('settings.whisper_default_storage') == 'local') {
            $file = curl_file_create($audio_url);
        } else {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_URL, $audio_url);
            $content = curl_exec($curl);
            Storage::disk('public')->put('transcribe/' . $file_name, $content);
            $file = curl_file_create('transcribe/' . $file_name);
            curl_close($curl);
            
        }
		$open_ai = new OpenAi(config('services.openai.key')); 
       	$complete = $open_ai->translate([
			'model' => 'whisper-1',
			'file' => $file,
			'prompt' => "",
		]);
        $response = json_decode($complete , true);
		
		return response()->json(['response' => $response, 'message' => 'Audio recorded successfully']);
    }
}

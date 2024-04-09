<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Services\Statistics\DavinciUsageService;
use App\Models\FavoriteTemplate;
use App\Models\CustomTemplate;
use App\Models\Template;
use App\Models\SubscriptionPlan;
use App\Models\Chat;
use App\Models\FavoriteChat;
use App\Models\Banner;

class UserDashboardController extends Controller
{
    use Notifiable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {                         
        $year = $request->input('year', date('Y'));
        $month = $request->input('month', date('m'));

        $davinci_usage = new DavinciUsageService($month, $year);

        $data = [
            'words' => $davinci_usage->userTotalWordsGeneratedCurrentMonth(),
            'contents' => $davinci_usage->userTotalContentsGeneratedCurrentMonth(),
            'images' => $davinci_usage->userTotalImagesGeneratedCurrentMonth(),
            'synthesized' => $davinci_usage->userTotalSynthesizedTextCurrentMonth(),
            'transcribed' => $davinci_usage->userTotalTranscribedAudioCurrentMonth(),
            'codes' => $davinci_usage->userTotalCodesCreatedCurrentMonth(),
        ];

        $chart_data['user_monthly_usage'] = json_encode($davinci_usage->userDailyWordsChart());

        $template_quantity = FavoriteTemplate::where('user_id', auth()->user()->id)->count();
        $templates = Template::select('templates.*', 'favorite_templates.*')->where('favorite_templates.user_id', auth()->user()->id)->join('favorite_templates', 'favorite_templates.template_code', '=', 'templates.template_code')->where('status', true)->orderBy('professional', 'asc')->get();       
        $custom_templates = CustomTemplate::select('custom_templates.*', 'favorite_templates.*')->where('favorite_templates.user_id', auth()->user()->id)->join('favorite_templates', 'favorite_templates.template_code', '=', 'custom_templates.template_code')->where('status', true)->orderBy('professional', 'asc')->get();    
        
        $chat_quantity = FavoriteChat::where('user_id', auth()->user()->id)->count();
        $favorite_chats = Chat::select('chats.*', 'favorite_chats.*')->where('favorite_chats.user_id', auth()->user()->id)->join('favorite_chats', 'favorite_chats.chat_code', '=', 'chats.chat_code')->where('status', true)->orderBy('category', 'asc')->get();       

        $plan = (auth()->user()->plan_id) ? SubscriptionPlan::where('id', auth()->user()->plan_id)->first() : '';
        $subscription = ($plan) ? $plan->plan_name : ''; 

        $BannerModel = Banner::get()->toArray();

        return view('user.dashboard.index', compact('BannerModel','data', 'chart_data', 'template_quantity', 'templates', 'subscription', 'custom_templates', 'chat_quantity', 'favorite_chats'));           
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

            $template = Template::where('template_code', request('id'))->first(); 

            $favorite = FavoriteTemplate::where('template_code', $template->template_code)->where('user_id', auth()->user()->id)->first();

            if ($favorite) {

                $favorite->delete();

                $data['status'] = 'success';
                $data['set'] = true;
                return $data;  
    
            } else{

                $new_favorite = new FavoriteTemplate();
                $new_favorite->user_id = auth()->user()->id;
                $new_favorite->template_code = $template->template_code;
                $new_favorite->save();

                $data['status'] = 'success';
                $data['set'] = false;
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
	public function favoriteCustom(Request $request) 
    {
        if ($request->ajax()) {

            $template = CustomTemplate::where('template_code', request('id'))->first(); 

            $favorite = FavoriteTemplate::where('template_code', $template->template_code)->where('user_id', auth()->user()->id)->first();

            if ($favorite) {

                $favorite->delete();

                $data['status'] = 'success';
                $data['set'] = true;
                return $data;  
    
            } else{

                $new_favorite = new FavoriteTemplate();
                $new_favorite->user_id = auth()->user()->id;
                $new_favorite->template_code = $template->template_code;
                $new_favorite->save();

                $data['status'] = 'success';
                $data['set'] = false;
                return $data; 
            }  
        }
	}

    public function searchMedia(Request $request)
    {
        $snippet    = urlencode($request->search);
        $media_type = $request->media_type;

        if($media_type == 1){

            $apikey = config('services.youtube.key'); 
            
            $googleApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $snippet . '&maxResults=' . 10 . '&key=' . $apikey;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);

            curl_close($ch);
            $data = json_decode($response, true);
            
            if (isset($data['items']) && count($data['items']) > 0) {
                $html = "<ul>";
                foreach ($data['items'] as $video) {
                    if(isset($video['id']['videoId'])){
                    $html .= "<li>
                        <p><b>{$video['snippet']['title']}</b></p>
                        <p>{$video['snippet']['description']}</p>
                        <div>
                            <iframe width='320' height='150' src='https://www.youtube.com/embed/{$video['id']['videoId']}' frameborder='3' allowfullscreen></iframe>
                        </div>
                    </li>";
                    }
                }
                $html .= "</ul>";
            } else {
                $html = '<p>No videos found.</p>';
            }

            return response()->json(['html' => $html]);

        } elseif($media_type == 2){

            $client_id = config('services.twitter.client_id');
            $client_secret = config('services.twitter.client_secret');

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://api.twitter.com/oauth2/token');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
            curl_setopt($ch, CURLOPT_USERPWD, $client_id . ':' . $client_secret);

            $headers = array();
            $headers[] = 'Content-Type: application/x-www-form-urlencoded';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch);
            $responseArray = json_decode($result, true);
            
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);
            
            $accessToken = $responseArray['access_token'];
            
            $ch = curl_init();
            $url = 'https://api.twitter.com/2/tweets/search/recent';

            $headers = [
                'Authorization: Bearer ' . $accessToken,
            ];

            $queryParams = [
                'query' => $snippet,
                'max_results' => 5, 
            ];
            
            $url .= '?' . http_build_query($queryParams);

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);

            curl_close($ch);
            $tweets = json_decode($response);
            
			dd($tweets);
            $html = '<p>Twitter.</p>';
            return response()->json(['html' => $html]);

        } elseif($media_type == 3){
            $url = 'https://instagram.com/babarazam/?__a=1';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json') );
            $response = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($response);

            dd($data);
            $html = '<p>Instagram.</p>';
            return response()->json(['html' => $html]);

        } elseif($media_type == 4){

            // $ch = curl_init();

            // curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/oauth/access_token
            // ?client_id=1510185949811517
            // &client_secret=c3bb561d0b999f8f27a38e0a751581e0
            // &grant_type=client_credentials');
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            // $result = curl_exec($ch);
            // if (curl_errno($ch)) {
            //     echo 'Error:' . curl_error($ch);
            // }
            
            // curl_close($ch);

            // Replace with your user access token
            // $accessToken = 'YOUR_ACCESS_TOKEN';

            // $ch = curl_init();

            // curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/{api-endpoint}&access_token={your-app_id}|{your-app_secret}');
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            // $result = curl_exec($ch);
            // if (curl_errno($ch)) {
            //     echo 'Error:' . curl_error($ch);
            // }
            // curl_close($ch);

            $username = 'developer';
            $app_id = '1510185949811517';
            $app_secret = 'c3bb561d0b999f8f27a38e0a751581e0';

            $url = "https://graph.facebook.com/v12.0/{$username}&access_token={$app_id}|{$app_secret}";

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $response = curl_exec($ch);

            curl_close($ch);

            $userData = json_decode($response, true);
            dd($userData);
            $html = '<p>Facebook.</p>';
            return response()->json(['html' => $html]);


        } else{

             $html = '<p>LinkedIn.</p>';
            return response()->json(['html' => $html]);
        }
    }
}

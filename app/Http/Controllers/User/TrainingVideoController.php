<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\LicenseController;
use App\Models\Category;
use App\Models\Videos;
use App\Models\SubscriptionPlan;
use App\Models\PrepaidPlan;
use App\Services\Statistics\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Http;

class TrainingVideoController extends Controller
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
		$media_category = $request->media_category ? $request->media_category : '';
		$category = Category::all();
		$video_link = $request->video_link;
		$formats=[];
		$title = "";
		if($video_link)
		{
			preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_link, $match);
			if(!empty($match)){
				$video_id =  $match[1];
				$video = json_decode($this->getVideoInfo($video_id));
				$formats = $video->streamingData->formats;
				$adaptiveFormats = $video->streamingData->adaptiveFormats;
				$thumbnails = $video->videoDetails->thumbnail->thumbnails;
				$title = $video->videoDetails->title;
				$short_description = $video->videoDetails->shortDescription;
				$thumbnail = end($thumbnails)->url;
			}
		}
		// $videos = Videos::join("categories as c", "videos.category", "=", "c.id")
		// 	->select("videos.*", "c.name as category_name");
		// if(!empty($media_category) && $media_category != "all"){
		// 	$videos->where("videos.category",$media_category);
		// }
		// $videos->get();

		$videos = Videos::join("categories as c", "videos.category", "=", "c.id")
			->select("videos.*", "c.name as category_name");

		if (!empty($media_category) && $media_category != "all") {
			$videos->where("videos.category", $media_category);
		}

		$videos = $videos->get()->map(function ($video) {
			
			$video->files = $this->getUrlExtension($video->file_link);
			return $video;
		});
		
		$template = 'user.training_video.video_list';
		if (auth()->user()->hasRole('admin')) {
			$template = 'user.training_video.index';
		}
		return view($template, compact('videos','formats','title','category'));
	}

	function getVideoInfo($video_id){

		$ch = curl_init();
	
		curl_setopt($ch, CURLOPT_URL, 'https://www.youtube.com/youtubei/v1/player?key=AIzaSyD6-y8R386qxUfVY8fpHJC04XWfW-rb0s4');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, '{  "context": {    "client": {      "hl": "en",      "clientName": "WEB",      "clientVersion": "2.20210721.00.00",      "clientFormFactor": "UNKNOWN_FORM_FACTOR",   "clientScreen": "WATCH",      "mainAppWebInfo": {        "graftUrl": "/watch?v='.$video_id.'",           }    },    "user": {      "lockedSafetyMode": false    },    "request": {      "useSsl": true,      "internalExperimentFlags": [],      "consistencyTokenJars": []    }  },  "videoId": "'.$video_id.'",  "playbackContext": {    "contentPlaybackContext": {        "vis": 0,      "splay": false,      "autoCaptionsDefaultOn": false,      "autonavState": "STATE_NONE",      "html5Preference": "HTML5_PREF_WANTS",      "lactMilliseconds": "-1"    }  },  "racyCheckOk": false,  "contentCheckOk": false}');
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	
		$headers = array();
		$headers[] = 'Content-Type: application/json';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
		return $result;

	}

	public function list(Request $request)
	{
		$cateogry_ids = [];

		if(!empty($request->category)){
			$cateogry_ids = $request->category;
		}
		
		if ($request->ajax()) {
			$videos_data = Videos::join("categories as c", "videos.category", "=", "c.id")
				->select("videos.*", "c.name as category_name");
			if(!empty($cateogry_ids)){
				$videos_data->whereIn('videos.category', $cateogry_ids);
			}
			$videos = $videos_data->get();

			return DataTables::of($videos)
				->addIndexColumn()
				->addColumn('actions', function ($row) {
					$actionBtn = '<div>
					<a class="deleteResultButton" id="' . $row["id"] . '" href="/user/videos/edit/' . $row['id'] . '"><i class="fa-solid fa-edit table-action-buttons delete-action-button" title="Delete Image"></i></a> 
                                            <a class="deleteResultButton" id="' . $row["id"] . '" href="/user/videos/delete/' . $row['id'] . '"><i class="fa-solid fa-trash-xmark table-action-buttons delete-action-button" title="Delete Image"></i></a>
                                        </div>';
					return $actionBtn;
				})
				->addColumn('url', function ($row) {
					if($row['section'] == '0'){
						$url = $row['embadded_url'];
					}else{
						$url = $row['file_link'];
					}
					return $url;
				})
				->addColumn('created_at', function ($row) {
					$created_on = '<span class="font-weight-bold">' . date_format($row["created_at"], 'd M Y') . '</span><br><span>' . date_format($row["created_at"], 'H:i A') . '</span>';
					return $created_on;
				})
				->rawColumns(['actions', 'created_at'])
				->make(true);
		}
	}

	/**
	 *
	 * Save changes
	 * @param - file id in DB
	 * @return - confirmation
	 *
	 */
	public function save(Request $request)
	{
		$request->validate([
			"title" => "required",
			"section" => "required",
			"category" => "required",
			"embadded_url" => [
				function ($attribute, $value, $fail) use ($request) {
					$is_video = $request->input('section');
		
					// check if the is_video field is true
					if ($is_video == 0) {
						if (strpos($value, 'youtube.com/watch?v=') === false && strpos($value, 'youtube.com/embed/') === false) {
							$fail('The :attribute must be a valid YouTube video watch or embed link.');
						}

						// Check if the URL already exists
						$videoid = $this->getVideoIdFromUrl($value);
						$videoid = "https://www.youtube.com/embed/".$videoid;
						$video = Videos::where('embadded_url', $videoid);
						// dd($video);
						if ($video->exists()) {
							if ($request->input('id') != $video->first()->id) {
								$fail('The video url has already been taken.');
							}
						}
					}
				},
				
			],
			"file_link" => "required_if:section,1",
		]);

		$youtube_id = $this->getVideoIdFromUrl($request->embadded_url);
		$youtubelink = "https://www.youtube.com/embed/".$youtube_id;

		$video = new Videos;
		$video->title = $request->title;
		$video->section = $request->section;
		$video->category = $request->category;
		$video->embadded_url = $youtubelink;
		$video->file_link = $request->file_link;

		$video->save();
		toastr()->success(__('Video successfully created'));
		return redirect()->route('user.videos');
	}


	/**
	 *
	 * Process media file
	 * @param - file id in DB
	 * @return - confirmation
	 *
	 */
	public function view(Request $request)
	{

	}


	/**
	 *
	 * Delete File
	 * @param - file id in DB
	 * @return - confirmation
	 *
	 */
	public function delete($id)
	{
		$video = Videos::FindOrFail($id);
		if (!empty($video)) {
			$video->delete();
		}
		toastr()->success(__('Video successfully deleted'));
		return redirect()->route('user.videos');
	}

	public function create()
	{
		$category = Category::all();
		return view('user.training_video.create', compact('category'));
	}

	public function edit($id)
	{
		$video = Videos::FindOrFail($id);
		$category = Category::all();
		return view('user.training_video.edit', compact('video', 'category'));
	}

	public function update(Request $request, $id)
	{
		$video = Videos::FindOrFail($id);

		$request->validate([
			"title" => "required",
			"section" => "required",
			"category" => "required",
			"embadded_url" => [
				function ($attribute, $value, $fail) use ($request, $id) {
					$is_video = $request->input('section');
		
					// check if the is_video field is true
					if ($is_video == 0) {
						if (strpos($value, 'youtube.com/watch?v=') === false && strpos($value, 'youtube.com/embed/') === false) {
							$fail('The :attribute must be a valid YouTube video watch or embed link.');
						}
						
						// Check if the URL already exists
						$videoid = $this->getVideoIdFromUrl($value);
						$videoid = "https://www.youtube.com/embed/".$videoid;
						$video = Videos::where('embadded_url', $videoid)->where('id' ,'!=', $id);
						if ($video->exists()) {
							if ($request->input('id') != $video->first()->id) {
								$fail('The video url has already been taken.');
							}
						}
					}
				},
				
			],
			"file_link" => "required_if:section,1",
		]);

		$youtube_id = $this->getVideoIdFromUrl($request->embadded_url);
		$youtubelink = "https://www.youtube.com/embed/".$youtube_id;

		$video->title = $request->title;
		$video->section = $request->section;
		$video->category = $request->category;
		$video->embadded_url = $youtubelink;
		$video->file_link = $request->file_link;

		$video->save();
		toastr()->success(__('Video successfully updated.'));
		return redirect()->route('user.videos');
	}

	public function videoDownload(Request $request)
	{
		$video_link = urldecode($request->link);
		$video_title = urldecode($request->title);
		$video_id = $this->getYouTubeVideoId($video_link);
		$video_link = "https://www.youtube.com/watch?v=".$video_id;
		$formats=[];
		$title = "";
		if($video_link)
		{
			preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video_link, $match);
			if(!empty($match)){
				$video_id =  $match[1];
				$video = json_decode($this->getVideoInfo($video_id));
				$formats = $video->streamingData->formats;
				$adaptiveFormats = $video->streamingData->adaptiveFormats;
				$thumbnails = $video->videoDetails->thumbnail->thumbnails;
				$title = $video->videoDetails->title;
				$short_description = $video->videoDetails->shortDescription;
				$thumbnail = end($thumbnails)->url;
			}
		}

		if(@$formats[0]->url == ""){
			$signature = "https://example.com?".$formats[0]->signatureCipher;
			parse_str( parse_url( $signature, PHP_URL_QUERY ), $parse_signature );
			$url = $parse_signature['url']."&sig=".$parse_signature['s'];
		}else{
			$url = $formats[0]->url;
		}

		$downloadURL = urldecode($url);
		$type = ".mp4";
		$fileName = $video_title.$type;


		if (!empty($downloadURL) && substr($downloadURL, 0, 8) === 'https://') {
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment;filename=\"$fileName\"");
			header("Content-Transfer-Encoding: binary");

			readfile($downloadURL);
		}

	}

	public function pdfDownload(Request $request)
	{
		$downloadURL = urldecode($request->link);
		$type = urldecode($request->type);
		$title = urldecode($request->title);
		$fileName = $title.'.'.$type;
		if (!empty($downloadURL) && substr($downloadURL, 0, 8) === 'https://') {
			header("Cache-Control: public");
			header("Content-Description: File Transfer");
			header("Content-Disposition: attachment;filename=\"$fileName\"");
			header("Content-Transfer-Encoding: binary");

			readfile($downloadURL);

		}
	}

function getUrlExtension($url) {
    $path = parse_url($url, PHP_URL_PATH);
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    return $ext;
}

function getYouTubeVideoId($url) {
    $pattern = '#^https?://(?:www\.)?youtube\.com/embed/([\w\-]+)#';
    preg_match($pattern, $url, $matches);
    return $matches[1] ?? null;
}

function getVideoIdFromUrl($url)
{
    $video_id = false;
    $url_components = parse_url($url);
    if (isset($url_components['query'])) {
        parse_str($url_components['query'], $query_params);
        if (isset($query_params['v'])) {
            $video_id = $query_params['v'];
        }
    } else if (preg_match('/\/embed\/([^\/]+)/', $url, $matches)) {
        $video_id = $matches[1];
    } else if (preg_match('/\/v\/([^\/]+)/', $url, $matches)) {
        $video_id = $matches[1];
    } else if (preg_match('/\/watch\/([^\/]+)/', $url, $matches)) {
        $video_id = $matches[1];
    } else if (preg_match('/\/watch\?([^\/]+)/', $url, $matches)) {
        parse_str($matches[1], $query_params);
        if (isset($query_params['v'])) {
            $video_id = $query_params['v'];
        }
    }
    return $video_id;
}
public function mediaEditor(Request $request)
{
	return view('user.training_video.media-editor');
}

public function rssFeed(Request $request)
{
	$apikey = config('services.feed.key');
    $apiSecret = config('services.feed.secret');
	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://api.rss.app/v1/bundles?limit=10',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
			'Authorization: Bearer ' .$apikey. ':' . $apiSecret
		),
	));

	$response 	= curl_exec($curl);
	$result 	= json_decode($response, true);
	$dataSet  	= $result['data'];
	
	curl_close($curl);
    return view('user.training_video.rss-feed' , compact('dataSet'));

}

public function searchFeeds(Request $request){
    $query = $request->input('query');
	$results = '';
    $feedUrls = array();
    $apikey = config('services.feed.key');
    $apiSecret = config('services.feed.secret');

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.rss.app/v1/feeds?limit=100',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' .$apikey. ':' . $apiSecret
    ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($response, true);
	
    if (is_array($data) && isset($data['data']) && is_array($data['data'])) {
        foreach ($data['data'] as $feed) {
            if (isset($feed['rss_feed_url'])) {
                $feedUrls[] = $feed['rss_feed_url'];
            }
        }
    }
    
    foreach ($feedUrls as $feedUrl) {
        $response = Http::get($feedUrl);
        if ($response->successful()) {
            $rssContent = $response->body();
            $rss = simplexml_load_string($rssContent);
            foreach ($rss->channel->item as $item) {
                if (stripos($item->title, $query) !== false || stripos($item->description, $query) !== false) {
                    $results .= '<h2>' . $item->title . '</h2>';
                    $results .= '<p>' . $item->description . '</p>';
                    $results	 .= '<a href="' . $item->link . '" target="_blank">Read more</a>';
                }
            }
        }
    }

    if (!empty($results)) {
        return response()->json(['results' => $results]);
    } else {
        return response()->json(['results' => 'No results found for your query.']);
    }

}

	public function viewSmartAds(Request $request){
		if(auth()->user()->plan_id != null){
			$plan_id = auth()->user()->plan_id;
			$plans = SubscriptionPlan::where('status', 'active')->where('smart_ads_feature', 1)->get();

			$planIdAvailable = $plans->contains('id', $plan_id);

			if ($planIdAvailable) {
				return view('user.training_video.smart-ad');
			} else {
				$monthly = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'monthly')->where('smart_ads_feature', 1)->count();
				$yearly = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'yearly')->where('smart_ads_feature', 1)->count();
				$lifetime = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'lifetime')->where('smart_ads_feature', 1)->count();
				$prepaid = PrepaidPlan::where('status', 'active')->count();

				$monthly_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'monthly')->where('smart_ads_feature', 1)->get();
				$yearly_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'yearly')->where('smart_ads_feature', 1)->get();
				$lifetime_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'lifetime')->where('smart_ads_feature', 1)->get();
				$prepaids = PrepaidPlan::where('status', 'active')->get();

				return view('user.plans.index', compact('monthly', 'yearly', 'monthly_subscriptions', 'yearly_subscriptions', 'prepaids', 'prepaid', 'lifetime', 'lifetime_subscriptions'));
			}
		}
		else{

			$monthly = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'monthly')->where('smart_ads_feature', 1)->count();
			$yearly = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'yearly')->where('smart_ads_feature', 1)->count();
			$lifetime = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'lifetime')->where('smart_ads_feature', 1)->count();
			$prepaid = PrepaidPlan::where('status', 'active')->count();

			$monthly_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'monthly')->where('smart_ads_feature', 1)->get();
			$yearly_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'yearly')->where('smart_ads_feature', 1)->get();
			$lifetime_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'lifetime')->where('smart_ads_feature', 1)->get();
			$prepaids = PrepaidPlan::where('status', 'active')->get();

			return view('user.plans.index', compact('monthly', 'yearly', 'monthly_subscriptions', 'yearly_subscriptions', 'prepaids', 'prepaid', 'lifetime', 'lifetime_subscriptions'));
		}      

		
	}
	public function automation(Request $request){
        if(auth()->user()->plan_id != null){
			$plan_id = auth()->user()->plan_id;
			$plans = SubscriptionPlan::where('status', 'active')->where('automation_feature', 1)->get();

			$planIdAvailable = $plans->contains('id', $plan_id);

			if ($planIdAvailable) {
				return view('user.training_video.automation');
			} else {
				$monthly = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'monthly')->where('automation_feature', 1)->count();
				$yearly = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'yearly')->where('automation_feature', 1)->count();
				$lifetime = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'lifetime')->where('automation_feature', 1)->count();
				$prepaid = PrepaidPlan::where('status', 'active')->count();

				$monthly_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'monthly')->where('automation_feature', 1)->get();
				$yearly_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'yearly')->where('automation_feature', 1)->get();
				$lifetime_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'lifetime')->where('automation_feature', 1)->get();
				$prepaids = PrepaidPlan::where('status', 'active')->get();

				return view('user.plans.index', compact('monthly', 'yearly', 'monthly_subscriptions', 'yearly_subscriptions', 'prepaids', 'prepaid', 'lifetime', 'lifetime_subscriptions'));
			}
		}
		else{

			$monthly = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'monthly')->where('automation_feature', 1)->count();
			$yearly = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'yearly')->where('automation_feature', 1)->count();
			$lifetime = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'lifetime')->where('automation_feature', 1)->count();
			$prepaid = PrepaidPlan::where('status', 'active')->count();

			$monthly_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'monthly')->where('automation_feature', 1)->get();
			$yearly_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'yearly')->where('automation_feature', 1)->get();
			$lifetime_subscriptions = SubscriptionPlan::where('status', 'active')->where('payment_frequency', 'lifetime')->where('automation_feature', 1)->get();
			$prepaids = PrepaidPlan::where('status', 'active')->get();

			return view('user.plans.index', compact('monthly', 'yearly', 'monthly_subscriptions', 'yearly_subscriptions', 'prepaids', 'prepaid', 'lifetime', 'lifetime_subscriptions'));
		}      
	}
	public function pabblyConnect(Request $request){

        return view('user.training_video.zap');
	}

	public function flow_Track_webhook(Request $request) {
        $payload   = $request->all();
    }
}
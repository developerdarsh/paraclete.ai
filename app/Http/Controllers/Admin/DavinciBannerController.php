<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Banner;
use Yajra\DataTables\DataTables;

class DavinciBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Banner::orderBy('id', 'desc')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('actions', function($row){
                    $actionBtn = '<div>      
                                    <a href="'. route("admin.davinci.banner.show", $row["id"] ). '"><i class="fa fa-edit table-action-buttons view-action-button" title="Edit Template"></i></a>      
                                    <a class="deleteTemplate" id="'. $row["id"] .'" href="#"><i class="fa-solid fa-trash-xmark table-action-buttons delete-action-button" title="Delete Template"></i></a> 
                                </div>';
                    
                    return $actionBtn;
                })
                ->addColumn('updated-on', function($row){
                    $created_on = '<span class="font-weight-bold">'.date_format($row["updated_at"], 'd M Y').'</span><br><span>'.date_format($row["updated_at"], 'H:i A').'</span>';
                    return $created_on;
                })
                ->addColumn('banner', function($row){
                    $image = asset('banner/'.$row["image"]);
                    return '<img src="'.$image.'" height="30px" width="30px">';
                })
                ->addColumn('custom-status', function($row){
                    $status = ($row['status']) ? 'Active' : 'Deactive';
                    $custom_voice = '<span class="cell-box status-'.strtolower($status).'">'. $status.'</span>';
                    return $custom_voice;
                })
                ->rawColumns(['actions', 'updated-on', 'banner', 'custom-status'])
                ->make(true);
                    
        }

        $banners = Banner::orderBy('id', 'asc')->get();

        return view('admin.davinci.banner.index', compact('banners'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

		if ($request->input('banner_type') === 'video') {
			// Video URL validation rules
			request()->validate([
				'url' => [
					'required',
					'url',
					'regex:/^(https?:\/\/)?(?:www\.)?(youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
				],
			]);
		} else {
			// Website URL validation rules
			request()->validate([
				'url' => [
					'required',
					'url',
					'regex:/^(https?:\/\/)?([a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]+\.[a-zA-Z]{2,6}(\/.*)?$/'
				],
			]);
		}

        $name =  '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/banner');
            $image->move($destinationPath, $name);
        }
        
        $Banner = new Banner([
            'image' => $name,
            'status' => (isset($request->status)) ? true : false,
			'type' => $request->input('banner_type'),
        	'url' => $request->input('url'),
        ]); 
        
        $Banner->save();            

        toastr()->success(__('Banner was successfully created'));
        return redirect()->back();       
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $id)
    {
        $banners = Banner::orderBy('id', 'asc')->get();

        return view('admin.davinci.banner.edit', compact('id', 'banners'));
    }


     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $id)
    {   
		if ($request->input('banner_type') === 'video') {
			// Video URL validation rules
			request()->validate([
				'url' => [
					'required',
					'url',
					'regex:/^(https?:\/\/)?(?:www\.)?(youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
				],
			]);
		} else {
			// Website URL validation rules
			request()->validate([
				'url' => [
					'required',
					'url',
					'regex:/^(https?:\/\/)?([a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]+\.[a-zA-Z]{2,6}(\/.*)?$/'
				],
			]);
		}

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/banner');
            $image->move($destinationPath, $name);

            $id->update([
                'image' => $name,
                'status' => (isset($request->status)) ? true : false,
				'type' => $request->input('banner_type'),
				'url' => $request->input('url'),
            ]); 
        }else{
            $id->update([
                'status' => (isset($request->status)) ? true : false,
				'type' => $request->input('banner_type'),
				'url' => $request->input('url'),
            ]); 
        }
      
        toastr()->success(__('Banner was successfully updated'));
        return redirect()->route('admin.davinci.banner');

    }


    /**
     * Create category
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        if ($request->ajax()) {


            $Banner = new Banner([
                'image' => $request->image,
                'status' => (isset($request->status)) ? true : false,
            ]); 
            
            $Banner->save();  
            
            toastr()->success(__('Banner was successfully created'));
            return  response()->json('success');
        } 
    }


    public function delete(Request $request)
    {   
        if ($request->ajax()) {

            $name = Banner::find(request('id'));

            if($name) {

                $name->delete();

                return response()->json('success');

            } else{
                return response()->json('error');
            } 
        } 
    }

}

@extends('layouts.app')

@section('css')
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
	<link href="{{URL::asset('plugins/sweetalert/sweetalert2.min.css')}}" rel="stylesheet" />

	<style>
    .videos-frame-container .slick-slide {
		margin: 0 10px;
	}
	.videos-frame-container .slick-dots li button:before {
		font-family: slick;
		font-size: 12px;
	}
	.slick-prev {
    left: -15px;
    width: 0;
    height: 0;
    border-left: 0 solid transparent;
    border-right: 15px solid #113463;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    background: none;
}
.slick-next {
	right: -15px;
    width: 0;
    height: 0;
    border-right: 0 solid transparent;
    border-left: 15px solid #113463;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    background: none;
}
.slick-next:before, .slick-prev:before {
	display: none;
}
	</style>
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('All Users Video') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-id-badge mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.user.dashboard') }}"> {{ __('User Video Management') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')
	<!-- USERS LIST DATA TABEL -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card border-0">
				<form action="{{ route('user.videos') }}" method="get" >
					<div class="card-header d-flex justify-content-between">
						<h3 class="card-title">{{ __('Video Tutorial') }}</h3>
						<select class="form-control w-25" name="media_category" onchange="this.form.submit()">
							<option value="all">All</option>
							@foreach($category as $cate)
							<option value="{{ $cate->id }}" {{ (isset($_GET['media_category']) && $_GET['media_category']==$cate->id) ? 'selected':'' }}>{{ $cate->name }}</option>
							@endforeach
						</select>
					</div>
				</form>
				<div class="card-body pt-2">
					<!-- BOX CONTENT -->
					<div class="box-content">
						<div class="videos-frame-container mb-5 pb-2">
							<div id="videoList">
								@foreach($videos as $key=> $video)
									@if($video->section == 0)
										@php 
											$embedUrl = $video['embadded_url'];
											$videoId = substr($embedUrl, strrpos($embedUrl, '/') + 1);
											$thumbnailUrl = "https://img.youtube.com/vi/$videoId/maxresdefault.jpg";
										@endphp
										<div class="video-list">
											<a href="{{$video->embadded_url}}" class="various fancybox fancybox.iframe"><img src="{{ $thumbnailUrl }}" width="100%" height="200"></a>
											<!-- <iframe width="100%" class="mr-" height="250" src="{{ $video['embadded_url'] }}"></iframe> -->
											<div class="py-3 video-caption">
												<span>{{ $video->title }}</span>
												<a href="{{ url('user/videos/download') }}?link={{ urlencode($embedUrl) }}&title={{ urlencode($video->title) }} class="font-weight-bold"><i class="fas fa-download"></i></a>
											</div>
											<!-- <div><a href="" class="video-download">Download</a></div> -->
										</div>
									@endif
								@endforeach
							</div>
						</div>
					</div> <!-- END BOX CONTENT -->
					<hr>
					<div class="downloads-section"> 
						<h2>Downloads </h2>
					<!-- DATATABLE -->
					
					<table id='listVideos' class='table listVideos' width='100%'>
						<thead>
							<tr>	
								<th width="15%">{{ __('Title') }}</th> 	 							    						           								    						           	
								<th width="7%">{{ __('Actions') }}</th>        	      	
							</tr>
						</thead>
						<tbody>
							@foreach($videos as $video)
								@if($video->section == "1")
								<tr>
									<td>{{ $video->title }}</td>
									<td><a href="{{ url('user/videos/pdfdownload') }}?link={{ urlencode($video->file_link) }}&title={{ urlencode($video->title) }}&type={{ $video->files }}" download="{{ $video->title }}">Download</a></td>
								</tr>
								@endif
							@endforeach
						</tbody>
					</table>
					<!-- END DATATABLE -->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
  
@section('js')
	<!-- Data Tables JS -->
	<script src="{{URL::asset('plugins/datatable/datatables.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="{{URL::asset('plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

	<script>
		var table = $('#listVideos').DataTable({
			searching: false,
			paging: false,
			language: {
				"emptyTable": "<div class='text-center'><img id='no-results-img' src='{{ URL::asset('img/files/no-result.png') }}'><br>{{ __('Not found any documents') }}</div>",
				search: "<i class='fa fa-search search-icon'></i>",
				lengthMenu: '_MENU_ ',
				paginate : {
					first    : '<i class="fa fa-angle-double-left"></i>',
					last     : '<i class="fa fa-angle-double-right"></i>',
					previous : '<i class="fa fa-angle-left"></i>',
					next     : '<i class="fa fa-angle-right"></i>'
				}
			},
		})
		
		$('#videoList').slick({
			dots: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
   
  ],
})

		function viewVideo(src){
			$("#frameSrc").attr("src",src);
			$("#exampleModal").modal('show');
		}

		$(".various").fancybox({
            maxWidth    : 800,
            maxHeight   : 600,
            fitToView   : false,
            width       : '70%',
            height      : '70%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none'
        });
		
		</script>
@endsection
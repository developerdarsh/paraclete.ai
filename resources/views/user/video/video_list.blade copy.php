@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
	<link href="{{URL::asset('plugins/sweetalert/sweetalert2.min.css')}}" rel="stylesheet" />
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
				<div class="card-header">
					<h3 class="card-title">{{ __('Video Tutorial') }}</h3>
				</div>
				<div class="card-body pt-2">
					<!-- BOX CONTENT -->
					<div class="box-content">
						<div class="videos-frame-container">
							<div id="videoList">
								@foreach($videos as $video)
								<!-- <div class="slick-slide"> -->
									<iframe width="100%" height="250" src="{{ $video['file_link'] }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
								<!-- </div> -->
								@endforeach
							</div>
						</div>
					</div> <!-- END BOX CONTENT -->
				</div>
				<div class="video-download-container">
					<form action="{{ route('user.videos.search') }}" method="post">
						@csrf
						<div class="input-group">
							<input type="text" class="form-control" name="video_link" placeholder="Paste link.. e.g. https://www.youtube.com/watch?v=5cpIZ8zHHXw" <?php if(isset($_POST['video_link'])) echo "value='".$_POST['video_link']."'"; ?>>
							<span class="input-group-btn">
								<button type="submit" name="submit" id="submit" class="btn btn-primary">Go!</button>
							</span>
						</div>
					</form>
					@if(!empty($formats))

					<div class="card formSmall">
						<div class="card-header">
							<strong>With Video & Sound</strong>
						</div>
						
						<div class="card-body">
							<table class="table ">
								<tr>
									<td>URL</td>
									<td>Type</td>
									<td>Quality</td>
									<td>Action</td>
								</tr>
								@foreach($formats as $format)
									@php
									if(@$format->url == ""){
										$signature = "https://example.com?".$format->signatureCipher;
										parse_str( parse_url( $signature, PHP_URL_QUERY ), $parse_signature );
										$url = $parse_signature['url']."&sig=".$parse_signature['s'];
									}else{
										$url = $format->url;
									}
									@endphp
									<tr>
										<td><a href="{{ $url }}">Test</a></td>
										<td>
											@php if($format->mimeType) echo explode(";",explode("/",$format->mimeType)[1])[0]; else echo "Unknown";@endphp
										</td>
										<td>
											@php if($format->qualityLabel) echo $format->qualityLabel; else echo "Unknown" @endphp
										</td>
										<td>
											<a href="{{ url('user/videos/download') }}?link={{ urlencode($url) }}&title={{ urlencode($title) }}?>&type=@php if($format->mimeType) echo explode(";",explode("/",$format->mimeType)[1])[0]; else echo "mp4";@endphp">
												Download
											</a> 
										</td>
									</tr>
								@endforeach
							</table>
						</div>
						@else 
						<div class="text-center py-3">
							<span>Video Not Found</span>
						</div>
						@endif
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- END USERS LIST DATA TABEL -->
@endsection
  
@section('js')
	<!-- Data Tables JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<script src="{{URL::asset('plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
	<script>
		$().ready(function(){
			$('#videoList').slick({
				centerPadding: "40px",
				slidesToShow: 3,
				infinite: true,
				autoplay: false,
				slidesToScroll:1,
			});
		});
		</script>
@endsection
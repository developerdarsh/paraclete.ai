@extends('layouts.app')

@section('css')
	<!-- Telephone Input CSS -->
	<link href="{{URL::asset('plugins/telephoneinput/telephoneinput.css')}}" rel="stylesheet" >
@endsection

@section('page-header')
	<!-- EDIT PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Create New Video') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-user-shield mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('user.videos') }}"> {{ __('Vidoe Management') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('user.videos') }}"> {{ __('Video List') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('user.videos.create') }}">{{ __('New Video') }}</a></li>

			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')
	<!-- Create Video PAGE -->
	<div class="row">
		<div class="col-xl-9 col-lg-8 col-sm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Create New Video') }}</h3>
				</div>
				<div class="card-body pb-0">
					<form method="POST" action="{{ route('user.videos.save') }}" enctype="multipart/form-data">
						@csrf

						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Title') }} <span class="text-muted">({{ __('Required') }})</span></label>
										<input type="text" class="form-control @error('title') is-danger @enderror" name="title" value="{{ old('title') }}" required>
										@error('title')
											<p class="text-danger">{{ $errors->first('title') }}</p>
										@enderror									
									</div>
								</div>
							</div>
                            <div class="col-sm-6 col-md-6">
                                <div class="input-box">
                                    <div class="form-group">
                                        <label class="form-label fs-12">{{ __('Section') }} <span class="text-muted">({{ __('Required') }})</span></label>
										<select id="section" class="form-control @error('section') is-danger @enderror" name="section" required>
                                            <option value="">-- Section --</option>
                                            <option value="0" {{ old('section') == 0 ? 'selected' : ''}}>Video</option>
                                            <option value="1" {{ old('section') == 1 ? 'selected' : ''}}>Documents</option>
                                        </select>
                                        @error('section')
											<p class="text-danger">{{ $errors->first('section') }}</p>
										@enderror									
									</div>
								</div>
							</div>
                            <div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Category') }} <span class="text-muted">({{ __('Required') }})</span></label>
                                        <select class="form-control @error('category') is-danger @enderror" name="category" required>
                                            <option value="">-- Category --</option>
                                            @foreach($category as $cate)
                                            <option value="{{ $cate['id'] }}">{{ $cate['name'] }}</option>
                                            @endforeach
                                        </select>
                                        @error('category')
											<p class="text-danger">{{ $errors->first('category') }}</p>
										@enderror									
									</div>
								</div>
							</div>
                            <div class="col-sm-6 col-md-6" id="embadded_sec" @if(old('section') != 0) style="display:none;" @endif>
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Video URL') }} <span class="text-muted">({{ __('Required') }})</span></label>
										<input type="url" class="form-control @error('embadded_url') is-danger @enderror" id="embadded_url" name="embadded_url" value="{{ old('embadded_url') }}" >
                                        @error('embadded_url')
											<p class="text-danger">{{ $errors->first('embadded_url') }}</p>
										@enderror									
									</div>
								</div>
							</div>
                            <div class="col-sm-6 col-md-6" id="download_sec"  style="display:none;">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12">{{ __('Document File URL') }} <span class="text-muted">({{ __('Required') }})</span></label>
										<input type="url" class="form-control @error('file_link') is-danger @enderror" id="file_link" name="file_link" value="{{ old('file_link') }}" >
                                        @error('file_link')
											<p class="text-danger">{{ $errors->first('file_link') }}</p>
										@enderror									
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer border-0 text-right mb-2 pr-0">
							<a href="{{ route('user.videos') }}" class="btn btn-cancel mr-2">{{ __('Return') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Create') }}</button>							
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
	<!-- CREATE VIDEO PAGE -->
@endsection

@section('js')
<script>
	$("#section").on('change',function(){
		if($(this).val() == '1'){
			$("#embadded_sec").hide();
			$("#download_sec").show();
			$("#file_link").attr("required", true);
			$("#embadded_url").removeAttr('required');
		}else{
			$("#download_sec").hide();
			$("#embadded_sec").show();
			$("#file_link").removeAttr('required');
			$("#embadded_url").attr("required", true);
		}
	});
</script>
@endsection
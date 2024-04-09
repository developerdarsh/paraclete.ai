@extends('layouts.app')
@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/datatable/datatables.min.css')}}" rel="stylesheet" />
	<!-- Sweet Alert CSS -->
	<link href="{{URL::asset('plugins/sweetalert/sweetalert2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
<!-- PAGE HEADER -->
<div class="page-header mt-5-7">
	<div class="page-leftheader">
		<h4 class="page-title mb-0">{{ __('Edit Banner') }}</h4>
		<ol class="breadcrumb mb-2">
			<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
			<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.davinci.dashboard') }}"> {{ __('Davinci Management') }}</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ __('Edit Banner') }}</a></li>
		</ol>
	</div>
	
</div>
<!-- END PAGE HEADER -->
@endsection
@section('content')	
	<div class="row">
		<div class="col-sm-12">
			<div class="card border-0">	
				<div class="card-header">
					<h3 class="card-title"><i class="fa-solid fa-microchip-ai mr-2 text-primary"></i>{{ __('Banner Editor') }}</h3>
				</div>			
				<div class="card-body pt-5">
					<form class="w-100" action="{{ route('admin.davinci.banner.update', $id) }}" method="POST" enctype="multipart/form-data">
						@method('PUT')
						@csrf

						<div class="row">	
							<div class="col-lg-6 col-md-12 col-sm-12">													
								<div class="input-box">								
									<h6>{{ __('Image') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">							    
										<input type="file" class="form-control @error('image') is-danger @enderror" id="image" name="image">
										@if($id->image)
											<img src="{{asset('banner/'.$id->image)}}" height="80px" width="80px">
										@endif
									</div> 
								</div> 
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 mt-2">
								<div class="form-group">
									<h6>{{ __('Banner Type') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="d-flex">
										<div class="custom-control custom-radio mr-3">
											<input type="radio" id="bannerTypeWebsite" name="banner_type" class="custom-control-input" value="website" @if($id->type === 'website') checked @endif>
											<label class="custom-control-label" for="bannerTypeWebsite">{{ __('Website') }}</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" id="bannerTypeVideo" name="banner_type" class="custom-control-input" value="video" @if($id->type === 'video') checked @endif>
											<label class="custom-control-label" for="bannerTypeVideo">{{ __('Video') }}</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 mt-2">
								<div class="input-box">
									<h6>{{ __('URL') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">                                
										<input type="text" class="form-control @error('url') is-danger @enderror" id="url" name="url" value="{{ $id->url }}">
										@error('url')
											<p class="text-danger">{{ $message }}</p>
										@enderror
									</div> 
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 mt-2">
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="status" class="custom-switch-input" @if($id->status) checked @endif>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">{{ __('Activate Banner') }}</span>
									</label>
								</div>
							</div>

							
						</div>

						<div class="row">
							

							
				
							<div class="col-md-12 col-sm-12 text-center mb-2">
								<a href="{{ route('admin.davinci.banner') }}" class="btn btn-cancel mr-2">{{ __('Return') }}</a>
								<button type="submit" class="btn btn-primary pl-5 pr-5">{{ __('Update') }}</button>	
							</div>	
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
	<script src="{{URL::asset('plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
	<!-- Data Tables JS -->
	<script src="{{URL::asset('plugins/datatable/datatables.min.js')}}"></script>
	<script type="text/javascript">
		$(function () {

			"use strict";

		});

		let i = 2;
		function addField(plusElement, k){

			if (k == 2) {
				i = 3;
			}

			let field_type = plusElement.previousElementSibling;
			let placeholder = field_type.previousElementSibling;	
			let name = placeholder.previousElementSibling;	
		
			// Stopping the function if the input field has no value.
			if(placeholder.previousElementSibling.value.trim() === ""){
				return false;
			}

			createButton(name.id);
			
			let new_field ='<div class="field input-group mb-4">' +
								'<input type="hidden" name="code[]" value="input-field-' + i + '">' +
								'<input type="text" class="form-control" name="names[]" id="input-field-' + i + '" placeholder="{{ __('Enter Input Field Title (Required)') }}">' +
								'<input type="text" class="form-control" placeholder="{{ __('Enter Input Field Description') }}" name="placeholders[]">' +								
								'<select class="form-select" name="input_field[]" >' +
									'<option value="input" selected>{{ __('Input Field') }}</option>' +
									'<option value="textarea">{{ __('Textarea Field') }}</option>' +
									'</select>' +
								'<span onclick="addField(this)" class="btn btn-primary">' +
									'<i class="fa fa-btn fa-plus"></i>' +
								'</span>' +
								'<span onclick="removeField(this)" class="btn btn-primary">' +
									'<i class="fa fa-btn fa-minus"></i>' +
								'</span>' +
							'</div>';
			i++;
   			$("#field-container").append(new_field);

			// Un hiding the minus sign.
			plusElement.nextElementSibling.style.display = "block"; 
			// Hiding the plus sign.
			plusElement.style.display = "none"; 
		}

		function removeField(minusElement){
			let plusElement = minusElement.previousElementSibling;
			let field_type = plusElement.previousElementSibling;
			let placeholder = field_type.previousElementSibling;	
			let name = placeholder.previousElementSibling;	

			deleteButton(name.id);

			minusElement.parentElement.remove();
		}

		function createButton(id) {
			let new_button = '<span onclick="insertText(this)" id="' + id+'-button" class="btn btn-primary mr-4 mb-2">' + id + '</span>';
   			$("#field-buttons").append(new_button);
		}

		function deleteButton(id) {
			let button = document.getElementById(id + '-button');
			button.remove();
		}

		function insertText(value) {
			insertToPrompt(" ###" + value.innerHTML + "### ");
		}

		function insertToPrompt(text) {
			var curPos = document.getElementById("prompt").selectionStart;
			let x = $("#prompt").val();
			$("#prompt").val(x.slice(0, curPos) + text + x.slice(curPos));
		}
		
		$('input[name="banner_type"]').on('change', function () {
             $('#url').val('');
        });

	</script>
@endsection
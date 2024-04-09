@extends('layouts.app')
@section('css')
<style>
 	.list-item {
      	display: flex;
      	align-items: center;
      	margin-bottom: 10px;
    }
    .list-item-text {
      	flex-grow: 1;
    }
    .close-button {
      	cursor: pointer;
      	color: red;
    }
	.add_templates-sec input {
		background-color: #f5f9fc;
		border-color: transparent;
		border-radius: 0.5rem;
		border-width: 1px;
		padding: 0.375rem 1rem;
		border-color: #007BFF;
	}
	.add_templates-sec .btn.btn-primary {
		padding: 0.575rem 1rem;
		min-width: 60px;
	}
	.add_templates-sec .btn.btn-primary:focus {
		box-shadow: none;
		outline: none;
	}
	.add_templates-sec .form-group .form-input {
		display: flex;
		justify-content: space-between;
		align-items: center;
		margin-bottom: 10px;
	}
	.add_templates-sec .form-group .form-input input {
		flex: 1;
		margin-right: 10px;
	}
	.add_templates-sec .list-item {
		background-color: #f2f2f2;
		border-color: rgba(0, 123, 255, 0.4);
		padding: 4px 8px;
		border-radius: 5px;
	}
	.add_templates-sec .list-item-text {
		font-size: 14px;
		color: #000000;
	}
	.output_dropdown {  
		width: 100%;
		max-height: 205px;
		height: max-content;
		overflow-y: auto;
	}
</style>
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7"> 
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('New Chat Bot') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item"><a href="{{ route('admin.davinci.dashboard') }}"> {{ __('Davinci Management') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="#"> {{ __('AI Chats Customization') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ __('New Chat Bot') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')						
	<div class="row">
		<div class="col-lg-8 col-md-12 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Create New Chat Bot') }}</h3>
				</div>
				<div class="card-body pt-5">									
					<form action="{{ route('admin.davinci.chat.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
					  
						<div class="row">
					  	  	
						  <div class="col-sm-12 col-md-12">
							<div class="input-box">
							  <label class="form-label fs-12">{{ __('Select Avatar') }} </label>
							  <div class="input-group file-browser" id="create-new-chat">									
								<input type="text" class="form-control border-right-0 browse-file" placeholder="{{ __('Minimum 60px by 60px image') }}" readonly>
								<label class="input-group-btn">
								  <span class="btn btn-primary special-btn">
									{{ __('Browse') }} <input type="file" name="logo" style="display: none;">
								  </span>
								</label>
							  </div>
							  @error('logo')
								<p class="text-danger">{{ $errors->first('logo') }}</p>
							  @enderror
							</div>
						  </div>					
					  
						</div>

						<div class="gender-select-b d-flex">
							<div class="form-check me-4">
								<input value="1" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
									Male
								</label>
							</div>
							<div class="form-check">
								<input value="0" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
								<label class="form-check-label" for="flexRadioDefault2">
									Female
								</label>
							</div>   
						</div> 
					  
						<div class="col-md-12 col-sm-12 mt-2 mb-4 pl-0">
						  <div class="form-group">
							<label class="custom-switch">
							  <input type="checkbox" name="activate" class="custom-switch-input" checked>
							  <span class="custom-switch-indicator"></span>
							  <span class="custom-switch-description">{{ __('Activate Chat Bot') }}</span>
							</label>
						  </div>
						</div>
						
						<div class="row">
						  <div class="col-md-12 col-sm-12">													
							<div class="input-box">								
							  <h6>{{ __('Name') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
							  <div class="form-group">							    
								<input type="text" class="form-control @error('name') is-danger @enderror" id="name" name="name" value="{{ old('name') }}">
								@error('name')
								  <p class="text-danger">{{ $errors->first('name') }}</p>
								@enderror
							  </div> 
							</div> 
						  </div>
					  
						  <div class="col-md-12 col-sm-12">													
							<div class="input-box">								
							  <h6>{{ __('Character') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
							  <div class="form-group">							    
								<input type="text" class="form-control @error('character') is-danger @enderror" id="character" name="character" value="{{ old('sub_name') }}">
								@error('character')
								  <p class="text-danger">{{ $errors->first('character') }}</p>
								@enderror
							  </div> 
							</div> 
						  </div>
					  
						  <div class="col-md-6 col-sm-12">
							<div class="input-box">
							  <h6>{{ __('Chat Bot Category') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
							  <select id="chats" name="category" class="form-control">
								<option value="all">{{ __('All') }}</option>
								<option value="free" >{{ __('Free Chat Bot') }}</option>																																											
								<option value="standard"> {{ __('Standard Chat Bot') }}</option>
								<option value="professional"> {{ __('Professional Chat Bot') }}</option>
								<option value="premium"> {{ __('Premium Chat Bot') }}</option>																																																														
							  </select>
							</div>
						  </div>

						  <div class="col-md-6 col-sm-12">
							<div class="input-box">
							  <h6>{{ __('Chat Group') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
							  <select id="group" name="group" class="form-control">
								@foreach ($categories as $category)
									<option value="{{ $category->code }}">{{ __($category->name) }}</option>
								@endforeach																																																													
							  </select>
							</div>
						  </div>

						    <div class="col-sm-12">								
								<div class="input-box add_templates-sec">								
								<h6 class="fs-11 mb-2 font-weight-semibold">{{ __('Templates') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
								<div class="form-group">
									@if(isset($templates))
									<select name="templates[]" multiple>
										
										@foreach ($templates as $template)
											<option value="{{ $template->id }}">{{ $template->name }}</option>
										@endforeach
									</select>
									@endif
								</div> 
									<div class="form-group">
										<div class="form-input">
											<input type="text" name="template_name" id="template_name">
											<input type="hidden" name="dataArrayField" id="dataArrayField">
											<button type="button" id="addTemplateBtn" class="btn btn-primary">Add</button>
										</div>
									</div>
									<!-- Button to add a new template -->
									
									<div id="output" class="output_dropdown"></div>
								</div> 
						  	</div>
					  
						  <div class="col-sm-12">								
							<div class="input-box">								
							  <h6 class="fs-11 mb-2 font-weight-semibold">{{ __('Introduction') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
							  <div class="form-group">
								<div id="field-buttons"></div>							    
								<textarea type="text" rows=5 class="form-control @error('introduction') is-danger @enderror" id="prompt" name="introduction">{{ old('introduction') }}</textarea>
								@error('introduction')
								  <p class="text-danger">{{ $errors->first('introduction') }}</p>
								@enderror
							  </div> 
							</div> 
						  </div>
					  
						  <div class="col-sm-12">								
							<div class="input-box">								
							  <h6 class="fs-11 mb-2 font-weight-semibold">{{ __('Prompt') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
							  <div class="form-group">
								<div id="field-buttons"></div>							    
								<textarea type="text" rows=5 class="form-control @error('prompt') is-danger @enderror" id="prompt" name="prompt">{{ old('prompt') }}</textarea>
								@error('prompt')
								  <p class="text-danger">{{ $errors->first('prompt') }}</p>
								@enderror
							  </div> 
							</div> 
						  </div>
						</div>
					  
						<div class="modal-footer d-inline">
						  <div class="row text-center">
							<div class="col-md-12">
								<a href="{{ route('admin.davinci.chats') }}" class="btn btn-cancel mr-2">{{ __('Cancel') }}</a>
							  <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
							</div>
						  </div>
						  
						</div>
					</form>				
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
	<!-- Data Tables JS -->
	<script src="{{URL::asset('plugins/datatable/datatables.min.js')}}"></script>
	<script src="{{URL::asset('plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
	<script type="text/javascript">
	$(document).ready(function() {
    var dataArray = [];
		$(document).on('click', '#addTemplateBtn', function(e) {
			e.preventDefault();
			var text = $('#template_name').val();
			dataArray.push(text);
			$('#template_name').val('');
			updateOutput();
			
			// $.ajax({
			// 	headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			// 	method: 'post',
			// 	url: '/admin/chats/chat/add-template',
			// 	data: {text : text},
			// 	processData: false,
			// 	contentType: false,
			// 	success: function (data) {
            //         console.log(data);
			// 	},
			// 	error: function(data) {
			// 		Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
			// 	}
			// })
		});	
		function updateOutput() {
			$('#output').empty();
			$('#dataArrayField').val(dataArray);
			for (var i = 0; i < dataArray.length; i++) {
				var listItem = $('<div class="list-item">' +
								'<div class="list-item-text">' + dataArray[i] + '</div>' +
								'<div class="close-button"><i class="fa-solid fa-circle-xmark"></i></div>' +
								'</div>');
				// Attach a click event to the close button
				listItem.find('.close-button').click(createCloseHandler(i));
				$('#output').append(listItem);
			}
			}
			function createCloseHandler(index) {
			return function() {
				dataArray.splice(index, 1);
				updateOutput();
			};
			}
		
	});	
	</script>
@endsection

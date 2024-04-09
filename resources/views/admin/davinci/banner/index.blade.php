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
		<h4 class="page-title mb-0">{{ __('Banner') }}</h4>
		<ol class="breadcrumb mb-2">
			<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
			<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.davinci.dashboard') }}"> {{ __('Davinci Management') }}</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="#"> {{ __('Banner') }}</a></li>
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
					<h3 class="card-title"><i class="fa-solid fa-microchip-ai mr-2 text-primary"></i>{{ __('Banner') }}</h3>
				</div>			
				<div class="card-body pt-5">
					<form class="w-100" action="{{ route('admin.davinci.banner.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">	

							<div class="col-lg-6 col-md-12 col-sm-12">													
								<div class="input-box">								
									<h6>{{ __('Image') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">							    
										<input type="file" class="form-control @error('image') is-danger @enderror" id="image" name="image">
										@error('name')
											<p class="text-danger">{{ $errors->first('image') }}</p>
										@enderror
									</div> 
								</div> 
							</div>
						</div>

						
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 mt-2">
								<div class="form-group">
									<h6>{{ __('URL Type') }} <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="d-flex">
										<div class="custom-control custom-radio mr-3">
											<input type="radio" id="bannerTypeWebsite" name="banner_type" class="custom-control-input" value="website" checked>
											<label class="custom-control-label" for="bannerTypeWebsite">{{ __('Website') }}</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" id="bannerTypeVideo" name="banner_type" class="custom-control-input" value="video">
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
										<input type="text" class="form-control @error('url') is-danger @enderror" id="url" name="url">
										@error('url')
											<p class="text-danger">{{ $errors->first('url') }}</p>
										@enderror
									</div> 
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 mt-2">
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="status" class="custom-switch-input" checked>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description">{{ __('Activate Banner') }}</span>
									</label>
								</div>
							</div>

							
						</div>

						<div class="row">
							
							
							<div class="col-md-12 col-sm-12 text-center mb-2">
								<button type="submit" class="btn btn-primary pl-5 pr-5">{{ __('Create Banner') }}</button>	
							</div>	
							
						</div>
					</form>
				</div>
			</div>
		</div>


		<div class="col-lg-12 col-md-12 col-sm-12 mt-4">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Banner List') }}</h3>
				</div>
				<div class="card-body pt-2">
					<!-- SET DATATABLE -->
					<table id='allTemplates' class='table' width='100%'>
						<thead>
							<tr>									
								<th width="3%">{{ __('Status') }}</th> 
								<th width="7%">{{ __('Image') }}</th>
								<th width="3%">{{ __('Updated On') }}</th>	    										 						           	
								<th width="7%">{{ __('Actions') }}</th>
							</tr>
						</thead>
					</table> <!-- END SET DATATABLE -->
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

			let table = $('#allTemplates').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				responsive: {
					details: {type: 'column'}
				},
				"order": [[3, "asc"]],
				language: {
					"emptyTable": "<div><img id='no-results-img' src='{{ URL::asset('img/files/no-result.png') }}'><br>No custom templates created yet</div>",
					search: "<i class='fa fa-search search-icon'></i>",
					lengthMenu: '_MENU_ ',
					paginate : {
						first    : '<i class="fa fa-angle-double-left"></i>',
						last     : '<i class="fa fa-angle-double-right"></i>',
						previous : '<i class="fa fa-angle-left"></i>',
						next     : '<i class="fa fa-angle-right"></i>'
					}
				},
				pagingType : 'full_numbers',
				processing: true,
				serverSide: true,
				ajax: "{{ route('admin.davinci.banner') }}",
				columns: [
					{
						data: 'custom-status',
						name: 'custom-status',
						orderable: true,
						searchable: true
					},
					{
						data: 'banner',
						name: 'banner',
						orderable: true,
						searchable: true
					},				
					{
						data: 'updated-on',
						name: 'updated-on',
						orderable: true,
						searchable: true
					},									
					{
						data: 'actions',
						name: 'actions',
						orderable: false,
						searchable: false
					},
				]
			});


			// UPDATE DESCRIPTION
			$(document).on('click', '.editButton', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '{{ __('Update Description') }}',
					showCancelButton: true,
					confirmButtonText: '{{ __('Update') }}',
					reverseButtons: true,
					input: 'text',
				}).then((result) => {
					if (result.value) {
						var formData = new FormData();
						formData.append("name", result.value);
						formData.append("id", $(this).attr('id'));
						formData.append("type", $(this).attr('type'));
						$.ajax({
							headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
							method: 'post',
							url: 'templates/template/update',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('{{ __('Description Update') }}', '{{ __('Description has been successfully updated') }}', 'success');
									$("#allTemplates").DataTable().ajax.reload();
								} else {
									Swal.fire('{{ __('Update Error') }}', '{{ __('Description was not updated correctly') }}', 'error');
								}      
							},
							error: function(data) {
								Swal.fire('Update Error', data.responseJSON['error'], 'error');
							}
						})
					} else if (result.dismiss !== Swal.DismissReason.cancel) {
						Swal.fire('{{ __('No Description Entered') }}', '{{ __('Make sure to provide a new description before updating') }}', 'error')
					}
				})
			});


			// UPDATE PACKAGE
			$(document).on('click', '.changeButton', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '{{ __('Update Template Package') }}',
					input: 'select',
					inputOptions: {
						all: '{{ __('All Templates') }}',
						free: '{{ __('Only Free Templates') }}',
						standard: '{{ __('Up to Standard Templates') }}',
						professional: '{{ __('Up to Professional Templates') }}',
						premium: '{{ __('Up to Premium Templates') }}'
					},
					inputPlaceholder: '{{ __('Set Template Package') }}',
					showCancelButton: true,
					confirmButtonText: '{{ __('Update') }}',
					reverseButtons: true,
				}).then((result) => {
					if (result.value) {
						var formData = new FormData();
						formData.append("name", result.value);
						formData.append("id", $(this).attr('id'));
						formData.append("type", $(this).attr('type'));
						$.ajax({
							headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
							method: 'post',
							url: 'templates/template/changepackage',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('{{ __('Template Package Update') }}', '{{ __('Template package has been successfully updated') }}', 'success');
									$("#allTemplates").DataTable().ajax.reload();
								} else {
									Swal.fire('{{ __('Update Error') }}', '{{ __('Template Package was not changed properly') }}', 'error');
								}      
							},
							error: function(data) {
								Swal.fire('Update Error', data.responseJSON['error'], 'error');
							}
						})
					} 
				})
			});


			// SET AS NEW TEMPLATE
			$(document).on('click', '.newButton', function(e) {

				e.preventDefault();

				var formData = new FormData();
				formData.append("id", $(this).attr('id'));
				formData.append("type", $(this).attr('type'));

				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: 'templates/template/setnew',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data == 'success') {
							Swal.fire('{{ __('Template Update') }}', '{{ __('Template has been successfully set as new') }}', 'success');
							$("#allTemplates").DataTable().ajax.reload();
						} else {
							Swal.fire('{{ __('Template Update') }}', '{{ __('New tag has been successfully removed from template') }}', 'success');
							$("#allTemplates").DataTable().ajax.reload();
						}      
					},
					error: function(data) {
						Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
					}
				})

			});


			// ACTIVATE TEMPLATE
			$(document).on('click', '.activateButton', function(e) {

				e.preventDefault();

				var formData = new FormData();
				formData.append("id", $(this).attr('id'));
				formData.append("type", $(this).attr('type'));

				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: 'templates/template/activate',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data == 'success') {
							Swal.fire('{{ __('Template Activated') }}', '{{ __('Template has been activated successfully') }}', 'success');
							$("#allTemplates").DataTable().ajax.reload();
						} else {
							Swal.fire('{{ __('Template Already Active') }}', '{{ __('Selected template is already activated') }}', 'warning');
						}      
					},
					error: function(data) {
						Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
					}
				})

			});


			// DEACTIVATE TEMPLATE
			$(document).on('click', '.deactivateButton', function(e) {

				e.preventDefault();

				var formData = new FormData();
				formData.append("id", $(this).attr('id'));
				formData.append("type", $(this).attr('type'));

				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: 'templates/template/deactivate',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data == 'success') {
							Swal.fire('{{ __('Template Deactivated') }}', '{{ __('Template has been deactivated successfully') }}', 'success');
							$("#allTemplates").DataTable().ajax.reload();
						} else {
							Swal.fire('{{ __('Template Already Deactive') }}', '{{ __('Template is already deactivated') }}', 'warning');
						}      
					},
					error: function(data) {
						Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
					}
				})

			});


			// DELETE CUSTOM TEMPLATE
			$(document).on('click', '.deleteTemplate', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '{{ __('Confirm Banner Deletion') }}',
					text: '{{ __('It will permanently delete this banner') }}',
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: '{{ __('Delete') }}',
					reverseButtons: true,
				}).then((result) => {
					if (result.isConfirmed) {
						var formData = new FormData();
						formData.append("id", $(this).attr('id'));
						$.ajax({
							headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
							method: 'post',
							url: '/admin/davinci/banner/delete',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('{{__('Banner Deleted')}}', '{{ __('Banner has been successfully deleted') }}', 'success');	
									$("#allTemplates").DataTable().ajax.reload();								
								} else {
									Swal.fire('{{ __('Banner Delete Failed') }}', '{{ __('There was an error while deleting this Banner') }}', 'error');
								}      
							},
							error: function(data) {
								Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
							}
						})
					} 
				})
			});
		});

		let i = 2;
		function addField(plusElement){

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
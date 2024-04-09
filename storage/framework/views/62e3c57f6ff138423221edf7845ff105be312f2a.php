

<?php $__env->startSection('css'); ?>
	<!-- Data Table CSS -->
	<link href="<?php echo e(URL::asset('plugins/datatable/datatables.min.css')); ?>" rel="stylesheet" />
	<!-- Sweet Alert CSS -->
	<link href="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Category Manager')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.davinci.dashboard')); ?>"> <?php echo e(__('Davinci Management')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Category Manager')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('All Categories')); ?></h3>
					<a href="#" id="createButton" class="btn btn-primary text-right right"><?php echo e(__('Create New')); ?></a>
				</div>
				<div class="card-body pt-2">
					<!-- BOX CONTENT -->
					<div class="box-content">
						<!-- SET DATATABLE -->
						<table id='allTemplates' class='table' width='100%'>
								<thead>
									<tr>									
										<th width="5%"><?php echo e(__('Category Name')); ?></th> 					
										<th width="5%"><?php echo e(__('Type')); ?></th> 					
										<th width="15%"><?php echo e(__('Description')); ?></th> 					
										<th width="3%"><?php echo e(__('Updated On')); ?></th>	    										 						           	
										<th width="2%"><?php echo e(__('Actions')); ?></th>
									</tr>
								</thead>
						</table> <!-- END SET DATATABLE -->
					</div> <!-- END BOX CONTENT -->

					<div class="col-md-12 col-sm-12 text-center mb-2">
						<a href="<?php echo e(route('admin.davinci.custom')); ?>" class="btn btn-cancel"><?php echo e(__('Return')); ?></a>
					</div>	
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- Data Tables JS -->
	<script src="<?php echo e(URL::asset('plugins/datatable/datatables.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
	<script type="text/javascript">
		$(function () {

			"use strict";

			// INITILIZE DATATABLE
			var table = $('#allTemplates').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				responsive: {
					details: {type: 'column'}
				},
				colReorder: true,
				language: {
					"emptyTable": "<div><img id='no-results-img' src='<?php echo e(URL::asset('img/files/no-result.png')); ?>'><br>All Categories</div>",
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
				ajax: "<?php echo e(route('admin.davinci.custom.category')); ?>",
				columns: [
					{
						data: 'custom-name',
						name: 'custom-name',
						orderable: true,
						searchable: true
					},	
					{
						data: 'custom-type',
						name: 'custom-type',
						orderable: true,
						searchable: true
					},	
					{
						data: 'custom-description',
						name: 'custom-description',
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

			
			// UPDATE NAME
			$(document).on('click', '.editButton', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '<?php echo e(__('Update Category Name')); ?>',
					showCancelButton: true,
					confirmButtonText: '<?php echo e(__('Update')); ?>',
					reverseButtons: true,
					input: 'text',
				}).then((result) => {
					if (result.value) {
						var formData = new FormData();
						formData.append("name", result.value);
						formData.append("id", $(this).attr('id'));
						$.ajax({
							headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
							method: 'post',
							url: 'category/change',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('<?php echo e(__('Category Name Update')); ?>', '<?php echo e(__('Category name has been successfully updated')); ?>', 'success');
									$("#allTemplates").DataTable().ajax.reload();
								} else {
									Swal.fire('<?php echo e(__('Update Error')); ?>', '<?php echo e(__('Category name was not updated correctly')); ?>', 'error');
								}      
							},
							error: function(data) {
								Swal.fire('Update Error', data.responseJSON['error'], 'error');
							}
						})
					} else if (result.dismiss !== Swal.DismissReason.cancel) {
						Swal.fire('<?php echo e(__('No Name Entered')); ?>', '<?php echo e(__('Make sure to provide a new name before updating')); ?>', 'error')
					}
				})
			});

			// UPDATE DESCRIPTION
			$(document).on('click', '.editDescription', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '<?php echo e(__('Update Category Description')); ?>',
					showCancelButton: true,
					confirmButtonText: '<?php echo e(__('Update')); ?>',
					reverseButtons: true,
					input: 'text',
				}).then((result) => {
					if (result.value) {
						var formData = new FormData();
						formData.append("name", result.value);
						formData.append("id", $(this).attr('id'));
						$.ajax({
							headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
							method: 'post',
							url: 'category/description',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('<?php echo e(__('Category Description Updated')); ?>', '<?php echo e(__('Category description has been successfully updated')); ?>', 'success');
									$("#allTemplates").DataTable().ajax.reload();
								} else {
									Swal.fire('<?php echo e(__('Update Error')); ?>', '<?php echo e(__('Category description was not updated correctly')); ?>', 'error');
								}      
							},
							error: function(data) {
								Swal.fire('Update Error', data.responseJSON['error'], 'error');
							}
						})
					} else if (result.dismiss !== Swal.DismissReason.cancel) {
						Swal.fire('<?php echo e(__('No Name Entered')); ?>', '<?php echo e(__('Make sure to provide a new name before updating')); ?>', 'error')
					}
				})
			});


			// CREATE CATEGORY
			$(document).on('click', '#createButton', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '<?php echo e(__('Create New Category')); ?>',
					showCancelButton: true,
					confirmButtonText: '<?php echo e(__('Create')); ?>',
					reverseButtons: true,
					input: 'text',
				}).then((result) => {
					if (result.value) {
						var formData = new FormData();
						formData.append("name", result.value);
						$.ajax({
							headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
							method: 'post',
							url: 'category/create',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('<?php echo e(__('New Category')); ?>', '<?php echo e(__('Category has been successfully created')); ?>', 'success');
									$("#allTemplates").DataTable().ajax.reload();
								} else {
									Swal.fire('<?php echo e(__('New Category Error')); ?>', '<?php echo e(__('Category was not created correctly')); ?>', 'error');
								}      
							},
							error: function(data) {
								Swal.fire('Update Error', data.responseJSON['error'], 'error');
							}
						})
					} else if (result.dismiss !== Swal.DismissReason.cancel) {
						Swal.fire('<?php echo e(__('No Name Entered')); ?>', '<?php echo e(__('Make sure to provide a new name before creating')); ?>', 'error')
					}
				})
			});


			// DELETE PLAN
			$(document).on('click', '.deleteButton', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '<?php echo e(__('Confirm Category Deletion')); ?>',
					text: '<?php echo e(__('It will permanently delete this category')); ?>',
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: '<?php echo e(__('Delete')); ?>',
					reverseButtons: true,
				}).then((result) => {
					if (result.isConfirmed) {
						var formData = new FormData();
						formData.append("id", $(this).attr('id'));
						$.ajax({
							headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
							method: 'post',
							url: 'category/delete',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('<?php echo e(__('Category Deleted')); ?>', '<?php echo e(__('Category has been successfully deleted')); ?>', 'success');	
									$("#allTemplates").DataTable().ajax.reload();								
								} else {
									Swal.fire('<?php echo e(__('Delete Failed')); ?>', '<?php echo e(__('There was an error while deleting this category')); ?>', 'error');
								}      
							},
							error: function(data) {
								Swal.fire('Oops...','Something went wrong!', 'error')
							}
						})
					} 
				})
			});

		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/admin/davinci/custom/category.blade.php ENDPATH**/ ?>
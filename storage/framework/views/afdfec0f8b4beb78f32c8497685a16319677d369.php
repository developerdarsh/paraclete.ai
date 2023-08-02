

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
			<h4 class="page-title mb-0"><?php echo e(__('AI Chats Customization')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.davinci.dashboard')); ?>"> <?php echo e(__('Davinci Management')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('AI Chats Customization')); ?></a></li>
			</ol>
		</div>
		<div class="page-rightheader">
			<a href="<?php echo e(route('admin.davinci.chat.create')); ?>" class="btn btn-primary mt-1"><?php echo e(__('Create New Chat Bot')); ?></a>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('All AI Chats')); ?></h3>
				</div>
				<div class="card-body pt-2">
					<!-- BOX CONTENT -->
					<div class="box-content">
							<!-- SET DATATABLE -->
							<table id='allResultsTable' class='table' width='100%'>
									<thead>
										<tr>	
											<th width="2%"><?php echo e(__('Status')); ?></th> 
											<th width="2%"><?php echo e(__('Avatar')); ?></th>								
											<th width="8%"><?php echo e(__('Name')); ?></th> 											
											<th width="8%"><?php echo e(__('Character')); ?></th>
											<th width="3%"><?php echo e(__('Package')); ?></th>						
											<th width="3%"><?php echo e(__('Updated On')); ?></th>	    										 						           	
											<th width="4%"><?php echo e(__('Actions')); ?></th>
										</tr>
									</thead>
							</table> <!-- END SET DATATABLE -->
					</div> <!-- END BOX CONTENT -->
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
			var table = $('#allResultsTable').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				responsive: {
					details: {type: 'column'}
				},
				"order": [[ 4, "asc" ]],
				colReorder: true,
				language: {
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
				ajax: "<?php echo e(route('admin.davinci.chats')); ?>",
				columns: [
					{
						data: 'custom-status',
						name: 'custom-status',
						orderable: true,
						searchable: true
					},	
					{
						data: 'custom-avatar',
						name: 'custom-avatar',
						orderable: true,
						searchable: true
					},	
					{
						data: 'name',
						name: 'name',
						orderable: true,
						searchable: true
					},
					{
						data: 'sub_name',
						name: 'sub_name',
						orderable: true,
						searchable: true
					},		
					{
						data: 'custom-package',
						name: 'custom-package',
						orderable: true,
						searchable: true
					},						
					{
						data: 'created-on',
						name: 'created-on',
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


			// ACTIVATE CHAT
			$(document).on('click', '.activateButton', function(e) {

				e.preventDefault();

				var formData = new FormData();
				formData.append("id", $(this).attr('id'));

				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: '/admin/chats/chat/activate',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data == 'success') {
							Swal.fire('<?php echo e(__('Chat Bot Activated')); ?>', '<?php echo e(__('Chat Bot has been activated successfully')); ?>', 'success');
							$("#allResultsTable").DataTable().ajax.reload();
						} else {
							Swal.fire('<?php echo e(__('Chat Bot Already Active')); ?>', '<?php echo e(__('Selected chat bot is already activated')); ?>', 'warning');
						}      
					},
					error: function(data) {
						Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
					}
				})

			});


			// DEACTIVATE CHAT
			$(document).on('click', '.deactivateButton', function(e) {

				e.preventDefault();

				var formData = new FormData();
				formData.append("id", $(this).attr('id'));

				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: '/admin/chats/chat/deactivate',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data == 'success') {
							Swal.fire('<?php echo e(__('Chat Bot Deactivated')); ?>', '<?php echo e(__('Chat Bot has been deactivated successfully')); ?>', 'success');
							$("#allResultsTable").DataTable().ajax.reload();
						} else {
							Swal.fire('<?php echo e(__('Chat Bot Already Deactive')); ?>', '<?php echo e(__('Selected chat bot is already deactivated')); ?>', 'warning');
						}      
					},
					error: function(data) {
						Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
					}
				})

			});		

		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/paraclete.ai/public_html/resources/views/admin/davinci/chats/index.blade.php ENDPATH**/ ?>
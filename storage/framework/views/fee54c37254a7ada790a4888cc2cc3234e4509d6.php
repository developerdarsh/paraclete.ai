

<?php $__env->startSection('css'); ?>
	<link href="<?php echo e(URL::asset('plugins/datatable/datatables.min.css')); ?>" rel="stylesheet" />
	<link href="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.min.css')); ?>" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('All Users Video')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-id-badge mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.user.dashboard')); ?>"> <?php echo e(__('User Video Management')); ?></a></li>
			</ol>
		</div>
		<div class="page-rightheader">
			<a href="<?php echo e(route('user.videos.create')); ?>" class="btn btn-primary mt-1"><?php echo e(__('Upload New Video')); ?></a>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- USERS LIST DATA TABEL -->
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('User Video Management')); ?></h3>
				</div>
				<div class="card-body pt-2">
					<!-- BOX CONTENT -->
					<div class="box-content">
					<div class="form-group">
						<select id="filter" multiple="multiple">
							<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
							<option value="<?php echo e($cate['id']); ?>"><?php echo e($cate['name']); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
						<!-- DATATABLE -->
						<table id='listVideos' class='table listVideos' width='100%'>
								<thead>
									<tr>	
										<th width="15%"><?php echo e(__('Title')); ?></th> 		
										<th width="7%"><?php echo e(__('Category')); ?></th>								
										<th width="7%"><?php echo e(__('Url')); ?></th>         	        	       	    						           	     	       	    						           	        	       	    						           	     	       	    						           	
										<th width="7%"><?php echo e(__('Created On')); ?></th> 							    						           								    						           	
										<th width="7%"><?php echo e(__('Actions')); ?></th>        	      	
									</tr>
								</thead>
								
						</table>
						<!-- END DATATABLE -->
						
					</div> <!-- END BOX CONTENT -->
				</div>
			</div>
		</div>
	</div>
	<!-- END USERS LIST DATA TABEL -->
<?php $__env->stopSection(); ?>
  
<?php $__env->startSection('js'); ?>
	<!-- Data Tables JS -->
	<script src="<?php echo e(URL::asset('plugins/datatable/datatables.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script type="text/javascript">
		$(function () {

			"use strict";
			
			var table = $('#listVideos').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				lengthChange: false,
				responsive: true,
				colReorder: true,
				"order": [[ 0, "desc" ]],
				language: {
					"emptyTable": "<div><img id='no-results-img' src='<?php echo e(URL::asset('img/files/no-result.png')); ?>'><br><?php echo e(__('Looks like you do not have any added yet')); ?></div>",
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
				ajax: {
					url: "<?php echo e(route('user.videos.list')); ?>",
					data: function (d) {
						d.category = $('#filter').val();
					}
				},
				columns: [
					{
						data: 'title',
						name: 'title',
						orderable: true,
						searchable: true
					},
					{
						data: 'category_name',
						name: 'category_name',
						orderable: true,
						searchable: true
					},
					{
						data: 'url',
						name: 'url',
						orderable: true,
						searchable: true
					},
					{
						data: 'created_at',
						name: 'created_at',
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
			$('#filter').on('change', function() {
				var filterValues = $(this).val();
				table.draw();
			});
		});

		$('#filter').select2({
			multiple: true,
			placeholder: "--Category--"
		});
	</script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/user/training_video/index.blade.php ENDPATH**/ ?>
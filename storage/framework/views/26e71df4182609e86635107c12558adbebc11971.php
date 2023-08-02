

<?php $__env->startSection('css'); ?>
	<!-- Data Table CSS -->
	<link href="<?php echo e(URL::asset('plugins/datatable/datatables.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Database Backup')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-sliders mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('General Settings')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('Database Backup')); ?></a></li>
			</ol>
		</div>
		<div class="page-rightheader">
			<a href="<?php echo e(route('admin.settings.backup.create')); ?>" class="btn btn-primary mt-1"><?php echo e(__('Create DB New Backup')); ?></a>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>						
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Database Backup List')); ?></h3>
				</div>				
				<div class="card-body pt-0">
					<table class="table table-hover" id="database-backup">
						<thead>
							<tr role="row">
							<th class="fs-12 font-weight-700 border-top-0"><?php echo e(__('Created Date')); ?></th>
							<th class="fs-12 font-weight-700 border-top-0"><?php echo e(__('DB Backup Name')); ?></th>
							<th class="fs-12 font-weight-700 border-top-0"><?php echo e(__('DB Size')); ?></th>
							<th class="fs-12 font-weight-700 border-top-0"><?php echo e(__('Age')); ?></th>
							<th class="fs-12 font-weight-700 border-top-0"><?php echo e(__('Actions')); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php $__empty_1 = true; $__currentLoopData = $backups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $backup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
							<tr>
							<td><?php echo e(\Carbon\Carbon::createFromTimeStamp($backup['last_modified'])); ?></td>
							<td><?php echo e($backup['file_name']); ?></td>
							<td><?php echo e(round((int)$backup['file_size']/1048576, 2).' MB'); ?></td>
							<td><?php echo e(\Carbon\Carbon::createFromTimestamp($backup['last_modified'], '+01:00')->diffForHumans()); ?></td>
							<td><div class="dropdown">
									<button class="btn table-actions" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-ellipsis-v"></i>                       
									</button>
									<div class="dropdown-menu table-actions-dropdown" role="menu" aria-labelledby="actions">
										<a class="dropdown-item" href="<?php echo e(route("admin.settings.backup.download", [$backup['file_name']])); ?>"><i class="fa fa-download"></i> <?php echo e(__('Download')); ?></a>
										<a class="dropdown-item" href="<?php echo e(route("admin.settings.backup.delete", [$backup['file_name']])); ?>"><i class="fa fa-trash"></i> <?php echo e(__('Delete')); ?></a>
									</div>
								</div>
							</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
								<tr><td><?php echo e(__('No Database Backup was created yet')); ?></td></tr>
							<?php endif; ?>
						</tbody>
					</table>			
				</div>				  
			</div>
		</div>
	</div>

	<!-- MODAL -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><i class="mdi mdi-alert-circle-outline color-red"></i> <?php echo e(__('Confirm Database Deletion')); ?></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="deleteModalBody">
					<div>
						<!-- DELETE CONFIRMATION -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- Data Tables JS -->
	<script src="<?php echo e(URL::asset('plugins/datatable/datatables.min.js')); ?>"></script>
	<script type="text/javascript">
		$(function () {

			"use strict";
			
			// DELETE CONFIRMATION MODAL
			$(document).on('click', '#deleteBackupButton', function(event) {
				event.preventDefault();
				let href = $(this).attr('data-attr');
				$.ajax({
					url: href
					, beforeSend: function() {
						$('#loader').show();
					},
					// return the result
					success: function(result) {
						$('#deleteModal').modal("show");
						$('#deleteModalBody').html(result).show();
					}
					, error: function(jqXHR, testStatus, error) {
						console.log(error);
						alert("Page " + href + " cannot open. Error:" + error);
						$('#loader').hide();
					}
					, timeout: 8000
				})
			});

		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/paraclete.ai/public_html/resources/views/admin/settings/backup/index.blade.php ENDPATH**/ ?>
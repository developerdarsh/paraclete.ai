

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7"> 
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('New Mass Notification')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-message-exclamation mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.notifications')); ?>"> <?php echo e(__('Mass Notifications')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('New Mass Notification')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>						
	<div class="row">
		<div class="col-lg-6 col-md-6 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Create New Notification')); ?></h3>
				</div>
				<div class="card-body pt-5">									
					<form action="<?php echo e(route('admin.notifications.store')); ?>" method="POST" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>

						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">				
								<div class="input-box">	
									<h6><?php echo e(__('Notification Type')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="notification-type" name="notification-type" data-placeholder="<?php echo e(__('Select Notification Type')); ?>:">			
										<option value="Info" selected><?php echo e(__('Info')); ?></option>
										<option value="Announcement"><?php echo e(__('Announcement')); ?></option>
										<option value="Marketing"><?php echo e(__('Marketing')); ?></option>
										<option value="Warning"><?php echo e(__('Warning')); ?></option>
									</select>
									<?php $__errorArgs = ['notification-type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('notification-type')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 							
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">						
								<div class="input-box">	
									<h6><?php echo e(__('Notification Action')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="notification-action" name="notification-action" data-placeholder="<?php echo e(__('Select User Action Type')); ?>:">			
										<option value="No Action Needed" selected><?php echo e(__('No Action Needed')); ?></option>
										<option value="Action Required"><?php echo e(__('Action Required')); ?></option>
									</select>
									<?php $__errorArgs = ['notification-action'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('notification-action')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>	
								</div>						
							</div>
						
						</div>

						<div class="row mt-2">							
							<div class="col-lg-12 col-md-12 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Subject')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="notification-subject" name="notification-subject" required>
									</div> 
									<?php $__errorArgs = ['notification-subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('notification-subject')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 						
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-lg-12 col-md-12 col-sm-12">	
								<div class="input-box">	
									<h6><?php echo e(__('Notification Message')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>							
									<textarea class="form-control" name="notification-message" rows="10"></textarea>
									<?php $__errorArgs = ['notification-message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('notification-message')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>	
								</div>											
							</div>
						</div>

						<!-- ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="<?php echo e(route('admin.notifications')); ?>" class="btn btn-cancel mr-2"><?php echo e(__('Return')); ?></a>
							<button type="submit" class="btn btn-primary"><?php echo e(__('Send')); ?></button>							
						</div>				

					</form>					
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/paraclete.ai/public_html/resources/views/admin/notification/create.blade.php ENDPATH**/ ?>
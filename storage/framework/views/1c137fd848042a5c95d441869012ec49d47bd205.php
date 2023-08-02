

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('2FA Authentication')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-id-badge mr-2 fs-12"></i><?php echo e(__('User')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('user.profile')); ?>"> <?php echo e(__('My Profile')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('2FA Authentication')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- USER PROFILE PAGE -->
	<div class="row">

		<div class="col-xl-3 col-lg-3 col-md-12">
			<div class="card border-0" id="dashboard-background">
				<div class="widget-user-image overflow-hidden mx-auto mt-5"><img alt="User Avatar" class="rounded-circle" src="<?php if(auth()->user()->profile_photo_path): ?><?php echo e(asset(auth()->user()->profile_photo_path)); ?> <?php else: ?> <?php echo e(URL::asset('img/users/avatar.jpg')); ?> <?php endif; ?>"></div>
				<div class="card-body text-center">
					<div>
						<h4 class="mb-1 mt-1 font-weight-bold text-primary fs-16"><?php echo e(auth()->user()->name); ?></h4>
						<h6 class="text-white fs-12"><?php echo e(auth()->user()->job_role); ?></h6>
					</div>
				</div>
				<div class="card-footer p-0">
					<div class="row">
						<div class="col-sm-12">
							<div class="text-center p-4">
								<div class="d-flex w-100">
									<div class="flex w-100">
										<div class="flex w-100">
											<h4 class="mb-3 mt-1 font-weight-800 text-primary text-shadow fs-16"><?php echo e(number_format(auth()->user()->available_words + auth()->user()->available_words_prepaid)); ?> / <?php echo e(number_format(auth()->user()->total_words)); ?></h4>
											<h6 class="text-white fs-12 text-shadow"><?php echo e(__('Words Left')); ?></h6>
										</div>
										<div class="flex w-100 mt-4">
											<h4 class="mb-3 mt-1 font-weight-800 text-primary text-shadow fs-16"><?php echo e(number_format(auth()->user()->available_images + auth()->user()->available_images_prepaid)); ?> / <?php echo e(number_format(auth()->user()->total_images)); ?></h4>
											<h6 class="text-white fs-12 text-shadow"><?php echo e(__('Images Left')); ?></h6>
										</div>
									</div>
									<div class="flex w-100">
										<div class="flex w-100">
											<h4 class="mb-3 mt-1 font-weight-800 text-primary text-shadow fs-16"><?php echo e(number_format(auth()->user()->available_chars + auth()->user()->available_chars_prepaid)); ?> / <?php echo e(number_format(auth()->user()->total_chars)); ?></h4>
											<h6 class="text-white fs-12 text-shadow"><?php echo e(__('Characters Left')); ?></h6>
										</div>
										<div class="flex w-100 mt-4">
											<h4 class="mb-3 mt-1 font-weight-800 text-primary text-shadow fs-16"><?php echo e(number_format(auth()->user()->available_minutes + auth()->user()->available_minutes_prepaid)); ?> / <?php echo e(number_format(auth()->user()->total_minutes)); ?></h4>
											<h6 class="text-white fs-12 text-shadow"><?php echo e(__('Minutes Left')); ?></h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer p-0">
					<div class="row" id="profile-pages">
						<div class="col-sm-12">
							<div class="text-center pt-4">
								<a href="<?php echo e(route('user.profile')); ?>" class="fs-13 text-white"><i class="fa fa-user-shield mr-1"></i> <?php echo e(__('View Profile')); ?></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="text-center pt-3">
								<a href="<?php echo e(route('user.profile.defaults')); ?>" class="fs-13 text-white"><i class="fa-sharp fa-solid fa-sliders mr-1"></i> <?php echo e(__('Set Defaults')); ?></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="text-center p-3 ">
								<a href="<?php echo e(route('user.security')); ?>" class="fs-13 text-white"><i class="fa fa-lock-hashtag mr-1"></i> <?php echo e(__('Change Password')); ?></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="text-center pb-4">
								<a href="<?php echo e(route('user.security.2fa')); ?>" class="fs-13 text-primary"><i class="fa fa-shield-check mr-1"></i> <?php echo e(__('2FA Authentication')); ?></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="text-center pb-4">
								<a href="<?php echo e(route('user.profile.delete')); ?>" class="fs-13 text-white"><i class="fa fa-user-xmark mr-1"></i> <?php echo e(__('Delete Account')); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-9 col-lg-9 col-md-12">
			<?php if(auth()->user()->google2fa_enabled == false): ?>
				<div class="card border-0">
					<div class="card-header">
						<h3 class="card-title"><i class="fa-solid fa-shield-check mr-2 text-success"></i><?php echo e(__('Activate 2FA Authentication')); ?></h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('In order to enable enhanced security measures, setup Google Two Factor Authentication for Login.')); ?></span></h6>

								<p class="fs-12"><?php echo e(__('Scan the QR code below or use setup key on your Google Authenticator app to add your account.')); ?></p>

								<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<p class="text-danger"><?php echo e($error); ?></p>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
									
								<div class="text-center w-100">
									<?php echo $qr_code; ?>

								</div>
									
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12 font-weight-bold"><?php echo e(__('Setup Key')); ?></label>
										<input type="text" class="form-control" autocomplete="off" value="<?php echo e($google_data); ?>" readonly>
									</div>
								</div>

								<p class="fs-12"><?php echo e(__('Google Authenticator is a multifactor authentication application for mobile devices. It generates timed codes used during the 2-step verication process. To use Google Authenticator, install the Google Authenticator app on your mobile device.')); ?></p>
								
							</div>

							<div class="col-lg-6 col-md-12 col-sm-12">
								<form method="POST" action="<?php echo e(route('user.security.2fa.activate')); ?>" enctype="multipart/form-data">

									<?php echo csrf_field(); ?>
			
									<div class="input-box">
										<div class="form-group">
											<label class="form-label fs-12 font-weight-bold"><?php echo e(__('Enter Google Authenticator OTP')); ?><span class="text-required"><i class="fa-solid fa-asterisk"></i></span></label>
											<input type="text" name="key" class="form-control <?php $__errorArgs = ['key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off" maxlength="6" required>
											<?php $__errorArgs = ['key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<span class="invalid-feedback" role="alert">
													<?php echo e($message); ?>

												</span>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
										</div>
									</div>

									<div class="card-footer border-0 p-0 text-center">
										<button type="submit" class="btn btn-primary pl-6 pr-6"><?php echo e(__('Activate')); ?></button>							
									</div>	
								</form>	
							</div>
						</div>				
					</div>				
				</div>
			<?php elseif(auth()->user()->google2fa_enabled == true): ?>
				<div class="card border-0">
					<div class="card-header">
						<h3 class="card-title"><i class="fa-solid fa-shield-check mr-2 text-danger"></i><?php echo e(__('Deactivate 2FA Authentication')); ?></h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<form method="POST" action="<?php echo e(route('user.security.2fa.deactivate')); ?>" enctype="multipart/form-data">

									<?php echo csrf_field(); ?>
			
									<div class="input-box">
										<div class="form-group">
											<label class="form-label fs-12 font-weight-bold"><?php echo e(__('Enter Google Authenticator OTP')); ?><span class="text-required"><i class="fa-solid fa-asterisk"></i></span></label>
											<input type="text" name="key" class="form-control <?php $__errorArgs = ['key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" autocomplete="off" maxlength="6" required>
											<?php $__errorArgs = ['key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<span class="invalid-feedback" role="alert">
													<?php echo e($message); ?>

												</span>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>  
										</div>
									</div>

									<div class="card-footer border-0 p-0 text-center mb-3">
										<button type="submit" class="btn btn-primary pl-6 pr-6"><?php echo e(__('Deactivate')); ?></button>							
									</div>	
								</form>	
							</div>
						</div>				
					</div>				
				</div>
			<?php endif; ?>
		</div>
	</div>
	<!-- END USER PROFILE PAGE -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/paraclete.ai/public_html/resources/views/user/profile/google.blade.php ENDPATH**/ ?>
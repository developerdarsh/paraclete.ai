

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('My Profile')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-id-badge mr-2 fs-12"></i><?php echo e(__('User')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('user.profile')); ?>"> <?php echo e(__('My Profile')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('Change Password')); ?></a></li>
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
						<h6 class="font-weight-bold fs-12"><?php echo e(auth()->user()->job_role); ?></h6>
					</div>
				</div>
				<div class="card-footer p-0">								
					<div class="row text-center pt-4 pb-4">
						<div class="col-sm">
							<h4 class="mb-3 mt-1 font-weight-800 text-primary fs-16"><?php if(auth()->user()->available_words == -1): ?> <?php echo e(__('Unlimited')); ?> <?php else: ?> <?php echo e(App\Services\HelperService::userAvailableWords()); ?> <?php endif; ?></h4>
							<h6 class="fs-12"><?php echo e(__('Words Left')); ?></h6>
						</div>
						<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'user|subscriber|admin')): ?>
							<?php if(config('settings.image_feature_user') == 'allow'): ?>
								<div class="col-sm">
									<h4 class="mb-3 mt-1 font-weight-800 text-primary fs-16"><?php if(auth()->user()->available_images == -1): ?> <?php echo e(__('Unlimited')); ?> <?php else: ?> <?php echo e(App\Services\HelperService::userAvailableImages()); ?> <?php endif; ?></h4>
									<h6 class="fs-12"><?php echo e(__('Images Left')); ?></h6>
								</div>
							<?php endif; ?>
						<?php endif; ?>
					</div>
					<?php if(config('settings.voiceover_feature_user') == 'allow' || config('settings.whisper_feature_user') == 'allow'): ?>
						<div class="row text-center pb-4">
							<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'user|subscriber|admin')): ?>
								<?php if(config('settings.voiceover_feature_user') == 'allow'): ?>
									<div class="col-sm">
										<h4 class="mb-3 mt-1 font-weight-800 text-primary fs-16"><?php if(auth()->user()->available_chars == -1): ?> <?php echo e(__('Unlimited')); ?> <?php else: ?> <?php echo e(App\Services\HelperService::userAvailableChars()); ?> <?php endif; ?></h4>
										<h6 class="fs-12"><?php echo e(__('Characters Left')); ?></h6>
									</div>
								<?php endif; ?>
							<?php endif; ?>
							<?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'user|subscriber|admin')): ?>
								<?php if(config('settings.whisper_feature_user') == 'allow'): ?>
									<div class="col-sm">
										<h4 class="mb-3 mt-1 font-weight-800 text-primary fs-16"><?php if(auth()->user()->available_minutes == -1): ?> <?php echo e(__('Unlimited')); ?> <?php else: ?> <?php echo e(App\Services\HelperService::userAvailableMinutes()); ?> <?php endif; ?></h4>
										<h6 class="fs-12"><?php echo e(__('Minutes Left')); ?></h6>
									</div>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					<?php endif; ?>															
				</div>
				<div class="card-footer p-0">
					<div class="row" id="profile-pages">
						<div class="col-sm-12">
							<div class="text-center pt-4">
								<a href="<?php echo e(route('user.profile')); ?>" class="fs-13"><i class="fa fa-user-shield mr-1"></i> <?php echo e(__('View Profile')); ?></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="text-center pt-3">
								<a href="<?php echo e(route('user.profile.defaults')); ?>" class="fs-13"><i class="fa-sharp fa-solid fa-sliders mr-1"></i> <?php echo e(__('Set Defaults')); ?></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="text-center p-3 ">
								<a href="<?php echo e(route('user.security')); ?>" class="fs-13 text-primary"><i class="fa fa-lock-hashtag mr-1"></i> <?php echo e(__('Change Password')); ?></a>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="text-center pb-4">
								<a href="<?php echo e(route('user.security.2fa')); ?>" class="fs-13"><i class="fa fa-shield-check mr-1"></i> <?php echo e(__('2FA Authentication')); ?></a>
							</div>
						</div>
						<?php if(auth()->user()->group == 'user' || auth()->user()->group == 'admin'): ?>
							<?php if(config('settings.personal_openai_api') == 'allow' || config('settings.personal_sd_api') == 'allow'): ?>
								<div class="col-sm-12">
									<div class="text-center pb-3">
										<a href="<?php echo e(route('user.profile.api')); ?>" class="fs-13"><i class="fa-solid fa-key mr-1"></i> <?php echo e(__('Personal API Keys')); ?></a>
									</div>
								</div>
							<?php endif; ?>
						<?php elseif(!is_null(auth()->user()->plan_id)): ?>
							<?php if($check_api_feature->personal_openai_api || $check_api_feature->personal_sd_api): ?>
								<div class="col-sm-12">
									<div class="text-center pb-3">
										<a href="<?php echo e(route('user.profile.api')); ?>" class="fs-13"><i class="fa-solid fa-key mr-1"></i> <?php echo e(__('Personal API Keys')); ?></a>
									</div>
								</div>
							<?php endif; ?>
						<?php endif; ?>	
						<div class="col-sm-12">
							<div class="text-center pb-4">
								<a href="<?php echo e(route('user.profile.delete')); ?>" class="fs-13"><i class="fa fa-user-xmark mr-1"></i> <?php echo e(__('Delete Account')); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-9 col-lg-9 col-md-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><i class="fa-solid fa-lock-hashtag mr-2 text-primary"></i><?php echo e(__('Change Password')); ?></h3>
				</div>
				<div class="card-body">
					<form method="POST" action="<?php echo e(route('user.security.password')); ?>" enctype="multipart/form-data">

						<?php echo csrf_field(); ?>

						<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="text-danger"><?php echo e($error); ?></p>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

						<div class="input-box">	
							<div class="form-group">
								<label class="form-label fs-12"><?php echo e(__('Current Password')); ?></label>
								<input type="password" name='current_password' class="form-control">
							</div>
						</div>
						<div class="input-box">
							<div class="form-group">
								<label class="form-label fs-12"><?php echo e(__('New Password')); ?></label>
								<input type="password" name="new_password" class="form-control">
							</div>
						</div>
						<div class="input-box mb-0">
							<div class="form-group mb-0">
								<label class="form-label fs-12"><?php echo e(__('Confirm New Password')); ?></label>
								<input type="password" name="new_confirm_password" class="form-control">
							</div>
						</div>
						<div class="card-footer border-0 text-right mt-2 pr-0 pb-0">
							<button type="submit" class="btn btn-primary"><?php echo e(__('Change')); ?></button>							
						</div>
					</form>					
				</div>				
			</div>
		</div>
	</div>
	<!-- END USER PROFILE PAGE -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/user/profile/password.blade.php ENDPATH**/ ?>
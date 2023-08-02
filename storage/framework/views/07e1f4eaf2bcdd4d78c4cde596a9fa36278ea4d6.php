

<?php $__env->startSection('css'); ?>
	<!-- Telephone Input CSS -->
	<link href="<?php echo e(URL::asset('plugins/telephoneinput/telephoneinput.css')); ?>" rel="stylesheet" >
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- EDIT PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Edit Video')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-user-shield mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('user.videos')); ?>"> <?php echo e(__('Vidoe Management')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('user.videos')); ?>"> <?php echo e(__('Video List')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('user.videos.edit',$video->id)); ?>"><?php echo e(__('Edit Video')); ?></a></li>

			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<!-- Create Video PAGE -->
	<div class="row">
		<div class="col-xl-9 col-lg-8 col-sm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Edit Video')); ?></h3>
				</div>
				<div class="card-body pb-0">
					<form method="POST" action="<?php echo e(route('user.videos.update',$video->id)); ?>" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>

						<div class="row">
							<div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12"><?php echo e(__('Title')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></label>
										<input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="<?php echo e(!empty($video->title) ? $video->title  : ''); ?>" required>
										<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('title')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>									
									</div>
								</div>
							</div>
                            <div class="col-sm-6 col-md-6">
                                <div class="input-box">
                                    <div class="form-group">
                                        <label class="form-label fs-12"><?php echo e(__('Section')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></label>
										<select id="section" class="form-control <?php $__errorArgs = ['section'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="section" required>
                                            <option value="">-- Section --</option>
                                            <option <?php echo e(($video->section == 0 && old('section') == 0) ? 'selected' : ''); ?> value="0">Video</option>
                                            <option <?php echo e(($video->section == 1 && old('section') == 14) ? 'selected' : ''); ?> value="1">Download</option>
                                        </select>
                                        <?php $__errorArgs = ['section'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('section')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>									
									</div>
								</div>
							</div>
                            <div class="col-sm-6 col-md-6">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12"><?php echo e(__('Category')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></label>
                                        <select class="form-control <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="category" required>
                                            <option value="">-- Category --</option>
                                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($cate['id']); ?>"  <?php echo e($video->category == $cate['id'] ? 'selected' : ''); ?>><?php echo e($cate['name']); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('category')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>									
									</div>
								</div>
							</div>
                            <div class="col-sm-6 col-md-6" id="embadded_sec" style="display:<?php echo e(($video->section=='0') ? 'block' : 'none'); ?>;">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12"><?php echo e(__('Video URL')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></label>
										<input type="url" class="form-control <?php $__errorArgs = ['embadded_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="embadded_url" id="embadded_url" value="<?php echo e(!empty($video->embadded_url) ? $video->embadded_url  : ''); ?>" <?php echo e(($video->section=='0') ? 'required' : ''); ?>>
                                        <?php $__errorArgs = ['embadded_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('embadded_url')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>									
									</div>
								</div>
							</div>
                            <div class="col-sm-6 col-md-6" id="download_sec" style="display:<?php echo e(($video->section=='1' && old('section') != 1) ? 'block' : 'none'); ?>;">
								<div class="input-box">
									<div class="form-group">
										<label class="form-label fs-12"><?php echo e(__('Download File URL')); ?> <span class="text-muted">(<?php echo e(__('Required')); ?>)</span></label>
										<input type="url" class="form-control <?php $__errorArgs = ['file_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="file_link" id="file_link" value="<?php echo e(!empty($video->file_link) ? $video->file_link  : ''); ?>" <?php echo e(($video->section=='1') ? 'required' : ''); ?>>
                                        <?php $__errorArgs = ['file_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('file_link')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>									
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer border-0 text-right mb-2 pr-0">
							<a href="<?php echo e(route('user.videos')); ?>" class="btn btn-cancel mr-2"><?php echo e(__('Return')); ?></a>
							<button type="submit" class="btn btn-primary"><?php echo e(__('Edit')); ?></button>							
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
	<!-- CREATE VIDEO PAGE -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
	$("#section").on('change',function(){
		if($(this).val() == '1'){
			$("#embadded_sec").hide();
			$("#download_sec").show();
			// attr("required", "true");
			$("#file_link").attr("required", true);
			$("#embadded_url").removeAttr('required');
		}else{
			$("#download_sec").hide();
			$("#embadded_sec").show();
			$("#file_link").removeAttr('required');
			$("#embadded_url").attr("required", true);
		}
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/paraclete.ai/public_html/resources/views/user/video/edit.blade.php ENDPATH**/ ?>
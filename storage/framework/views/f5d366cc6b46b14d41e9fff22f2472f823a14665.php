<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7"> 
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Edit Chat Bot')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.davinci.dashboard')); ?>"> <?php echo e(__('Davinci Management')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="#"> <?php echo e(__('AI Chats Customization')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Edit Chat Bot')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>						
	<div class="row">
		<div class="col-lg-6 col-md-12 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Edit Chat Bot')); ?></h3>
				</div>
				<div class="card-body pt-5">									
					<form action="<?php echo e(route('admin.davinci.chat.update', $chat->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
          
            <div class="row">
          
              <div class="col-sm-12 col-md-3">
                <div class="chat-logo-image overflow-hidden">
                  <img class="rounded-circle" src="<?php echo e(URL::asset($chat->logo)); ?>" alt="Main Logo">
                </div>
              </div>
          
              <div class="col-sm-12 col-md-9">
                <div class="input-box">
                  <label class="form-label fs-12"><?php echo e(__('Select Avatar')); ?> </label>
                  <div class="input-group file-browser">									
                    <input type="text" class="form-control border-right-0 browse-file" placeholder="Minimum 60px by 60px image" readonly>
                    <label class="input-group-btn">
                      <span class="btn btn-primary special-btn">
                        <?php echo e(__('Browse')); ?> <input type="file" name="logo" style="display: none;">
                      </span>
                    </label>
                  </div>
                  <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-danger"><?php echo e($errors->first('logo')); ?></p>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>					
          
            </div>
			<div class="gender-select-b d-flex">
				<div class="form-check me-4">
					<input value="1" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" <?php if($chat->voice_code == '1'): ?> checked <?php endif; ?>>
					<label class="form-check-label" for="flexRadioDefault1">
						Male
					</label>
				</div>
				<div class="form-check">
					<input value="0" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" <?php if($chat->voice_code == '0'): ?> checked <?php endif; ?>>
					<label class="form-check-label" for="flexRadioDefault2">
						Female
					</label>
				</div>   
			</div>
            <div class="col-md-12 col-sm-12 mt-2 mb-4 pl-0">
              <div class="form-group">
                <label class="custom-switch">
                  <input type="checkbox" name="activate" class="custom-switch-input" <?php if($chat->status): ?> checked <?php endif; ?>>
                  <span class="custom-switch-indicator"></span>
                  <span class="custom-switch-description"><?php echo e(__('Activate Chat Bot')); ?></span>
                </label>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12">													
                <div class="input-box">								
                  <h6><?php echo e(__('Name')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
                  <div class="form-group">							    
                    <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" value="<?php echo e($chat->name); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div> 
                </div> 
              </div>
          
              <div class="col-md-12 col-sm-12">													
                <div class="input-box">								
                  <h6><?php echo e(__('Character')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
                  <div class="form-group">							    
                    <input type="text" class="form-control <?php $__errorArgs = ['character'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="character" name="character" value="<?php echo e($chat->sub_name); ?>">
                    <?php $__errorArgs = ['character'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-danger"><?php echo e($errors->first('character')); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div> 
                </div> 
              </div>
          
              <div class="col-md-12 col-sm-12">
                <div class="input-box">
                  <h6><?php echo e(__('Chat Bot Category')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
                  <select id="chats" name="category" data-placeholder="<?php echo e(__('Set AI Chat Bot Category')); ?>">
                    <option value="all" <?php if($chat->category == 'all'): ?> selected <?php endif; ?>><?php echo e(__('All')); ?></option>
                    <option value="free" <?php if($chat->category == 'free'): ?> selected <?php endif; ?>><?php echo e(__('Free Chat Bot')); ?></option>																																											
                    <option value="standard" <?php if($chat->category == 'standard'): ?> selected <?php endif; ?>> <?php echo e(__('Standard Chat Bot')); ?></option>
                    <option value="professional" <?php if($chat->category == 'professional'): ?> selected <?php endif; ?>> <?php echo e(__('Professional Chat Bot')); ?></option>
                    <option value="premium" <?php if($chat->category == 'premium'): ?> selected <?php endif; ?>> <?php echo e(__('Premuim Chat Bot')); ?></option>																																																														
                  </select>
                </div>
              </div>
          
              <div class="col-sm-12">								
                <div class="input-box">								
                  <h6 class="fs-11 mb-2 font-weight-semibold"><?php echo e(__('Introduction')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
                  <div class="form-group">
                    <div id="field-buttons"></div>							    
                    <textarea type="text" rows=5 class="form-control <?php $__errorArgs = ['introduction'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="prompt" name="introduction"><?php echo e($chat->description); ?></textarea>
                    <?php $__errorArgs = ['introduction'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-danger"><?php echo e($errors->first('introduction')); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div> 
                </div> 
              </div>
          
              <div class="col-sm-12">								
                <div class="input-box">								
                  <h6 class="fs-11 mb-2 font-weight-semibold"><?php echo e(__('Prompt')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
                  <div class="form-group">
                    <div id="field-buttons"></div>							    
                    <textarea type="text" rows=5 class="form-control <?php $__errorArgs = ['prompt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="prompt" name="prompt"><?php echo e($chat->prompt); ?></textarea>
                    <?php $__errorArgs = ['prompt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-danger"><?php echo e($errors->first('prompt')); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div> 
                </div> 
              </div>
            </div>
          
            <div class="modal-footer d-inline">
              <div class="row text-center">
                <div class="col-md-12">
                  <a href="<?php echo e(route('admin.davinci.chats')); ?>" class="btn btn-cancel mr-2"><?php echo e(__('Cancel')); ?></a>
                  <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
                </div>
              </div>
              
            </div>
          </form>			
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/paraclete.ai/public_html/resources/views/admin/davinci/chats/edit.blade.php ENDPATH**/ ?>
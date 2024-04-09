
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
		<h4 class="page-title mb-0"><?php echo e(__('Edit Custom Template')); ?></h4>
		<ol class="breadcrumb mb-2">
			<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
			<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.davinci.dashboard')); ?>"> <?php echo e(__('Davinci Management')); ?></a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Edit Custom Template')); ?></a></li>
		</ol>
	</div>
	<div class="page-rightheader">
		<a href="<?php echo e(route('admin.davinci.custom.category')); ?>" class="btn btn-primary mt-1"><?php echo e(__('Category Manager')); ?></a>
	</div>
</div>
<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>	
	<div class="row">
		<div class="col-sm-12">
			<div class="card border-0">	
				<div class="card-header">
					<h3 class="card-title"><i class="fa-solid fa-microchip-ai mr-2 text-primary"></i><?php echo e(__('Custom Template Editor')); ?></h3>
				</div>			
				<div class="card-body pt-5">
					<form class="w-100" action="<?php echo e(route('admin.davinci.custom.update', $id)); ?>" method="POST" enctype="multipart/form-data">
						<?php echo method_field('PUT'); ?>
						<?php echo csrf_field(); ?>

						<div class="row">	

							<div class="col-lg-6 col-md-12 col-sm-12">													
								<div class="input-box">								
									<h6><?php echo e(__('Template Name')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" value="<?php echo e($id->name); ?>">
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

							<div class="col-lg-6 col-md-12 col-sm-12">													
								<div class="input-box">								
									<h6><?php echo e(__('Template Description')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="description" name="description" value="<?php echo e($id->description); ?>">
										<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('description')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div> 
								</div> 
							</div>
								
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('Template Category')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="image-feature-user" name="category" class="form-select" data-placeholder="<?php echo e(__('Select template category')); ?>">
										<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($category->code); ?>"  <?php if($id->group == $category->code): ?> selected <?php endif; ?>> <?php echo e(__(ucfirst($category->name))); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>																																																														
									</select>
								</div>
							</div>	

							<div class="col-lg-6 col-md-12 col-sm-12">													
								<div class="input-box">								
									<h6><?php echo e(__('Template Icon')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You will need to get it from fontawesome.com')); ?>"></i></h6>
									<div class="form-group">							    
										<input type="text" class="form-control <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="icon" name="icon" value="<?php echo e($id->icon); ?>">
										<?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('icon')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div> 
								</div> 
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('Templates Package')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="templates-admin" name="package" class="form-select" data-placeholder="<?php echo e(__('Set Templates Package')); ?>">
										<option value="free" <?php if($id->package == 'free'): ?> selected <?php endif; ?>><?php echo e(__('Free Package')); ?></option>
										<option value="all" <?php if($id->package == 'all'): ?> selected <?php endif; ?>><?php echo e(__('Standard Package')); ?></option>
										<option value="professional" <?php if($id->package == 'professional'): ?> selected <?php endif; ?>> <?php echo e(__('Professional Package')); ?></option>																															
										<option value="premium" <?php if($id->package == 'premium'): ?> selected <?php endif; ?>> <?php echo e(__('Premium Package')); ?></option>																																																																																																									
									</select>
								</div>
							</div>						
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12 mt-2">
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="activate" class="custom-switch-input" <?php if($id->status): ?> checked <?php endif; ?>>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description"><?php echo e(__('Activate Template')); ?></span>
									</label>
								</div>
							</div>

							<div class="col-lg-6 col-md-12 col-sm-12 mt-2">
								<div class="form-group">
									<label class="custom-switch">
										<input type="checkbox" name="tone" class="custom-switch-input" <?php if($id->tone): ?> checked <?php endif; ?>>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description"><?php echo e(__('Include Tone of Voice field')); ?></span>
									</label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12 mt-4 mb-5">
								<div class="form-group">								
									<h6 class="fs-11 mb-2 font-weight-semibold"><?php echo e(__('User Input Fields')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<?php $__currentLoopData = $id->fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="field input-group mb-4">
											<input type="hidden" name="code[]" value="input-field-<?php echo e($key + 1); ?>">
											<input type="text" class="form-control" name="names[]" placeholder="<?php echo e(__('Enter Input Field Title (Required)')); ?>" id="input-field-<?php echo e($key + 1); ?>" value="<?php echo e($value['name']); ?>">
											<input type="text" class="form-control" name="placeholders[]" placeholder="<?php echo e(__('Enter Input Field Description')); ?>" value="<?php echo e($value['placeholder']); ?>">
											<select class="form-select" name="input_field[]">
												<option value="input" <?php if($value['input'] == 'input'): ?> selected <?php endif; ?>><?php echo e(__('Input Field')); ?></option>
												<option value="textarea" <?php if($value['input'] == 'textarea'): ?> selected <?php endif; ?>><?php echo e(__('Textarea Field')); ?></option>
											</select>
											<span onclick="addField(this, <?php echo e($key + 1); ?>)" class="btn btn-primary">
												<i class="fa fa-btn fa-plus"></i>
											</span>
											<span onclick="removeField(this)" class="btn btn-primary">
												<i class="fa fa-btn fa-minus"></i>
											</span>										
										</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									
									<div id="field-container"></div>
								</div>
							</div>

							<div class="col-sm-12">								
								<div class="input-box">								
									<h6 class="fs-11 mb-2 font-weight-semibold"><?php echo e(__('Custom Prompt')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">
										<div id="field-buttons"></div>							    
										<textarea type="text" rows=10 class="form-control <?php $__errorArgs = ['prompt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="prompt" name="prompt"><?php echo e($id->prompt); ?></textarea>
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
				
							<div class="col-md-12 col-sm-12 text-center mb-2">
								<a href="<?php echo e(route('admin.davinci.custom')); ?>" class="btn btn-cancel mr-2"><?php echo e(__('Return')); ?></a>
								<button type="submit" class="btn btn-primary pl-5 pr-5"><?php echo e(__('Update')); ?></button>	
							</div>	
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
	<!-- Data Tables JS -->
	<script src="<?php echo e(URL::asset('plugins/datatable/datatables.min.js')); ?>"></script>
	<script type="text/javascript">
		$(function () {

			"use strict";

		});

		let i = 2;
		function addField(plusElement, k){

			if (k == 2) {
				i = 3;
			}

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
								'<input type="text" class="form-control" name="names[]" id="input-field-' + i + '" placeholder="<?php echo e(__('Enter Input Field Title (Required)')); ?>">' +
								'<input type="text" class="form-control" placeholder="<?php echo e(__('Enter Input Field Description')); ?>" name="placeholders[]">' +								
								'<select class="form-select" name="input_field[]" >' +
									'<option value="input" selected><?php echo e(__('Input Field')); ?></option>' +
									'<option value="textarea"><?php echo e(__('Textarea Field')); ?></option>' +
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
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/admin/davinci/custom/edit.blade.php ENDPATH**/ ?>
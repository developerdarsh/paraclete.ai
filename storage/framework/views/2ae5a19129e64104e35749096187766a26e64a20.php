
<?php $__env->startSection('css'); ?>
<style>
 	.list-item {
      	display: flex;
      	align-items: center;
      	margin-bottom: 10px;
    }
    .list-item-text {
      	flex-grow: 1;
    }
    .close-button {
      	cursor: pointer;
      	color: red;
    }
	.add_templates-sec input {
		background-color: #f5f9fc;
		border-color: transparent;
		border-radius: 0.5rem;
		border-width: 1px;
		padding: 0.375rem 1rem;
		border-color: #007BFF;
	}
	.add_templates-sec .btn.btn-primary {
		padding: 0.575rem 1rem;
		min-width: 60px;
	}
	.add_templates-sec .btn.btn-primary:focus {
		box-shadow: none;
		outline: none;
	}
	.add_templates-sec .form-group .form-input {
		display: flex;
		justify-content: space-between;
		align-items: center;
		margin-bottom: 10px;
	}
	.add_templates-sec .form-group .form-input input {
		flex: 1;
		margin-right: 10px;
	}
	.add_templates-sec .list-item {
		background-color: #f2f2f2;
		border-color: rgba(0, 123, 255, 0.4);
		padding: 4px 8px;
		border-radius: 5px;
	}
	.add_templates-sec .list-item-text {
		font-size: 14px;
		color: #000000;
	}
	.output_dropdown {  
		width: 100%;
		max-height: 205px;
		height: max-content;
		overflow-y: auto;
	}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7"> 
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('New Chat Bot')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.davinci.dashboard')); ?>"> <?php echo e(__('Davinci Management')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="#"> <?php echo e(__('AI Chats Customization')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('New Chat Bot')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>						
	<div class="row">
		<div class="col-lg-8 col-md-12 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Create New Chat Bot')); ?></h3>
				</div>
				<div class="card-body pt-5">									
					<form action="<?php echo e(route('admin.davinci.chat.store')); ?>" method="POST" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>
					  
						<div class="row">
					  	  	
						  <div class="col-sm-12 col-md-12">
							<div class="input-box">
							  <label class="form-label fs-12"><?php echo e(__('Select Avatar')); ?> </label>
							  <div class="input-group file-browser" id="create-new-chat">									
								<input type="text" class="form-control border-right-0 browse-file" placeholder="<?php echo e(__('Minimum 60px by 60px image')); ?>" readonly>
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
								<input value="1" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label" for="flexRadioDefault1">
									Male
								</label>
							</div>
							<div class="form-check">
								<input value="0" class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
								<label class="form-check-label" for="flexRadioDefault2">
									Female
								</label>
							</div>   
						</div> 
					  
						<div class="col-md-12 col-sm-12 mt-2 mb-4 pl-0">
						  <div class="form-group">
							<label class="custom-switch">
							  <input type="checkbox" name="activate" class="custom-switch-input" checked>
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
unset($__errorArgs, $__bag); ?>" id="name" name="name" value="<?php echo e(old('name')); ?>">
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
unset($__errorArgs, $__bag); ?>" id="character" name="character" value="<?php echo e(old('sub_name')); ?>">
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
					  
						  <div class="col-md-6 col-sm-12">
							<div class="input-box">
							  <h6><?php echo e(__('Chat Bot Category')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
							  <select id="chats" name="category" class="form-control">
								<option value="all"><?php echo e(__('All')); ?></option>
								<option value="free" ><?php echo e(__('Free Chat Bot')); ?></option>																																											
								<option value="standard"> <?php echo e(__('Standard Chat Bot')); ?></option>
								<option value="professional"> <?php echo e(__('Professional Chat Bot')); ?></option>
								<option value="premium"> <?php echo e(__('Premium Chat Bot')); ?></option>																																																														
							  </select>
							</div>
						  </div>

						  <div class="col-md-6 col-sm-12">
							<div class="input-box">
							  <h6><?php echo e(__('Chat Group')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
							  <select id="group" name="group" class="form-control">
								<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($category->code); ?>"><?php echo e(__($category->name)); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>																																																													
							  </select>
							</div>
						  </div>

						    <div class="col-sm-12">								
								<div class="input-box add_templates-sec">								
								<h6 class="fs-11 mb-2 font-weight-semibold"><?php echo e(__('Templates')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
								<div class="form-group">
									<?php if(isset($templates)): ?>
									<select name="templates[]" multiple>
										
										<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($template->id); ?>"><?php echo e($template->name); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
									<?php endif; ?>
								</div> 
									<div class="form-group">
										<div class="form-input">
											<input type="text" name="template_name" id="template_name">
											<input type="hidden" name="dataArrayField" id="dataArrayField">
											<button type="button" id="addTemplateBtn" class="btn btn-primary">Add</button>
										</div>
									</div>
									<!-- Button to add a new template -->
									
									<div id="output" class="output_dropdown"></div>
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
unset($__errorArgs, $__bag); ?>" id="prompt" name="introduction"><?php echo e(old('introduction')); ?></textarea>
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
unset($__errorArgs, $__bag); ?>" id="prompt" name="prompt"><?php echo e(old('prompt')); ?></textarea>
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
							  <button type="submit" class="btn btn-primary"><?php echo e(__('Create')); ?></button>
							</div>
						  </div>
						  
						</div>
					</form>				
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
	$(document).ready(function() {
    var dataArray = [];
		$(document).on('click', '#addTemplateBtn', function(e) {
			e.preventDefault();
			var text = $('#template_name').val();
			dataArray.push(text);
			$('#template_name').val('');
			updateOutput();
			
			// $.ajax({
			// 	headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			// 	method: 'post',
			// 	url: '/admin/chats/chat/add-template',
			// 	data: {text : text},
			// 	processData: false,
			// 	contentType: false,
			// 	success: function (data) {
            //         console.log(data);
			// 	},
			// 	error: function(data) {
			// 		Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
			// 	}
			// })
		});	
		function updateOutput() {
			$('#output').empty();
			$('#dataArrayField').val(dataArray);
			for (var i = 0; i < dataArray.length; i++) {
				var listItem = $('<div class="list-item">' +
								'<div class="list-item-text">' + dataArray[i] + '</div>' +
								'<div class="close-button"><i class="fa-solid fa-circle-xmark"></i></div>' +
								'</div>');
				// Attach a click event to the close button
				listItem.find('.close-button').click(createCloseHandler(i));
				$('#output').append(listItem);
			}
			}
			function createCloseHandler(index) {
			return function() {
				dataArray.splice(index, 1);
				updateOutput();
			};
			}
		
	});	
	</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/admin/davinci/chats/create.blade.php ENDPATH**/ ?>
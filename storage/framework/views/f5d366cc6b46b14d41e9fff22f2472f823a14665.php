 
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
	}
	.add_templates-sec .btn.btn-primary:focus {
		box-shadow: none;
		outline: none;
	}
	.add_templates-sec .form-group {
    display: flex;
    justify-content: space-between;
  align-items: center;
    margin-bottom: 10px;
  }
  .add_templates-sec .list-item {
      background-color: rgba(0, 123, 255, 0.4);
      border-color: rgba(0, 123, 255, 0.4);
      /* box-shadow: 0 1px 3px 0 rgba(50, 50, 50, 0.2), 0 2px 1px -1px rgba(50, 50, 50, 0.12), 0 1px 1px 0 rgba(50, 50, 50, 0.14); */
      padding: 10px;
      border-radius: 5px;
  }
  .add_templates-sec .list-item-text {
    font-size: 14px;
    color: #000000;
  }
  .Templete_multiselect span.multiselect-native-select,
  .Templete_multiselect .btn-group,
  .Templete_multiselect .multiselect
  {
    width: 100%;
  }
  .Templete_multiselect .multiselect {
    background-color: #f5f9fc;
    border-color: transparent;
    border-radius: 0.5rem;
    border-width: 1px;
    padding: 0.375rem 1rem;
    border-color: #007BFF;
    text-align: left !important;
  }
  .add_templates-sec .form-group .form-input {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
  }
  .add_templates-sec .form-group .form-input input {
    flex: 1;
    margin-right: 10px;
  }
  .add_templates-sec .btn.btn-primary {
    padding: 0.575rem 1rem;
    min-width: 60px;
  }

  .Templete_multiselect .multiselect-container {
	  width: 100%;
	  max-height: 300px;
	  overflow-y: auto;
	}
.Templete_multiselect .dropdown-menu {
    top: unset;
    bottom: 100%;
}
.Templete_multiselect .dropdown-menu .form-check label {
  margin-bottom: 0px;
}

.Templete_multiselect .dropdown-menu .dropdown-item:hover, .Templete_multiselect .dropdown-menu .dropdown-item:focus {
    color: #ffffff;
}

</style>
<?php $__env->stopSection(); ?>
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
                    <option value="premium" <?php if($chat->category == 'premium'): ?> selected <?php endif; ?>> <?php echo e(__('Premium Chat Bot')); ?></option>																																																														
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
            <div class="col-sm-12">								
							<div class="input-box add_templates-sec">								
							  <h6 class="fs-11 mb-2 font-weight-semibold"><?php echo e(__('Templates')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
							  <div class="form-group Templete_multiselect">
							  	<?php if(isset($templates)): ?>
								<select id="template-list" name="templates[]"  class="multiselect-picker" multiple="multiple">
									<?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($template->id); ?>"><?php echo e($template->template); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
								<?php endif; ?>
							  </div> 
								<div class="add_templates-sec">
									<div class="form-group">
									<div class="form-input">
                                    <input type="hidden" name="dataArrayField" id="dataArrayField">
										<input type="text" name="template_name" id="template_name">
											<button type="button" id="addTemplateBtn" class="btn btn-primary">Add </button>
										</div>
									</div>
								</div>
                <!-- <div class="form-group">
                  <button type="button" id="removeTemplateBtn">Remove Selected</button>
                </div>-->
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

<?php $__env->startSection('js'); ?>
<script type="text/javascript">

  $(document).ready(function() {
     var selectedLabels = [];
    $('#template-list').multiselect({
      enableResetButton: false,
      enableFiltering: true,
      includeSelectAllOption: true,
      onChange: function(option, checked) {
        if (checked) {
            selectedLabels.push($(option).text());
            $('.multiselect-container.dropdown-menu').addClass('show');
            $('#dataArrayField').val(selectedLabels);
        } else {
            var index = selectedLabels.indexOf($(option).text());
            if (index !== -1) {
                selectedLabels.splice(index, 1);
            }
            $('#dataArrayField').val(selectedLabels);
            $('.multiselect-container.dropdown-menu').removeClass('show');
        }
      }
    });

    $('.multiselect').on('click', function () {
		  var selectedOptions = $(this).val();
		  event.stopPropagation();
		  $('.multiselect-container.dropdown-menu').toggleClass('show');
		  console.log('Selected options:', selectedOptions);
	  });

    $("#addTemplateBtn").on("click", function() {
      var templateName = $("#template_name").val();
      if (templateName.trim() !== "") {
          var newOption = $("<option>", {
              value: templateName,
              text: templateName
          });
          $("#template-list").append(newOption);
          $('#template-list').multiselect('rebuild');
          $("#template_name").val('');
      }
    });

    // Remove Selected button click event
    $("#removeTemplateBtn").on("click", function() {
      $("select[name='templates[]'] option:selected").remove();
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/paraclete.ai/public_html/resources/views/admin/davinci/chats/edit.blade.php ENDPATH**/ ?>
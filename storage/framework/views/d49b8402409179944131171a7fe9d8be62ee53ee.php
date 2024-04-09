<form action="<?php echo e(route('admin.settings.activation.destroy')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('DELETE'); ?>
    <?php echo csrf_field(); ?>
        
    <div class="modal-body">        
		<p><?php echo e(__('Are you sure you want to deactivate the script? You will not be able to access the admin panel.')); ?></p>     
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-cancel mr-2" data-bs-dismiss="modal"><?php echo e(__('Cancel')); ?></button>
        <button type="submit" class="btn btn-confirm"><?php echo e(__('Confirm')); ?></button>
    </div>
</form><?php /**PATH /home/customer/www/staging.paraclete.ai/public_html/resources/views/admin/settings/activation/delete.blade.php ENDPATH**/ ?>
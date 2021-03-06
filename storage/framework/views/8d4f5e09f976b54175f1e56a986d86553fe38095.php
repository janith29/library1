<?php $__env->startSection('content'); ?>    
    <div id="myModal" class="modal fade in" style="display: block; margin-top: 160px; margin-left: 100px;">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="fa fa-trash"></i>
                    </div>				
                    <h4 class="modal-title">Are you sure?</h4>	
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete employee named <?php echo e($diagnosis->patientname); ?> with id <?php echo e($diagnosis->id); ?>? This process cannot be undone.</p>
                </div>
                <div class="modal-footer">
                        <a href="<?php echo e(route('admin.diagnosis.index')); ?>" class="btn btn-primary">Cancel</a>
                        <form action="deletediagnosis" method="post">
                                <?php echo e(csrf_field()); ?>

                    <input type="hidden" id="id" name="id" value="<?php echo e($diagnosis->id); ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
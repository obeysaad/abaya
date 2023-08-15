<?php if(Session::has('success')): ?>
    <div class="row mr-2 ml-2">
            <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                    id="type-error"><?php echo e(Session::get('success')); ?>

            </button>
    </div>
<?php endif; ?>


<?php if(Session::has('error')): ?>
    <div class="row mr-2 ml-2" >
            <button type="text" class="btn btn-lg btn-block btn-outline-danger mb-2"
                    id="type-error"><?php echo e(Session::get('error')); ?>

            </button>
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/admin/includes/alert.blade.php ENDPATH**/ ?>
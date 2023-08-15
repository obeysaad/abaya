<?php $__env->startSection('content'); ?>


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('admin.home')); ?> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('dress.index')); ?>"> <?php echo e(__('admin.product')); ?> </a>
                            </li>
                            <li class="breadcrumb-item active">  <?php echo e(__('admin.add')); ?> <?php echo e(__('admin.product')); ?>

                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">  <?php echo e(__('admin.add')); ?> <?php echo e(__('admin.product')); ?> </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="<?php echo e(route('discount.product.store')); ?>" method="POST"
                                              enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>



                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> <?php echo e(__('admin.information')); ?> <?php echo e(__('admin.product')); ?> </h4>

                                                <input type="hidden" name="dress_id" value="<?php echo e($dress->id); ?>" />

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput2">  <?php echo e(__('admin.category')); ?> </label>
                                                        <select name="discount_id" class="select2 form-control">
                                                            <optgroup label="Please Choose Category    ">
                                                                <?php if($discounts && $discounts -> count() > 0): ?>
                                                                    <?php $__currentLoopData = $discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option
                                                                            value="<?php echo e($discount -> id); ?>"><?php echo e($discount -> name); ?></option>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </optgroup>
                                                        </select>
                                                        <?php $__errorArgs = ['maincategory_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="text-danger"> <?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>




                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> <?php echo e(__('admin.back')); ?>

                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> <?php echo e(__('admin.add')); ?>

                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/admin/dress/discount.blade.php ENDPATH**/ ?>
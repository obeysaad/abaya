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
                                        <form class="form" action="<?php echo e(route('dress.store')); ?>" method="POST"
                                              enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>

                                            <div class="form-group">
                                                <label> <?php echo e(__('admin.image')); ?>  </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>


                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> <?php echo e(__('admin.information')); ?> <?php echo e(__('admin.product')); ?> </h4>

                                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> <?php echo e(__('admin.name')); ?> <?php echo e(strtoupper($locale)); ?></label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   name="<?php echo e($locale); ?>[name]">

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  <?php echo e(__('admin.description')); ?>  <?php echo e(strtoupper($locale)); ?></label>
                                                            <input type="text" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   name="<?php echo e($locale); ?>[description]">

                                                        </div>
                                                    </div>



                                                </div>


                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">  <?php echo e(__('admin.quantity')); ?> </label>
                                                            <input type="number" value="" id="name"
                                                                   class="form-control"
                                                                   placeholder=""
                                                                   name="quantity">

                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2">  <?php echo e(__('admin.category')); ?> </label>
                                                            <select name="category_id" class="select2 form-control">
                                                                <optgroup label="Please Choose Category    ">
                                                                    <?php if($categories && $categories -> count() > 0): ?>
                                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option
                                                                                value="<?php echo e($category -> id); ?>"><?php echo e($category -> name); ?></option>
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
                                                </div>



                                            <div class="row">


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> <?php echo e(__('admin.price')); ?>  </label>
                                                        <input type="text" value="" id="name"
                                                               class="form-control"
                                                               placeholder=""
                                                               name="price">

                                                    </div>
                                                </div>

                                            </div>


                                                <input type="file"  name="images[]" multiple>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group mt-1">
                                                        <input type="checkbox"  value="1" name="active"
                                                               id="switcheryColor4"
                                                               class="switchery" data-color="success"
                                                               checked/>
                                                        <label for="switcheryColor4"
                                                               class="card-title ml-1"><?php echo e(__('admin.status')); ?> </label>

                                                        <?php $__errorArgs = ['active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="text-danger"><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/admin/dress/create.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">   <?php echo e(__('admin.product')); ?> </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"> <?php echo e(__('admin.home')); ?></a>
                                </li>
                                <li class="breadcrumb-item active">  <?php echo e(__('admin.product')); ?>

                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">  <?php echo e(__('admin.show_all')); ?>   </h4>

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
                                    <div class="card-body card-dashboard">

                                        <?php echo $__env->make('admin.includes.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <table
                                            id="table_id"
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                                <th>  <?php echo e(__('admin.name')); ?></th>
                                                <th> <?php echo e(__('admin.category')); ?></th>
                                                <th> <?php echo e(__('admin.price')); ?></th>
                                                <th> <?php echo e(__('admin.quantity')); ?></th>
                                                <th>Discount</th>

                                                <th> <?php echo e(__('admin.image')); ?></th>

                                                <th><?php echo e(__('admin.process')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php if(isset($dresss)): ?>
                                                <?php $__currentLoopData = $dresss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($dress -> name); ?></td>
                                                        <td><?php echo e($dress -> category->name); ?></td>

                                                        <td><?php echo e($dress -> price); ?></td>
                                                        <td><?php echo e($dress -> quantity); ?></td>

                                                        <td>
                                <a href="<?php echo e(route('discount.product' , $dress->id)); ?>"> <i class="fa fa-list" aria-hidden="true"></i>
                                </a>

                                                        </td>
                                                        <td> <img style="width: 150px; height: 100px;" src="<?php echo e(asset('images/'. $dress ->photo)); ?>"></td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="<?php echo e(route('dress.edit',$dress -> id)); ?>"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1"><?php echo e(__('admin.edit')); ?></a>


                                                                   <a href="<?php echo e(route('dress.destroy', $dress->id)); ?>"  class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1" data-toggle="tooltip"    onclick="event.preventDefault(); document.getElementById('delete-form-<?php echo e($dress->id); ?>').submit();">
                                                                    <?php echo e(__('admin.delete')); ?>

                                                                               </a>

                                                                                   <form id="delete-form-<?php echo e($dress->id); ?>"
                                                                                       action="<?php echo e(route('dress.destroy', $dress->id)); ?>" method="POST"
                                                                                       style="display: none;">
                                                                                       <?php echo csrf_field(); ?>


                                                                                       <?php echo method_field('DELETE'); ?>
                                                                                   </form>


                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/admin/dress/index.blade.php ENDPATH**/ ?>
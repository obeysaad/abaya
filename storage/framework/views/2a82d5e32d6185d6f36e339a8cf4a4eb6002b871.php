<?php $__env->startSection('content'); ?>
<style>
.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- eCommerce statistic -->

            <div class="row">
                <div class="container rounded bg-white mt-5 mb-5">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                                    class="rounded-circle mt-5" width="150px"
                                    src="<?php echo e(asset('assets/admin-assets/images/img_avatar.png')); ?>"><span
                                    class="font-weight-bold"><?php if(auth()->guard()->check()): ?><?php echo e(Auth::user()->name); ?><?php endif; ?></span><span
                                    class="text-black-50"><?php if(auth()->guard()->check()): ?><?php echo e(Auth::user()->email); ?><?php endif; ?> </span></div>
                        </div>
                        <div class="col-md-8 border-right">
                            <div class="p-3 py-5">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">Profile Settings</h4>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels"> Name</label><input type="text"
                                            class="form-control" name="name" value="<?php echo e($user->name); ?>" disabled="true"></div>
                                    <div class="col-md-6"><label class="labels">Email</label><input type="text"
                                            class="form-control" name="email" value="<?php echo e($user->email); ?>" disabled="true"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                                            class="form-control" name="phone" value="<?php echo e($user->profile->phone); ?> " disabled="true"></div>
                                    <div class="col-md-12"><label class="labels">Address</label><input
                                            type="text" class="form-control" name="address" value="<?php echo e($user->profile->address); ?>" disabled="true"
                                            ></div>

                                    <div class="col-md-12"><label class="labels">Password</label><input type="password"
                                            class="form-control"  value="<?php echo e($user->password); ?>" name="password" disabled="true"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6"><label class="labels">Nationality</label><input type="text"
                                            class="form-control"  name="nationality" value="<?php echo e($user->profile->nationality); ?>" disabled="true"></div>
                                    <div class="col-md-6"><label class="labels">State</label><input type="text"
                                            class="form-control" value="<?php echo e($user->profile->state); ?>" name="state"  disabled="true"></div>
                                </div>
                                <div class="mt-5 text-center">


                            <button type="button" class="mr-1 mb-1 btn btn-outline-warning btn-min-width" data-toggle="modal"
                            data-target="#inlineForm">
                            <i class="fas fa-edit"></i> Edit
                            </button>
                            <!-- Modal -->
                            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                            aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <label class="modal-title text-text-bold-600" id="myModalLabel1">Whatsapp</label>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="<?php echo e(route('profile.update')); ?>" method="POST" >
                                    <?php echo csrf_field(); ?>

                                    <div class="modal-body">

                                        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>" />

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profile Settings</h4>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6"><label class="labels"> Name</label><input type="text"
                                                    class="form-control" name="name" value="<?php echo e($user->name); ?>" ></div>
                                            <div class="col-md-6"><label class="labels">Email</label><input type="text"
                                                    class="form-control" name="email" value="<?php echo e($user->email); ?>" ></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text"
                                                    class="form-control" name="phone" value="<?php echo e($user->profile->phone); ?> "></div>
                                            <div class="col-md-12"><label class="labels">Address</label><input
                                                    type="text" class="form-control" name="address" value="<?php echo e($user->profile->address); ?>"
                                                    ></div>

                                            <div class="col-md-12"><label class="labels">Password</label><input type="password"
                                                    class="form-control"  value="<?php echo e($user->password); ?>" name="password" ></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"><label class="labels">Nationality</label><input type="text"
                                                    class="form-control"  name="nationality" value="<?php echo e($user->profile->nationality); ?>" ></div>
                                            <div class="col-md-6"><label class="labels">State</label><input type="text"
                                                    class="form-control" value="<?php echo e($user->profile->state); ?>" name="state" ></div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                      <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal"
                                      value="close">
                                      <input type="submit" class="btn btn-outline-primary btn-lg" value="Update">
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--/ Basic Horizontal Timeline -->
</div>
</div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/admin/pages/profile.blade.php ENDPATH**/ ?>
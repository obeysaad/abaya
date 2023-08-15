
<nav
    class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">



    <div class="navbar-wrapper">

        <div class="navbar-header">

            <ul class="flex-row nav navbar-nav">
                <li class="mr-auto nav-item mobile-menu d-md-none"><a
                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                            class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item">
                    <a class="navbar-brand" href="index.html">
                        <img class="brand-logo" alt="modern admin logo"
                             src="<?php echo e(asset('login-assets/images/fashion.avif')); ?>" width="400px">
                        <h3 class="brand-text"></h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                            class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>


        <div class="navbar-container content">

            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="float-left mr-auto nav navbar-nav">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                class="ficon ft-maximize"></i></a></li>
                </ul>
                <ul class="float-right nav navbar-nav">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="mr-1"><?php echo e(__('admin.hello')); ?>

                  <span
                      class="user-name text-bold-700">  <?php if(auth()->guard()->check()): ?><?php echo e(Auth::user()->name); ?><?php endif; ?></span>
                </span>
                            <span class="avatar avatar-online">
                  <img  style="height: 35px;" src="<?php echo e(asset('assets/admin-assets/images/img_avatar.png')); ?>" alt="avatar"><i></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href=""><i
                                    class="ft-user"></i>  <?php echo e(__('admin.edit_profile')); ?> </a>
                            <div class="dropdown-divider"></div>


                        <form action="<?php echo e(route('logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="submit" class="dropdown-item" value="<?php echo e(__('admin.logout')); ?>">
                                                    </form>
                        </div>
                    </li>

                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a  class="dropdown-item" rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                    <?php echo e($properties['native']); ?>

                                </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            </il>


                </ul>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/admin/includes/header.blade.php ENDPATH**/ ?>
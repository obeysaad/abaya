<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Abaya Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Include All CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.css" integrity="sha512-xXQQj99PFpHikerkvc6HrA+dFLC14dMyBh0eL8fCan9h3n8Uhxvq5Os8ysEvn3oTLWJTte9kl5FFEftf2KfyHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <?php if( Session::get('locale') === 'ar'): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/bootstrap-rtl.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/style-rtl.css')); ?>"/>


        <?php else: ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/bootstrap.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/style.css')); ?>"/>

        <?php endif; ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/animate.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/font-awesome.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/strok_gap_icon.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/settings.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/owl.carousel.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/preset.css')); ?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/front-assets/css/responsive.css')); ?>"/>
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="<?php echo e(asset('assets/front-assets/images/logo_dress.png')); ?>">
        <!-- Favicon Icon -->

    </head>
    <body>
        <div class="preloader">
            <div class="la-ball-scale-multiple la-2x">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <header class="" style="background-color: white;">
            <div class="logo3">
                <a href="#"><img src="<?php echo e(asset('assets/front-assets/images/logo_dress.png')); ?>" width="60" height="60" alt=""/></a>
            </div>
            <div class="navMenu3 poppins">
                <div class="mobileMenu3">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul>
                    <li class="has-menu-items"><a href="<?php echo e(route('home')); ?>"><?php echo e(__('admin.home')); ?></a>

                    </li>
                    <li class="has-menu-items"><a href="#"><?php echo e(__('message.shop')); ?></a>
                        <ul class="sub-menu">
                                 <?php $__currentLoopData = App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <li><a href="<?php echo e(route('shop' , $category->id)); ?>"><?php echo e($category->name); ?></a></li>

                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </li>

                    <li><a href="<?php echo e(route('about')); ?>"><?php echo e(__('message.about')); ?></a></li>
                    <li><a href="<?php echo e(route('contact')); ?>"><?php echo e(__('message.contact')); ?></a></li>
                </ul>
            </div>
            <div class="shopMenus poppins">

                <ul class="shopsMenu">
                    <li><a href="#" data-toggle="collapse" data-target="#acc">EN<i class="afterIcon fa fa-angle-down"></i></a>
                        <ul class="sub-menu collapse" id="acc">

                            <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="">
                                <a rel="alternate" class="p-2" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                    <?php echo e($properties['native']); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li><a href="#"><i class="beforeIcon icon-ShoppingCart"></i>5 </a></li>

                </ul>
            </div>


</ul>
</div>

            <div class="clearfix"></div>
        </header>


           <?php echo $__env->yieldContent('content'); ?>


        <footer class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 col-xs-12 noPaddingRight">
                        <aside class="widget text-center">
                            <h3 class="widgetTitle"><?php echo e(__('message.quick')); ?></h3>
                            <ul class="">
                                <li><a href="<?php echo e(route('about')); ?>"><?php echo e(__('message.about')); ?></a></li>
                                <li><a href="<?php echo e(route('shop')); ?>"><?php echo e(__('message.shop')); ?></a></li>
                                <li><a href="https://wa.me/97544420179"><?php echo e(__('message.support')); ?></a></li>
                                <li><a href="<?php echo e(route('contact')); ?>"><?php echo e(__('message.contact')); ?></a></li>
                                <li><a href="https://www.google.com/maps/place/Mai+Tower+-+Al+Qusais+-+Al+Nahda+1+-+Dubai/@25.287959,55.3626356,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5f5c641d5a9e2f:0x9e2a1fef589bd3b0!8m2!3d25.2879542!4d55.3652105!16s%2Fg%2F1hjh3xv8x?entry=ttu"><?php echo e(__('message.map')); ?></a></li>
                            </ul>
                            
                            <div class="clearfix"></div>
                        </aside>
                    </div>
                    <div class="clearfix hidden-lg hidden-md hidden-sm"></div>
                    <div class="col-lg-6 col-sm-5 col-xs-12">
                        <aside class="widget">
                            <div class="footerLogo text-center">
                                <a href="index.html"><img src="<?php echo e(asset('assets/front-assets/images/footerLogo.png')); ?>" alt=""/></a>
                            </div>
                            <div class="footerSocial text-center">
                                <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i>
                                </a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-instagram"></i>
                                </a><a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <div class="footerPayments text-center">
                                <a href="#"><i class="fa fa-cc-visa"></i></a><a href="#"><i class="fa fa-cc-discover"></i>
                                </a><a href="#"><i class="fa fa-cc-paypal"></i></a><a href="#"><i class="fa fa-cc-mastercard"></i>
                                </a><a href="#"><i class="fa fa-cc-amex"></i></a>
                            </div>
                            <div class="copyRight text-center"><?php echo e(__('message.copyright')); ?> &COPY; <?php echo e(__('message.name')); ?></div>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-xs-12">
                        <aside class="widget">
                            <h3 class="widgetTitle"><?php echo e(__('message.location')); ?></h3>
                            <div class="mapImgs">
                                <img src="<?php echo e(asset('assets/front-assets/images/map.png')); ?>" alt=""/>
                            </div>
                            <div class="address">
                                Dubia , Al Nahda , 103 Street , Near Metro Station
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Include All JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.1.0/swiper-bundle.min.js" integrity="sha512-4Ooh3fl4STrmn95ZbS/J6l8csp/FvSKPaeDAH/IaPQGJIx9lmpuxXZTCYKR2W5+Bt7i74exPvAT2PsWnac+sow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/front-assets/js/jquery.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/front-assets/js/bootstrap.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/front-assets/js/mixer.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/front-assets/js/wow.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/front-assets/js/jquery.appear.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/front-assets/js/owl.carousel.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/front-assets/js/jquery.themepunch.tools.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/front-assets/js/jquery.themepunch.revolution.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/front-assets/js/wow.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets/front-assets/js/theme.js')); ?>"></script>

        <script>
            let swiper = new Swiper(".swiper", {
                slidesPerView: 4,
                speed: 400,
                pagination: {
                    el: ".swiper-pagination",
                  },
                  autoplay: {
                    delay: 2000,
                  },
                  fadeEffect: {
                    crossFade: true
                  },
              });
        </script>


    </body>
</html>
<?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/layouts/front.blade.php ENDPATH**/ ?>
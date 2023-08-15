<?php $__env->startSection('content'); ?>
<style>
    /* Hide element on extra small devices */
    @media (max-width: 576px) {
      .element {
        min-height: 120px;
      }

      .slid {
        max-height: 200px;
      }

      .prapgraph{
        display:none;
      }
    }
  </style>

  <section class="banner3 slid" >
    <div class="revSlider3" >
        <ul>
            <li data-transition="cube" data-slotamount="7" data-masterspeed="1000" >
                <img src="https://images.pexels.com/photos/5490979/pexels-photo-5490979.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                <div class="tp-caption sfb"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="-175"
                     data-speed="1000"
                     data-start="800"
                     data-easing="Power4.easeOut">
                    <h3 class="specialHead playfair" style="color: rgb(218, 145, 21)"><?php echo e(__('message.arrival')); ?></h3>
                </div>
                <div class="tp-caption sfb"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="0"
                     data-speed="1400"
                     data-start="1200"
                     data-easing="Power4.easeOut">
                    <h1 class="bigHead poppins" style="color: white;">2023</h1>
                </div>
                <div class="tp-caption sfb"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="152"
                     data-speed="1800"
                     data-start="1600"
                     data-easing="Power4.easeOut">
                     <h4 class="smHead poppins"><?php echo e(__('message.fresh')); ?></h4>
                    </div>
            </li>
            <li data-transition="curtain-1" data-slotamount="7" data-masterspeed="1000" >
                <img src="https://images.pexels.com/photos/5490963/pexels-photo-5490963.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                <div class="tp-caption sfr"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="-175"
                     data-speed="1000"
                     data-start="800"
                     data-easing="Power4.easeOut">
                     <h3 class="specialHead playfair" style="color: rgb(218, 145, 21)"><?php echo e(__('message.arrival')); ?></h3>
                    </div>
                <div class="tp-caption sfr"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="0"
                     data-speed="1400"
                     data-start="1200"
                     data-easing="Power4.easeOut">
                    <h1 class="bigHead poppins" style="color : white">2023</h1>
                </div>
                <div class="tp-caption sfr"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="152"
                     data-speed="1800"
                     data-start="1600"
                     data-easing="Power4.easeOut">
                    <h4 class="smHead poppins"><?php echo e(__('message.fresh')); ?></h4>
                </div>
            </li>
            <li data-transition="slotzoom-vertical" data-slotamount="7" data-masterspeed="1000" >
                <img src="https://images.pexels.com/photos/346748/pexels-photo-346748.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt=""/>
                <div class="tp-caption sfl"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="-175"
                     data-speed="1000"
                     data-start="800"
                     data-easing="Power4.easeOut">
                     <h3 class="specialHead playfair" style="color: rgb(218, 145, 21)"><?php echo e(__('message.arrival')); ?></h3>
                    </div>
                <div class="tp-caption sfl"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="0"
                     data-speed="1400"
                     data-start="1200"
                     data-easing="Power4.easeOut">
                    <h1 class="bigHead poppins" style="color:white">2023</h1>
                </div>
                <div class="tp-caption sfl"
                     data-x="left"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="152"
                     data-speed="1800"
                     data-start="1600"
                     data-easing="Power4.easeOut">
                     <h4 class="smHead poppins"><?php echo e(__('message.fresh')); ?></h4>
                    </div>
            </li>
        </ul>
    </div>
</section>





    <section class="comonSection">
        <div class="container">
            <div class="row swiper">
                <div class="swiper-wrapper">

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm-4 swiper-slide c" style="padding-bottom:10px;">

                       <a href="<?php echo e(route('shop' , $category->id)); ?>">
                        <div class="singleCats">
                            <img src="<?php echo e(asset('images/' . $category->photo)); ?>" alt="Men's Collenctions"
                                style="max-height:200px; " class="element"  />
                            <div class="catContent poppins">
                                <a href="<?php echo e(route('shop' , $category->id)); ?>">
                                <span class="prapgraph">
                                    <?php echo e($category->name); ?>


                                </span>
                                </a>
                            </div>
                            <div class="hoverEffect"></div>
                        </div>
                    </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="swiper-pagination"></div>

            </div>


        </div>
    </section>
    


    <section class="comonSection noPadding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="callToActions text-center poppins wow fadeInUp" data-wow-duration="700ms"
                        data-wow-delay="300ms" style="height:300px">

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="comonSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sectionTitle text-center">
                        <h2 class="poppins"><?php echo e(__('message.arrival')); ?></h2>
                        <div class="titleBars"></div>
                        <p>
                        </p>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-lg-12">
                    <div class="volta_tab1">
                        <ul class="clearfix poppins" role="tablist">

                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li role="presentation">
                        <a href="#tab_0<?php echo e($category->id); ?>" aria-controls="tab_0<?php echo e($category->id); ?>"
                            role="tab" data-toggle="tab"><?php echo e($category->name); ?></a>
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
                <!-- Tab panes -->
                        <div class="tab-content">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div role="tabpanel" class="tab-pane fade in active" id="tab_0<?php echo e($category->id); ?>">
                                <div class="">

                                    <?php $__currentLoopData = $category->dresss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="singleProduct01 text-center">
                                            <div class="productThumb01">
                                                <img src="<?php echo e(asset('images/' . $dress->photo)); ?>" alt=""/>
                                                <div class="productHover01">
                                                    <form action="<?php echo e(route('cart.store')); ?>" method="POST" enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="quantity" value="1" >


                                                    <input type="hidden" value="<?php echo e($dress->id); ?>" name="id">
                                                    <input type="hidden" value="<?php echo e($dress->name); ?>" name="name">
                                                    <input type="hidden" value="<?php echo e($dress->price); ?>" name="price">
                                                    <input type="hidden" value="<?php echo e($dress->photo); ?>"  name="photo">
                                                    <div>
                                                    <button class="vol_btn vol_btn_bg"><?php echo e(__('message.add_cart')); ?></button>
                                                    </div>
                                                </form>                                                </div>
                                            </div>
                                            <div class="productDesc01">
                                                <h5><a href="<?php echo e(route('detail' , $dress->id)); ?>" class="poppins"><?php echo e($dress->name); ?></a></h5>
                                                <p class="cats"><a href="shop_single.html"><?php echo e($dress->category->name); ?></a></p>
                                                <p class="prices">

                                                    <?php if($dress->product_discount): ?>
                                                    <del>
                                                        <?php echo e($dress->price); ?>

                                                    </del>
                                                      <?php echo e($dress->price * ($dress->product_discount->discount->discount_percent / 100)); ?>

                                                    <?php else: ?>
                                                     <?php echo e($dress->price); ?>

                                                    <?php endif; ?>



                                                    AED</p>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </div>
                            </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row martinTop10">
                <div class="col-lg-12 text-center">
                    <a href="<?php echo e(route('shop')); ?>" class="vol_btn"><?php echo e(__('admin.all_Product')); ?><i class="flaticon-arrows-3"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/front/pages/home.blade.php ENDPATH**/ ?>
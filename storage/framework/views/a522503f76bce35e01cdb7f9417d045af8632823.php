<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
<div class="main-menu-content">

    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class="nav-item "><a href="<?php echo e(route('dashboard')); ?>"><i class="fa-solid fa-house"></i><span
                    class="menu-title" data-i18n="nav.add_on_drag_drop.main"><?php echo e(__('admin.home')); ?> </span></a>
        </li>



        <li class="nav-item   ">
            <a href=""><i class="fas fa-layer-group"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> <?php echo e(__('admin.category')); ?> </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2"><?php echo e(App\Models\Category::count()); ?></span>
            </a>
            <ul class="menu-content">
                <li class=""><a class="menu-item" href="<?php echo e(route('category.index')); ?>"
                                      data-i18n="nav.dash.ecommerce"> <?php echo e(__('admin.show_all')); ?>  </a>
                </li>
                <li><a class="menu-item" href="<?php echo e(route('category.create')); ?>" data-i18n="nav.dash.crypto">
                         <?php echo e(__('admin.add')); ?> <?php echo e(__('admin.category')); ?> </a>
                </li>
            </ul>
        </li>


        <li class="nav-item   ">
            <a href=""><i class="fas fa-tshirt"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> <?php echo e(__('admin.product')); ?> </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2"><?php echo e(App\Models\Dress::count()); ?></span>
            </a>
            <ul class="menu-content">
                <li class=""><a class="menu-item" href="<?php echo e(route('dress.index')); ?>"
                                      data-i18n="nav.dash.ecommerce"> <?php echo e(__('admin.show_all')); ?>  </a>
                </li>
                <li><a class="menu-item" href="<?php echo e(route('dress.create')); ?>" data-i18n="nav.dash.crypto">
                    <?php echo e(__('admin.add')); ?> <?php echo e(__('admin.product')); ?>

                          </a>
                </li>
            </ul>
        </li>



        <li class="nav-item   ">
            <a href=""><i class="far fa-clone"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> <?php echo e(__('admin.type')); ?> </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2"><?php echo e(App\Models\Type::count()); ?></span>
            </a>
            <ul class="menu-content">
                <li class=""><a class="menu-item" href="<?php echo e(route('type.index')); ?>"
                                      data-i18n="nav.dash.ecommerce"> <?php echo e(__('admin.show_all')); ?>  </a>
                </li>
                <li><a class="menu-item" href="<?php echo e(route('type.create')); ?>" data-i18n="nav.dash.crypto">
                    <?php echo e(__('admin.add')); ?> <?php echo e(__('admin.type')); ?> </a>
                </li>
            </ul>
        </li>





        <li class="nav-item ">
            <a href="<?php echo e(route('order.index')); ?>"><i class="fas fa-shopping-bag"></i>
                <span class="menu-title" data-i18n="nav.dash.main"> <?php echo e(__('admin.order')); ?> </span>
                <span
                    class="badge badge badge-info badge-pill float-right mr-2"><?php echo e(App\Models\Order::count()); ?></span>
            </a>
</li>

<li class=" nav-item"><a href="#"><i class="la la-terminal"></i><span class="menu-title" data-i18n="nav.form_elements.main">Discount</span></a>
    <ul class="menu-content">
      <li>
        <a class="menu-item" href="<?php echo e(route('discount.index')); ?>" data-i18n="nav.form_elements.form_inputs">Discount</a>
      </li>

      <li>
        <a class="menu-item" href="<?php echo e(route('coupon.index')); ?>" data-i18n="nav.form_elements.form_inputs">Coupon</a>
      </li>

    </ul>
  </li>



<li class=" nav-item"><a href="#"><i class="fa fa-pie-chart" aria-hidden="true"></i><span class="menu-title" data-i18n="nav.form_elements.main">Chart</span></a>
    <ul class="menu-content">
      <li>
        <a class="menu-item" href="<?php echo e(route('chart')); ?>" data-i18n="nav.form_elements.form_inputs">Order</a>
      </li>


    </ul>
  </li>

  <li class="nav-item "><a href="<?php echo e(route('social')); ?>"><i class="fas fa-share-alt"></i><span
    class="menu-title" data-i18n="nav.add_on_drag_drop.main"><?php echo e(__('admin')); ?> </span></a>
</li>



  <li class=" nav-item"><a href="#"><i class="fa fa-cog"></i><span class="menu-title" data-i18n="nav.form_elements.main">Setting</span></a>
    <ul class="menu-content">
      <li>
        <a class="menu-item" href="#" data-i18n="nav.form_elements.form_inputs">Profile</a>
      </li>

      <li>
        <a class="menu-item" href="#" data-i18n="nav.form_elements.form_inputs">Change Password</a>
      </li>


      <li>
        <a class="menu-item" href="<?php echo e(route('use')); ?>" data-i18n="nav.form_elements.form_inputs">How to Use</a>
      </li>

    </ul>
  </li>



    </ul>
</div>
</div>
<?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>
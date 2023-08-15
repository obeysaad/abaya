<?php $__env->startSection('content'); ?>




<section class="comonSection cartSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="cartHeadings"><?php echo e(__('message.cart')); ?></h3>
            </div>
            <div class="col-lg-12 woocommerce">
                <div>
                    <table class="shop_table shop_table_responsive cart cart_table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail"><?php echo e(__('admin.image')); ?></th>
                                <th class="product-name"><?php echo e(__('admin.product')); ?></th>
                                <th class="product-price"><?php echo e(__('admin.price')); ?></th>
                                <th class="product-quantity"><?php echo e(__('admin.quantity')); ?></th>
                                <th class="product-subtotal"><?php echo e(__('message.total')); ?></th>
                                <th class="product-remove"><?php echo e(__('admin.delete')); ?></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr class="cart_item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="700ms">
                                <td class="product-thumbnail">
                                    <a href=""><img alt="" src="<?php echo e(asset('images/' . $item->attributes->photo)); ?>"></a>
                                </td>
                                <td class="product-name">
                                    <a class="itemtitle" href="#"><?php echo e($item->name); ?></a>
                                </td>
                                <td class="product-price" data-title="Price">
                                    <span class="amount">$<?php echo e($item->price); ?></span>
                                </td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <button class="qtyBtn btnMinus">-</button>
                                        <input type="text" name="qty" value="<?php echo e($item->quantity); ?>" title="Qty" class="input-text qty text carqty">
                                        <button class="qtyBtn btnPlus">+</button>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Total">
                                    <span class="amount">$<?php echo e(\Cart::get($item->id)->getPriceSum()); ?></span>
                                </td>
                                <td class="product-remove">


                        <form action="<?php echo e(route('cart.remove')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($item->id); ?>" name="id">
                            <button style="  background-color: Transparent;
                            background-repeat:no-repeat;
                            border: none;
                            cursor:pointer;
                            overflow: hidden;">
                            <a title="Delete"> <span class="close">&#10005;</span></a></button>
                        </form>

                                </td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-7 col-xs-12 pull-right noPaddingLeft">
                <div class="cart_totals calculated_shipping">
                    <h2><?php echo e(__('message.cart')); ?> <?php echo e(__('message.total')); ?></h2>
                    <table class="shop_table shop_table_responsive">
                        <tbody>
                            <tr class="order-total">
                                <th><?php echo e(__('message.total')); ?> :</th>
                                <td data-title="Total"><strong><span class="amount">$<?php echo e(Cart::getTotal()); ?></span></strong> </td>
                            </tr>
                        </tbody>
                    </table>

                    <a class="vol_btn vol_btn_bg" href="<?php echo e(route('checkout')); ?>"><?php echo e(__('message.checkout')); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/front/pages/cart.blade.php ENDPATH**/ ?>
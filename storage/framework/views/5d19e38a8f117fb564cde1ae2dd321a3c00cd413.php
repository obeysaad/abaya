<?php $__env->startSection('content'); ?>

<section class="comonSection">
    <div class="container">
        <div class="row">

            

             <form method="POST" action="<?php echo e(route('order.store')); ?>" >
                <?php echo csrf_field(); ?>
            <div class="col-sm-6 checkoutForms">
                <h4 class="comonHeading"><?php echo e(__('message.billing')); ?></h4>

                <div class="col-lg-6 noPadding">
                    <label class="chek_label"><?php echo e(__('message.first_name')); ?> *</label>
                    <input type="text" name="first_name"/>
                </div>
                <div class="col-lg-6 noPadding">
                    <label class="chek_label"><?php echo e(__('message.last_name')); ?> *</label>
                    <input type="text" name="last_name"/>
                </div>

                <div class="col-lg-12 noPadding">
                    <label class="chek_label"><?php echo e(__('message.address')); ?> 1 *</label>
                    <input type="text" name="address" placeholder=""/>
                </div>
                <div class="col-lg-12 noPadding">
                    <label class="chek_label"><?php echo e(__('message.ciy')); ?> *</label>
                    <input type="text" name="city"/>
                </div>
                <div class="col-lg-6 noPadding ">
                    <label class="chek_label"><?php echo e(__('message.street')); ?> *</label>
                    <input type="text" name="street"/>
                </div>
                <div class="col-lg-6 noPadding">
                    <label class="chek_label"><?php echo e(__('message.zip_code')); ?> / zip *</label>
                    <input type="text" name="zip_code"/>
                </div>
                <div class="col-lg-12 noPadding">
                    <label class="chek_label"><?php echo e(__('admin.email')); ?> *</label>
                    <input type="text" name="email"/>
                </div>
                <div class="col-lg-12 noPadding">
                    <label class="chek_label"><?php echo e(__('admin.phone')); ?> *</label>
                    <input type="text" name="phone"/>
                </div>

                <input type="hidden" name="total" value="<?php echo e(Cart::getTotal()); ?>" />

                <div class="text-center">
                    <button type="submit" class="vol_btn vol_btn_bg" ><?php echo e(__('admin.order')); ?><i class="flaticon-arrows-3"></i></button>
                </div>

            </div>
             </form>


            <div class="col-sm-6">
                <h3 class="comonHeading"><?php echo e(__('message.your_order')); ?></h3>
                <div id="order_review" class="woocommerce-checkout-review-order">
                    <div class="orderbg">
                        <table class="shop_table woocommerce-checkout-review-order-table">
                            <thead>
                                <tr>
                                    <th class="product-name"><?php echo e(__('admin.product')); ?></th>
                                    <th class="product-total"><?php echo e(__('message.total')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr class="cart_item">
                                    <td class="product-name">
                                        <?php echo e($item->name); ?> - <strong class="product-quantity">1</strong>													</td>
                                    <td class="product-total">
                                        <span class="amount"><?php echo e($item->pricw); ?> AED</span>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th><?php echo e(__('message.shipping')); ?></th>
                                    <td><span class="amount"><?php echo e(Cart::getTotal()); ?> AED</span></td>
                                </tr>

                                <tr class="order-total">
                                    <th><?php echo e(__('message.total_order')); ?></th>
                                    <td><span class="amount"><?php echo e(Cart::getTotal()); ?> AED</span> </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="orderbg mar30">
                        <div id="payment" class="woocommerce-checkout-payment">
                            <ul class="wc_payment_methods payment_methods methods">
                                <li class="wc_payment_method payment_method_bacs">
                                    <input type="radio" id="payment_method_bacs" class="input-radio" name="payment_method" value="bacs" checked="checked">
                                    <label for="payment_method_bacs"><?php echo e(__('message.bank')); ?></label>
                                    <div style="" class="payment_box payment_method_bacs visibales">
                                        <p>
                                            <?php echo e(__('message.cash')); ?>

                                        </p>
                                    </div>
                                </li>
                                <li class="wc_payment_method payment_method_paypal">
                                    <input type="radio" id="payment_method_paypal" class="input-radio" name="payment_method" value="paypal">
                                    <label for="payment_method_paypal">  <img src="<?php echo e(asset('assets/front-assets/images/payment.jpg')); ?>" alt="PayPal"></label>
                                    <div class="payment_box payment_method_paypal" style="display: none;">
                                        <p>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mojta\OneDrive\Desktop\project\abaya v2\resources\views/front/pages/checkout.blade.php ENDPATH**/ ?>
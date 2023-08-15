@extends('layouts.front')

@section('content')




<section class="comonSection cartSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="cartHeadings">{{ __('message.cart') }}</h3>
            </div>
            <div class="col-lg-12 woocommerce">
                <div>
                    <table class="shop_table shop_table_responsive cart cart_table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">{{__('admin.image')}}</th>
                                <th class="product-name">{{ __('admin.product') }}</th>
                                <th class="product-price">{{ __('admin.price') }}</th>
                                <th class="product-quantity">{{ __('admin.quantity') }}</th>
                                <th class="product-subtotal">{{ __('message.total') }}</th>
                                <th class="product-remove">{{ __('admin.delete') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($cartItems as $item)

                            <tr class="cart_item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="700ms">
                                <td class="product-thumbnail">
                                    <a href=""><img alt="" src="{{  asset('images/' . $item->attributes->photo) }}"></a>
                                </td>
                                <td class="product-name">
                                    <a class="itemtitle" href="#">{{ $item->name }}</a>
                                </td>
                                <td class="product-price" data-title="Price">
                                    <span class="amount">${{ $item->price }}</span>
                                </td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <button class="qtyBtn btnMinus">-</button>
                                        <input type="text" name="qty" value="{{ $item->quantity }}" title="Qty" class="input-text qty text carqty">
                                        <button class="qtyBtn btnPlus">+</button>
                                    </div>
                                </td>
                                <td class="product-subtotal" data-title="Total">
                                    <span class="amount">${{ \Cart::get($item->id)->getPriceSum() }}</span>
                                </td>
                                <td class="product-remove">


                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button style="  background-color: Transparent;
                            background-repeat:no-repeat;
                            border: none;
                            cursor:pointer;
                            overflow: hidden;">
                            <a title="Delete"> <span class="close">&#10005;</span></a></button>
                        </form>

                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-7 col-xs-12 pull-right noPaddingLeft">
                <div class="cart_totals calculated_shipping">
                    <h2>{{ __('message.cart') }} {{ __('message.total') }}</h2>
                    <table class="shop_table shop_table_responsive">
                        <tbody>
                            <tr class="order-total">
                                <th>{{ __('message.total') }} :</th>
                                <td data-title="Total"><strong><span class="amount">${{ Cart::getTotal() }}</span></strong> </td>
                            </tr>
                        </tbody>
                    </table>

                    <a class="vol_btn vol_btn_bg" href="{{ route('checkout') }}">{{ __('message.checkout') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection





<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/***********************************************  Front Route  ******************************************************/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'home'])->name('home');
        Route::get('/about', [App\Http\Controllers\Front\HomeController::class, 'about'])->name('about');
        Route::get('/contact', [App\Http\Controllers\Front\HomeController::class, 'contact'])->name('contact');
        Route::get('/checkout', [App\Http\Controllers\Front\HomeController::class, 'checkout'])->name('checkout');
        Route::get('/shop/{id?}', [App\Http\Controllers\Front\HomeController::class, 'shop'])->name('shop');
        Route::get('/detail/{id}', [App\Http\Controllers\Front\HomeController::class, 'detail'])->name('detail');
        Route::get('thank', [App\Http\Controllers\Front\HomeController::class, 'thank'])->name('thank');



/***********************************************  Cart Route  ******************************************************/

        Route::get('cartlist', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
        Route::post('cartlist', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
        Route::post('update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
        Route::post('remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
        Route::post('clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');





        /***********************************************  Admin Route  ******************************************************/
        Route::group(['middleware' => 'auth'], function () {


            Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);
            Route::resource('/dress', App\Http\Controllers\Admin\DressController::class);
            Route::resource('/type', App\Http\Controllers\Admin\TypeController::class);
            Route::resource('/order', App\Http\Controllers\Admin\OrderController::class);
            Route::get('/order-print/{id}', [App\Http\Controllers\Admin\OrderController::class, 'print'])->name('print');
            Route::resource('/discount', App\Http\Controllers\Admin\DiscountController::class);
            Route::get('discount-product/{id}', [App\Http\Controllers\Admin\DiscountController::class, 'discountProduct'])->name('discount.product');
            Route::post('discount-product', [App\Http\Controllers\Admin\DiscountController::class, 'discountProductStore'])->name('discount.product.store');
            Route::resource('/coupon', App\Http\Controllers\Admin\CouponController::class);
            Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
            Route::get('/use', [App\Http\Controllers\Admin\DashboardController::class, 'Use'])->name('use');
            Route::get('/chart', [App\Http\Controllers\Admin\DashboardController::class, 'chart'])->name('chart');
            Route::get('/social', [App\Http\Controllers\Admin\DashboardController::class, 'social'])->name('social');
            Route::post('/social' , [App\Http\Controllers\Admin\DashboardController::class, 'socialUpdate'])->name('social.update');
            Route::get('/profile', [App\Http\Controllers\Admin\UserController::class, 'profile'])->name('profile');
            Route::post('/profile', [App\Http\Controllers\Admin\UserController::class, 'profileUpdate'])->name('profile.update');
        });
    }
);



Auth::routes();
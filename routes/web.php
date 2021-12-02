<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\TestOrderController;
use App\Http\Livewire\HomeComponent;
use App\Http\Controllers\ChartJsController;
use App\Http\Livewire\Admin;
use App\Http\Livewire\User;
use App\Http\Livewire\Shop;

use App\Mail\OrderMail;

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
Route::get('chart-js', [ChartJsController::class, 'index']);
Route::get('/', HomeComponent::class)->name('user_home');
Route::get('redirects', 'App\Http\Controllers\AuthRedirect@index')->middleware('verified');

//Shop Routes
Route::get('/search/{sdata}', Shop\SearchResult::class)->name('shop.searchresult');
Route::get('/products', Shop\DisplayProducts::class)->name('shop.displayproducts');
Route::get('/category/{slug}', Shop\SearchCategory::class)->name('shop.searchcategory');
Route::get('/product/{slug}', Shop\ProductDetails::class)->name('product.details');
Route::get('/categories', Shop\CategoryPage::class)->name('categorylist');
Route::get('/cart', Shop\ShoppingCart::class)->name('cart');
Route::get('/checkout', Shop\Checkout::class)->name('checkout');
Route::get('/checkout/success', Shop\CheckoutSuccess::class)->name('checkout.success');

Route::name('user.')->prefix('user')->middleware(['check_if_user', 'verified'])->group(function () {
    Route::get('/overview', User\AccountOverview::class)->name('overview');
    Route::get('/address', User\AddressManagement::class)->name('address');
    Route::get('/settings', User\Settings::class)->name('settings');
    Route::get('/changepassword', User\ChangePassword::class)->name('changepassword');
    Route::get('/orders', User\MyOrders::class)->name('orders');
    Route::get('/order/{order_id}', User\OrderDetails::class)->name('order.details');
    Route::get('/address/create', User\AddressCreate::class)->name('address.create');
    Route::get('/address/edit/{id}', User\AddressEdit::class)->name('address.edit');
}); 

Route::name('admin.')->prefix('admin')->middleware(['check_if_admin'])->group(function () {
    Route::get('/', Admin\AdminHome::class)->name('overview');
    Route::get('products', Admin\ProductComponent::class)->name('products');
    Route::get('brands', Admin\BrandComponent::class)->name('brands');
    Route::get('categories', Admin\CategoryComponent::class)->name('categories');
    Route::get('usermanagement', Admin\UserManagement::class)->name('manageuser');
    Route::get('orders', Admin\UserOrders::class)->name('orders');
    Route::get('/order/{order_id}', Admin\OrderDetails::class)->name('order.details');
    Route::get('vouchers', Admin\VoucherComponent::class)->name('vouchers');
}); 

Route::middleware(['auth:sanctum', 'verified', 'check_if_admin'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



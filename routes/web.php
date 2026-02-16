<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\AdminUserController;

use App\Livewire\CartPage;



Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    return view('welcome');
});

Route::get('/shop', [ShopController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::get('/products/{product}', [ShopController::class, 'show'])
    ->middleware('auth')
    ->name('shop.show');


Route::get('/profile', [ProfileController::class, 'edit'])
    ->middleware('auth')
    ->name('profile.edit');

Route::patch('/profile', [ProfileController::class, 'update'])
    ->middleware('auth')
    ->name('profile.update');

Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->middleware('auth')
    ->name('profile.destroy');


Route::get('/cart', CartPage::class)
    ->middleware('auth')
    ->name('cart');


Route::get('/checkout', [CheckoutController::class, 'show'])
    ->middleware('auth')
    ->name('checkout');

Route::post('/checkout/pay', [CheckoutController::class, 'pay'])
    ->middleware('auth')
    ->name('checkout.pay');

Route::get('/checkout/success/{order}', [CheckoutController::class, 'success'])
    ->middleware('auth')
    ->name('checkout.success');



Route::get('/my-orders', [OrderController::class, 'myOrders'])
    ->middleware('auth')
    ->name('orders.mine');

Route::patch('/orders/{order}/cancel', [OrderController::class, 'cancel'])
    ->middleware('auth')
    ->name('orders.cancel');


Route::get('/admin/orders', [AdminOrderController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.orders.index');

Route::patch('/admin/orders/{order}/status', [AdminOrderController::class, 'updateStatus'])
    ->middleware(['auth', 'admin'])
    ->name('admin.orders.status');

Route::delete('/admin/orders/{order}', [AdminOrderController::class, 'destroy'])
    ->middleware(['auth', 'admin'])
    ->name('admin.orders.delete');

Route::get('/admin/users', [AdminUserController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.users.index');


require __DIR__.'/auth.php';

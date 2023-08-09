<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/sidebar', function () {
//     return view('leftSidebar');
// })->name('shop.sidebar');



Route::get('/',[HomeController::class, 'index']);
Route::get('/redirect',[HomeController::class, 'redirect'])->name('shop.redirect');

Route::get('/shop', [HomeController::class, 'Shop'])->name('shop.shop');
Route::get('/category', [HomeController::class, 'category'])->name('shop.category');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('shop.gallery');
Route::get('/about_us', [HomeController::class, 'about_us'])->name('shop.about_us');
Route::get('/contact_us', [HomeController::class, 'contact_us'])->name('shop.contact_us');
Route::get('/cart', [HomeController::class, 'cart'])->name('shop.cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('shop.checkout');
Route::get('/product', [HomeController::class, 'product'])->name('shop.product');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('shop.wishlist');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

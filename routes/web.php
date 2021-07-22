<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponenet;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', HomeComponenet::class);

Route::get('/shop', ShopComponent::class);

Route::get('/cart', CartComponent::class);

Route::get('/checkout', CheckoutComponent::class);

Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */


// This is for normal user
Route::middleware('auth:sanctum', 'verified')->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// This is for Admin
Route::middleware('auth:sanctum', 'verified', 'authadmin')->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});

<?php

use App\Http\Livewire\Seller\SellerAddProductComponent;
use App\Http\Livewire\Seller\SellerDashboardComponent;
use App\Http\Livewire\Seller\SellerProductComponent;
use App\Http\Livewire\Thanks;
use App\Http\Middleware\AuthAdmin;
use App\Http\Middleware\AuthSeller;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddCategorycomponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;

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
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
Route::middleware(['auth'])->group(function (){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});
Route::middleware(['auth','\App\Http\Middleware\AuthAdmin'])->group(function (){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/categories/add',AdminAddCategorycomponent::class)->name('admin.categories.add');
    Route::get('/admin/categories/edit/{category_id}',AdminEditCategoryComponent::class)->name('admin.categories.edit');
    Route::get('/admin/categories/delete/{category_id}',AdminCategoriesComponent::class)->name('admin.categories.delete');
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.product.add');
    Route::get('/admin/product/edit/{product_id}',AdminEditProductComponent::class)->name('admin.product.edit');
    Route::get('/admin/product/delete/{product_id}',AdminProductComponent::class)->name('admin.product.delete');

});

Route::middleware('auth','\App\Http\Middleware\AuthSeller')->group(function (){
    Route::get('/seller/dashboard',SellerDashboardComponent::class)->name('seller.dashboard');
    Route::get('/seller/product/add',SellerAddProductComponent::class)->name('seller.product.add');
    Route::get('/seller/product',SellerProductComponent::class)->name('seller.product');
});

Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
Route::get('/cart',CartComponent::class)->name('shop.cart');
Route::get('/checkout',CheckoutComponent::class)->name('shop.checkout');
Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');
Route::get('/search',SearchComponent::class)->name('product.search');
Route::get('/thank', Thanks::class)->name('thank');
require __DIR__.'/auth.php';



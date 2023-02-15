<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\UnitController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\website\CartController;
use App\Http\Controllers\website\CheckoutController;
use App\Http\Controllers\website\SearchController;



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

// Website
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search-product', [HomeController::class, 'searchProduct'])->name('search-product');
Route::post('/product-search/{id}', [SearchController::class, 'index'])->name('product-search');
Route::get('/about-product/{id}', [HomeController::class, 'about'])->name('product-about');
Route::get('/product-detail/{id}', [HomeController::class, 'detail'])->name('product-detail');
Route::post('/Add-To-Cart/{id}', [CartController::class, 'index'])->name('add-to-cart');
Route::get('/show-cart', [CartController::class, 'show'])->name('show-cart');
Route::post('/update-cart-product/{id}', [CartController::class, 'update'])->name('update.cart.product');
Route::get('/remove-cart-product/{id}', [CartController::class, 'remove'])->name('remove.cart.product');
Route::post('/new-order', [CheckoutController::class, 'newOrder'])->name('new-order');

//Admin
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class, 'index'])->name('category-add');
    Route::post('/New-category', [CategoryController::class, 'create'])->name('category-new');
    Route::get('/manage-category', [CategoryController::class, 'manage'])->name('category-manage');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/add-sub-category', [SubCategoryController::class, 'index'])->name('sub-category.index');
    Route::get('/manage-sub-category', [SubCategoryController::class, 'manage'])->name('sub-category.manage');
    Route::post('/new-sub-category', [SubCategoryController::class, 'create'])->name('sub-category.new');
    Route::get('/edit-sub-category/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
    Route::post('/update-sub-category/{id}', [SubCategoryController::class, 'update'])->name('sub-category.update');
    Route::get('/delete-sub-category/{id}', [SubCategoryController::class, 'delete'])->name('sub-category.delete');

    Route::get('/add-brand', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/manage-brand', [BrandController::class, 'manage'])->name('brand.manage');
    Route::post('/new-brand', [BrandController::class, 'create'])->name('brand.new');
    Route::get('/edit-brand/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/update-brand/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/delete-brand/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/add-unit', [UnitController::class, 'index'])->name('unit.index');
    Route::get('/manage-unit', [UnitController::class, 'manage'])->name('unit.manage');
    Route::post('/new-unit', [UnitController::class, 'create'])->name('unit.new');
    Route::get('/edit-unit/{id}', [UnitController::class, 'edit'])->name('unit.edit');
    Route::post('/update-unit/{id}', [UnitController::class, 'update'])->name('unit.update');
    Route::get('/delete-unit/{id}', [UnitController::class, 'delete'])->name('unit.delete');

    Route::get('/add-product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/get-sub-category', [ProductController::class, 'getSubCategory'])->name('product.get-sub-category');
    Route::post('/new-product', [ProductController::class, 'create'])->name('product.new');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('product.manage');
    Route::get('/detail-product/{id}', [ProductController::class, 'detail'])->name('product.detail');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('product.delete');
});

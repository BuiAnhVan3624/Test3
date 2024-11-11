<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VariantController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'Home';
});

// Category
Route::group([
    'prefix' => 'categories',
    'as' => 'categories.'
], function() {
    Route::get('/', [CategoryController::class, 'listCategory'])->name('listCategory');
    Route::get('add-category', [CategoryController::class, 'addCategory'])->name('addCategory');
    Route::post('add-category', [CategoryController::class, 'addPostCategory'])->name('addPostCategory');
    Route::get('update-category/{id}', [CategoryController::class, 'updateCategory'])->name('updateCategory');
    Route::put('update-category/{id}', [CategoryController::class, 'updatePutCategory'])->name('updatePutCategory');
    Route::delete('delete-category', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
});

// Product
Route::group([
    'prefix' => 'products',
    'as' => 'products.'
], function() {
    Route::get('/', [ProductController::class, 'listProduct'])->name('listProduct');
    Route::get('add-product', [ProductController::class, 'addProduct'])->name('addProduct');
    Route::post('add-product', [ProductController::class, 'addPostProduct'])->name('addPostProduct');
    Route::get('update-product/{id}', [ProductController::class, 'updateProduct'])->name('updateProduct');
    Route::put('update-product/{id}', [ProductController::class, 'updatePutProduct'])->name('updatePutProduct');
    Route::delete('delete-product', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
});

// Variant
Route::group([
    'prefix' => 'variants',
    'as' => 'variants.'
], function() {
    Route::get('/', [VariantController::class, 'listVariant'])->name('listVariant');
    Route::get('add-variant', [VariantController::class, 'addVariant'])->name('addVariant');
    Route::post('add-variant', [VariantController::class, 'addPostVariant'])->name('addPostVariant');
    Route::get('update-variant/{id}', [VariantController::class, 'updateVariant'])->name('updateVariant');
    Route::put('update-variant/{id}', [VariantController::class, 'updatePutVariant'])->name('updatePutVariant');
    Route::delete('delete-variant', [VariantController::class, 'deleteVariant'])->name('deleteVariant');
});

// Ảnh sản phẩm
Route::group([
    'prefix' => 'images',
    'as' => 'images.'
], function() {
    
    Route::get('add-image', [ImageController::class, 'addImage'])->name('addImage');
    Route::post('add-image', [ImageController::class, 'addPostImage'])->name('addPostImage');
    Route::get('update-variant/{id}', [VariantController::class, 'updateVariant'])->name('updateVariant');
    Route::put('update-variant/{id}', [VariantController::class, 'updatePutVariant'])->name('updatePutVariant');
    Route::delete('delete-variant', [VariantController::class, 'deleteVariant'])->name('deleteVariant');

    Route::get('test-image', [ImageController::class, 'testImage'])->name('testImage');
    
});

Route::get('/',[HomeController::class, 'index']);
Route::get('detail-product/{id}', [ClientProductController::class, 'detailProduct'])->name('detailProduct');



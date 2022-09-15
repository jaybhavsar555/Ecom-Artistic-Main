<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;



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





Route::get('category','App\Http\Controllers\Frontend\FrontendController@category');
Route::get("view-category/{slug}",[FrontendController::class,'viewcategory']);
Route::get("category/{cate_slug}/{prod_slug}",[FrontendController::class,'viewproduct']);
Route::get("/",[FrontendController::class,'index']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::post('add-to-cart',[CartController::class,'addProduct']);
Route::post('update-cart',[CartController::class,'updatecart']);
Route::post('delete-cart-item',[CartController::class,'deleteProduct']);



Route::middleware(['auth'])->group(function() {
    
    Route::get('cart',[CartController::class,'viewcart']);
    Route::get('checkout',[CheckoutController::class,'index']);
    Route::post('place-order',[CheckoutController::class,'placeorder']);
    

});
Route::middleware(['auth','isAdmin'])->group(function() {

    Route::get('/dashboard','App\Http\Controllers\Admin\FrontendController@index');

    // Routes for Categories
    Route::get('categories','App\Http\Controllers\Admin\CategoryController@index');
    Route::get('add-category','App\Http\Controllers\Admin\CategoryController@add');
    Route::post('insert-category','App\Http\Controllers\Admin\CategoryController@insert');
    Route::get('edit-category/{id}',[CategoryController::class,'edit']);
    Route::put('update-category/{id}',[CategoryController::class,'update']);
    Route::get('delete-category/{id}',[CategoryController::class,'delete']);

    // Routes for Products

    Route::get('products','App\Http\Controllers\Admin\ProductController@index');
    Route::get('add-products','App\Http\Controllers\Admin\ProductController@add'); //to add category in add product page
    Route::post('insert-product','App\Http\Controllers\Admin\ProductController@insert');
    Route::get('edit-product/{id}','App\Http\Controllers\Admin\ProductController@edit');
    Route::put('update-product/{id}','App\Http\Controllers\Admin\ProductController@update');
    Route::get('delete-product/{id}','App\Http\Controllers\Admin\ProductController@delete');
 });

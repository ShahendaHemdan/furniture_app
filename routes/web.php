<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SinlgeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ChecktController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/dash', function () {
    return view('admin/dash');
});
Route::get('/layout',[AdminController::class,'select']);

Route::get('/dash',[DashController::class,'select']);


Route::get('/category', function () {
    return view('admin/category');
});
Route::post('/category',[CategoryController::class,'insert']);
Route::get('/category',[CategoryController::class,'select']);
Route::get('/category/{id}',[CategoryController::class,'delete']);




Route::get('/brand', function () {
    return view('admin/brand');
});
Route::post('/brand',[BrandController::class,'insert']);
Route::get('/brand',[BrandController::class,'select']);
Route::get('/brand/{id}',[BrandController::class,'delete']);




Route::get('/addadmin', function () {
    return view('admin/addadmin');
});


Route::get('/product', function () {
    return view('admin/product');
});
Route::post('/product',[ProductController::class,'insert'])->name('product.store');
Route::get('/product',[ProductController::class,'select']);
Route::get('/product/{id}',[ProductController::class,'delete']);



Route::get('/',[IndexController::class,'select']);
Route::get('/index',[IndexController::class,'select']);


Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop',[IndexController::class,'selectshop']);



Route::get('/single', function () {
    return view('single');
});
Route::post('/single',[SinlgeController::class,'getsingle']);


Route::get('/check', function () {
    return view('check');
});

Route::post('/check',[ClientController::class,'store']);
Route::get('/check',[ClientController::class,'price']);

Route::get('/cart',[CartController::class,'show']);
Route::get('/cart/{id}',[CartController::class,'delete']);
Route::post('/cart',[CartController::class,'store']);





Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index']) ;


Route::get('/add', function () {
    return view('auth/register');
});
Route::post('/add/create', [App\Http\Controllers\HomeController::class, 'create'])->name('add.create');
Route::get('/add', [App\Http\Controllers\HomeController::class, 'select'])->name('add.select');
Route::get('/add/{id}', [App\Http\Controllers\HomeController::class, 'delete']);

Route::get('/logout', function(){
    Auth::logout();
    return view('index');
 });
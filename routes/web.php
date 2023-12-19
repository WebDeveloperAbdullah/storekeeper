<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('page.home');
// });
// Route::get('/login', function () {
//     return view('page.login');
// });

// admin route
Route::group(['prefix'=>'adminPanal','as'=>'adminPanal.'], function(){
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');




// reaister route
Route::get('/reaister',[UserController::class,'reaisterView'])->name('reaisterView');
Route::get('/reaister',[UserController::class,'reaister'])->name('reaister');
// reaister route

// category route
Route::get('/category',[CategoriesController::class,'category'])->name('category');
Route::get('/categoryAdd',[CategoriesController::class,'categoryAdd'])->name('categoryAdd');
Route::post('/categoryStore',[CategoriesController::class,'categoryStore'])->name('categoryStore');
Route::get('/categoryDetail/{id}',[CategoriesController::class,'categoryDetail'])->name('categoryDetail');
Route::get('/categoryEdit/{id}',[CategoriesController::class,'categoryEdit'])->name('categoryEdit');
Route::post('/categoryEditCore/{id}',[CategoriesController::class,'categoryEditCore'])->name('categoryEditCore');
Route::delete('/categoryDelete/{id}',[CategoriesController::class,'categoryDelete'])->name('categoryDelete');
// brand route
Route::get('/brands',[BrandsController::class,'brands'])->name('brands');
Route::get('/brandAdd',[BrandsController::class,'brandAdd'])->name('brandAdd');
Route::post('/brandAddCore',[BrandsController::class,'brandAddCore'])->name('brandAddCore');
Route::delete('/brandDelete/{id}',[BrandsController::class,'brandDelete'])->name('brandDelete');
Route::get('/brandDetail/{id}',[BrandsController::class,'brandDetail'])->name('brandDetail');
Route::get('/brandEdit/{id}',[BrandsController::class,'brandEdit'])->name('brandEdit');
Route::post('/brandEditCore/{id}',[BrandsController::class,'brandEditCore'])->name('brandEditCore');

// brand route

// product route
Route::get('/product',[ProductsController::class,'product'])->name('product');
Route::get('/productAdd',[ProductsController::class,'productAdd'])->name('productAdd');
Route::post('/productAddCore',[ProductsController::class,'productAddCore'])->name('productAddCore');
Route::post('/productEdit',[ProductsController::class,'productEdit'])->name('productEdit');


});
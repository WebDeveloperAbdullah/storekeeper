<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('page.home');
});
Route::get('/login', function () {
    return view('page.login');
});
Route::get('/reaister',[UserController::class,'reaisterView'])->name('reaisterView');
Route::get('/reaister',[UserController::class,'reaister'])->name('reaister');
Route::get('/category',[CategoriesController::class,'category'])->name('category');
Route::get('/categoryAdd',[CategoriesController::class,'categoryAdd'])->name('categoryAdd');
Route::post('/categoryAddCore',[CategoriesController::class,'categoryAddCore'])->name('categoryAddCore');
Route::get('/brands',[BrandsController::class,'brands'])->name('brands');
Route::get('/brandAdd',[BrandsController::class,'brandAdd'])->name('brandAdd');
Route::post('/brandAddCore',[BrandsController::class,'brandAddCore'])->name('brandAddCore');
Route::get('/product',[ProductsController::class,'products'])->name('products');
Route::get('/productAdd',[ProductsController::class,'productAdd'])->name('productAdd');
Route::post('/productAddCore',[ProductsController::class,'productAddCore'])->name('productAddCore');
Route::post('/productEdit',[ProductsController::class,'productEdit'])->name('productEdit');

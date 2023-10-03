<?php

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





use App\Http\Controllers\productController;

Route::get('/', [productController::class ,"getAllProject"] );
Route::get("/products",[productController::class ,"getAllProject"] );
Route::get("/details/{id}",[productController::class ,"getProjectDetailse"] );
Route::get("/about",[productController::class ,"aboutPage"] );
Route::get("/contact",[productController::class ,"contactPage"] );
Route::get("/landing",[productController::class ,"landingPage"] );








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

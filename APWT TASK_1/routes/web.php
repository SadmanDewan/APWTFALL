<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesControllers;

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

Route::get('/',[PagesControllers::class,'index'])->name('home');
Route::get('/about',[PagesControllers::class,'about'])->name('about');
Route::get('/contact',[PagesControllers::class,'contact'])->name('contact');
Route::get('/product',[PagesControllers::class,'product'])->name('product');
Route::get('/teams',[PagesControllers::class,'teams'])->name('teams');

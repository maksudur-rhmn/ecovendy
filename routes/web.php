<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontendController;
use App\Models\Banner;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',  [AdminController::class, 'index'])->name('dashboard');

// FrontendController 
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/who/we/are', [FrontendController::class, 'whoweare'])->name('frontend.whoweare');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');

// BannerController 
Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');


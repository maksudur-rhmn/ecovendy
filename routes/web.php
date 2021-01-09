<?php

use App\Models\Banner;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\WhatWeDoController;
use App\Http\Controllers\WhoWeAreController;
use App\Http\Controllers\InterestingController;
use App\Http\Controllers\WhatCanYouDoController;
use App\Http\Controllers\HowDoesItWorkController;
use App\Http\Controllers\WhoWeAreBottomController;
use App\Http\Controllers\GeneralSettingsController;

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
Route::get('/how/does/it/work', [FrontendController::class, 'howdoesitwork'])->name('frontend.howdoesitwork');
Route::get('/what/can/you/do', [FrontendController::class, 'whatcanyoudo'])->name('frontend.whatcanyoudo');
Route::get('/blog/{id}', [FrontendController::class, 'blogDetails'])->name('frontend.blogDetails');
Route::get('/frequently/asked/question', [FrontendController::class, 'faq'])->name('frontend.faqs');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/contact/store', [FrontendController::class, 'contactstore'])->name('frontend.contactstore');

// BannerController 
Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');

// WhoWeAreController 
Route::get('/whoweare', [WhoWeAreController::class, 'index'])->name('whoweare.index');
Route::post('/whoweare/store', [WhoWeAreController::class, 'store'])->name('whoweare.store');

// WhoWeAreController 
Route::get('/whowearebottom', [WhoWeAreBottomController::class, 'index'])->name('whowearebottom.index');
Route::post('/whowearebottom/store', [WhoWeAreBottomController::class, 'store'])->name('whowearebottom.store');
Route::get('/whowearebottom/delete/{id}', [WhoWeAreBottomController::class, 'delete'])->name('whowearebottom.delete');


// WhatWeDoController 
Route::get('/whatwedo', [WhatWeDoController::class, 'index'])->name('whatwedo.index');
Route::post('/whatwedo/store', [WhatWeDoController::class, 'store'])->name('whatwedo.store');
Route::get('/whatwedo/delete/{id}', [WhatWeDoController::class, 'delete'])->name('whatwedo.delete');

// interestingController 
Route::get('/interesting', [InterestingController::class, 'index'])->name('interesting.index');
Route::post('/interesting/store', [InterestingController::class, 'store'])->name('interesting.store');
Route::get('/interesting/delete/{id}', [InterestingController::class, 'delete'])->name('interesting.delete');

// HowDoesItWorkController 
Route::get('/howdoesitwork', [HowDoesItWorkController::class, 'index'])->name('howdoesitwork.index');
Route::post('/howdoesitwork/store', [HowDoesItWorkController::class, 'store'])->name('howdoesitwork.store');


// VideoController 
Route::get('/video', [VideoController::class, 'index'])->name('video.index');
Route::post('/video/store', [VideoController::class, 'store'])->name('video.store');

// WhatCanYouDoController 
Route::get('/whatcanyoudo', [WhatCanYouDoController::class, 'index'])->name('whatcanyoudo.index');
Route::post('/whatcanyoudo/store', [WhatCanYouDoController::class, 'store'])->name('whatcanyoudo.store');

// Blog Controller 
Route::get('/blog/{id}/delete', [BlogController::class, 'delete'])->name('blog.delete');
Route::resource('blog', BlogController::class);

// PartnerController 
Route::get('/partner', [PartnerController::class, 'index'])->name('partner.index');
Route::post('/partner/store', [PartnerController::class, 'store'])->name('partner.store');
Route::get('/partner/delete/{id}', [PartnerController::class, 'delete'])->name('partner.delete');

// GeneralSettingsController
Route::get('/g/settings', [GeneralSettingsController::class, 'index'])->name('settings.index');
Route::post('/g/settings/store', [GeneralSettingsController::class, 'store'])->name('settings.store');

// Faq Controller
Route::get('/faq/{id}/delete', [FaqController::class, 'delete'])->name('faqs.delete');
Route::resource('faqs', FaqController::class);


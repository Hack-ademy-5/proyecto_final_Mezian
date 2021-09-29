<?php


use App\Http\Requests\AdRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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


Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/ad/new', [HomeController::class,'newAd'])->name('ad.new');

Route::post('/ad/create', [HomeController::class,'createAd'])->name('ad.create');

Route::get('/', [PublicController::class,'index'])->name('home');

Route::get('/category/{name}/{id}/ads', [PublicController::class,'adsByCategory'])->name('category.ads');



Route::get('/revisor',[RevisorController::class,'index'] )->name('revisor');


Route::post('/revisor/ad/{id}/accept',[RevisorController::class,'accept'])->name('revisor.ad.accept');
Route::post('/revisor/ad/{id}/reject',[RevisorController::class,'reject'])->name('revisor.ad.reject');

Route::post('/locale/{locale}', [PublicController::class,'locale'])->name('locale');

Route::post('/ad/images/upload', [HomeController::class,'uploadImages'])->name('ad.images.upload');

Route::delete('/ad/images/remove', [HomeController::class,'removeImages'])->name('ad.images.remove');

Route::get('/ad/images', [HomeController::class,'getImages'])->name('ad.images');

Route::get('/search', [PublicController::class,'search'])->name('search');



Route::get('/ad/{id}', [HomeController::class,'details'])->name("ad.details");
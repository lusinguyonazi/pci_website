<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SiteIDController;
use App\Models\NewsAndEvents;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::get('/test', function () {
    return view('test');
});


Route::get('/', [HomePageController::class, 'index'])->name('homePage');


Route::prefix('admin')->group(function () {
    Route::get('/home', function () {
        return view('admin.dashboard');
    });
    // Route::get('siteID',[SiteIDController::class, 'index'])->name('siteID');
    // Route::get('insert',[SiteIDController::class, 'show'])->name('insertID');
    Route::post('storeSiteID/{id}',[SiteIDController::class, 'store'])->name('storeID');
    Route::get('updateSiteID',[SiteIDController::class, 'show'])->name('update.id');
    Route::get('news',[NewsController::class, 'showNews'])->name('news');

    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\SiteIDController;
use App\Models\NewsAndEvents;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsAndEventsController;

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
    return view('public/pci_home');
});


Route::prefix('admin')->group(function () {
    Route::get('/home', function () {
        return view('admin.dashboard');
    });
    // Route::get('siteID',[SiteIDController::class, 'index'])->name('siteID');
    // Route::get('insert',[SiteIDController::class, 'show'])->name('insertID');
    Route::post('storeSiteID/{id}',[SiteIDController::class, 'store'])->name('storeID');
    Route::get('updateSiteID',[SiteIDController::class, 'show'])->name('update.id');

    // News and Events
    Route::post('store/{id}',[NewsAndEventsIDController::class, 'store'])->name('storenews');
    Route::get('updateNewsAndEvents',[NewsAndEventsController::class, 'show'])->name('updatenews');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

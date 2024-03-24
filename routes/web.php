<?php

use Illuminate\Support\Facades\Route;
use Modules\GuadalupeReports\App\Http\Controllers\Api\ExportsController;
use Modules\GuadalupeReports\App\Http\Controllers\GuadalupeReportsController;

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

Route::middleware('auth')
    ->prefix('guadalupe-reports')
    ->group(function() {
        Route::get('/{any}', [GuadalupeReportsController::class, 'index'])->name("guadalupe-reports.index")->where('any', '.*');
    });

Route::prefix('api/v1/guadalupe-reports')->middleware(['auth'])->group(function () {
    Route::get('/all-products', [ExportsController::class, 'all_products'])->name('guadalupe-reports.all-products');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowResultController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth','isAdmin')->group(function (){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('add-result',[ResultController::class,'add'])->name('add-results');
    Route::post('insert-result',[ResultController::class,'storeData'])->name('insert-result');
    Route::get('view-result',[ResultController::class,'viewData'])->name('view-data');
    Route::get('upload-excel',[ResultController::class,'uploadExcel'])->name('upload-excel');
    Route::post('/results/import', [ResultController::class, 'importExcel'])->name('results.import');


});

    Route::get('view-result-chart',[ShowResultController::class,'viewResultData'])->name('view-result-data');

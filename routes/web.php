<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

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
Route::controller(MainController::class) -> group(function(){
    // DQ Section \\
    Route::get('/dq', [MainController::class, 'dq'])->name('dq');
    Route::get('/create-dq', [MainController::class, 'createDq'])->name('create-dq');

    // IQ Section \\
    Route::get('/iq', [MainController::class, 'iq'])->name('iq');

    // PQ Section \\
    Route::get('/pq', [MainController::class, 'pq'])->name('pq');

    // PV Section \\
    Route::get('/pv', [MainController::class, 'pv'])->name('pv');

    // OQ Section \\
    Route::get('/oq', [MainController::class, 'oq'])->name('oq');

    // RV Section \\
    Route::get('/rv', [MainController::class, 'rv'])->name('rv');

    // FAT Section \\
    Route::get('/fat', [MainController::class, 'fat'])->name('fat');

    // FR Section \\
    Route::get('/fr', [MainController::class, 'fr'])->name('fr');

    // MS Section \\
    Route::get('/ms', [MainController::class, 'ms'])->name('ms');

    // PS Section \\
    Route::get('/ps', [MainController::class, 'ps'])->name('ps');

    // QS Section \\
    Route::get('/qs', [MainController::class, 'qs'])->name('qs');

    // ST Section \\
    Route::get('/st', [MainController::class, 'st'])->name('st');

    // SOP Section \\
    Route::get('/sop', [MainController::class, 'sop'])->name('sop');
});

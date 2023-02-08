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
Route::get('/login', function(){
    return view('login');
})->name('login');

Route::controller(MainController::class)->group(function () {
    // Welcome \\
    Route::get('/', [MainController::class, 'welcome'])->name('welcome');

    // DQ Section \\
    Route::get('/dq', [MainController::class, 'dq'])->name('dq');
    Route::get('/dq-create', [MainController::class, 'createDq'])->name('create-dq');
    Route::post('/dq-store', [MainController::class, 'storeDq'])->name('store-dq');

    // IQ Section \\
    Route::get('/iq', [MainController::class, 'iq'])->name('iq');
    Route::get('/iq-create', [MainController::class, 'createIq'])->name('create-iq');
    Route::post('/iq-store', [MainController::class, 'storeIq'])->name('store-iq');

    // PQ Section \\
    Route::get('/pq', [MainController::class, 'pq'])->name('pq');
    Route::get('/pq-create', [MainController::class, 'createPq'])->name('create-pq');
    Route::post('/pq-store', [MainController::class, 'storePq'])->name('store-pq');

    // PV Section \\
    Route::get('/pv', [MainController::class, 'pv'])->name('pv');
    Route::get('/pv-create', [MainController::class, 'createPv'])->name('create-pv');
    Route::post('/pv-store', [MainController::class, 'storePv'])->name('store-pv');

    // OQ Section \\
    Route::get('/oq', [MainController::class, 'oq'])->name('oq');
    Route::get('/oq-create', [MainController::class, 'createOq'])->name('create-oq');
    Route::post('/oq-store', [MainController::class, 'storeOq'])->name('store-oq');

    // RV Section \\
    Route::get('/rv', [MainController::class, 'rv'])->name('rv');
    Route::get('/rv-create', [MainController::class, 'createRv'])->name('create-rv');
    Route::post('/rv-store', [MainController::class, 'storeRv'])->name('store-rv');

    // FAT Section \\
    Route::get('/fat', [MainController::class, 'fat'])->name('fat');
    Route::get('/fat-create', [MainController::class, 'createFat'])->name('create-fat');
    Route::post('/fat-store', [MainController::class, 'storeFat'])->name('store-fat');

    // FR Section \\
    Route::get('/fr', [MainController::class, 'fr'])->name('fr');
    Route::get('/fr-create', [MainController::class, 'createFr'])->name('create-fr');
    Route::post('/fr-store', [MainController::class, 'storeFr'])->name('store-fr');

    // MS Section \\
    Route::get('/ms', [MainController::class, 'ms'])->name('ms');
    Route::get('/ms-create', [MainController::class, 'createMs'])->name('create-ms');
    Route::post('/ms-store', [MainController::class, 'storeMs'])->name('store-ms');

    // PS Section \\
    Route::get('/ps', [MainController::class, 'ps'])->name('ps');
    Route::get('/ps-create', [MainController::class, 'createPs'])->name('create-ps');
    Route::post('/ps-store', [MainController::class, 'storePs'])->name('store-ps');

    // QS Section \\
    Route::get('/qs', [MainController::class, 'qs'])->name('qs');
    Route::get('/qs-create', [MainController::class, 'createQs'])->name('create-qs');
    Route::post('/qs-store', [MainController::class, 'storeQs'])->name('store-qs');

    // ST Section \\
    Route::get('/st', [MainController::class, 'st'])->name('st');
    Route::get('/st-create', [MainController::class, 'createSt'])->name('create-st');
    Route::post('/st-store', [MainController::class, 'storeSt'])->name('store-st');

    // SOP Section \\
    Route::get('/sop', [MainController::class, 'sop'])->name('sop');
    Route::get('/sop-create', [MainController::class, 'createSop'])->name('create-sop');
    Route::post('/sop-store', [MainController::class, 'storeSop'])->name('store-sop');
});

<?php

use App\Http\Controllers\KalatirtaNewController;
use App\Http\Controllers\KalatirtaPermintaanDataController;
use App\Models\Kalatirta_permintaan_data;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/kalatirta-so', [KalatirtaNewController::class, 'index'])->name('kalatirta');

Route::get('/kalatirta-so/form-keberatan', [KalatirtaPermintaanDataController::class, 'formKeberatan'])->name('kalatirta.formKeberatan');

Route::get('/kalatirta-so/permohonan-data', [KalatirtaPermintaanDataController::class, 'show1'])->name('kalatirta.status');


Route::post('/kalatirta-so/form-keberatan', [KalatirtaPermintaanDataController::class, 'formKeberatan_search'])->name('kalatirta.formKeberatan_search');

Route::get('/kalatirta-so/portal', [KalatirtaPermintaanDataController::class, 'showPortal'])->name('kalatirta.showPortal');


Route::get('/kalatirta-so/form-permohonan-data', [KalatirtaPermintaanDataController::class, 'create'])->name('kalatirta.create');
Route::post('/kalatirta-so/form-permohonan-data', [KalatirtaPermintaanDataController::class, 'store'])->name('kalatirta.store');

Route::get('/kalatirta-so/form-permohonan-data/survey', [KalatirtaPermintaanDataController::class, 'create1'])->name('survey');
Route::post('/kalatirta-so/form-permohonan-data/survey', [KalatirtaPermintaanDataController::class, 'store1'])->name('kalatirta.store1');

Route::get('/kalatirta-so/permohonan-data', [KalatirtaPermintaanDataController::class, 'show1'])->name('kalatirta.status');

Route::resource('/dashboard/kalatirta-so', KalatirtaNewController::class)->except(['create', 'store']);


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


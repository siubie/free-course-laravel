<?php

use App\Http\Controllers\BiodataMahasiswaController;
use App\Models\BiodataMahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//add route get /biodata_mahasiswa
Route::get('/biodata-mahasiswa', [BiodataMahasiswaController::class, 'index'])
    ->name('biodata-mahasiswa.index');
Route::get('/biodata-mahasiswa/create', [BiodataMahasiswaController::class, 'create'])
    ->name('biodata-mahasiswa.create');
Route::post('/biodata-mahasiswa', [BiodataMahasiswaController::class, 'store'])
    ->name('biodata-mahasiswa.store');
Route::get('/biodata-mahasiswa/{biodata_mahasiswa}', [BiodataMahasiswaController::class, 'show'])
    ->name('biodata-mahasiswa.show');
Route::delete('/biodata-mahasiswa/{biodata_mahasiswa}', [BiodataMahasiswaController::class, 'destroy'])
    ->name('biodata-mahasiswa.destroy');
Route::put('/biodata-mahasiswa/{biodata_mahasiswa}', [BiodataMahasiswaController::class, 'update'])
    ->name('biodata-mahasiswa.update');
Route::get('/biodata-mahasiswa/{biodata_mahasiswa}/edit', [BiodataMahasiswaController::class, 'edit'])
    ->name('biodata-mahasiswa.edit');

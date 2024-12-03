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

<?php

use App\Http\Controllers\UTSController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('index');
});
Route::get('/getsesi', function () {
    $sessionData = [
        'kunci' => Session::get('kunci')
    ];

    return response()->json($sessionData);
});
Route::get('/uts', [UTSController::class, 'index'])->name('index');
Route::get('/uts/create', [UTSController::class, 'create'])->name('create');
Route::post('/uts', [UTSController::class, 'simpan'])->name('store');

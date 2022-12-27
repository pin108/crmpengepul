<?php

use App\Http\Controllers\pemprosessan;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\transaksibeli;
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

Route::get('/dashboard', function () {
    return view('main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pages/crudpengepul', function () {
        return view('pages.crudpengepul');
    });
    // Route::get('/pages/pemprosesan', function () {
    //     return view('pages.pemprosesan');
    // });
    // Route::get('/pages/transaksibeli', function () {
    //     return view('pages.transaksibeli');
    // });
    Route::get('/pages/transaksijual', function () {
        return view('pages.transaksijual');
    });
    // Route::get('/pages/myprofile', function () {
    //     return view('pages.myprofile');
    // });
    Route::get('/pages/myprofile', [pendaftaranController::class, 'index']);

    Route::post('/kirim/daftarpengepul', [pendaftaranController::class, 'store']);
    Route::get('/pages/transaksibeli', [transaksibeli::class, 'index']);
    Route::get('/pages/pemprosesan', [pemprosessan::class, 'index']);
    Route::post('/kirim/updateverifikasi/{id}', [transaksibeli::class, 'updateverifikasi']);
    Route::post('/kirim/tambahtransaksibeli', [transaksibeli::class, 'store']);
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\BiodatapengepulController;
use App\Http\Controllers\HalamantransaksiController;
use App\Http\Controllers\PengepulController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksibeliController;
use App\Http\Controllers\TransaksijualController;
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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {
        return view('main');
    }
    );
    Route::get('/menu/proses', function () {
        return view('proses');
    }
    );
    Route::get('/menu/transaksibeli', function () {
        return view('transaksibeli');
    }
    );
    Route::get('/menu/transaksijual', function () {
        return view('transaksijual');
    }
    );

    // pengepul
    Route::get('/formbiodata', [BiodatapengepulController::class, 'index'])->name('formbiodata');
    Route::post('/insertbiodata', [BiodatapengepulController::class, 'store'])->name('insertbiodata');

    // transaksi
    Route::get('/halamantransaksi', [HalamantransaksiController::class, 'index'])->name('halamantransaksi');

    // transaksi beli
    Route::get('/transaksibeli', [TransaksibeliController::class, 'index'])->name('transaksibeli');
    Route::get('/addtransaksibeli', [TransaksibeliController::class, 'store'])->name('addtransaksibeli');

    // transaksi jual
    Route::get('/transaksijual', [TransaksijualController::class, 'index'])->name('transaksijual');
    Route::get('/addtransaksijual', [TransaksijualController::class, 'index'])->name('addtransaksijual');


    Route::get('/menu/profile', function () {
        return view('biodata');
    }
    );
});

require __DIR__.'/auth.php';

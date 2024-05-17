<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
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


Route::get('/user', function () {
    return view('user');
});

Route::middleware(['auth', 'verified', 'admin.only'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
    // Route::post('/produk', [ProdukController::class, 'create'])->name('produk.create');
    // Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
    // Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

    Route::get('/pembelian', function () {
        return view('admin.pembelian');
    })->name('pembelian');

    Route::resource('produk', ProdukController::class);
    Route::resource('kategori-produk', KategoriProdukController::class);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified', 'admin'])->name('dashboard');






require __DIR__ . '/auth.php';

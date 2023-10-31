<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rentCar\rentCarController;

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
    return view('rentcarr.index');
});

// route pindah halaman

// Route::prefix('pages')->group(function() {
    
// });

Route::get('/home',[rentCarController::class, 'Home'])->name('home');
Route::get('/listkendaraan',[rentCarController::class, 'PageListkendaraan'])->name('listkendaraan');
Route::get('/detailkendaraan',[rentCarController::class, 'PageDetailkendaraan'])->name('detailkendaraan');
Route::get('/loginregister',[rentCarController::class, 'PageLoginRegister'])->name('loginregister');

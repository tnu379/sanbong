<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\YardController;
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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/post-login',  [UserController::class,'login'])->name('post-login');
Route::get('/register', function () {
    return view('auth.register');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard.index');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class,'index'])->name('user_index');
        Route::get('/create', [UserController::class,'create'])->name('user_create');
        Route::post('/store', [UserController::class,'store'])->name('user_store');
        Route::get('/edit/{id}', [UserController::class,'edit'])->name('user_edit');
        Route::get('/delete/{id}', [UserController::class,'destroy'])->name('user_del');
        Route::post('/update/{id}', [UserController::class,'update'])->name('user_update');
    });

    Route::prefix('yards')->group(function () {
        Route::get('/', [YardController::class,'index'])->name('yard_index');
        Route::get('/create', [YardController::class,'create'])->name('yard_create');
        Route::post('/store', [YardController::class,'store'])->name('yard_store');
        Route::get('/edit/{id}', [YardController::class,'edit'])->name('yard_edit');
        Route::get('/delete/{id}', [YardController::class,'destroy'])->name('yard_del');
        Route::post('/update/{id}', [YardController::class,'update'])->name('yard_update');
    });

    Route::prefix('orders')->group(function () {
        // Route::get('/', [YardController::class,'index'])->name('orders_index');
        Route::get('/',function(){
            return view('orders.index');
        });
        Route::get('/create', [YardController::class,'create'])->name('orders_create');
        Route::post('/store', [YardController::class,'store'])->name('orders_store');
        Route::get('/edit/{id}', [YardController::class,'edit'])->name('orders_edit');
        Route::get('/delete/{id}', [YardController::class,'destroy'])->name('orders_del');
        Route::post('/update/{id}', [YardController::class,'update'])->name('orders_update');
    });

});

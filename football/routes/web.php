<?php

use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YardController;
use App\Models\User;
use App\Models\Users;
use Illuminate\Support\Facades\Config;
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
Route::get('/logout', function () {
    session()->forget('user_name');
    session()->forget('user_email');
    session()->forget('img');
    session()->forget('role');
    session()->flush();
    return view('auth.login');
})->name('logout');
Route::post('/post-login',  [UserController::class, 'login'])->name('post-login');
Route::get('/register', function () {
    $district = Config::get('app.app-football.district');
    $role = Config::get('app.app-football.role');
    return view('auth.register', [
        'roles' => $role,
        'districts' => $district
    ]);
});
Route::post('/register/store', [UserController::class, 'registerStore'])->name('register_store');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard.index');
    });
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user_index');
        Route::get('/create', [UserController::class, 'create'])->name('user_create');
        Route::post('/store', [UserController::class, 'store'])->name('user_store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user_edit');
        Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user_del');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('user_update');
    });

    Route::prefix('yards')->group(function () {
        Route::get('/', [YardController::class, 'index'])->name('yard_index');
        Route::get('/create', [YardController::class, 'create'])->name('yard_create');
        Route::post('/store', [YardController::class, 'store'])->name('yard_store');
        Route::get('/edit/{id}', [YardController::class, 'edit'])->name('yard_edit');
        Route::get('/delete/{id}', [YardController::class, 'destroy'])->name('yard_del');
        Route::post('/update/{id}', [YardController::class, 'update'])->name('yard_update');
    });

    Route::prefix('orders')->group(function () {
        Route::get('/', [OrdersController::class, 'index'])->name('orders_index');
        Route::get('/booking/{id}', [OrdersController::class, 'booking'])->name('orders_booking');

        Route::get('/filter', function () {
            $users = Users::with('yards')->where('role', 2)->get();
            $district = Config::get('app.app-football.district');
            $sizes = Config::get('app.app-football.size');
            $prices = Config::get('app.app-football.price');
            return view('orders.user_booking', [
                'users' => $users,
                'district' => $district,
                'sizes' => $sizes,
                'prices' => $prices
            ]);
        })->name('filter');
        Route::get('/create', [OrdersController::class, 'create'])->name('orders_create');
        // Route::post('/store', [OrdersController::class, 'store'])->name('orders_store');
        Route::get('/edit/{id}', [YardController::class, 'edit'])->name('orders_edit');
        Route::get('/delete/{id}', [OrdersController::class, 'destroy'])->name('orders_del');
        // Route::post('/update/{id}', [YardController::class, 'update'])->name('orders_update');

        Route::match(['get', 'post'], '/store', [OrdersController::class, 'store'])->name('orders_store');
        Route::match(['get', 'post'], '/update/id', [OrdersController::class, 'update'])->name('orders_update');
    });
    Route::get('get-events/{id}', [OrdersController::class, 'getEvents'])->name('get-events');
    Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);
});

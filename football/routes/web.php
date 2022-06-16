<?php

use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YardController;
use App\Models\Orders;
use App\Models\User;
use App\Models\Blog;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
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
Route::get('/about-us', function () {
    return view('blog-details');
})->name('about-us');
Route::get('/blogs', function () {
    $blogs = Blog::get();
    return view('blog.index')->with(['blogs' => $blogs]);
})->name('blogs');
Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');
Route::get('/post/{id}', function ($id) {
    $blog = Blog::find($id);
    return view('blog.post')->with(['blog' => $blog]);
})->name('post');
Route::get('/logout', function () {
    session()->forget('user_name');
    session()->forget('user_email');
    session()->forget('img');
    session()->forget('role');
    return view('auth.login');
})->name('logout');
Route::post('/post-login', [UserController::class, 'login'])->name('post-login');
Route::get('/register', function () {
    $district = Config::get('app.app-football.district');
    $role = Config::get('app.app-football.role');
    return view('auth.register', [
        'roles' => $role,
        'districts' => $district
    ]);
})->name('register');
Route::get('/', function (Request $request) {
    $vendor = Users::query()->where('role', 2);
    if (isset($request['district'])) {
        $vendor = $vendor->where('district', $request['district']);
    }
    $vendor = $vendor->get();
    $district = Config::get('app.app-football.district');
    $sizes = Config::get('app.app-football.size');

    return view('front.index', ['vendors' => $vendor, 'districts' => $district, 'sizes' => $sizes]);
})->name('front');

Route::get('booking/{id}', function ($id) {
    return view('front.booking', ['id' => $id]);
})->name('customer-booking');
Route::post('/register/store', [UserController::class, 'registerStore'])->name('register_store');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        for ($i = 1; $i < 13; $i++) {
            $intakes[$i] = Orders::whereMonth('created_at', $i)->get();
        }

        foreach ($intakes as $key => $orders) {
            $sub = 0;
            foreach ($orders as $order) {
                $sub = $sub + $order->amount;
            }
            $dataChart[$key] = $sub;
        }
        $user = Users::find(\Illuminate\Support\Facades\Auth::id());
        $paymentPaid = \App\Models\Payment::query()->where('user_id', \Illuminate\Support\Facades\Auth::id())->where('status', 1)->get()->count();
        $paymentPending = \App\Models\Payment::query()->where('user_id', \Illuminate\Support\Facades\Auth::id())->where('status', 0)->get()->count();
        $customers = Users::query()->where('role', 3)->get();
        return view('dashboard.index', [
            'dataChart' => $dataChart,
            'user' => $user,
            'paymentPaid' => $paymentPaid,
            'paymentPending' => $paymentPending,
            'customers' => $customers
        ]);
    })->name('admin');
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

    Route::prefix('payments')->group(function () {
        Route::get('/store/{id}', [\App\Http\Controllers\PaymentController::class, 'store'])->name('payment_store');

        Route::get('/', [\App\Http\Controllers\PaymentController::class, 'index'])->name('payment_index');
        Route::get('/create', [\App\Http\Controllers\PaymentController::class, 'create'])->name('payment_create');
        Route::get('/edit/{id}', [\App\Http\Controllers\PaymentController::class, 'edit'])->name('payment_edit');
        Route::get('/change-status/{id}', [\App\Http\Controllers\PaymentController::class, 'changeStatus'])->name('payment_change_status');
        Route::get('/change-status-vn-pay/{id}', [\App\Http\Controllers\PaymentController::class, 'changeStatusVnPay'])->name('payment_change_status_vnp');

        //        Route::get('/delete/{id}', [YardController::class, 'destroy'])->name('yard_del');
        //        Route::post('/update/{id}', [YardController::class, 'update'])->name('yard_update');
    });

    Route::prefix('orders')->group(function () {
        Route::get('/', [OrdersController::class, 'index'])->name('orders_index');
        Route::get('/booking/{id}', [OrdersController::class, 'booking'])->name('orders_booking');
        Route::get('/vendor-booking', [OrdersController::class, 'vendorBooking'])->name('vendor_booking');

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
    Route::prefix('blog')->group(function () {
        Route::get('/', function () {
            $blogs = Blog::get();
            return view('blog.blog-dashboard')->with(['blogs' => $blogs]);
        })->name('blog');
        Route::get('/add-blog', function () {
            return view('blog.add-blog');
        })->name('add_blog');
        Route::post('/store', function (Request $request) {
            $data = [
                'title' => $request['title'],
                'content' => $request['content']
            ];
            $blog = Blog::create($data);
            return redirect('/blog');
        })->name('store');

        Route::get('/update/{id}', function ($id) {
            $blog = Blog::find($id);
            return view('blog.update-blog')->with(['blog' => $blog]);
        })->name('update');

        Route::post('/save-update/{id}', function ($id, Request $request) {
            $blog = Blog::find($id);
            $blog->title = $request['title'];
            $blog->content = $request['content'];
            $blog->save();
            return redirect('/blog');
        })->name('save-update');
        Route::get('delete/{id}', function ($id) {
            $blog = Blog::find($id);
            $blog->delete();
            return back();
        })->name('blog-delete');
    });
    Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);
    Route::post('vn_payment', [\App\Http\Controllers\PaymentController::class, 'vn_payment'])->name('vn_payment');
    Route::get('pdf_payment/{id}', [\App\Http\Controllers\PaymentController::class, 'pdf_payment'])->name('pdf_payment');
    Route::post('update-status', [\App\Http\Controllers\PaymentController::class, 'updateStatus'])->name('update-status');
});
Route::get('get-events/{id}', [OrdersController::class, 'getEvents'])->name('get-events');
Route::post('mail-for-admin', [\App\Http\Controllers\PaymentController::class, 'mailForAdmin'])->name('mail-for-admin');

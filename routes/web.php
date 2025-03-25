<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home');
});

// Route::get('/login', function () {
//     return view('Login');
// })->name('login');

// Route to show the login form
Route::get('/login', action: [AuthController::class, 'showLoginForm'])->name('login');

// Route to handle the login form submission
Route::post('/login', [AuthController::class, 'login']);

Route::get('/rooms', function () {
    return view('rooms');
})->name('rooms');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/booknow', function () {
    return view('booknow');
})->name('booknow');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/single-blog', function () {
    return view('single-blog');
})->name('single-blog');

Route::get('/elements', function () {
    return view('elements');
})->name('elements');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

use App\Http\Controllers\OrderController;
Route::post('/order', [OrderController::class, 'sendOrder'])->name('order.send');
Route::get('/orders', [OrderController::class, 'getOrders'])->name('order.list');


Route::get('/create-order', [OrderController::class, 'showForm'])->name('create-order.form');
Route::post('/calculate-total', [OrderController::class, 'calculateTotal'])->name('calculate-total');
Route::post('/send-order', [OrderController::class, 'sendOrder'])->name('send-order');

Route::get('/get-orders', [OrderController::class, 'getOrders'])->name('getOrders');

// use Illuminate\Support\Facades\DB;

// Route::get('/test-db', function () {
//     try {
//         $result = DB::select('SHOW TABLES');
//         dd($result);  // This should return a list of tables in your database
//     } catch (\Exception $e) {
//         dd($e->getMessage());  // Display any error message
//     }
// });



/*Route::post('/admin/create-order', 'OrderController@create')->name('admin.createOrder');
Route::post('/admin/register-member', 'MemberController@register')->name('admin.registerMember');*/


/*Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);*/

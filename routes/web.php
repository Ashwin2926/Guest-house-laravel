<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\BookingController;
use  App\Http\Controllers\CurrentController;
use  App\Http\Controllers\AllController;
use  App\Http\Controllers\ContactController;


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
Route::get('display', 'App\Http\Controllers\DashboardController@disp')->name('display');
Route::view('welcome', 'welcome')->name('welcome');

//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
//profile
Route::view('profile', 'profile')->name('profile');
Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
    ->name('profile.update');

// // for registering user admin
// Route::group(['middleware' => ['auth', 'role:admin']], function() { 
//     Route::get('/dashboard/register', 'App\Http\Controllers\DashboardController@register')->name('dashboard.register');
// });
Route::get('/dashboard/register', 'App\Http\Controllers\DashboardController@register')->name('dashboard.register');

//more nav links
Route::view('clients/all', 'clients/all')->name('all');
Route::view('clients/booking', 'clients/booking')->name('booking');
Route::view('clients/current', 'clients/current')->name('current');

//crud
Route::resource('clients', ClientsController::class)->middleware(['auth']);

//booking controller
Route::resource('book', BookingController::class);
Route::get('shift', [BookingController::class, 'shift'])->name('shift');
//Current clients 
Route::resource('current', CurrentController::class);


//all clients controller
Route::resource('all', AllController::class);
Route::get('move', [AllController::class, 'move'])->name('move');
Route::get('destroy', [AllController::class, 'destroy'])->name('destroy');

//all contact messages
Route::resource('message', ContactController::class);
Route::get('read', [ContactController::class, 'read'])->name('read');


require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminLoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('welcome');
})->name('login');
Route::get('/logout', function () {
    return view('welcome');
})->name('logout');


/*
 * =====================Admin Routes=====================
 */
Route::group(['namespace' => 'backend'], function () {
    Route::get('/admin-login', [AdminLoginController::class, 'index'])->name('admin-login');
    Route::post('/admin-login', [AdminLoginController::class, 'login']);


});

Route::group(['namespace' => 'backend', 'prefix' => 'company-backend', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
//    admin routers
    Route::resource('admin', "\App\Http\Controllers\Backend\AdminController");

    Route::get('admin-logout', [AdminLoginController::class, 'logout'])->name('admin-logout');

});

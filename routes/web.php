<?php

use App\Http\Controllers\LoginAdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/admin/login');
});
Route::group([
    'prefix' => config('admin.prefix'),
    'namespace' => '\App\\Http\\Controllers'
], function () {
    Route::get('login', [LoginAdminController::class, 'formLogin'])->name('admin.login');
    Route::post('login', [LoginAdminController::class, 'login']);

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout', [LoginAdminController::class, 'logout'])->name('admin.logout');
        Route::view('/', 'dashboard')->name('dashboad');
        Route::view('/post', 'data-post')->name('post')->middleware('can:role,"admin","editor"');
        Route::view('/admin', 'data-admin')->name('admin')->middleware('can:role,"admin"');
    });
});

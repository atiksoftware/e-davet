<?php

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

Route::group(['middleware' => 'auth'], function (): void {
	// Route::get('/', function () {
	// 	return view('dashboard.home');
	// });
});

Route::group(['middleware' => 'auth'], function (): void {
	Route::get('/admin/user', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.index');
	Route::get('/admin/user/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.user.create');
	Route::post('/admin/user/store', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.user.store');
	Route::get('/admin/user/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.user.edit');
});

require __DIR__ . '/web.auth.php';

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

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
Route::get('/details/{slug}', [App\Http\Controllers\FrontController::class, 'details'])->name('details');
Route::get('/gate', [App\Http\Controllers\FrontController::class, 'gate'])->name('gate');


Route::post('/auth/login', [AApp\Http\Controllers\AuthController::class, 'login'])->name('user.login');

Route::get('/auth/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('user.logout');

Route::get('/auth/google', [App\Http\Controllers\AuthController::class, 'redirectToGoogle']);
Route::get('/auth/callback', [App\Http\Controllers\AuthController::class, 'callback']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/admin/products', [App\Http\Controllers\AdminProductController::class, 'index'])->name('admin.products');
Route::delete('/admin/product/destroy/{id}', [App\Http\Controllers\AdminProductController::class, 'destroy'])->name('admin.destroy_product');
Route::get('/admin/products/new', [App\Http\Controllers\AdminProductController::class, 'create'])->name('admin.new_product');
Route::post('/admin/products/new', [App\Http\Controllers\AdminProductController::class, 'store'])->name('admin.new_product.store');
});
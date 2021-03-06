<?php

use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\PermissionsController;
use App\Http\Controllers\Backsite\RolesController;
use App\Http\Controllers\Backsite\UsersController;

use App\Http\Controllers\Backsite\Profile\ProfilesController;
use App\Http\Controllers\Backsite\MasterData\CategoryController;
use App\Http\Controllers\Backsite\MasterData\SubscribePackagesController;
use App\Http\Controllers\Backsite\Workspace\UiKitsController;


use App\Http\Controllers\Frontsite\GateController;
use App\Http\Controllers\Frontsite\HomeController;
use App\Http\Controllers\Frontsite\ProductsDownloadedController;


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

Route::redirect('/', '/home');
Route::get('/home', [HomeController::class, 'index'])->name('index.home');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/oops', [HomeController::class, 'oops'])->name('index.oops');
Route::get('/trial/ended', [HomeController::class, 'ended'])->name('index.ended')->middleware(['auth']);
Route::get('/details/{id}', [HomeController::class, 'details'])->name('index.details');
Route::get('/category/{id}', [HomeController::class, 'category'])->name('index.category');
Route::get('/download_product/{id}', [ProductsDownloadedController::class, 'store'])->name('download_product');
Route::get('/checkout/{type}', [HomeController::class, 'checkout'])->name('checkout')->middleware(['auth']);
Route::get('/checkout/pay/{type}', [HomeController::class, 'pay'])->name('pay')->middleware(['auth']);
Route::get('/success_join/{type}', [HomeController::class, 'success_join'])->name('success_join')->middleware(['auth']);


// register member
Route::resource('gates', GateController::class);

Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {

    // redirect after log in
    Route::redirect('/', '/backsite/dashboard');

    
    // dashboard ------------------------------- //
    Route::resource('dashboard', DashboardController::class);
    // dashboard ------------------------------- //


    // management access ------------------------------- //
    // Permissions
    Route::resource('permissions', PermissionsController::class);

    // roles
    Route::resource('roles', RolesController::class);
    // end management access ------------------------------- //


    // users ------------------------------- //
    Route::get('filter/users', [UsersController::class, 'filter'])->name('filter.users');
    Route::resource('users', UsersController::class);
    // end users ------------------------------- //


    // profile ------------------------------- //
    Route::put('update/account/{id}', [ProfilesController::class, 'update_account'])->name('update.account.profiles');
    Route::put('update/security/{id}', [ProfilesController::class, 'update_security'])->name('update.security.profiles');
    Route::put('upload/photo/{id}', [ProfilesController::class, 'upload'])->name('upload.photo.profiles');
    Route::get('reset/photo/{id}', [ProfilesController::class, 'reset'])->name('reset.photo.profiles');
    Route::resource('profiles', ProfilesController::class);
    // end profile ------------------------------- //

    // category ------------------------------- //
    Route::resource('categories', CategoryController::class);
    // category ------------------------------- //

    // category ------------------------------- //
    Route::resource('spackages', SubscribePackagesController::class);
    // category ------------------------------- //

    // ui kit ------------------------------- //
    Route::resource('ui_kits', UiKitsController::class);
    // ui kit ------------------------------- //

});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
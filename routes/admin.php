<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChefController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\MealController;
use App\Http\Controllers\Admin\MenuController;
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

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
   Route::controller(AuthController::class)->group(function () {
       Route::get('/', 'index')->name('index');
       Route::post('/login', 'login')->name('login');
   });
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    /*--- Admin Routes ---*/
    Route::controller(AdminController::class)->group(function () {
        Route::get('/','index')->name('index');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    /*--- Chef Routes ---*/
    Route::group(['prefix' => 'chef', 'as' => 'chef.'], function () {
        Route::controller(ChefController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/update', 'update')->name('update');
            Route::put('/edit', 'edit')->name('edit');
        });
    });

    /*--- Meal Routes ---*/
    Route::group(['prefix' => 'meal', 'as' => 'meal.'], function () {
        Route::controller(MealController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/update', 'update')->name('update');
            Route::put('/edit', 'edit')->name('edit');
        });
    });

    /*--- Category Routes ---*/
    Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/update', 'update')->name('update');
            Route::put('/edit', 'edit')->name('edit');
        });
    });

    /*--- Menu Routes ---*/
    Route::group(['prefix' => 'menu', 'as' => 'menu.'], function () {
        Route::controller(MenuController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/delete', 'delete')->name('delete');
            Route::post('/update', 'update')->name('update');
            Route::put('/edit', 'edit')->name('edit');
        });
    });

    /*--- Menu Routes ---*/
    Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
        Route::controller(ContactUsController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::delete('/delete', 'delete')->name('delete');
        });
    });

});
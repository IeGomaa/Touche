<?php

use App\Http\Controllers\EndUser\EndUserController;
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


Route::group(['prefix' => '/', 'as' => 'endUser.'], function () {
    Route::controller(EndUserController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/meal','meal')->name('meal');
        Route::get('/menu','menu')->name('menu');
        Route::get('/chef','chef')->name('chef');
        Route::get('/gallery','gallery')->name('gallery');
        Route::get('/contact','contact')->name('contact');
        Route::post('/store','storeUserMessage')->name('store');
    });
});

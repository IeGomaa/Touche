<?php

use App\Http\Controllers\Api\Admin\ApiCategoryController;
use App\Http\Controllers\Api\Admin\ApiChefController;
use App\Http\Controllers\Api\Admin\ApiContactUsController;
use App\Http\Controllers\Api\Admin\ApiMealController;
use App\Http\Controllers\Api\Admin\ApiMenuController;
use App\Http\Controllers\Api\EndUser\ApiUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'category'], function () {
        Route::controller(ApiCategoryController::class)->group(function () {
            Route::get('/','index');
            Route::post('/create','create');
            Route::post('/delete','delete');
            Route::post('/update','update');
        });
    });

    Route::group(['prefix' => 'meal'], function () {
        Route::controller(ApiMealController::class)->group(function () {
            Route::get('/','index');
            Route::post('/create','create');
            Route::post('/delete','delete');
            Route::post('/update','update');
        });
    });

    Route::group(['prefix' => 'chef'], function () {
        Route::controller(ApiChefController::class)->group(function () {
            Route::get('/','index');
            Route::post('/create','create');
            Route::post('/delete','delete');
            Route::post('/update','update');
        });
    });

    Route::group(['prefix' => 'menu'], function () {
        Route::controller(ApiMenuController::class)->group(function () {
            Route::get('/','index');
            Route::post('/create','create');
            Route::post('/delete','delete');
            Route::post('/update','update');
        });
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::controller(ApiContactUsController::class)->group(function () {
            Route::get('/','index');
            Route::post('/delete','delete');
        });
    });

});

Route::group(['prefix' => '/'], function () {
    Route::controller(ApiUserController::class)->group(function () {
        Route::get('index','index');
        Route::get('gallery','gallery');
        Route::get('menu','menu');
        Route::get('chef','chef');
        Route::post('contact','contact');
    });
});

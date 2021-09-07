<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Route::redirect('/', '/ru');
//
//Route::group(['prefix' => '{language}'], function () {
//    Auth::routes();
//    Route::get('/', 'HomeController@index')->name('main');
//});

//admin panel
    $groupData = [
        'namespace' => 'Admin',
        'prefix' => 'admin',
        'middleware' => ['auth', 'role:admin'],
    ];

    Route::group($groupData, function () {
        Route::get('/', 'AdminController@index')->name('admin.enter');
        Route::resource('news', 'AdminPostController')->names('admin.news')->only('index', 'edit', 'create', 'store', 'update', 'destroy');
        Route::resource('slider', 'AdminSliderController')->names('admin.slider')->only('index', 'edit', 'create', 'store', 'update', 'destroy');
        Route::resource('service', 'AdminServiceController')->names('admin.service')->only('index', 'edit', 'create', 'store', 'update', 'destroy');
        Route::resource('category', 'AdminCategoryController')->names('admin.category')->only('index', 'edit', 'create', 'store', 'update', 'destroy');
        Route::resource('option', 'AdminOptionController')->names('admin.option')->only( 'edit', 'update');
        Route::resource('product', 'AdminProductController')->names('admin.product')->only('index', 'edit', 'create', 'store', 'update', 'destroy');
    });

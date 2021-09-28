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

//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Route;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::redirect('/', '/ru');
Route::redirect('/admin', '/ru/login');

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect' , 'localizationRedirect' , 'localeViewPath' ]
], function()
{

    Auth::routes(['register' => false]);
    Route::get('/', 'urolController@index')->name('main');
    Route::get('contacts', 'urolController@contacts')->name('contacts');
    Route::get('news', 'urolController@news')->name('news');
    Route::get('news/{slug?}', 'urolController@item')->name('item');
    Route::get('service/{slug?}', 'urolController@service')->name('service');

});

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
        Route::resource('characteristics', 'AdminCharacteristicController')->names('admin.character')->only('index', 'edit', 'create', 'store', 'update', 'destroy');
        Route::resource('product-character', 'AdminProductCharacteristic')->names('admin.product-character')->only('edit', 'store', 'update');
        Route::resource('contacts', 'AdminContactController')->names('admin.contacts')->only('edit', 'update');

        Route::get('add-product-characteristic/{idProduct}','AdminController@addCharacteristicProduct')->name('admin.addCharacteristicProduct');

    });

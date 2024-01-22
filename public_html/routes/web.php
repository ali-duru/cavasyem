<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => '/'], function () {
    
    Route::get('/', 'IndexController@index');
    Route::get('/anasayfa', 'IndexController@index')->name('index');

    Route::get('/urunler', 'ProductController@index')->name('product.index');
    Route::get('/urunler/{product}', 'ProductController@show')->name('product.show');

    Route::get('/beslenme-onerileri', 'FoodController@index')->name('food.index');
    Route::get('/beslenme-onerileri/{food}', 'FoodController@show')->name('food.show');

    Route::prefix('/')->namespace('Corporate')->group(function () {
        Route::get('/hakkimizda', 'AboutController@index')->name('about.index');
        Route::get('/kalite', 'QualityController@index')->name('quality.index');
        Route::get('/vizyon', 'VisionController@index')->name('vision.index');
        Route::get('/misyon', 'MissionController@index')->name('mission.index');
        Route::get('/laboratuvar', 'LabController@index')->name('lab.index');
    });


    Route::get('/puf-noktalari/{trick}', 'TrickController@show')->name('trick.show');

    Route::get('/galeri', 'GalleryController@index')->name('gallery.index');

    Route::get('/insan-kaynaklari', 'HumanResourceController@index')->name('human.resource.index');
    Route::post('/insan-kaynaklari', 'HumanResourceController@store')->name('human.resource.store');

    Route::get('/bayilik-formu', 'DealershipController@index')->name('dealership.index');

    Route::get('/iletisim', 'ContactController@index')->name('contact.index');
    Route::post('/iletisim/store', 'ContactController@store')->name('contact.store');
	
	 Route::get('/sikayet', 'ContactController@complaint')->name('complaint.index');
    Route::post('/sikayet/store', 'ContactController@complaintStore')->name('complaint.store');

    Route::get('/search', 'SearchController@get')->name('search.get');

    Route::get('/{privacy}', 'PrivacyController@show')->name('privacy.show');
    
});

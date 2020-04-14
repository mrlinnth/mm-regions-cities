<?php

Route::prefix('api/mmrc')
    ->middleware('api')
    ->name('api-mmrc.')
    ->group(function () {

        Route::get('/', 'Mrlinnth\Mmrc\Http\Controllers\Api\MmrcController@index')->name('index');
        Route::get('regions', 'Mrlinnth\Mmrc\Http\Controllers\Api\MmrcController@regionIndex')->name('regions.index');
        Route::get('regions/{region}', 'Mrlinnth\Mmrc\Http\Controllers\Api\MmrcController@regionShow')->name('regions.show');
        Route::get('cities', 'Mrlinnth\Mmrc\Http\Controllers\Api\MmrcController@cityIndex')->name('cities.index');

    });

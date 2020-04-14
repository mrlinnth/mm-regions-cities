<?php

Route::prefix('mmrc')
    ->middleware('web')
    ->name('mmrc.')
    ->group(function () {

        Route::get('test', '\\Mrlinnth\\Mmrc\\Http\\Controllers\\MmrcController@test')->name('test');

    });

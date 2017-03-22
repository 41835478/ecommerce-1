<?php

/*
 * Admin Routes that needs login
 */
Route::group(['middleware' => ['authorization'],'prefix' => 'common','namespace'=>'common\language'], function () {

    Route::controller('translate', 'TranslateController', [
        'getEditLanguage'=>'common.language.translate'
    ]);
});


<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'common', 'namespace' => 'common\users'], function () {


    Route::resource('users', 'Users');


});


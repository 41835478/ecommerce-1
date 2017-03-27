<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_cart'], function () {


    Route::resource('cms_cart', 'CmsCart');


});


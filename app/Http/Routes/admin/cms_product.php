<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_product'], function () {


    Route::resource('cms_product', 'CmsProduct');


});


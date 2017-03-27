<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_product_description'], function () {


    Route::resource('cms_product_description', 'CmsProductDescription');


});


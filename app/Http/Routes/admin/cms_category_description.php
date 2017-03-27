<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_category_description'], function () {


    Route::resource('cms_category_description', 'CmsCategoryDescription');


});


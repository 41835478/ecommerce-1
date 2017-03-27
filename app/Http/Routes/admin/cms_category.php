<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_category'], function () {


    Route::resource('cms_category', 'CmsCategory');


});


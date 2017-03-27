<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_page'], function () {


    Route::resource('cms_page', 'CmsPage');


});


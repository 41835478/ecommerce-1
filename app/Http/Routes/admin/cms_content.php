<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_content'], function () {


    Route::resource('cms_content', 'CmsContent');


});


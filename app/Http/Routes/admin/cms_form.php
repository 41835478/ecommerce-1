<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_form'], function () {


    Route::resource('cms_form', 'CmsForm');


});


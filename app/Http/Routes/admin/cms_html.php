<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_html'], function () {


    Route::resource('cms_html', 'CmsHtml');


});


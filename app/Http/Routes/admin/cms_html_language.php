<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_html_language'], function () {


    Route::resource('cms_html_language', 'CmsHtmlLanguage');


});


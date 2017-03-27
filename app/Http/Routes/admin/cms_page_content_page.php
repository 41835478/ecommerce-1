<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_page_content_page'], function () {


    Route::resource('cms_page_content_page', 'CmsPageContentPage');


});


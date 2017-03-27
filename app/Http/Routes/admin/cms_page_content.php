<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_page_content'], function () {


    Route::resource('cms_page_content', 'CmsPageContent');


});


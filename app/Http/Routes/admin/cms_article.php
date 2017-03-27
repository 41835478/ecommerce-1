<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_article'], function () {


    Route::resource('cms_article', 'CmsArticle');


});


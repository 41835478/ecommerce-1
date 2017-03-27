<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_article_language'], function () {


    Route::resource('cms_article_language', 'CmsArticleLanguage');


});


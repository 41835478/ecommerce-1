<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_compare_list'], function () {


    Route::resource('cms_compare_list', 'CmsCompareList');


});


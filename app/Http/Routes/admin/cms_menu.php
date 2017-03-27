<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_menu'], function () {


    Route::resource('cms_menu', 'CmsMenu');


});


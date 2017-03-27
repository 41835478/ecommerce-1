<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_menu_item'], function () {


    Route::resource('cms_menu_item', 'CmsMenuItem');


});


<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_menu_item_language'], function () {


    Route::resource('cms_menu_item_language', 'CmsMenuItemLanguage');


});


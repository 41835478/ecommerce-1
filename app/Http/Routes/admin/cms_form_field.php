<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_form_field'], function () {


    Route::resource('cms_form_field', 'CmsFormField');


});


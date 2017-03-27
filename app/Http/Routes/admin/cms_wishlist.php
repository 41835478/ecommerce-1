<?php
Route::group(['middleware' => ['authorization'],'prefix' => 'admin', 'namespace' => 'admin\cms_wishlist'], function () {


    Route::resource('cms_wishlist', 'CmsWishlist');


});


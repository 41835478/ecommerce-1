<?php

Route::group(['middleware' => ['authenticate.admin']], function () {
    Route::get('/', ['as' => 'admin.index', 'uses' => 'DashboardController@index']);

    

    Route::resource('cms_category', 'CmsCategory');


    Route::resource('cms_category_description', 'CmsCategoryDescription');


    Route::resource('cms_product', 'CmsProduct');


    Route::resource('cms_product_description', 'CmsProductDescription');


    Route::resource('cms_cart', 'CmsCart');


    Route::resource('cms_wishlist', 'CmsWishlist');


    Route::resource('cms_compare_list', 'CmsCompareList');

});

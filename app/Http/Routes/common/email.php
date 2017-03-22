<?php


Route::group(['middleware' => ['authorization'],'prefix' => 'common','namespace'=>'common\email'], function () {

    

    Route::resource('email_template', 'EmailTemplate');


    Route::resource('email_mass_template', 'EmailMassTemplate');


    Route::resource('email_mass_queue', 'EmailMassQueue');


    Route::resource('email_group', 'EmailGroup');


    Route::resource('email_group_users', 'EmailGroupUsers');

});

<?php

Route::get('login', [
    'before'=>'changeLanguage',
    'as' => 'client.auth.login',
    'uses' => 'common\authentication\AuthController@getLogin'
]);
Route::post('login', [
    'before'=>'changeLanguage',
    'uses' => 'common\authentication\AuthController@postLogin'
]);

Route::get('mt4-signup', [
    'before'=>'changeLanguage',
    'as' => 'client.auth.mt4Signup',
    'uses' => 'common\authentication\AuthController@getMt4Signup'
]);
Route::post('mt4-signup', [
    'before'=>'changeLanguage',
    'uses' => 'common\authentication\AuthController@postMt4Signup'
]);

Route::get('logout', [
    'as' => 'client.auth.logout',
    'uses' => 'common\authentication\AuthController@getLogout'
]);

Route::get('register', [
    'before'=>'changeLanguage',
    'as' => 'client.auth.register',
    'uses' => 'common\authentication\AuthController@getRegister'
]);

Route::get('recover', [
    'before'=>'changeLanguage',
    'as' => 'client.auth.recover',
    'uses' => 'AuthController@getRecover'
]);
Route::post('recover', [
    'as' => 'client.auth.recover',
    'uses' => 'AuthController@postRecover'
]);
Route::get('resetForgetPassword/{userId}/{code}', [
    'before'=>'changeLanguage',
    'as' => 'client.auth.resetForgetPassword',
    'uses' => 'AuthController@getResetForgetPassword'
]);
Route::post('resetForgetPassword/{userId}/{code}', [
    'before'=>'changeLanguage',
    'as' => 'client.auth.resetForgetPassword',
    'uses' => 'AuthController@postResetForgetPassword'
]);


Route::get('activateAccount/{userId}/{code}', [
    'before'=>'changeLanguage',
    'as' => 'client.auth.activateAccount',
    'uses' => 'AuthController@getActivateAccount'
]);

Route::post('activateAccount/{userId}/{code}', [
    'as' => 'client.auth.activateAccount',
    'uses' => 'AuthController@postResendActivateEmail'
]);




Route::Filter('changeLanguage',function($route, $oRequest){
    if ($oRequest->has('locale')) {
        Session::put('locale',$oRequest['locale']);
        return Redirect::back();
    } else if (!Session::has('locale')) {
        Session::put('locale', 'en');
    }


    App::setLocale(Session::get('locale'));


});

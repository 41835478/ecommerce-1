<?php


require_once __DIR__ . "/Routes/Client/files.php";


Route::group(['prefix' => 'client', 'namespace' => 'Client'], function () {
    require_once __DIR__ . "/Routes/Client/Dashboard.php";
    require_once __DIR__ . "/Routes/Client/language.php";
    require_once __DIR__ . "/Routes/Client/Auth.php";
});


Route::group(['prefix' => 'common', 'namespace' => 'common\email'], function () {
    require_once __DIR__ . "/Routes/common/email.php";
});


//Event::listen('illuminate.query', function($query)
//{
//    var_dump($query);
//});
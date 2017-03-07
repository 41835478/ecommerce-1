<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controller('files','\App\Http\Controllers\common\FilesController',
    [
        'postUpload'=>'common.files.upload',
        'getFileBrowser'=>'common.files.browser',
    'postUploadAjax'=>'common.files.uploadAjax'
    ]);


Route::get('/', function () {
    return view('client.public.dashboard');
});

Route::group(['prefix' => 'client', 'namespace' => 'Client'], function () {
    require_once __DIR__ . "/Routes/Client/Dashboard.php";
    require_once __DIR__ . "/Routes/Client/Auth.php";
});

//Event::listen('illuminate.query', function($query)
//{
//    var_dump($query);
//});

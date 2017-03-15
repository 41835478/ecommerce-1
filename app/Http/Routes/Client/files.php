<?php


Route::controller('files','\App\Http\Controllers\common\FilesController',
    [
        'postUpload'=>'common.files.upload',
        'getFileBrowser'=>'common.files.browser',
        'postUploadAjax'=>'common.files.uploadAjax'
    ]);

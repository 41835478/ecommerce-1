<?php


Route::controller('files','\App\Http\Controllers\common\files\FilesController',
    [
        'postUpload'=>'common.files.upload',
        'getFileBrowser'=>'common.files.browser',
        'postUploadAjax'=>'common.files.uploadAjax'
    ]);

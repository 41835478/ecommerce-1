<?php

namespace App\Http\Controllers\common\files;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;


use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

class FilesController extends Controller
{
    /* _________________________________________upload_image */

    public function postUpload()
    {
        $file = Input::file('upload');
        $allowed_ext = ["png", "jpg", "jpeg", "gif", "bmp", "svg"];
        $fileExt = strtolower($file->getClientOriginalExtension());

        if (in_array($fileExt, $allowed_ext)) {
            $imageName = rand() . '_' . rand() . $file->getClientOriginalName();
            if ($file->move( 'files/', $imageName)) {
                return 'the image was uploaded successfully .';
            }//uploaded successfully
            else {
                return 'error, not uploaded ...';
            }//error uploaded
        } //allowed extinsions
        else {
            return 'this file extension not allowed';
        }//not allowed file extintion
    }

//function upload_image()

    public function getFileBrowser()
    {

        $funnum = Input::get('CKEditorFuncNum');
        $files = File::allFiles('files/');
        return view('common.files.imagesBrowser', [
                'files' => $files,
                'funnum' => $funnum,
                'asset_folder' => ''
            ]
        );
    }


    public function postUploadAjax(){

        $file = Input::file('upload');
      //  $allowed_ext = ["png", "jpg", "jpeg", "gif", "bmp", "svg","pdf","docx"];
        if($file == null){ echo 'error|no file'; exit();}
        $fileExt = strtolower($file->getClientOriginalExtension());

        if (true) {//in_array($fileExt, $allowed_ext)
            $imageName = rand() . '_' . rand() . $file->getClientOriginalName();
            if ($file->move( 'files/', $imageName)) {
                echo 'success|'.'files/'. $imageName;
            }//uploaded successfully
            else {
                echo 'error|error';
            }//error uploaded
        } //allowed extinsions
        else {
            echo 'error|notAllowed';
        }//not allowed file extintion
        exit();
    }
    /* _____________________________________end__upload_image */

}
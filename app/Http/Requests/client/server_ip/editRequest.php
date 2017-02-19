<?php
namespace App\Http\Requests\client\server_ip;

use App\Http\Requests\Request;

class editRequest extends Request
{
/**
* Determine if the user is authorized to make this request.
*
* @return bool
*/
public function authorize()
{
return true;
}

/**
* Get the validation rules that apply to the request.
*
* @return array
*/
public function rules()
{
return [
    "server_detail_id"=>'required',
    "ip"=>'required',
    "default_getway"=>'required',
    "mask"=>'required',
    "name_server_1"=>'required',
    "name_server_2"=>'required',
    "type"=>'required',
    "display"=>'required',



];
}
}

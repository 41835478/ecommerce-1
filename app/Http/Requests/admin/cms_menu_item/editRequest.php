<?php
namespace App\Http\Requests\admin\cms_menu_item;

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
    "cms_menu_id"=>'required',
    "name"=>'required',
    "disable"=>'required',
    "hide"=>'required',
    "module_type"=>'required',
    "module_id"=>'required',
    "order"=>'required',



];
}
}

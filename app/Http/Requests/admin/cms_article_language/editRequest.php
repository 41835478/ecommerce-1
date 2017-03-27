<?php
namespace App\Http\Requests\admin\cms_article_language;

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
    "cms_article_id"=>'required',
    "cms_language_id"=>'required',
    "name"=>'required',
    "body"=>'required',



];
}
}

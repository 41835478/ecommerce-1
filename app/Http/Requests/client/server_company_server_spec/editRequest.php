<?php
namespace App\Http\Requests\client\server_company_server_spec;

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
    "server_company_id"=>'required',
    "server_spec_id"=>'required',
    "cost"=>'required',
    "period"=>'required',



];
}
}

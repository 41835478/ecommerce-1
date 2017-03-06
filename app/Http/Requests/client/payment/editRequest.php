<?php
namespace App\Http\Requests\client\payment;

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
    "invoice_id"=>'required',
    "amount"=>'required',
    "status"=>'required',
    "payment_condition"=>'required',
    "create_date"=>'required',
    "due_date"=>'required',
    "description"=>'required',



];
}
}

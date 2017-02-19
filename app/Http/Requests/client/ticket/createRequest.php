<?php
namespace App\Http\Requests\client\ticket;

use App\Http\Requests\Request;

class createRequest extends Request
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
    "contact_id"=>'required',
    "contract_id"=>'required',
    "name"=>'required',
    "type"=>'required',
    "status"=>'required',
    "description"=>'required',
    "create_time"=>'required',
    "open_time"=>'required',
    "close_time"=>'required',



        ];
    }
}

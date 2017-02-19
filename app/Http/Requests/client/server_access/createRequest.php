<?php
namespace App\Http\Requests\client\server_access;

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
    "server_ip_id"=>'required',
    "type"=>'required',
    "user_name"=>'required',
    "password"=>'required',



        ];
    }
}

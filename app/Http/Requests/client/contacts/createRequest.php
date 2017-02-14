<?php

namespace App\Http\Requests\client\contacts;

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
            "company_id"=>'required|numeric',
            "users_id"=>'',
            "name"=>'required|min:1|max:100',
            "password"=>'required|min:7|max:100',
            "email"=>'required|email',
            "phone"=>'required|max:20',
            "description"=>'required',
            "status"=>'required|numeric'


        ];
    }
}

<?php

namespace App\Http\Requests\client\emails;

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
            "contacts_id" =>'required|numeric',
            "email" =>'required|email',
            "module" =>'required',
            "status" =>'required|numeric',
            "optout" =>'required|numeric',


        ];
    }
}

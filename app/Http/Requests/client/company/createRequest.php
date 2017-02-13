<?php

namespace App\Http\Requests\client\company;

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
            "name"=>'required',
            "email"=>'required|email',
            "phone"=>'required|max:20',
            "website"=>'required',
            "address"=>'required',
            "country"=>'required',
            "city"=>'required',
            "zipcode"=>'required',
            "status"=>'required|numeric'
        ];
    }
}

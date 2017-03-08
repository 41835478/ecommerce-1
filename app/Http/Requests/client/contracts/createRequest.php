<?php

namespace App\Http\Requests\client\contracts;

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
            "company_id"=>'required|numeric',
            "products_id"=>'required|numeric',
            "type"=>'required|numeric',
            "status"=>'required|numeric',
            "purchasing_date"=>'required|date',


        ];
    }
}

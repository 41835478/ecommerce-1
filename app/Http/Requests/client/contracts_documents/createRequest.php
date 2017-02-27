<?php

namespace App\Http\Requests\client\contracts_documents;

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
            "contracts_id"=>'required|numeric',
            "products_id"=>'required|numeric',
            "name"=>'required',
            "links"=>'required',
            "type" =>'required',



        ];
    }
}

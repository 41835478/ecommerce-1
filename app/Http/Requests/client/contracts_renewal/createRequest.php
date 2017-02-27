<?php

namespace App\Http\Requests\client\contracts_renewal;

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
            "from_date"=>'required|date',
            "to_date"=>'required|date',
            "price"=>'required',


        ];
    }
}

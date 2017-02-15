<?php

namespace App\Http\Requests\client\web_hosting_plans;

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
            'name'=>'required',
            'web_space'=>'required',
            'domains_number'=>'required|numeric',
            'emails'=>'required|numeric',
            'traffic'=>'required|numeric',


        ];
    }
}

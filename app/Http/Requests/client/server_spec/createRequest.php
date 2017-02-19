<?php
namespace App\Http\Requests\client\server_spec;

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
    "hard_disk"=>'required',
    "cpu"=>'required',
    "port"=>'required',
    "ram"=>'required',
    "raid"=>'required',



        ];
    }
}

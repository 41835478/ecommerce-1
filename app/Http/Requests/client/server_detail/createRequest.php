<?php
namespace App\Http\Requests\client\server_detail;

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
    "server_spec_id"=>'required',
    "name"=>'required',
    "server_company_spec_id"=>'required',
    "cost"=>'required',
    "unique_name"=>'required',
    "operating_system"=>'required',
    "control_panel"=>'required',
    "additional_cost"=>'required',



        ];
    }
}

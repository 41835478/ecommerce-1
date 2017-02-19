<?php
namespace App\Http\Requests\client\logtime;

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
    "support_id"=>'required',
    "ticket_id"=>'required',
    "hours"=>'required',
    "summary"=>'required',
    "expenses"=>'required',
    "create_date"=>'required',



        ];
    }
}

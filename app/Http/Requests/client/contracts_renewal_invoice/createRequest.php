<?php
namespace App\Http\Requests\client\contracts_renewal_invoice;

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
    "contracts_id"=>'required',
    "contracts_renewal_id"=>'required',
    "invoice_id"=>'required',
    "description"=>'required',



        ];
    }
}

<?php
namespace App\Http\Requests\client\roles;

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
    "slug"=>'required',
    "name"=>'required',
    "permissions"=>'required',
    "created_at"=>'required',
    "updated_at"=>'required',



        ];
    }
}

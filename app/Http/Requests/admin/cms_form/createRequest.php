<?php
namespace App\Http\Requests\admin\cms_form;

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
    "page_id"=>'required',
    "name"=>'required',
    "alias"=>'required',



        ];
    }
}

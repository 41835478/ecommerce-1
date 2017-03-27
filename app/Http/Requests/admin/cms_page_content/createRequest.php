<?php
namespace App\Http\Requests\admin\cms_page_content;

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
    "module_id"=>'required',
    "type"=>'required',
    "cms_page_id"=>'required',
    "module_name"=>'required',
    "order"=>'required',
    "float"=>'required',
    "display"=>'required',
    "position"=>'required',
    "all_pages"=>'required',



        ];
    }
}

<?php
namespace App\Http\Requests\admin\cms_menu_item;

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


        $name = $this->name;




        $alias=strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/','/[ -]+/','/^-|-$/'),array('','-',''), $this->name));


        $this->merge(['alias'=>$alias]);


        return [
    "cms_menu_id"=>'required',
    "name"=>'required',
    "disable"=>'required',
    "hide"=>'required',
    "module_type"=>'required',
    "module_id"=>'required',
    "order"=>'required',



        ];
    }
}

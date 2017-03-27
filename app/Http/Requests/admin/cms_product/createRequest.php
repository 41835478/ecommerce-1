<?php
namespace App\Http\Requests\admin\cms_product;

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
    "cms_category_id"=>'required',
    "name"=>'required',
    "location"=>'required',
    "quantity"=>'required',
    "image"=>'required',
    "shipping"=>'required',
    "price"=>'required',
    "points"=>'required',
    "date_available"=>'required',
    "weight"=>'required',
    "length"=>'required',
    "width"=>'required',
    "height"=>'required',
    "subtract"=>'required',
    "minimum"=>'required',
    "sort_order"=>'required',
    "status"=>'required',
    "viewed"=>'required',
    "model"=>'required',
    "sku"=>'required',
    "upc"=>'required',
    "ean"=>'required',
    "jan"=>'required',
    "isbn"=>'required',
    "mpn"=>'required',



        ];
    }
}

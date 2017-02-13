<?php
namespace App\Repositories\client\products;

use Session;
use App\Models\Products;
use App\Repositories\client\products\ProductsContract;

class EloquentProductsRepository implements ProductsContract
{

    public function getByFilter($data)
    {

        $oResults = Products::with('productsList');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }
        if (isset($data->products_list_id) && !empty($data->products_list_id)) {
            $oResults = $oResults->where('products_list_id', '=', $data['products_list_id']);
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->description) && !empty($data->description)) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
        }
        if (isset($data->order) && !empty($data->order)) {
            $sort = (isset($data->sort) && !empty($data->sort)) ? $data->sort : 'desc';
            $oResults = $oResults->orderBy($data->order, $sort);
        }


        if(isset($data->getAllRecords) && !empty($data->getAllRecords)){
            $oResults = $oResults->get();
        }
        elseif (isset($data->page_name) && !empty($data->page_name)) {
            $oResults = $oResults->paginate(config('mycp.pagination_size'), ['*'], $data->page_name);
        }else{
            $oResults = $oResults->paginate(config('mycp.pagination_size'));
        }
        return $oResults;
    }


    public function getAllList(){

        $oResults = new Products();

        $oResults = $oResults::lists('name','id');
        return $oResults;
    }
    public function create($data)
    {

        $result = Products::create($data);

        if ($result) {
            Session::flash('flash_message', 'products added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$products = Products::findOrFail($id);

        return $products;
    }

    public function destroy($id)
    {

        $result =  Products::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'products deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$products = Products::findOrFail($id);
       $result= $products->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'products updated!');
            return true;
        } else {
            return false;
        }

    }

}

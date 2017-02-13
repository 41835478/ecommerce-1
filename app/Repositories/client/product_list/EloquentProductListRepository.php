<?php

namespace App\Repositories\client\product_list;

use Session;
use App\Models\ProductList;
use App\Repositories\client\product_list\ProductListContract;

class EloquentProductListRepository implements ProductListContract
{

    public function getByFilter($data)
    {

        $oResults = new ProductList();

        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
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

        $oResults = new ProductList();

        $oResults = $oResults::lists('name','id');
        return $oResults;
    }

    public function create($data)
    {

        $result = ProductList::create($data);

        if ($result) {
            Session::flash('flash_message', 'product_list added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

        $product_list = ProductList::findOrFail($id);

        return $product_list;
    }

    public function destroy($id)
    {

        $result =  ProductList::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'product_list deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
        $product_list = ProductList::findOrFail($id);
       $result= $product_list->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'product_list updated!');
            return true;
        } else {
            return false;
        }

    }

}

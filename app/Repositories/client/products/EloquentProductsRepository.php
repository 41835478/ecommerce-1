<?php
namespace App\Repositories\client\products;

use Session;
use App\Models\Products;
use App\Repositories\client\products\ProductsContract;

class EloquentProductsRepository implements ProductsContract
{

    public function getByFilter($data)
    {

        $oResults = Products::with(['productsList','versions'=>function($query){$query->orderBy('publish_date','desc');}]);

        if(!canAccess('client.products.otherData')){

            $oResults =$oResults->join('contracts',function($query){
                $query->on('contracts.products_id','=','products.id');
                $query->where('contracts.type','=',config('array.productsTypeIndex'));
                $query->where('contracts.company_id','=',company_id());
            })->select(['products.*']);

        }

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }

        if (isset($data->products_list_id) && !empty($data->products_list_id)) {
            $oResults = $oResults->where('products_list_id', '=', $data['products_list_id']);
        }
        if (isset($data->manual) && !empty($data->manual)) {
            $oResults = $oResults->where('manual', '=', $data['manual']);
        }
        if (isset($data->article) && !empty($data->article)) {
            $oResults = $oResults->where('article', '=', $data['article']);
        }
        if (isset($data->files_id) && !empty($data->files_id)) {
            $oResults = $oResults->where('files_id', '=', $data['files_id']);
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

        $oResults = Products::with('productsList')->orderBy('name');

        $oResults = $oResults->get();
        $aResults=[];
        foreach($oResults as $oResult){
            $productListName=(isset($oResult->productsList->name))? $oResult->productsList->name:'';
            $aResults[$oResult->id]=$productListName.' ( '.$oResult->name.' ) ';

        }
        return $aResults;
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

$products = Products::find($id);

        return ($products)?  $products:false;
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

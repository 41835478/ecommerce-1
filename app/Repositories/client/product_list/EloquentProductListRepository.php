<?php

namespace App\Repositories\client\product_list;


use App\Models\ProductList;
use App\Repositories\client\product_list\ProductListContract;

class EloquentProductListRepository implements ProductListContract
{

   public function getByFilter($data){

       $oResults=new ProductList();

       if(isset($data->name) && !empty($data->name)){
           $oResults=$oResults->where('name','like','%'.$data['name'].'%');
       }

       if(isset($data->order)&& !empty($data->order)){
           $sort=(isset($data->sort)&& !empty($data->sort))? $data->sort:'desc';
           $oResults=$oResults->orderBy($data->order,$sort);
       }

       $oResults=$oResults->paginate(15);
return $oResults;
   }

}

<?php
namespace App\Repositories\client\support;

use Session;
use App\Models\Support;
use App\Repositories\client\support\SupportContract;

class EloquentSupportRepository implements SupportContract
{

    public function getByFilter($data)
    {

        $oResults = new Support();

        if(!canAccess('client.support.otherData')){

            $oResults =$oResults->join('contracts',function($query){
                $query->on('contracts.products_id','=','support.id');
                $query->where('contracts.type','=',config('array.supportTypeIndex'));
                $query->where('contracts.company_id','=',company_id());
            })->select(['support.*'])->distinct('id');

        }
        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', 'like', '%' . $data['type'] . '%');
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

        $oResults = new Support();

        $oResults = $oResults->orderBy('name')->lists('name','id');
        return $oResults;
    }
    public function create($data)
    {

        $result = Support::create($data);

        if ($result) {
            Session::flash('flash_message', 'support added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$support = Support::findOrFail($id);

        return $support;
    }

    public function destroy($id)
    {

        $result =  Support::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'support deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$support = Support::findOrFail($id);
       $result= $support->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'support updated!');
            return true;
        } else {
            return false;
        }

    }

}

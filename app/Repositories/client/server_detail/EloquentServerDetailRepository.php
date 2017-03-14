<?php
namespace App\Repositories\client\server_detail;

use Session;
use App\Models\ServerDetail;
use App\Repositories\client\server_detail\ServerDetailContract;

class EloquentServerDetailRepository implements ServerDetailContract
{

    public function getByFilter($data)
    {

        $oResults =ServerDetail::with('server_spec');


        if(!canAccess('client.server_detail.otherData')){

            $oResults =$oResults->join('contracts',function($query){
                $query->on('contracts.products_id','=','server_detail.id');
                $query->where('contracts.type','=',config('array.serverTypeIndex'));
                $query->where('contracts.company_id','=',company_id());
            })->select(['server_detail.*']);

        }

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }

        if (isset($data->server_spec_id) && !empty($data->server_spec_id)) {
            $oResults = $oResults->where('server_spec_id', '=', $data['server_spec_id']);
        }


        if (isset($data->company_id) && !empty($data->company_id)) {
            $oResults = $oResults->where('company_id', '=', $data['company_id']);
        }


        if (isset($data->location) && !empty($data->location)) {
            $oResults = $oResults->where('location', '=', $data['location']);
        }



        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }

        if (isset($data->cost) && !empty($data->cost)) {
            $oResults = $oResults->where('cost', 'like', '%' . $data['cost'] . '%');
        }
        if (isset($data->unique_name) && !empty($data->unique_name)) {
            $oResults = $oResults->where('unique_name', 'like', '%' . $data['unique_name'] . '%');
        }
        if (isset($data->operating_system) && !empty($data->operating_system)) {
            $oResults = $oResults->where('operating_system', '=', $data['operating_system'] );
        }
        if (isset($data->control_panel) && !empty($data->control_panel)) {
            $oResults = $oResults->where('control_panel', '=', $data['control_panel'] );
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

        $oResults = new ServerDetail();

        $oResults = $oResults->orderBy('name')->lists('name','id');
        return $oResults;
    }


    public function create($data)
    {

        $result = ServerDetail::create($data);

        if ($result) {
            Session::flash('flash_message', 'server_detail added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$server_detail = ServerDetail::findOrFail($id);

        return $server_detail;
    }

    public function destroy($id)
    {

        $result =  ServerDetail::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'server_detail deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$server_detail = ServerDetail::findOrFail($id);
       $result= $server_detail->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'server_detail updated!');
            return true;
        } else {
            return false;
        }

    }

}

<?php
namespace App\Repositories\client\server_locations;

use Session;
use App\Models\ServerLocations;
use App\Repositories\client\server_locations\ServerLocationsContract;

class EloquentServerLocationsRepository implements ServerLocationsContract
{

    public function getByFilter($data)
    {

        $oResults = new ServerLocations();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->server_company_id) && !empty($data->server_company_id)) {
            $oResults = $oResults->where('server_company_id', 'like', '%' . $data['server_company_id'] . '%');
        }
        if (isset($data->location_id) && !empty($data->location_id)) {
            $oResults = $oResults->where('location_id', 'like', '%' . $data['location_id'] . '%');
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

    public function create($data)
    {

        $result = ServerLocations::create($data);

        if ($result) {
            Session::flash('flash_message', 'server_locations added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$server_locations = ServerLocations::findOrFail($id);

        return $server_locations;
    }

    public function destroy($id)
    {

        $result =  ServerLocations::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'server_locations deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$server_locations = ServerLocations::findOrFail($id);
       $result= $server_locations->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'server_locations updated!');
            return true;
        } else {
            return false;
        }

    }

}

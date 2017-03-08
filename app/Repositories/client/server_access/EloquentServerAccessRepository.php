<?php
namespace App\Repositories\client\server_access;

use Session;
use App\Models\ServerAccess;
use App\Repositories\client\server_access\ServerAccessContract;

class EloquentServerAccessRepository implements ServerAccessContract
{

    public function getByFilter($data)
    {

        $oResults =  ServerAccess::with('server_ip');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }
        if (isset($data->server_ip_id) && !empty($data->server_ip_id)) {
            $oResults = $oResults->where('server_ip_id', '=', $data['server_ip_id'] );
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', '=', $data['type'] );
        }
        if (isset($data->user_name) && !empty($data->user_name)) {
            $oResults = $oResults->where('user_name', 'like', '%' . $data['user_name'] . '%');
        }
        if (isset($data->password) && !empty($data->password)) {
            $oResults = $oResults->where('password', 'like', '%' . $data['password'] . '%');
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

        $oResults = new ServerAccess();

        $oResults = $oResults->orderBy('user_name')->lists('user_name','id');

        return $oResults;
    }

    public function create($data)
    {

        $result = ServerAccess::create($data);

        if ($result) {
            Session::flash('flash_message', 'server_access added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$server_access = ServerAccess::findOrFail($id);

        return $server_access;
    }

    public function destroy($id)
    {

        $result =  ServerAccess::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'server_access deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$server_access = ServerAccess::findOrFail($id);
       $result= $server_access->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'server_access updated!');
            return true;
        } else {
            return false;
        }

    }

}

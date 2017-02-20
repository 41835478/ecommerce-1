<?php
namespace App\Repositories\client\server_ip;

use Session;
use App\Models\ServerIp;
use App\Repositories\client\server_ip\ServerIpContract;

class EloquentServerIpRepository implements ServerIpContract
{

    public function getByFilter($data)
    {

        $oResults = new ServerIp();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }
        if (isset($data->server_detail_id) && !empty($data->server_detail_id)) {
            $oResults = $oResults->where('server_detail_id', '=', $data['server_detail_id'] );
        }
        if (isset($data->ip) && !empty($data->ip)) {
            $oResults = $oResults->where('ip', 'like', '%' . $data['ip'] . '%');
        }
        if (isset($data->default_getway) && !empty($data->default_getway)) {
            $oResults = $oResults->where('default_getway', 'like', '%' . $data['default_getway'] . '%');
        }
        if (isset($data->mask) && !empty($data->mask)) {
            $oResults = $oResults->where('mask', 'like', '%' . $data['mask'] . '%');
        }
        if (isset($data->name_server_1) && !empty($data->name_server_1)) {
            $oResults = $oResults->where('name_server_1', 'like', '%' . $data['name_server_1'] . '%');
        }
        if (isset($data->name_server_2) && !empty($data->name_server_2)) {
            $oResults = $oResults->where('name_server_2', 'like', '%' . $data['name_server_2'] . '%');
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', '=', $data['type'] );
        }
        if (isset($data->display) && !empty($data->display)) {
            $oResults = $oResults->where('display', '=',$data['display'] );
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

        $oResults = new ServerIp();

        $oResults = $oResults::lists('ip','id');
        return $oResults;
    }


    public function create($data)
    {

        $result = ServerIp::create($data);

        if ($result) {
            Session::flash('flash_message', 'server_ip added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$server_ip = ServerIp::findOrFail($id);

        return $server_ip;
    }

    public function destroy($id)
    {

        $result =  ServerIp::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'server_ip deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$server_ip = ServerIp::findOrFail($id);
       $result= $server_ip->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'server_ip updated!');
            return true;
        } else {
            return false;
        }

    }

}

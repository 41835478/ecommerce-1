<?php
namespace App\Repositories\client\server_spec;

use Session;
use App\Models\ServerSpec;
use App\Repositories\client\server_spec\ServerSpecContract;

class EloquentServerSpecRepository implements ServerSpecContract
{

    public function getByFilter($data)
    {

        $oResults = new ServerSpec();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=' ,$data['id']);
        }
        if (isset($data->server_company_id) && !empty($data->server_company_id)) {
            $server_compnay_id=$data->server_company_id;
            $oResults = $oResults->with('server_company')->whereHas('server_company',function($query)use($server_compnay_id){
                $query->where('server_company_id','=',$server_compnay_id);
            });

        }

        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->hard_disk) && !empty($data->hard_disk)) {
            $oResults = $oResults->where('hard_disk', 'like', '%' . $data['hard_disk'] . '%');
        }
        if (isset($data->cpu) && !empty($data->cpu)) {
            $oResults = $oResults->where('cpu', 'like', '%' . $data['cpu'] . '%');
        }
        if (isset($data->port) && !empty($data->port)) {
            $oResults = $oResults->where('port', 'like', '%' . $data['port'] . '%');
        }
        if (isset($data->ram) && !empty($data->ram)) {
            $oResults = $oResults->where('ram', 'like', '%' . $data['ram'] . '%');
        }
        if (isset($data->raid) && !empty($data->raid)) {
            $oResults = $oResults->where('raid', '=', $data['raid'] );
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

        $oResults = new ServerSpec();

        $oResults = $oResults::lists('name','id');
        return $oResults;
    }


    public function create($data)
    {

        $result = ServerSpec::create($data);

        if ($result) {
            Session::flash('flash_message', 'server_spec added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$server_spec = ServerSpec::findOrFail($id);

        return $server_spec;
    }

    public function destroy($id)
    {

        $result =  ServerSpec::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'server_spec deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$server_spec = ServerSpec::findOrFail($id);
       $result= $server_spec->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'server_spec updated!');
            return true;
        } else {
            return false;
        }

    }

}

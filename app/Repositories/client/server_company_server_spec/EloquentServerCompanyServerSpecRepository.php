<?php
namespace App\Repositories\client\server_company_server_spec;

use Session;
use App\Models\ServerCompanyServerSpec;
use App\Repositories\client\server_company_server_spec\ServerCompanyServerSpecContract;

class EloquentServerCompanyServerSpecRepository implements ServerCompanyServerSpecContract
{

    public function getByFilter($data)
    {

        $oResults =  ServerCompanyServerSpec::with('server_company','server_spec');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=',$data['id'] );
        }
        if (isset($data->server_company_id) && !empty($data->server_company_id)) {
            $oResults = $oResults->where('server_company_id', '=', $data['server_company_id'] );
        }
        if (isset($data->server_spec_id) && !empty($data->server_spec_id)) {
            $oResults = $oResults->where('server_spec_id', '=',$data['server_spec_id'] );
        }
        if (isset($data->cost) && !empty($data->cost)) {
            $oResults = $oResults->where('cost', '=', $data['cost'] );
        }
        if (isset($data->period) && !empty($data->period)) {
            $oResults = $oResults->where('period', '=' , $data['period'] );
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

        $oResults =  ServerCompanyServerSpec::with('server_company','server_spec');

        $oResults = $oResults->get();
        $aResults=[];
        foreach($oResults as $oResult){
            $server_company=(isset($oResult->server_company->name))? ' ( '.$oResult->server_company->name.' ) ':' (*)';
            $server_spec=(isset($oResult->server_spec->name))? $oResult->server_spec->name:'';
            $aResults[$oResult->id]=$server_spec.$server_company;
        }
        return $aResults;
    }



    public function create($data)
    {

        $result = ServerCompanyServerSpec::create($data);

        if ($result) {
            Session::flash('flash_message', 'server_company_server_spec added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$server_company_server_spec = ServerCompanyServerSpec::findOrFail($id);

        return $server_company_server_spec;
    }

    public function destroy($id)
    {

        $result =  ServerCompanyServerSpec::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'server_company_server_spec deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$server_company_server_spec = ServerCompanyServerSpec::findOrFail($id);
       $result= $server_company_server_spec->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'server_company_server_spec updated!');
            return true;
        } else {
            return false;
        }

    }

}

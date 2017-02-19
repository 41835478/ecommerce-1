<?php
namespace App\Repositories\client\server_company;

use Session;
use App\Models\ServerCompany;
use App\Repositories\client\server_company\ServerCompanyContract;

class EloquentServerCompanyRepository implements ServerCompanyContract
{

    public function getByFilter($data)
    {

        $oResults = new ServerCompany();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
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

    public function create($data)
    {

        $result = ServerCompany::create($data);

        if ($result) {
            Session::flash('flash_message', 'server_company added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$server_company = ServerCompany::findOrFail($id);

        return $server_company;
    }

    public function destroy($id)
    {

        $result =  ServerCompany::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'server_company deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$server_company = ServerCompany::findOrFail($id);
       $result= $server_company->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'server_company updated!');
            return true;
        } else {
            return false;
        }

    }

}

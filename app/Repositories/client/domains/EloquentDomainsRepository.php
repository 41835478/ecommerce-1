<?php
namespace App\Repositories\client\domains;

use Session;
use App\Models\Domains;
use App\Repositories\client\domains\DomainsContract;

class EloquentDomainsRepository implements DomainsContract
{

    public function getByFilter($data)
    {

        $oResults =new Domains();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->provider) && !empty($data->provider)) {
            $oResults = $oResults->where('provider', 'like', '%' . $data['provider'] . '%');
        }

        if (isset($data->cost) && !empty($data->cost)) {
            $oResults = $oResults->where('cost', '=', $data['cost'] );
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

        $oResults = new Domains();

        $oResults = $oResults::lists('name','id');
        return $oResults;
    }
    public function create($data)
    {

        $result = Domains::create($data);

        if ($result) {
            Session::flash('flash_message', 'domains added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$domains = Domains::findOrFail($id);

        return $domains;
    }

    public function destroy($id)
    {

        $result =  Domains::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'domains deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$domains = Domains::findOrFail($id);
       $result= $domains->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'domains updated!');
            return true;
        } else {
            return false;
        }

    }

}

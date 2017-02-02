<?php
namespace App\Repositories\client\contracts_renewal;

use Session;
use App\Models\ContractsRenewal;
use App\Repositories\client\contracts_renewal\ContractsRenewalContract;

class EloquentContractsRenewalRepository implements ContractsRenewalContract
{

    public function getByFilter($data)
    {

        $oResults = new ContractsRenewal();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->contracts_id) && !empty($data->contracts_id)) {
            $oResults = $oResults->where('contracts_id', 'like', '%' . $data['contracts_id'] . '%');
        }
        if (isset($data->description) && !empty($data->description)) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
        }
        if (isset($data->price) && !empty($data->price)) {
            $oResults = $oResults->where('price', 'like', '%' . $data['price'] . '%');
        }
        if (isset($data->order) && !empty($data->order)) {
            $sort = (isset($data->sort) && !empty($data->sort)) ? $data->sort : 'desc';
            $oResults = $oResults->orderBy($data->order, $sort);
        }

        $oResults = $oResults->paginate(15);
        return $oResults;
    }

    public function create($data)
    {

        $result = ContractsRenewal::create($data);

        if ($result) {
            Session::flash('flash_message', 'contracts_renewal added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$contracts_renewal = ContractsRenewal::findOrFail($id);

        return $contracts_renewal;
    }

    public function destroy($id)
    {

        $result =  ContractsRenewal::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'contracts_renewal deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$contracts_renewal = ContractsRenewal::findOrFail($id);
       $result= $contracts_renewal->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'contracts_renewal updated!');
            return true;
        } else {
            return false;
        }

    }

}

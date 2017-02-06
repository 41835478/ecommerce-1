<?php
namespace App\Repositories\client\licenses;

use Session;
use App\Models\Licenses;
use App\Repositories\client\licenses\LicensesContract;

class EloquentLicensesRepository implements LicensesContract
{

    public function getByFilter($data)
    {

        $oResults = Licenses::with('company');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->company_id) && !empty($data->company_id)) {
            $oResults = $oResults->where('company_id', 'like', '%' . $data['company_id'] . '%');
        }
        if (isset($data->license) && !empty($data->license)) {
            $oResults = $oResults->where('license', 'like', '%' . $data['license'] . '%');
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', 'like', '%' . $data['type'] . '%');
        }
        if (isset($data->status) && !empty($data->status)) {
            $oResults = $oResults->where('status', 'like', '%' . $data['status'] . '%');
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

        $result = Licenses::create($data);

        if ($result) {
            Session::flash('flash_message', 'licenses added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$licenses = Licenses::findOrFail($id);

        return $licenses;
    }

    public function destroy($id)
    {

        $result =  Licenses::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'licenses deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$licenses = Licenses::findOrFail($id);
       $result= $licenses->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'licenses updated!');
            return true;
        } else {
            return false;
        }

    }

}

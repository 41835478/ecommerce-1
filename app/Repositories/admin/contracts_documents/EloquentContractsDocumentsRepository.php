<?php
namespace App\Repositories\client\contracts_documents;

use Session;
use App\Models\ContractsDocuments;
use App\Repositories\client\contracts_documents\ContractsDocumentsContract;

class EloquentContractsDocumentsRepository implements ContractsDocumentsContract
{

    public function getByFilter($data)
    {

        $oResults = new ContractsDocuments();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->contracts_id) && !empty($data->contracts_id)) {
            $oResults = $oResults->where('contracts_id', 'like', '%' . $data['contracts_id'] . '%');
        }
        if (isset($data->products_id) && !empty($data->products_id)) {
            $oResults = $oResults->where('products_id', 'like', '%' . $data['products_id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->links) && !empty($data->links)) {
            $oResults = $oResults->where('links', 'like', '%' . $data['links'] . '%');
        }
        if (isset($data->description) && !empty($data->description)) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', 'like', '%' . $data['type'] . '%');
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

        $result = ContractsDocuments::create($data);

        if ($result) {
            Session::flash('flash_message', 'contracts_documents added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$contracts_documents = ContractsDocuments::findOrFail($id);

        return $contracts_documents;
    }

    public function destroy($id)
    {

        $result =  ContractsDocuments::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'contracts_documents deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$contracts_documents = ContractsDocuments::findOrFail($id);
       $result= $contracts_documents->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'contracts_documents updated!');
            return true;
        } else {
            return false;
        }

    }

}

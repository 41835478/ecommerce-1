<?php
namespace App\Repositories\client\invoice;

use Session;
use App\Models\Invoice;
use App\Repositories\client\invoice\InvoiceContract;

class EloquentInvoiceRepository implements InvoiceContract
{

    public function getByFilter($data)
    {

        $oResults =Invoice::with('company');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->create_date) && !empty($data->create_date)) {
            $oResults = $oResults->where('create_date', 'like', '%' . $data['create_date'] . '%');
        }
        if (isset($data->due_date) && !empty($data->due_date)) {
            $oResults = $oResults->where('due_date', 'like', '%' . $data['due_date'] . '%');
        }
        if (isset($data->description) && !empty($data->description)) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
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

          $oResults = new Invoice();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = Invoice::create($data);

        if ($result) {
            Session::flash('flash_message', 'invoice added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$invoice = Invoice::findOrFail($id);

        return $invoice;
    }

    public function destroy($id)
    {

        $result =  Invoice::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'invoice deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$invoice = Invoice::findOrFail($id);
       $result= $invoice->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'invoice updated!');
            return true;
        } else {
            return false;
        }

    }

}

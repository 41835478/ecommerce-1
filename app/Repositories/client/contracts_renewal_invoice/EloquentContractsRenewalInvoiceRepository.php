<?php
namespace App\Repositories\client\contracts_renewal_invoice;

use Session;
use App\Models\ContractsRenewalInvoice;
use App\Repositories\client\contracts_renewal_invoice\ContractsRenewalInvoiceContract;

class EloquentContractsRenewalInvoiceRepository implements ContractsRenewalInvoiceContract
{

    public function getByFilter($data)
    {

        $oResults =  ContractsRenewalInvoice::with('contracts','contracts_renewal','invoice');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }

        if(!canAccess('client.contracts_renewal_invoice.otherData')){

            $oResults =$oResults->join('contracts',function($query){
                $query->on('contracts.id','=','contracts_renewal_invoice.invoice_id');
                $query->where('contracts.company_id','=',company_id());
            })->select(['contracts_renewal_invoice.*']);

        }
        if (isset($data->contracts_id) && !empty($data->contracts_id)) {
            $oResults = $oResults->where('contracts_id', '=' , $data['contracts_id'] );
        }
        if (isset($data->contracts_renewal_id) && !empty($data->contracts_renewal_id)) {
            $oResults = $oResults->where('contracts_renewal_id', '=' , $data['contracts_renewal_id']);
        }
        if (isset($data->invoice_id) && !empty($data->invoice_id)) {
            $oResults = $oResults->where('invoice_id', '=' , $data['invoice_id']);
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



    public function create($data)
    {

        $result = ContractsRenewalInvoice::create($data);

        if ($result) {
            Session::flash('flash_message', 'contracts_renewal_invoice added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$contracts_renewal_invoice = ContractsRenewalInvoice::findOrFail($id);

        return $contracts_renewal_invoice;
    }

    public function destroy($id)
    {

        $result =  ContractsRenewalInvoice::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'contracts_renewal_invoice deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$contracts_renewal_invoice = ContractsRenewalInvoice::findOrFail($id);
       $result= $contracts_renewal_invoice->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'contracts_renewal_invoice updated!');
            return true;
        } else {
            return false;
        }

    }

}

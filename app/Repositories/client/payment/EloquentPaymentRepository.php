<?php
namespace App\Repositories\client\payment;

use Session;
use App\Models\Payment;
use App\Repositories\client\payment\PaymentContract;

class EloquentPaymentRepository implements PaymentContract
{

    public function getByFilter($data)
    {

        $oResults =Payment::with('invoice');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id'] );
        }
        if (isset($data->invoice_id) && !empty($data->invoice_id)) {
            $oResults = $oResults->where('invoice_id', '=' , $data['invoice_id'] );
        }
        if (isset($data->amount) && !empty($data->amount)) {
            $oResults = $oResults->where('amount', '=', $data['amount']);
        }
        if (isset($data->status) && !empty($data->status)) {
            $oResults = $oResults->where('status', '=',  $data['status'] );
        }
        if (isset($data->payment_condition) && !empty($data->payment_condition)) {
            $oResults = $oResults->where('payment_condition', 'like', '%' . $data['payment_condition'] . '%');
        }
        if (isset($data->create_date) && !empty($data->create_date)) {
            $oResults = $oResults->where('create_date', '=' , $data['create_date'] );
        }
        if (isset($data->due_date) && !empty($data->due_date)) {
            $oResults = $oResults->where('due_date', '=' , $data['due_date']);
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

          return [];
    }

    public function create($data)
    {

        $result = Payment::create($data);

        if ($result) {
            Session::flash('flash_message', 'payment added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$payment = Payment::findOrFail($id);

        return $payment;
    }

    public function destroy($id)
    {

        $result =  Payment::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'payment deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$payment = Payment::findOrFail($id);
       $result= $payment->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'payment updated!');
            return true;
        } else {
            return false;
        }

    }

}

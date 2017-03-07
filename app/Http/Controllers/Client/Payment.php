<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\payment\createRequest;
use App\Http\Requests\client\payment\editRequest;
use Session;
use Carbon\Carbon;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Payment as mPayment;
use App\Repositories\client\payment\PaymentContract as rPayment;
use App\Repositories\client\invoice\InvoiceContract as rInvoice;
class Payment extends Controller
{
    private $rPayment;

    public function __construct(rPayment $rPayment)
    {
        $this->rPayment=$rPayment;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rPayment->getByFilter($aFilterParams);

        return view('client.payment.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request,rInvoice $rInvoice)
    {

        $invoiceList=$rInvoice->getAllList();

        $request->merge(['due_date'=>Carbon::now()->format('Y-m-d')]);
        $request->merge(['create_date'=>Carbon::now()->format('Y-m-d')]);
        return view('client.payment.create',compact('request','invoiceList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rPayment->create($request->all());

        return redirect('client/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id,Request $request)
    {


        $payment=$this->rPayment->show($id);


        return view('client.payment.show', compact('payment','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id,rInvoice $rInvoice)
    {

        $payment=$this->rPayment->show($id);

        $invoiceList=$rInvoice->getAllList();


        return view('client.payment.edit', compact('payment','invoiceList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, editRequest $request)
    {

        $result=$this->rPayment->update($id,$request);



        return redirect('client/payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        $payment=$this->rPayment->destroy($id);
        return redirect('client/payment');
    }


}

<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\contracts_renewal_invoice\createRequest;
use App\Http\Requests\client\contracts_renewal_invoice\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ContractsRenewalInvoice as mContractsRenewalInvoice;
use App\Repositories\client\contracts_renewal_invoice\ContractsRenewalInvoiceContract as rContractsRenewalInvoice;
use App\Repositories\client\invoice\InvoiceContract as rInvoice;
use App\Repositories\client\contracts\ContractsContract as rContracts;
use App\Repositories\client\contracts_renewal\ContractsRenewalContract as rContractsRenewal;
class ContractsRenewalInvoice extends Controller
{
    private $rContractsRenewalInvoice;

    public function __construct(rContractsRenewalInvoice $rContractsRenewalInvoice)
    {
        $this->rContractsRenewalInvoice=$rContractsRenewalInvoice;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rContractsRenewalInvoice->getByFilter($aFilterParams);

        return view('client.contracts_renewal_invoice.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request,rInvoice $rInvoice,rContracts $rContracts,rContractsRenewal $rContractsRenewal)
    {

        $invoiceList=$rInvoice->getAllList();
        $contractsList=$rContracts->getAllList((isset($request->company_id)?$request->company_id:0));

        $contractsId=0;
        if(isset($request->contracts_id)){
            $contractsId=$request->contracts_id;
        }
        elseif(count($contractsList)){

            $contractsId=0;
            foreach($contractsList as $key=>$contract){
                $contractsId=$key; break;
            }
            $request->contracts_id=$contractsId;
        }
        $contractsRenewalList=[0=>trans('general.selectOne')]+$rContractsRenewal->getAllList($contractsId);


        return view('client.contracts_renewal_invoice.create',compact('request','invoiceList','contractsList','contractsRenewalList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rContractsRenewalInvoice->create($request->all());

        return redirect('/client/invoice/'.$request->invoice_id);
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


        $contracts_renewal_invoice=$this->rContractsRenewalInvoice->show($id);


        return view('client.contracts_renewal_invoice.show', compact('contracts_renewal_invoice','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id,Request $request,rInvoice $rInvoice,rContracts $rContracts,rContractsRenewal $rContractsRenewal)
    {

        $contracts_renewal_invoice=$this->rContractsRenewalInvoice->show($id);

        $invoiceList=$rInvoice->getAllList();
        $contractsList=$rContracts->getAllList((isset($contracts_renewal_invoice->invoice->company_id)?$contracts_renewal_invoice->invoice->company_id:0));


        $contractsId=0;
        if(isset($request->contracts_id)){
            $contractsId=$request->contracts_id;
            $contracts_renewal_invoice->contracts_id=$request->contracts_id;
        }
        elseif($contracts_renewal_invoice){

            $contractsId=$contracts_renewal_invoice->contracts_id;
            $request->merge(['contracts_id'=>$contractsId]);
        }
        elseif(count($contractsList)){

            $contractsId=0;
            foreach($contractsList as $key=>$contract){
                $contractsId=$key; break;
            }
        }
        $contractsRenewalList=[0=>trans('general.selectOne')]+$rContractsRenewal->getAllList($contractsId);


        return view('client.contracts_renewal_invoice.edit', compact('contracts_renewal_invoice','request','invoiceList','contractsList','contractsRenewalList'));
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

        $result=$this->rContractsRenewalInvoice->update($id,$request);


        $contracts_renewal_invoice=$this->rContractsRenewalInvoice->show($id);


        return redirect('/client/invoice/'.$contracts_renewal_invoice->invoice_id);

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

        $contracts_renewal_invoice=$this->rContractsRenewalInvoice->show($id);
      $this->rContractsRenewalInvoice->destroy($id);


        return redirect('/client/invoice/'.$contracts_renewal_invoice->invoice_id);

    }


}

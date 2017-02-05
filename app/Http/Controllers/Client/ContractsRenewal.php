<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ContractsRenewal as mContractsRenewal;
use App\Repositories\client\contracts_renewal\ContractsRenewalContract as rContractsRenewal;
class ContractsRenewal extends Controller
{
    private $rContractsRenewal;

    public function __construct(rContractsRenewal $rContractsRenewal)
    {
        $this->rContractsRenewal=$rContractsRenewal;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rContractsRenewal->getByFilter($aFilterParams);

        return view('client.contracts_renewal.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function  create(Request $request)
    {
        return view('client.contracts_renewal.create',compact('request'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


        $oResults=$this->rContractsRenewal->create($request->all());

        return redirect('client/contracts_renewal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {


        $contracts_renewal=$this->rContractsRenewal->show($id);


        return view('client.contracts_renewal.show', compact('contracts_renewal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {


        $contracts_renewal=$this->rContractsRenewal->show($id);

        return view('client.contracts_renewal.edit', compact('contracts_renewal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {

        $result=$this->rContractsRenewal->update($id,$request);



        return redirect('client/contracts_renewal');
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
        $contracts_renewal=$this->rContractsRenewal->destroy($id);
        return redirect('client/contracts_renewal');
    }


}

<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ContractsDocuments as mContractsDocuments;
use App\Repositories\client\contracts_documents\ContractsDocumentsContract as rContractsDocuments;
class ContractsDocuments extends Controller
{
    private $rContractsDocuments;

    public function __construct(rContractsDocuments $rContractsDocuments)
    {
        $this->rContractsDocuments=$rContractsDocuments;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rContractsDocuments->getByFilter($aFilterParams);

        return view('client.contracts_documents.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('client.contracts_documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


        $oResults=$this->rContractsDocuments->create($request->all());

        return redirect('client/contracts_documents');
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


        $contracts_documents=$this->rContractsDocuments->show($id);


        return view('client.contracts_documents.show', compact('contracts_documents'));
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


        $contracts_documents=$this->rContractsDocuments->show($id);

        return view('client.contracts_documents.edit', compact('contracts_documents'));
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

        $result=$this->rContractsDocuments->update($id,$request);



        return redirect('client/contracts_documents');
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
        $contracts_documents=$this->rContractsDocuments->destroy($id);
        return redirect('client/contracts_documents');
    }


}

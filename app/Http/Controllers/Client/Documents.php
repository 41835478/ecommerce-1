<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\documents\createRequest;
use App\Http\Requests\client\documents\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Documents as mDocuments;
use App\Repositories\client\documents\DocumentsContract as rDocuments;


class Documents extends Controller
{
    private $rDocuments;

    public function __construct(rDocuments $rDocuments)
    {
        $this->rDocuments=$rDocuments;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rDocuments->getByFilter($aFilterParams);

        return view('client.documents.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request)
    {


        $documentsList=$this->rDocuments->getAllList();

        return view('client.documents.create',compact('request','documentsList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rDocuments->create($request->all());

        return redirect('client/documents');
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


        $documents=$this->rDocuments->show($id);
        $childrenDocuments=$this->rDocuments->getChildren($id);

        return view('client.documents.show', compact('request','documents','childrenDocuments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id,Request $request)
    {

        $documents=$this->rDocuments->show($id);

        $documentsList=$this->rDocuments->getAllList();


        return view('client.documents.edit', compact('documents','request','documentsList'));
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

        $result=$this->rDocuments->update($id,$request);



        return redirect('client/documents');
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
        $documents=$this->rDocuments->destroy($id);
        return redirect('client/documents');
    }


}

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


use App\Repositories\client\products\ProductsContract as rProducts;
use App\Repositories\client\domains\DomainsContract as rDomains;
use App\Repositories\client\web_hosting_plans\WebHostingPlansContract as rWebHostingPlans;
use App\Repositories\client\contracts_renewal\ContractsRenewalContract as rContractsRenewal;
use App\Repositories\client\contracts_documents\ContractsDocumentsContract as rContractsDocuments;
use App\Repositories\client\server_detail\ServerDetailContract as rServer;
use App\Repositories\client\support\SupportContract as rSupport;
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
    public function create(Request $request,rProducts $rProducts,rDomains $rDomains,rWebHostingPlans $rWebHostingPlans,rServer $rServer, rSupport $rSupport)
    {


        $documentsList=$this->rDocuments->getAllList();
        $productsList=$rProducts->getAllList();
        $domainsList=$rDomains->getAllList();
        $webHostingPlansList=$rWebHostingPlans->getAllList();
        $serverList=$rServer->getAllList();

        $supportList=$rSupport->getAllList();
        return view('client.documents.create',compact('request','documentsList','productsList','domainsList','webHostingPlansList','serverList','supportList'));
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
    public function edit($id,Request $request,rProducts $rProducts,rDomains $rDomains,rWebHostingPlans $rWebHostingPlans,rServer $rServer, rSupport $rSupport)
    {

        $documents=$this->rDocuments->show($id);

        $documentsList=$this->rDocuments->getAllList();
        $productsList=$rProducts->getAllList();
        $domainsList=$rDomains->getAllList();
        $webHostingPlansList=$rWebHostingPlans->getAllList();
        $serverList=$rServer->getAllList();

        $supportList=$rSupport->getAllList();

        return view('client.documents.edit', compact('documents','request','documentsList','productsList','domainsList','webHostingPlansList','serverList','supportList'));
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

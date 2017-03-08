<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\files\createRequest;
use App\Http\Requests\client\files\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Files as mFiles;
use App\Repositories\client\files\FilesContract as rFiles;


use App\Repositories\client\products\ProductsContract as rProducts;
use App\Repositories\client\domains\DomainsContract as rDomains;
use App\Repositories\client\web_hosting_plans\WebHostingPlansContract as rWebHostingPlans;
use App\Repositories\client\contracts_renewal\ContractsRenewalContract as rContractsRenewal;
use App\Repositories\client\contracts_documents\ContractsDocumentsContract as rContractsDocuments;
use App\Repositories\client\server_detail\ServerDetailContract as rServer;
use App\Repositories\client\support\SupportContract as rSupport;
class Files extends Controller
{
    private $rFiles;

    public function __construct(rFiles $rFiles)
    {
        $this->rFiles=$rFiles;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        if(!isset($request->parent)){
            $request->merge(['parent'=>0]);
        }

        $aFilterParams=$request;
        $oResults=$this->rFiles->getByFilter($aFilterParams);

        return view('client.files.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request)
    {

        $filesList=$this->rFiles->getAllList();


        return view('client.files.create',compact('request','filesList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rFiles->create($request->all());

        return redirect('client/files');
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


        $files=$this->rFiles->show($id);
        $childrenFiles=$this->rFiles->getChildren($id);


        return view('client.files.show', compact('files','request','childrenFiles'));
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

        $files=$this->rFiles->show($id);

        $filesList=$this->rFiles->getAllList();



        return view('client.files.edit', compact('files','request','filesList'));
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

        $result=$this->rFiles->update($id,$request);



        return redirect('client/files');
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
        $files=$this->rFiles->destroy($id);
        return redirect('client/files');
    }


}

<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\versions\createRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

use Carbon\Carbon;

use App\Models\Versions as mVersions;
use App\Repositories\client\versions\VersionsContract as rVersions;
use App\Repositories\client\products\ProductsContract as rProducts;
use App\Repositories\client\documents\DocumentsContract as rDocuments;
use App\Repositories\client\files\FilesContract as rFiles;
class Versions extends Controller
{
    private $rVersions;

    public function __construct(rVersions $rVersions,rProducts $rProducts)
    {
        $this->rVersions=$rVersions;
        $this->rProducts=$rProducts;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rVersions->getByFilter($aFilterParams);

        return view('client.versions.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function    create(Request $request,rDocuments $rDocuments,rFiles $rFiles)
    {

        $productsList=$this->rProducts->getAllList();
        $request->merge(['publish_date'=>Carbon::now()->format('Y-m-d')]);


        $articleList= $rDocuments->getAllList(config('array.articleIndex'));
        $manualList=  $rDocuments->getAllList(config('array.manualIndex'));
        $releaseNotesList=  $rDocuments->getAllList(config('array.notesIndex'));


        $productsId=0;
        if(isset($request->products_id)){
            $productsId=$request->products_id;
        }
        elseif(count($productsList)){

            $productsId=reset($productsList);
            $request->products_id=$productsId;
        }
        $selectedProduct=$this->rProducts->show($productsId);
        $selectedProductFile=0;
        if($selectedProduct){
            $selectedProductFile=$selectedProduct->files_id;
        }
        $filesList=  $rFiles->getAllList($selectedProductFile);

        return view('client.versions.create',compact('request','productsList','articleList','manualList','releaseNotesList','filesList'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rVersions->create($request->all());

        return redirect('client/versions');
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


        $versions=$this->rVersions->show($id);


        return view('client.versions.show', compact('versions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id,Request $request,rDocuments $rDocuments,rFiles $rFiles)
    {


        $versions=$this->rVersions->show($id);
        $productsList=$this->rProducts->getAllList();


        $articleList= $rDocuments->getAllList(config('array.articleIndex'));
        $manualList=  $rDocuments->getAllList(config('array.manualIndex'));
        $releaseNotesList=  $rDocuments->getAllList(config('array.notesIndex'));


        $productsId=0;
        if(isset($request->products_id)){
            $productsId=$request->products_id;
            $versions->products_id=$request->products_id;
        }
        elseif($versions){

            $productsId=$versions->products_id;
            $request->merge(['products_id'=>$productsId]);
        }
        elseif(count($productsList)){

            $productsId=reset($productsList);
        }



        $selectedProduct=$this->rProducts->show($productsId);
        $selectedProductFile=0;
        if($selectedProduct){
            $selectedProductFile=$selectedProduct->files_id;
        }
        $filesList=  $rFiles->getAllList($selectedProductFile);


        return view('client.versions.edit', compact('versions','request','productsList','articleList','manualList','releaseNotesList','filesList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, createRequest $request)
    {

        $result=$this->rVersions->update($id,$request);



        return redirect('client/versions');
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
        $versions=$this->rVersions->destroy($id);
        return redirect('client/versions');
    }


}

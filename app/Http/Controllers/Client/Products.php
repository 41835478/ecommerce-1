<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\products\createRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Products as mProducts;
use App\Repositories\client\products\ProductsContract as rProducts;
use App\Repositories\client\products_list\ProductsListContract as rProductList;
use App\Repositories\client\versions\VersionsContract as rVersions;
use App\Repositories\client\contracts\ContractsContract as rContracts;
class Products extends Controller
{
    private $rProducts;
    private $rProductList;

    public function __construct(rProducts $rProducts,rProductList $rProductList)
    {
        $this->rProductList=$rProductList;
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
        $oResults=$this->rProducts->getByFilter($aFilterParams);

        return view('client.products.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function  create(Request $request)
    {
        $productsListArray=$this->rProductList->getAllList();

        return view('client.products.create',compact('request','productsListArray'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rProducts->create($request->all());

        return redirect('client/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id,Request $request,rVersions $rVersions,rContracts $rContracts)
    {


        $products=$this->rProducts->show($id);

        $request->merge(['products_id'=>$id,'page_name'=>'page']);

        $request->page_name='page_versions';
        $oVersionsResults=$rVersions->getByFilter($request);


        $request->page_name='page_contracts';
        $oContractsResults=$rContracts->getByFilter($request);

        return view('client.products.show', compact('products','request','oVersionsResults','oContractsResults'));
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


        $products=$this->rProducts->show($id);
        $productsListArray=$this->rProductList->getAllList();


        return view('client.products.edit', compact('products','productsListArray'));
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

        $result=$this->rProducts->update($id,$request);



        return redirect('client/products');
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
        $products=$this->rProducts->destroy($id);
        return redirect('client/products');
    }


}

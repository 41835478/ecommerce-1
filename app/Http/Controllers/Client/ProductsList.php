<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\products_list\createRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ProductsList as mProductsList;
use App\Repositories\client\products_list\ProductsListContract as rProductsList;
use App\Repositories\client\products\ProductsContract as rProducts;
class ProductsList extends Controller
{
    private $rProductsList;

    public function __construct(rProductsList $rProductsList)
    {
        $this->rProductsList=$rProductsList;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rProductsList->getByFilter($aFilterParams);

        return view('client.products_list.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function   create(Request $request)
    {
        return view('client.products_list.create',compact('request'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rProductsList->create($request->all());

        return redirect('client/products_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id,Request $request,rProducts $rProducts)
    {


        $products_list=$this->rProductsList->show($id);

        $request->merge(['products_list_id'=>$id,'page_name'=>'page']);
        $request->page_name='page_products';
        $oProductsResults=$rProducts->getByFilter($request);

        return view('client.products_list.show', compact('products_list','request','oProductsResults'));
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


        $products_list=$this->rProductsList->show($id);

        return view('client.products_list.edit', compact('products_list'));
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

        $result=$this->rProductsList->update($id,$request);



        return redirect('client/products_list');
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
        $products_list=$this->rProductsList->destroy($id);
        return redirect('client/products_list');
    }


}

<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ProductList as mProductList;
use App\Repositories\client\product_list\ProductListContract as rProductList;
class ProductList extends Controller
{
    private $rProductList;

    public function __construct(rProductList $rProductList)
    {
        $this->rProductList=$rProductList;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {
//        $testData= [
//            "id" => "576692c6e0330bf17",
//            "name" => "PluginList1",
//            "deleted" => 0,
//            "description" => null,
//            "created_at" => "2016-06-19 12:40:38",
//            "modified_at" => "2016-06-19 13:26:00",
//            "created_by_id" => "1",
//            "modified_by_id" => "1",
//            "assigned_user_id" => "1",
//            "product_id" => null,
//            "type" => "['MT4 Plugin','MT4 Softwre']",
//            "version_id" => null,
//            "version" => "1.01",
//            "download_id" => "57669c11dc591b53c",
//            "knowledge_base_article_id" => "5714d4dacfa8405b3"
//            ,'dummyColumn'=>'fffffffffffffff'
//            ,'ffffff'=>'6666'
//        ];
//
//        ProductList::create($testData);
//        dd(ProductList::all());


        $oResults= mProductList::paginate(15);

        $aFilterParams=$request;
        $oResults=$this->rProductList->getByFilter($aFilterParams);

        return view('client.product_list.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('client.product_list.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {

        ProductList::create($request->all());

        Session::flash('flash_message', 'product_list added!');

        return redirect('client/product_list');
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

        $product_list = mProductList::findOrFail($id);


        return view('client.product_list.show', compact('product_list'));
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

        $product_list = mProductList::findOrFail($id);

        return view('client.product_list.edit', compact('product_list'));
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

        $product_list = mProductList::findOrFail($id);
        $product_list->update($request->all());

        Session::flash('flash_message', 'product_list updated!');

        return redirect('client/product_list');
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
        mProductList::destroy($id);

        Session::flash('flash_message', 'product_list deleted!');

        return redirect('client/product_list');
    }


}

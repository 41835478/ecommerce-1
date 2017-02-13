<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ProductsList as mProductsList;
use App\Repositories\admin\products_list\ProductsListContract as rProductsList;
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

        return view('admin.products_list.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('admin.products_list.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


        $oResults=$this->rProductsList->create($request->all());

        return redirect('admin/products_list');
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


        $products_list=$this->rProductsList->show($id);


        return view('admin.products_list.show', compact('products_list'));
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

        return view('admin.products_list.edit', compact('products_list'));
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

        $result=$this->rProductsList->update($id,$request);



        return redirect('admin/products_list');
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
        return redirect('admin/products_list');
    }


}
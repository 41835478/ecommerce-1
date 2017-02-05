<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Contracts as mContracts;
use App\Repositories\client\contracts\ContractsContract as rContracts;
use App\Repositories\client\company\CompanyContract as rCompany;
use App\Repositories\client\products\ProductsContract as rProducts;
class Contracts extends Controller
{
    private $rContracts;

    public function __construct(rContracts $rContracts,rCompany $rCompany,rProducts $rProducts)
    {
        $this->rCompany=$rCompany;
        $this->rContracts=$rContracts;
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
        $oResults=$this->rContracts->getByFilter($aFilterParams);
        return view('client.contracts.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request)
    {
        $companiesList=$this->rCompany->getAllList();
        $productsList=$this->rProducts->getAllList();
        return view('client.contracts.create',compact('request'),compact('productsList','companiesList'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


        $oResults=$this->rContracts->create($request->all());

        return redirect('client/contracts');
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


        $contracts=$this->rContracts->show($id);


        return view('client.contracts.show', compact('contracts'));
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


        $contracts=$this->rContracts->show($id);
        $companiesList=$this->rCompany->getAllList();
        $productsList=$this->rProducts->getAllList();

        return view('client.contracts.edit', compact('contracts','productsList','companiesList'));
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

        $result=$this->rContracts->update($id,$request);



        return redirect('client/contracts');
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
        $contracts=$this->rContracts->destroy($id);
        return redirect('client/contracts');
    }


}

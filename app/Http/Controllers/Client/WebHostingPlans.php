<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\web_hosting_plans\createRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\WebHostingPlans as mWebHostingPlans;
use App\Repositories\client\web_hosting_plans\WebHostingPlansContract as rWebHostingPlans;
use App\Repositories\client\contracts\ContractsContract as rContracts;
class WebHostingPlans extends Controller
{
    private $rDomains;
    private $rDomainList;

    public function __construct(rWebHostingPlans $rWebHostingPlans)
    {
        $this->rWebHostingPlans=$rWebHostingPlans;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $aFilterParams=$request;
        $oResults=$this->rWebHostingPlans->getByFilter($aFilterParams);

        return view('client.web_hosting_plans.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function  create(Request $request)
    {

        return view('client.web_hosting_plans.create',compact('request'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rWebHostingPlans->create($request->all());

        return redirect('client/web_hosting_plans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id,Request $request,rContracts $rContracts)
    {


        $webHostingPlans=$this->rWebHostingPlans->show($id);

        $request->merge(['products_id'=>$id,'type'=>config('array.webHostingPlansTypeIndex'),'page_name'=>'page']);



        $request->page_name='page_contracts';
        $oContractsResults=$rContracts->getByFilter($request);

        return view('client.web_hosting_plans.show', compact('webHostingPlans','request','oContractsResults'));
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


        $web_hosting_plans=$this->rWebHostingPlans->show($id);



        return view('client.web_hosting_plans.edit', compact('web_hosting_plans'));
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

        $result=$this->rWebHostingPlans->update($id,$request);



        return redirect('client/web_hosting_plans');
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
        $web_hosting_plans=$this->rWebHostingPlans->destroy($id);
        return redirect('client/web_hosting_plans');
    }


}

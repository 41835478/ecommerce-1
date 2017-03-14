<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\domains\createRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Domains as mDomains;
use App\Repositories\client\domains\DomainsContract as rDomains;
use App\Repositories\client\contracts\ContractsContract as rContracts;
class Domains extends Controller
{
    private $rDomains;
    private $rDomainList;

    public function __construct(rDomains $rDomains)
    {
        $this->rDomains=$rDomains;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $aFilterParams=$request;
        $oResults=$this->rDomains->getByFilter($aFilterParams);

        return view('client.domains.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function  create(Request $request)
    {

        return view('client.domains.create',compact('request'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rDomains->create($request->all());

        return redirect('client/domains');
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


        $domains=$this->rDomains->show($id);

        $request->merge(['products_id'=>$id,'type'=>config('array.domainsTypeIndex'),'page_name'=>'page']);



        $request->page_name='page_contracts';
        $oContractsResults=$rContracts->getByFilter($request);

        return view('client.domains.show', compact('domains','request','oContractsResults'));
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


        $domains=$this->rDomains->show($id);



        return view('client.domains.edit', compact('domains'));
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

        $result=$this->rDomains->update($id,$request);



        return redirect('client/domains');
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
        $domains=$this->rDomains->destroy($id);
        return redirect('client/domains');
    }


}

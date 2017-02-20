<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\server_company\createRequest;
use App\Http\Requests\client\server_company\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ServerCompany as mServerCompany;
use App\Repositories\client\server_company\ServerCompanyContract as rServerCompany;
use App\Repositories\client\server_spec\ServerSpecContract as rServerSpec;
use App\Repositories\client\server_locations\ServerLocationsContract as rServerLocation;
class ServerCompany extends Controller
{
    private $rServerCompany;

    public function __construct(rServerCompany $rServerCompany)
    {
        $this->rServerCompany=$rServerCompany;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rServerCompany->getByFilter($aFilterParams);

        return view('client.server_company.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function  create(Request $request)
    {
        return view('client.server_company.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rServerCompany->create($request->all());

        return redirect('client/server_company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id,Request $request,rServerSpec $rServerSpec,rServerLocation $rServerLocation)
    {

        $request->merge(['server_company_id'=>$id,'page_name'=>'page']);

        $server_company=$this->rServerCompany->show($id);


        $request->page_name='page_server_spec';
        $oServerSpecResults=$rServerSpec->getByFilter($request);

        $request->page_name='page_server_location';
        $oServerLocationResults=$rServerLocation->getByFilter($request);

        return view('client.server_company.show', compact('server_company','request','oServerSpecResults','oServerLocationResults'));
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


        $server_company=$this->rServerCompany->show($id);

        return view('client.server_company.edit', compact('server_company'));
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

        $result=$this->rServerCompany->update($id,$request);



        return redirect('client/server_company');
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
        $server_company=$this->rServerCompany->destroy($id);
        return redirect('client/server_company');
    }


}

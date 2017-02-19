<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\server_company_server_spec\createRequest;
use App\Http\Requests\client\server_company_server_spec\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ServerCompanyServerSpec as mServerCompanyServerSpec;
use App\Repositories\client\server_company_server_spec\ServerCompanyServerSpecContract as rServerCompanyServerSpec;
class ServerCompanyServerSpec extends Controller
{
    private $rServerCompanyServerSpec;

    public function __construct(rServerCompanyServerSpec $rServerCompanyServerSpec)
    {
        $this->rServerCompanyServerSpec=$rServerCompanyServerSpec;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rServerCompanyServerSpec->getByFilter($aFilterParams);

        return view('client.server_company_server_spec.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('client.server_company_server_spec.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rServerCompanyServerSpec->create($request->all());

        return redirect('client/server_company_server_spec');
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


        $server_company_server_spec=$this->rServerCompanyServerSpec->show($id);


        return view('client.server_company_server_spec.show', compact('server_company_server_spec'));
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


        $server_company_server_spec=$this->rServerCompanyServerSpec->show($id);

        return view('client.server_company_server_spec.edit', compact('server_company_server_spec'));
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

        $result=$this->rServerCompanyServerSpec->update($id,$request);



        return redirect('client/server_company_server_spec');
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
        $server_company_server_spec=$this->rServerCompanyServerSpec->destroy($id);
        return redirect('client/server_company_server_spec');
    }


}

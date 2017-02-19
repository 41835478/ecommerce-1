<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\server_spec\createRequest;
use App\Http\Requests\client\server_spec\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ServerSpec as mServerSpec;
use App\Repositories\client\server_spec\ServerSpecContract as rServerSpec;
class ServerSpec extends Controller
{
    private $rServerSpec;

    public function __construct(rServerSpec $rServerSpec)
    {
        $this->rServerSpec=$rServerSpec;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rServerSpec->getByFilter($aFilterParams);

        return view('client.server_spec.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('client.server_spec.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rServerSpec->create($request->all());

        return redirect('client/server_spec');
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


        $server_spec=$this->rServerSpec->show($id);


        return view('client.server_spec.show', compact('server_spec'));
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


        $server_spec=$this->rServerSpec->show($id);

        return view('client.server_spec.edit', compact('server_spec'));
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

        $result=$this->rServerSpec->update($id,$request);



        return redirect('client/server_spec');
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
        $server_spec=$this->rServerSpec->destroy($id);
        return redirect('client/server_spec');
    }


}

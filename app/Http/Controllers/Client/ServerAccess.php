<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\server_access\createRequest;
use App\Http\Requests\client\server_access\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ServerAccess as mServerAccess;
use App\Repositories\client\server_access\ServerAccessContract as rServerAccess;
class ServerAccess extends Controller
{
    private $rServerAccess;

    public function __construct(rServerAccess $rServerAccess)
    {
        $this->rServerAccess=$rServerAccess;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rServerAccess->getByFilter($aFilterParams);

        return view('client.server_access.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('client.server_access.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rServerAccess->create($request->all());

        return redirect('client/server_access');
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


        $server_access=$this->rServerAccess->show($id);


        return view('client.server_access.show', compact('server_access'));
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


        $server_access=$this->rServerAccess->show($id);

        return view('client.server_access.edit', compact('server_access'));
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

        $result=$this->rServerAccess->update($id,$request);



        return redirect('client/server_access');
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
        $server_access=$this->rServerAccess->destroy($id);
        return redirect('client/server_access');
    }


}

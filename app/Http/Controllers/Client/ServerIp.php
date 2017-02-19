<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\server_ip\createRequest;
use App\Http\Requests\client\server_ip\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ServerIp as mServerIp;
use App\Repositories\client\server_ip\ServerIpContract as rServerIp;
class ServerIp extends Controller
{
    private $rServerIp;

    public function __construct(rServerIp $rServerIp)
    {
        $this->rServerIp=$rServerIp;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rServerIp->getByFilter($aFilterParams);

        return view('client.server_ip.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('client.server_ip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rServerIp->create($request->all());

        return redirect('client/server_ip');
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


        $server_ip=$this->rServerIp->show($id);


        return view('client.server_ip.show', compact('server_ip'));
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


        $server_ip=$this->rServerIp->show($id);

        return view('client.server_ip.edit', compact('server_ip'));
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

        $result=$this->rServerIp->update($id,$request);



        return redirect('client/server_ip');
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
        $server_ip=$this->rServerIp->destroy($id);
        return redirect('client/server_ip');
    }


}

<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\server_detail\createRequest;
use App\Http\Requests\client\server_detail\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ServerDetail as mServerDetail;
use App\Repositories\client\server_detail\ServerDetailContract as rServerDetail;
class ServerDetail extends Controller
{
    private $rServerDetail;

    public function __construct(rServerDetail $rServerDetail)
    {
        $this->rServerDetail=$rServerDetail;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rServerDetail->getByFilter($aFilterParams);

        return view('client.server_detail.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('client.server_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rServerDetail->create($request->all());

        return redirect('client/server_detail');
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


        $server_detail=$this->rServerDetail->show($id);


        return view('client.server_detail.show', compact('server_detail'));
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


        $server_detail=$this->rServerDetail->show($id);

        return view('client.server_detail.edit', compact('server_detail'));
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

        $result=$this->rServerDetail->update($id,$request);



        return redirect('client/server_detail');
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
        $server_detail=$this->rServerDetail->destroy($id);
        return redirect('client/server_detail');
    }


}

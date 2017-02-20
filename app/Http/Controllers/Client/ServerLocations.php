<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\server_locations\createRequest;
use App\Http\Requests\client\server_locations\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\ServerLocations as mServerLocations;
use App\Repositories\client\server_locations\ServerLocationsContract as rServerLocations;
class ServerLocations extends Controller
{
    private $rServerLocations;

    public function __construct(rServerLocations $rServerLocations)
    {
        $this->rServerLocations=$rServerLocations;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rServerLocations->getByFilter($aFilterParams);

        return view('client.server_locations.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */

    public function  create(Request $request)
    {
        return view('client.server_locations.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rServerLocations->create($request->all());

        return redirect('client/server_locations');
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


        $server_locations=$this->rServerLocations->show($id);


        return view('client.server_locations.show', compact('server_locations'));
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

        $server_locations=$this->rServerLocations->show($id);

        return view('client.server_locations.edit', compact('server_locations'));
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

        $result=$this->rServerLocations->update($id,$request);



        return redirect('client/server_locations');
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
        $server_locations=$this->rServerLocations->destroy($id);
        return redirect('client/server_locations');
    }


}

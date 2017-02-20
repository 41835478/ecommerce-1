<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\logtime\createRequest;
use App\Http\Requests\client\logtime\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Logtime as mLogtime;
use App\Repositories\client\logtime\LogtimeContract as rLogtime;
class Logtime extends Controller
{
    private $rLogtime;

    public function __construct(rLogtime $rLogtime)
    {
        $this->rLogtime=$rLogtime;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rLogtime->getByFilter($aFilterParams);

        return view('client.logtime.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */

    public function  create(Request $request)
    {
        return view('client.logtime.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rLogtime->create($request->all());

        return redirect('client/logtime');
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


        $logtime=$this->rLogtime->show($id);


        return view('client.logtime.show', compact('logtime'));
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


        $logtime=$this->rLogtime->show($id);

        return view('client.logtime.edit', compact('logtime'));
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

        $result=$this->rLogtime->update($id,$request);



        return redirect('client/logtime');
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
        $logtime=$this->rLogtime->destroy($id);
        return redirect('client/logtime');
    }


}

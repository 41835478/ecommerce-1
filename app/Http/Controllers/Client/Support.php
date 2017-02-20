<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\support\createRequest;
use App\Http\Requests\client\support\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Support as mSupport;
use App\Repositories\client\support\SupportContract as rSupport;
class Support extends Controller
{
    private $rSupport;

    public function __construct(rSupport $rSupport)
    {
        $this->rSupport=$rSupport;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rSupport->getByFilter($aFilterParams);

        return view('client.support.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */

    public function  create(Request $request)
    {
        return view('client.support.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rSupport->create($request->all());

        return redirect('client/support');
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


        $support=$this->rSupport->show($id);


        return view('client.support.show', compact('support'));
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


        $support=$this->rSupport->show($id);

        return view('client.support.edit', compact('support'));
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

        $result=$this->rSupport->update($id,$request);



        return redirect('client/support');
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
        $support=$this->rSupport->destroy($id);
        return redirect('client/support');
    }


}

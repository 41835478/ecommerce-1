<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\roles\createRequest;
use App\Http\Requests\client\roles\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Roles as mRoles;
use App\Repositories\client\roles\RolesContract as rRoles;
class Roles extends Controller
{
    private $rRoles;

    public function __construct(rRoles $rRoles)
    {
        $this->rRoles=$rRoles;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rRoles->getByFilter($aFilterParams);

        return view('client.roles.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request)
    {
        return view('client.roles.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rRoles->create($request->all());

        return redirect('client/roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id,Request $request)
    {


        $roles=$this->rRoles->show($id);

        $roles['permissionOneText']=explode('|',$roles->permissions);

        return view('client.roles.show', compact('roles','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id,Request $request)
    {


        $roles=$this->rRoles->show($id);
        $roles['permissionOneText']=explode('|',$roles->permissions);

        return view('client.roles.edit', compact('roles','request'));
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

        $result=$this->rRoles->update($id,$request);



        return redirect('client/roles');
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
        $roles=$this->rRoles->destroy($id);
        return redirect('client/roles');
    }


}

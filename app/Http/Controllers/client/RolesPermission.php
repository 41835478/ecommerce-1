<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\roles_permission\createRequest;
use App\Http\Requests\client\roles_permission\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\RolesPermission as mRolesPermission;
use App\Repositories\client\roles_permission\RolesPermissionContract as rRolesPermission;
class RolesPermission extends Controller
{
    private $rRolesPermission;

    public function __construct(rRolesPermission $rRolesPermission)
    {
        $this->rRolesPermission=$rRolesPermission;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rRolesPermission->getByFilter($aFilterParams);

        return view('client.roles_permission.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request)
    {
        return view('client.roles_permission.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rRolesPermission->create($request->all());

        return redirect('client/roles_permission');
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


        $roles_permission=$this->rRolesPermission->show($id);


        return view('client.roles_permission.show', compact('roles_permission','request'));
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


        $roles_permission=$this->rRolesPermission->show($id);

        return view('client.roles_permission.edit', compact('roles_permission'));
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

        $result=$this->rRolesPermission->update($id,$request);



        return redirect('client/roles_permission');
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
        $roles_permission=$this->rRolesPermission->destroy($id);
        return redirect('client/roles_permission');
    }


}

<?php

namespace App\Http\Controllers\common\users;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\common\users\createRequest;
use App\Http\Requests\common\users\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Users as mUsers;
use App\Repositories\common\users\UsersContract as rUsers;
use App\Repositories\common\authorization\roles\RolesContract as rRoles;


class Users extends Controller
{
    private $rUsers;

    public function __construct(rUsers $rUsers)
    {
        $this->rUsers=$rUsers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rUsers->getByFilter($request);

        return view('common.users.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rRoles $rRoles)
    {

        $rolesList=$rRoles->getAllList();

        return view('common.users.create',compact('request','rolesList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request,rRoles $rRoles)
    {


        $oResults=$this->rUsers->create($request);
        if($oResults && $oResults > 0 && isset($request->roles) && count($request->roles)){
            $rRoles->asignUserRoles($oResults,$request->roles);
        }
        return redirect('common/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request)
    {


        $users=$this->rUsers->show($id);
      $request->merge(['users_id'=>$id,'page_name'=>'page']);



        return view('common.users.show', compact('users','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rRoles $rRoles)
    {


        $users=$this->rUsers->show($id);
        unset($users->password);

        $rolesList=$rRoles->getAllList();
        $userRolesList=$rRoles->getUserRoles($id)->toArray();
        return view('common.users.edit', compact('users','rolesList','userRolesList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function update($id, editRequest $request,rRoles $rRoles)
    {

        $result=$this->rUsers->update($id,$request);
        if(isset($request->roles) && count($request->roles)){
            $rRoles->asignUserRoles($id,$request->roles);
        }
        return redirect('common/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function destroy($id)
    {
        $users=$this->rUsers->destroy($id);
        return redirect('common/users');
    }


}

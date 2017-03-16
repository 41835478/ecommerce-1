<?php

namespace App\Http\Controllers\common\email;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\common\email\email_group_users\createRequest;
use App\Http\Requests\common\email\email_group_users\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\EmailGroupUsers as mEmailGroupUsers;
use App\Repositories\common\email\email_group_users\EmailGroupUsersContract as rEmailGroupUsers;

 use App\Repositories\common\email\email_group\EmailGroupContract as rEmailGroup;
 use App\Repositories\client\users\UsersContract as rUsers;

class EmailGroupUsers extends Controller
{
    private $rEmailGroupUsers;

    public function __construct(rEmailGroupUsers $rEmailGroupUsers)
    {
        $this->rEmailGroupUsers=$rEmailGroupUsers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rEmailGroupUsers->getByFilter($aFilterParams);

        return view('common.email.email_group_users.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rEmailGroup $rGroup,rUsers $rUsers)
    {

$groupList=$rGroup->getAllList();
$usersList=$rUsers->getAllList();

        return view('common.email.email_group_users.create',compact('request','groupList','usersList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rEmailGroupUsers->create($request->all());

        return redirect('common/email_group_users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rEmailGroup $rGroup,rUsers $rUsers)
    {


        $email_group_users=$this->rEmailGroupUsers->show($id);
      $request->merge(['email_group_users_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_group';
    $oGroupResults=$rGroup->getByFilter($request);
    $request->page_name='page_users';
    $oUsersResults=$rUsers->getByFilter($request);

        return view('common.email.email_group_users.show', compact('email_group_users','request','oGroupResults','oUsersResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rEmailGroup $rGroup,rUsers $rUsers)
    {


        $email_group_users=$this->rEmailGroupUsers->show($id);


 $groupList=$rGroup->getAllList();
 $usersList=$rUsers->getAllList();
        return view('common.email.email_group_users.edit', compact('email_group_users','groupList','usersList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function update($id, editRequest $request)
    {

        $result=$this->rEmailGroupUsers->update($id,$request);

        return redirect('common/email_group_users');
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
        $email_group_users=$this->rEmailGroupUsers->destroy($id);
        return redirect('common/email_group_users');
    }


}

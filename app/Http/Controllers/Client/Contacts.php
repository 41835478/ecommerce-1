<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\client\contacts\createRequest;
use App\Http\Requests\client\contacts\editRequest;

use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Contacts as mContacts;
use App\Repositories\client\contacts\ContactsContract as rContacts;
use App\Repositories\client\company\CompanyContract as rCompany;
use App\Repositories\client\users\UsersContract as rUsers;
use App\Repositories\client\roles\RolesContract as rRoles;
class Contacts extends Controller
{
    private $rContacts;

    public function __construct(rContacts $rContacts,rCompany $rCompany)
    {
        $this->rContacts=$rContacts;
        $this->rCompany=$rCompany;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rContacts->getByFilter($aFilterParams);

        return view('client.contacts.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request,rRoles $rRoles)
    {

        $companiesList=$this->rCompany->getAllList();
        $rolesList=$rRoles->getAllList();
        return view('client.contacts.create',compact('request','companiesList','rolesList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request,rUsers $rUsers)
    {

        $users_id= $rUsers->create($request);
        if($users_id){
            $request->merge(['users_id'=>$users_id]);
        $oResults=$this->rContacts->create($request->all());
        }


        return redirect('client/contacts');
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


        $contacts=$this->rContacts->show($id);


        return view('client.contacts.show', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id,rRoles $rRoles)
    {


        $contacts=$this->rContacts->show($id);
        $companiesList=$this->rCompany->getAllList();
        $rolesList=$rRoles->getAllList();

        return view('client.contacts.edit', compact('contacts','companiesList','rolesList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, editRequest $request,rUsers $rUsers)
    {

        $users_id=$this->rContacts->update($id,$request);

        if($users_id){
            $rUsers->update($users_id,$request);
        }



        return redirect('client/contacts');
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
        $contacts=$this->rContacts->destroy($id);
        return redirect('client/contacts');
    }


}

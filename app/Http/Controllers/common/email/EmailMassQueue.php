<?php

namespace App\Http\Controllers\common\email;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\common\email\email_mass_queue\createRequest;
use App\Http\Requests\common\email\email_mass_queue\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\EmailMassQueue as mEmailMassQueue;
use App\Repositories\common\email\email_mass_queue\EmailMassQueueContract as rEmailMassQueue;

 use App\Repositories\common\email\email_group\EmailGroupContract as rEmailGroup;

class EmailMassQueue extends Controller
{
    private $rEmailMassQueue;

    public function __construct(rEmailMassQueue $rEmailMassQueue)
    {
        $this->rEmailMassQueue=$rEmailMassQueue;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rEmailMassQueue->getByFilter($aFilterParams);

        return view('common.email.email_mass_queue.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rEmailGroup $rEmailGroup)
    {

$emailGroupList=$rEmailGroup->getAllList();

        return view('common.email.email_mass_queue.create',compact('request','emailGroupList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rEmailMassQueue->create($request->all());

        return redirect('common/email_mass_queue');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rLastUsers $rLastUsers,rEmailGroup $rEmailGroup)
    {


        $email_mass_queue=$this->rEmailMassQueue->show($id);
      $request->merge(['email_mass_queue_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_email_group';
    $oEmailGroupResults=$rEmailGroup->getByFilter($request);

        return view('common.email.email_mass_queue.show', compact('email_mass_queue','request','oEmailGroupResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rEmailGroup $rEmailGroup)
    {

        $email_mass_queue=$this->rEmailMassQueue->show($id);


 $emailGroupList=$rEmailGroup->getAllList();
        return view('common.email.email_mass_queue.edit', compact('email_mass_queue','emailGroupList'));
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

        $result=$this->rEmailMassQueue->update($id,$request);

        return redirect('common/email_mass_queue');
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
        $email_mass_queue=$this->rEmailMassQueue->destroy($id);
        return redirect('common/email_mass_queue');
    }


}

<?php

namespace App\Http\Controllers\common\email;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\common\email\email_mass_template\createRequest;
use App\Http\Requests\common\email\email_mass_template\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\EmailMassTemplate as mEmailMassTemplate;
use App\Repositories\common\email\email_mass_template\EmailMassTemplateContract as rEmailMassTemplate;
use App\Repositories\common\email\email_mass_queue\EmailMassQueueContract as rEmailMassQueue;

 use App\Repositories\common\email\email_group\EmailGroupContract as rEmailGroup;

class EmailMassTemplate extends Controller
{
    private $rEmailMassTemplate;

    public function __construct(rEmailMassTemplate $rEmailMassTemplate)
    {
        $this->rEmailMassTemplate=$rEmailMassTemplate;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rEmailMassTemplate->getByFilter($aFilterParams);

        return view('common.email.email_mass_template.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rEmailGroup $rEmailGroup)
    {

$emailGroupList=$rEmailGroup->getAllList();

        return view('common.email.email_mass_template.create',compact('request','emailGroupList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request,rEmailMassQueue $rEmailMassQueue)
    {


        $oEmailMassTemplateResults=$this->rEmailMassTemplate->create($request->all());
        if(isset($request->send)){

            $oEmailMassQueueResults=$rEmailMassQueue->create($request->all());
        }

        return redirect('common/email_mass_template');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rEmailGroup $rEmailGroup)
    {


        $email_mass_template=$this->rEmailMassTemplate->show($id);
      $request->merge(['email_mass_template_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_email_group';
    $oEmailGroupResults=$rEmailGroup->getByFilter($request);

        return view('common.email.email_mass_template.show', compact('email_mass_template','request','oEmailGroupResults'));
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


        $email_mass_template=$this->rEmailMassTemplate->show($id);


 $emailGroupList=$rEmailGroup->getAllList();
        return view('common.email.email_mass_template.edit', compact('email_mass_template','emailGroupList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function update($id, editRequest $request,rEmailMassQueue $rEmailMassQueue)
    {

        $result=$this->rEmailMassTemplate->update($id,$request);

        if(isset($request->send)){

            $oEmailMassQueueResults=$rEmailMassQueue->create($request->all());
        }
        return redirect('common/email_mass_template');
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
        $email_mass_template=$this->rEmailMassTemplate->destroy($id);
        return redirect('common/email_mass_template');
    }


}

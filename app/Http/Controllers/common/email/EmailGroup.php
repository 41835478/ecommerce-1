<?php

namespace App\Http\Controllers\common\email;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\common\email\email_group\createRequest;
use App\Http\Requests\common\email\email_group\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\EmailGroup as mEmailGroup;
use App\Repositories\common\email\email_group\EmailGroupContract as rEmailGroup;

 use App\Repositories\common\email\email_template\EmailTemplateContract as rEmailTemplate;
 use App\Repositories\common\email\email_mass_template\EmailMassTemplateContract as rEmailMassTemplate;

class EmailGroup extends Controller
{
    private $rEmailGroup;

    public function __construct(rEmailGroup $rEmailGroup)
    {
        $this->rEmailGroup=$rEmailGroup;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rEmailGroup->getByFilter($aFilterParams);

        return view('common.email.email_group.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rEmailTemplate $rEmailTemplate,rEmailMassTemplate $rEmailMassTemplate)
    {

$emailTemplateList=$rEmailTemplate->getAllList();
$emailMassTemplateList=$rEmailMassTemplate->getAllList();

        return view('common.email.email_group.create',compact('request','emailTemplateList','emailMassTemplateList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rEmailGroup->create($request->all());

        return redirect('common/email_group');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rEmailTemplate $rEmailTemplate,rEmailMassTemplate $rEmailMassTemplate)
    {


        $email_group=$this->rEmailGroup->show($id);
      $request->merge(['email_group_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_email_template';
    $oEmailTemplateResults=$rEmailTemplate->getByFilter($request);
    $request->page_name='page_email_mass_template';
    $oEmailMassTemplateResults=$rEmailMassTemplate->getByFilter($request);


        return view('common.email.email_group.show', compact('email_group','request','oEmailTemplateResults','oEmailMassTemplateResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rEmailTemplate $rEmailTemplate,rEmailMassTemplate $rEmailMassTemplate)
    {


        $email_group=$this->rEmailGroup->show($id);


 $emailTemplateList=$rEmailTemplate->getAllList();
 $emailMassTemplateList=$rEmailMassTemplate->getAllList();
        return view('common.email.email_group.edit', compact('email_group','emailTemplateList','emailMassTemplateList'));
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

        $result=$this->rEmailGroup->update($id,$request);

        return redirect('common/email_group');
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
        $email_group=$this->rEmailGroup->destroy($id);
        return redirect('common/email_group');
    }


}

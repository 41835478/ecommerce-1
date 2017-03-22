<?php

namespace App\Http\Controllers\common\email;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\common\email\email_template\createRequest;
use App\Http\Requests\common\email\email_template\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\common\email\EmailTemplate as mEmailTemplate;
use App\Repositories\common\email\email_template\EmailTemplateContract as rEmailTemplate;

use App\Repositories\common\email\email_group\EmailGroupContract as rEmailGroup;

class EmailTemplate extends Controller
{
    private $rEmailTemplate;

    public function __construct(rEmailTemplate $rEmailTemplate)
    {
        $this->rEmailTemplate=$rEmailTemplate;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rEmailTemplate->getByFilter($aFilterParams);

        return view('common.email.email_template.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {
        $emailTemplateWithStatus=config('mail.email_template');

        $templateNameList=[];
        $firstTemplateName='';
        foreach($emailTemplateWithStatus as $name=>$template){
            $templateNameList[$name]=$template['name'];
            $firstTemplateName=($firstTemplateName=='')? $name:$firstTemplateName;
        }

        if(!isset($request->name)){
            $request->merge(
                [
                    'name'=>'signUp',
                    'type'=>0,
                    'status'=>0 ,
                    'language'=>'en' ,
                ]

            );

        }

        $templateStatusList=$emailTemplateWithStatus[$request->name]['status'];


        $oResults=$this->rEmailTemplate->getByFilter($request)->first();//dd($request);
        if(!count($oResults)){
            $oResults=new mEmailTemplate();
            $oResults->name=$request->name;
            $oResults->type=$request->type;
            $oResults->status=$request->status;
            $oResults->language=$request->language;
        }

        return view('common.email.email_template.create',compact('request','oResults','templateNameList','templateStatusList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {

if(isset($request->id) && $request->id > 0){

    $updateResult=$this->rEmailTemplate->update($request->id ,$request);
}else{

    $createResult=$this->rEmailTemplate->create($request->all());
}

        return redirect('common/email_template');
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


        $email_template=$this->rEmailTemplate->show($id);
        $request->merge(['email_template_id'=>$id,'page_name'=>'page']);


        $request->page_name='page_email_group';
        $oEmailGroupResults=$rEmailGroup->getByFilter($request);

        return view('common.email.email_template.show', compact('email_template','request','oEmailGroupResults'));
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


        $email_template=$this->rEmailTemplate->show($id);


        $emailGroupList=$rEmailGroup->getAllList();
        return view('common.email.email_template.edit', compact('email_template','emailGroupList'));
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

        $result=$this->rEmailTemplate->update($id,$request);

        return redirect('common/email_template');
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
        $email_template=$this->rEmailTemplate->destroy($id);
        return redirect('common/email_template');
    }


}

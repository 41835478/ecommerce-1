<?php

namespace App\Http\Controllers\admin\cms_form_field;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_form_field\createRequest;
use App\Http\Requests\admin\cms_form_field\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsFormField as mCmsFormField;
use App\Repositories\admin\cms_form_field\CmsFormFieldContract as rCmsFormField;

 use App\Repositories\admin\cms_form\CmsFormContract as rCmsForm;

class CmsFormField extends Controller
{
    private $rCmsFormField;

    public function __construct(rCmsFormField $rCmsFormField)
    {
        $this->rCmsFormField=$rCmsFormField;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsFormField->getByFilter($request);

        return view('admin.cms_form_field.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsForm $rCmsForm)
    {

$cmsFormList=$rCmsForm->getAllList();

        return view('admin.cms_form_field.create',compact('request','cmsFormList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsFormField->create($request->all());

        return redirect('admin/cms_form_field');
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


        $cms_form_field=$this->rCmsFormField->show($id);
      $request->merge(['cms_form_field_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_form_field.show', compact('cms_form_field','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCmsForm $rCmsForm)
    {


        $cms_form_field=$this->rCmsFormField->show($id);


 $cmsFormList=$rCmsForm->getAllList();
        return view('admin.cms_form_field.edit', compact('cms_form_field','cmsFormList'));
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

        $result=$this->rCmsFormField->update($id,$request);

        return redirect('admin/cms_form_field');
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
        $cms_form_field=$this->rCmsFormField->destroy($id);
        return redirect('admin/cms_form_field');
    }


}

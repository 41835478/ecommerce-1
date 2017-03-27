<?php

namespace App\Http\Controllers\admin\cms_form;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_form\createRequest;
use App\Http\Requests\admin\cms_form\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsForm as mCmsForm;
use App\Repositories\admin\cms_form\CmsFormContract as rCmsForm;

 use App\Repositories\admin\page\PageContract as rPage;
 use App\Repositories\admin\cms_form_field\CmsFormFieldContract as rCmsFormField;

class CmsForm extends Controller
{
    private $rCmsForm;

    public function __construct(rCmsForm $rCmsForm)
    {
        $this->rCmsForm=$rCmsForm;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsForm->getByFilter($request);

        return view('admin.cms_form.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rPage $rPage)
    {

$pageList=$rPage->getAllList();

        return view('admin.cms_form.create',compact('request','pageList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsForm->create($request->all());

        return redirect('admin/cms_form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCmsFormField $rCmsFormField)
    {


        $cms_form=$this->rCmsForm->show($id);
      $request->merge(['cms_form_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_cms_form_field';
    $oCmsFormFieldResults=$rCmsFormField->getByFilter($request);

        return view('admin.cms_form.show', compact('cms_form','request','oCmsFormFieldResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rPage $rPage)
    {


        $cms_form=$this->rCmsForm->show($id);


 $pageList=$rPage->getAllList();
        return view('admin.cms_form.edit', compact('cms_form','pageList'));
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

        $result=$this->rCmsForm->update($id,$request);

        return redirect('admin/cms_form');
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
        $cms_form=$this->rCmsForm->destroy($id);
        return redirect('admin/cms_form');
    }


}

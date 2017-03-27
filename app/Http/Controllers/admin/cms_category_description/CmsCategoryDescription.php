<?php

namespace App\Http\Controllers\admin\cms_category_description;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_category_description\createRequest;
use App\Http\Requests\admin\cms_category_description\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsCategoryDescription as mCmsCategoryDescription;
use App\Repositories\admin\cms_category_description\CmsCategoryDescriptionContract as rCmsCategoryDescription;

 use App\Repositories\admin\cms_category\CmsCategoryContract as rCmsCategory;

class CmsCategoryDescription extends Controller
{
    private $rCmsCategoryDescription;
    private $rCmsCategory;
    public function __construct(rCmsCategoryDescription $rCmsCategoryDescription,rCmsCategory $rCmsCategory)
    {
        $this->rCmsCategoryDescription=$rCmsCategoryDescription;
        $this->rCmsCategory=$rCmsCategory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsCategoryDescription->getByFilter($request);

        return view('admin.cms_category_description.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsCategory $rCmsCategory)
    {

$cmsCategoryList=$rCmsCategory->getAllList();

        return view('admin.cms_category_description.create',compact('request','cmsCategoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {

        $cms_category_id=0;
        if(isset($request->cms_category_id)){
            $cms_category_id=$request->cms_category_id;

            $oCheckTranslateExist=$this->rCmsCategoryDescription->getByFilter($request->only('cms_category_id','cms_language_id'))->first();

            if(count($oCheckTranslateExist)){

                if(isset($request->cms_language_id) && $request->cms_language_id ==config('app.default_language')){
                    $this->rCmsCategory->update($request->cms_category_id,$request);
                    $this->rCmsCategoryDescription->update($oCheckTranslateExist->id,$request->except(['name','description']));
                }elseif(isset($request->cms_language_id) && $request->cms_language_id !=config('app.default_language')){
                    $this->rCmsCategory->update($request->cms_category_id,$request->except(['name','description']));
                    $this->rCmsCategoryDescription->update($oCheckTranslateExist->id,$request);
                }

            }else{


                if(isset($request->cms_language_id) && $request->cms_language_id ==config('app.default_language')){
                    $this->rCmsCategory->update($request->cms_category_id,$request);
                }
                $this->rCmsCategoryDescription->create($request->all());
            }

        }else{

            $cms_category_id=$this->rCmsCategory->create($request->all());

          //  if(isset($request->cms_language_id) && $request->cms_language_id !=config('app.default_language')) {
                $request->merge(['cms_category_id'=>$cms_category_id,'cms_language_id'=>config('app.default_language')]);
                $this->rCmsCategoryDescription->create($request->all());
            //}

        }

        return redirect('admin/cms_category/'.$cms_category_id);

//        $oResults=$this->rCmsCategoryDescription->create($request->all());
//
//        return redirect('admin/cms_category_description');
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


        $cms_category_description=$this->rCmsCategoryDescription->show($id);
      $request->merge(['cms_category_description_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_category_description.show', compact('cms_category_description','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCmsCategory $rCmsCategory)
    {


        $cms_category_description=$this->rCmsCategoryDescription->show($id);


 $cmsCategoryList=$rCmsCategory->getAllList();
        return view('admin.cms_category_description.edit', compact('cms_category_description','cmsCategoryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function update($id, createRequest $request)
    {

        $this->store($request);
        return redirect('admin/cms_category_description');
//        $result=$this->rCmsCategoryDescription->update($id,$request);
//
//        return redirect('admin/cms_category_description');
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
        $cms_category_description=$this->rCmsCategoryDescription->destroy($id);
        return redirect('admin/cms_category_description');
    }


}

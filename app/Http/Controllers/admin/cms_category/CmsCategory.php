<?php

namespace App\Http\Controllers\admin\cms_category;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_category\createRequest;
use App\Http\Requests\admin\cms_category\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsCategory as mCmsCategory;
use App\Repositories\admin\cms_category\CmsCategoryContract as rCmsCategory;

 use App\Repositories\admin\cms_category_description\CmsCategoryDescriptionContract as rCmsCategoryDescription;
 use App\Repositories\admin\cms_product\CmsProductContract as rCmsProduct;

class CmsCategory extends Controller
{
    private $rCmsCategory;

    public function __construct(rCmsCategory $rCmsCategory)
    {
        $this->rCmsCategory=$rCmsCategory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsCategory->getByFilter($request);

        return view('admin.cms_category.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {

        $categoryList=$this->rCmsCategory->getAllList();
        return view('admin.cms_category.create',compact('request','categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


// this function is not used look to cmsCategoryDescription controller to store method
//        $oResults=$this->rCmsCategory->create($request->all());
//
//        return redirect('admin/cms_category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCmsCategoryDescription $rCmsCategoryDescription,rCmsProduct $rCmsProduct)
    {


        $cms_category=$this->rCmsCategory->show($id);
      $request->merge(['cms_category_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_cms_category_description';
    $oCmsCategoryDescriptionResults=$rCmsCategoryDescription->getByFilter($request);
    $request->page_name='page_cms_product';
    $oCmsProductResults=$rCmsProduct->getByFilter($request);

        return view('admin.cms_category.show', compact('cms_category','request','oCmsCategoryDescriptionResults','oCmsProductResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,Request $request,rCmsCategoryDescription $rCmsCategoryDescription)
    {

        $cms_category=$this->rCmsCategory->show($id);

        if(isset($request->cms_language_id)){
            if($request->cms_language_id != config('app.default_language')){

                $translate=$rCmsCategoryDescription->getByFilter(['cms_category_id'=>$id,'cms_language_id'=>$request->cms_language_id])->first();

                if(count($translate)){
                    $cms_category->name=$translate->name;
                    $cms_category->description=$translate->description;
                }

            }
        }


        $categoryList=$this->rCmsCategory->getAllList()->all();
        unset($categoryList[$id]);
        return view('admin.cms_category.edit', compact('cms_category','request','categoryList'));

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

// this function is not used look to cmsCategoryDescription controller to store method
//        $result=$this->rCmsCategory->update($id,$request);
//
//        return redirect('admin/cms_category');
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
        $cms_category=$this->rCmsCategory->destroy($id);
        return redirect('admin/cms_category');
    }


}

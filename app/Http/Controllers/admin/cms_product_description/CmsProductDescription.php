<?php

namespace App\Http\Controllers\admin\cms_product_description;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_product_description\createRequest;
use App\Http\Requests\admin\cms_product_description\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsProductDescription as mCmsProductDescription;
use App\Repositories\admin\cms_product_description\CmsProductDescriptionContract as rCmsProductDescription;

 use App\Repositories\admin\cms_product\CmsProductContract as rCmsProduct;
 use App\Repositories\admin\cms_language\CmsLanguageContract as rCmsLanguage;

class CmsProductDescription extends Controller
{
    private $rCmsProductDescription;
    private $rCmsProduct;

    public function __construct(rCmsProductDescription $rCmsProductDescription,rCmsProduct $rCmsProduct)
    {
        $this->rCmsProductDescription=$rCmsProductDescription;
        $this->rCmsProduct=$rCmsProduct;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsProductDescription->getByFilter($request);

        return view('admin.cms_product_description.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsProduct $rCmsProduct,rCmsLanguage $rCmsLanguage)
    {

$cmsProductList=$rCmsProduct->getAllList();
$cmsLanguageList=$rCmsLanguage->getAllList();

        return view('admin.cms_product_description.create',compact('request','cmsProductList','cmsLanguageList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {



        $cms_product_id=0;
        if(isset($request->cms_product_id)){
            $cms_product_id=$request->cms_product_id;

            $oCheckTranslateExist=$this->rCmsProductDescription->getByFilter($request->only('cms_product_id','cms_language_id'))->first();

            if(count($oCheckTranslateExist)){

                if(isset($request->cms_language_id) && $request->cms_language_id ==config('app.default_language')){
                    $this->rCmsProduct->update($request->cms_product_id,$request);
                    $this->rCmsProductDescription->update($oCheckTranslateExist->id,$request->except(['name','description']));
                }elseif(isset($request->cms_language_id) && $request->cms_language_id !=config('app.default_language')){
                    $this->rCmsProduct->update($request->cms_product_id,$request->except(['name','description']));
                    $this->rCmsProductDescription->update($oCheckTranslateExist->id,$request);
                }

            }else{


                if(isset($request->cms_language_id) && $request->cms_language_id ==config('app.default_language')){
                    $this->rCmsProduct->update($request->cms_product_id,$request);
                }
                $this->rCmsProductDescription->create($request->all());
            }

        }else{

            $cms_product_id=$this->rCmsProduct->create($request->all());

            //  if(isset($request->cms_language_id) && $request->cms_language_id !=config('app.default_language')) {
            $request->merge(['cms_product_id'=>$cms_product_id,'cms_language_id'=>config('app.default_language')]);
            $this->rCmsProductDescription->create($request->all());
            //}

        }

        return redirect('admin/cms_product/'.$cms_product_id);


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


        $cms_product_description=$this->rCmsProductDescription->show($id);
      $request->merge(['cms_product_description_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_product_description.show', compact('cms_product_description','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCmsProduct $rCmsProduct,rCmsLanguage $rCmsLanguage)
    {


        $cms_product_description=$this->rCmsProductDescription->show($id);


 $cmsProductList=$rCmsProduct->getAllList();
 $cmsLanguageList=$rCmsLanguage->getAllList();
        return view('admin.cms_product_description.edit', compact('cms_product_description','cmsProductList','cmsLanguageList'));
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
        //$result=$this->rCmsProductDescription->update($id,$request);

        return redirect('admin/cms_product_description');
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
        $cms_product_description=$this->rCmsProductDescription->destroy($id);
        return redirect('admin/cms_product_description');
    }


}

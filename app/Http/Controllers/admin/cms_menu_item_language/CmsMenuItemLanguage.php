<?php

namespace App\Http\Controllers\admin\cms_menu_item_language;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_menu_item_language\createRequest;
use App\Http\Requests\admin\cms_menu_item_language\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsMenuItemLanguage as mCmsMenuItemLanguage;
use App\Repositories\admin\cms_menu_item_language\CmsMenuItemLanguageContract as rCmsMenuItemLanguage;

 use App\Repositories\admin\cms_menu_item\CmsMenuItemContract as rCmsMenuItem;

class CmsMenuItemLanguage extends Controller
{
    private $rCmsMenuItemLanguage;

    public function __construct(rCmsMenuItemLanguage $rCmsMenuItemLanguage)
    {
        $this->rCmsMenuItemLanguage=$rCmsMenuItemLanguage;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsMenuItemLanguage->getByFilter($request);

        return view('admin.cms_menu_item_language.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsMenuItem $rCmsMenuItem)
    {

$cmsMenuItemList=$rCmsMenuItem->getAllList();

        $languageList=config('app.language');
        unset($languageList[config('app.default_language')]);
        return view('admin.cms_menu_item_language.create',compact('request','cmsMenuItemList','languageList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {

        $cms_menu_item_id=0;
        if(isset($request->cms_menu_item_id)){
            $cms_menu_item_id=$request->cms_menu_item_id;
            if(isset($request->cms_language_id) && $request->cms_language_id !=config('app.default_language')){

                $oCheckTranslateExist=$this->rCmsMenuItemLanguage->getByFilter($request->only('cms_menu_item_id','cms_language_id'))->first();
                if(count($oCheckTranslateExist)){

                    $this->rCmsMenuItemLanguage->update($oCheckTranslateExist->id,$request);
                }else{

                    $this->rCmsMenuItemLanguage->create($request->all());
                }

            }else{
                $this->rCmsMenuItem->update($request->cms_menu_item_id,$request);
            }

        }else{

            $cms_menu_item_id=$this->rCmsMenuItem->create($request->all());

            if(isset($request->cms_language_id) && $request->cms_language_id !=config('app.default_language')) {
                $request->merge(['cms_menu_item_id'=>$cms_menu_item_id]);
                $this->rCmsMenuItemLanguage->create($request->all());
            }

        }

        return redirect('admin/cms_menu_item/'.$cms_menu_item_id);



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


        $cms_menu_item_language=$this->rCmsMenuItemLanguage->show($id);
      $request->merge(['cms_menu_item_language_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_menu_item_language.show', compact('cms_menu_item_language','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCmsMenuItem $rCmsMenuItem)
    {


        $cms_menu_item_language=$this->rCmsMenuItemLanguage->show($id);


 $cmsMenuItemList=$rCmsMenuItem->getAllList();
        $languageList=config('app.language');
        unset($languageList[config('app.default_language')]);
        return view('admin.cms_menu_item_language.edit', compact('cms_menu_item_language','cmsMenuItemList','languageList'));
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

        return redirect('admin/cms_menu_item_language');
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
        $cms_menu_item_language=$this->rCmsMenuItemLanguage->destroy($id);
        return redirect('admin/cms_menu_item_language');
    }


}

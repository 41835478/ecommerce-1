<?php

namespace App\Http\Controllers\admin\cms_html_language;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_html_language\createRequest;
use App\Http\Requests\admin\cms_html_language\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsHtmlLanguage as mCmsHtmlLanguage;
use App\Repositories\admin\cms_html_language\CmsHtmlLanguageContract as rCmsHtmlLanguage;

 use App\Repositories\admin\cms_html\CmsHtmlContract as rCmsHtml;

class CmsHtmlLanguage extends Controller
{
    private $rCmsHtmlLanguage;
    private  $rCmsHtml;

    public function __construct(rCmsHtmlLanguage $rCmsHtmlLanguage,rCmsHtml $rCmsHtml)
    {
        $this->rCmsHtmlLanguage=$rCmsHtmlLanguage;
        $this->rCmsHtml=$rCmsHtml;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsHtmlLanguage->getByFilter($request);

        return view('admin.cms_html_language.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsHtml $rCmsHtml)
    {

$cmsHtmlList=$rCmsHtml->getAllList();

        return view('admin.cms_html_language.create',compact('request','cmsHtmlList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {
        $cms_html_id=0;
        if(isset($request->cms_html_id)){
            $cms_html_id=$request->cms_html_id;
            if(isset($request->cms_language_id) && $request->cms_language_id !=config('app.default_language')){

                $oCheckTranslateExist=$this->rCmsHtmlLanguage->getByFilter($request->only('cms_html_id','cms_language_id'))->first();
                if(count($oCheckTranslateExist)){

                    $this->rCmsHtmlLanguage->update($oCheckTranslateExist->id,$request);
                }else{

                    $this->rCmsHtmlLanguage->create($request->all());
                }

            }else{
                $this->rCmsHtml->update($request->cms_html_id,$request);
            }

        }else{

            $cms_html_id=$this->rCmsHtml->create($request->all());

            if(isset($request->cms_language_id) && $request->cms_language_id !=config('app.default_language')) {
                $request->merge(['cms_html_id'=>$cms_html_id]);
                $this->rCmsHtmlLanguage->create($request->all());
            }

        }

        return redirect('admin/cms_html/'.$cms_html_id);


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


        $cms_html_language=$this->rCmsHtmlLanguage->show($id);
      $request->merge(['cms_html_language_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_html_language.show', compact('cms_html_language','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCmsHtml $rCmsHtml)
    {


        $cms_html_language=$this->rCmsHtmlLanguage->show($id);


 $cmsHtmlList=$rCmsHtml->getAllList();
        return view('admin.cms_html_language.edit', compact('cms_html_language','cmsHtmlList'));
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
        return redirect('admin/cms_html_language');
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
        $cms_html_language=$this->rCmsHtmlLanguage->destroy($id);
        return redirect('admin/cms_html_language');
    }


}

<?php

namespace App\Http\Controllers\admin\cms_html;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_html\createRequest;
use App\Http\Requests\admin\cms_html\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsHtml as mCmsHtml;
use App\Repositories\admin\cms_html\CmsHtmlContract as rCmsHtml;

 use App\Repositories\admin\cms_html_language\CmsHtmlLanguageContract as rCmsHtmlLanguage;

class CmsHtml extends Controller
{
    private $rCmsHtml;

    public function __construct(rCmsHtml $rCmsHtml)
    {
        $this->rCmsHtml=$rCmsHtml;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsHtml->getByFilter($request);

        return view('admin.cms_html.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('admin.cms_html.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {

// this function is not used look to cmsArticleLanguage controller to store method

//        $oResults=$this->rCmsHtml->create($request->all());
//
//        return redirect('admin/cms_html');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCmsHtmlLanguage $rCmsHtmlLanguage)
    {


        $cms_html=$this->rCmsHtml->show($id);
      $request->merge(['cms_html_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_cms_html_language';
    $oCmsHtmlLanguageResults=$rCmsHtmlLanguage->getByFilter($request);

        return view('admin.cms_html.show', compact('cms_html','request','oCmsHtmlLanguageResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,Request $request,rCmsHtmlLanguage $rCmsHtmlLanguage)
    {

        $cms_html=$this->rCmsHtml->show($id);

        if(isset($request->cms_language_id)){
            if($request->cms_language_id != config('app.default_language')){

                $translate=$rCmsHtmlLanguage->getByFilter(['cms_html_id'=>$id,'cms_language_id'=>$request->cms_language_id])->first();

                if(count($translate)){
                    $cms_html->name=$translate->name;
                    $cms_html->body=$translate->body;
                }

            }
        }



        return view('admin.cms_html.edit', compact('cms_html','request'));

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

// this function is not used look to cmsArticleLanguage controller to store method
//        $result=$this->rCmsHtml->update($id,$request);
//
//        return redirect('admin/cms_html');
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
        $cms_html=$this->rCmsHtml->destroy($id);
        return redirect('admin/cms_html');
    }


}

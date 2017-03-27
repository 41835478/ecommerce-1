<?php

namespace App\Http\Controllers\admin\cms_article_language;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_article_language\createRequest;
use App\Http\Requests\admin\cms_article_language\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsArticleLanguage as mCmsArticleLanguage;
use App\Repositories\admin\cms_article_language\CmsArticleLanguageContract as rCmsArticleLanguage;

use App\Repositories\admin\cms_article\CmsArticleContract as rCmsArticle;

class CmsArticleLanguage extends Controller
{
    private $rCmsArticleLanguage;

    public function __construct(rCmsArticleLanguage $rCmsArticleLanguage,rCmsArticle $rCmsArticle)
    {
        $this->rCmsArticleLanguage=$rCmsArticleLanguage;
        $this->rCmsArticle=$rCmsArticle;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsArticleLanguage->getByFilter($request);

        return view('admin.cms_article_language.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsArticle $rCmsArticle)
    {

        $cmsArticleList=$rCmsArticle->getAllList();

        return view('admin.cms_article_language.create',compact('request','cmsArticleList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {
        $cms_article_id=0;
        if(isset($request->cms_article_id)){
            $cms_article_id=$request->cms_article_id;
            if(isset($request->cms_language_id) && $request->cms_language_id !=config('app.default_language')){

                $oCheckTranslateExist=$this->rCmsArticleLanguage->getByFilter($request->only('cms_article_id','cms_language_id'))->first();
                if(count($oCheckTranslateExist)){

                    $this->rCmsArticleLanguage->update($oCheckTranslateExist->id,$request);
                }else{

                    $this->rCmsArticleLanguage->create($request->all());
                }

            }else{
                $this->rCmsArticle->update($request->cms_article_id,$request);
            }

        }else{

            $cms_article_id=$this->rCmsArticle->create($request->all());

            if(isset($request->cms_language_id) && $request->cms_language_id !=config('app.default_language')) {
                $request->merge(['cms_article_id'=>$cms_article_id]);
                $this->rCmsArticleLanguage->create($request->all());
            }

        }

        return redirect('admin/cms_article/'.$cms_article_id);
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


        $cms_article_language=$this->rCmsArticleLanguage->show($id);
        $request->merge(['cms_article_language_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_article_language.show', compact('cms_article_language','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCmsArticle $rCmsArticle)
    {


        $cms_article_language=$this->rCmsArticleLanguage->show($id);


        $cmsArticleList=$rCmsArticle->getAllList();
        return view('admin.cms_article_language.edit', compact('cms_article_language','cmsArticleList'));
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
        return redirect('admin/cms_article_language');
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
        $cms_article_language=$this->rCmsArticleLanguage->destroy($id);
        return redirect('admin/cms_article_language');
    }


}

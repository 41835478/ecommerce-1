<?php

namespace App\Http\Controllers\admin\cms_article;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_article\createRequest;
use App\Http\Requests\admin\cms_article\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsArticle as mCmsArticle;
use App\Repositories\admin\cms_article\CmsArticleContract as rCmsArticle;

use App\Repositories\admin\cms_page\CmsPageContract as rCmsPage;
use App\Repositories\admin\cms_article_language\CmsArticleLanguageContract as rCmsArticleLanguage;

class CmsArticle extends Controller
{
    private $rCmsArticle;

    public function __construct(rCmsArticle $rCmsArticle)
    {
        $this->rCmsArticle=$rCmsArticle;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsArticle->getByFilter($request);

        return view('admin.cms_article.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsPage $rCmsPage)
    {

        $cmsPageList=$rCmsPage->getAllList();

        return view('admin.cms_article.create',compact('request','cmsPageList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request,rCmsArticleLanguage $rCmsArticleLanguage)
    {

// this function is not used look to cmsArticleLanguage controller to store method
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCmsArticleLanguage $rCmsArticleLanguage)
    {


        $cms_article=$this->rCmsArticle->show($id);
        $request->merge(['cms_article_id'=>$id,'page_name'=>'page']);


        $request->page_name='page_cms_article_language';
        $oCmsArticleLanguageResults=$rCmsArticleLanguage->getByFilter($request);

        return view('admin.cms_article.show', compact('cms_article','request','oCmsArticleLanguageResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,Request $request,rCmsPage $rCmsPage,rCmsArticleLanguage $rCmsArticleLanguage)
    {

        $cms_article=$this->rCmsArticle->show($id);

        if(isset($request->cms_language_id)){
            if($request->cms_language_id != config('app.default_language'))  {

                $translate=$rCmsArticleLanguage->getByFilter(['cms_article_id'=>$id,'cms_language_id'=>$request->cms_language_id])->first();

                if(count($translate)){
                    $cms_article->name=$translate->name;
                    $cms_article->body=$translate->body;
                }

            }
        }



        $cmsPageList=$rCmsPage->getAllList();
        return view('admin.cms_article.edit', compact('cms_article','request','cmsPageList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return redirect
     */
    public function update($id, editRequest $request,rCmsArticleLanguage $rCmsArticleLanguage)
    {
// this function is not used look to cmsArticleLanguage controller to store method

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
        $cms_article=$this->rCmsArticle->destroy($id);
        return redirect('admin/cms_article');
    }


}

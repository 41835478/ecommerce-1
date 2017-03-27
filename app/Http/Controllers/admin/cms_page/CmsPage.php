<?php

namespace App\Http\Controllers\admin\cms_page;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_page\createRequest;
use App\Http\Requests\admin\cms_page\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsPage as mCmsPage;
use App\Repositories\admin\cms_page\CmsPageContract as rCmsPage;

 use App\Repositories\admin\cms_article\CmsArticleContract as rCmsArticle;
 use App\Repositories\admin\cms_page_content\CmsPageContentContract as rCmsPageContent;
use App\Repositories\admin\cms_page_content_page\CmsPageContentPageContract as rCmsPageContentPage;
use App\Repositories\admin\cms_form\CmsFormContract as rCmsForm;


class CmsPage extends Controller
{
    private $rCmsPage;

    public function __construct(rCmsPage $rCmsPage)
    {
        $this->rCmsPage=$rCmsPage;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsPage->getByFilter($request);

        return view('admin.cms_page.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('admin.cms_page.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsPage->create($request->all());

        return redirect('admin/cms_page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCmsArticle $rCmsArticle,rCmsPageContent $rCmsPageContent,rCmsPageContentPage $rCmsPageContentPage,rCmsForm $rCmsForm)
    {


        $cms_page=$this->rCmsPage->show($id);
      $request->merge(['cms_page_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_cms_article';
    $oCmsArticleResults=$rCmsArticle->getByFilter($request);
    $request->page_name='page_cms_page_content';
    $oCmsPageContentResults=$rCmsPageContent->getByFilter($request);
        $request->page_name='page_cms_page_content_page';
        $oCmsPageContentPageResults=$rCmsPageContentPage->getByFilter($request);

        $request->page_name='page_cms_page_content_page';
        $oCmsFormResults=$rCmsForm->getByFilter($request);


        return view('admin.cms_page.show', compact('cms_page','request','oCmsArticleResults','oCmsPageContentResults','oCmsPageContentPageResults','oCmsFormResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id)
    {


        $cms_page=$this->rCmsPage->show($id);


        return view('admin.cms_page.edit', compact('cms_page'));
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

        $result=$this->rCmsPage->update($id,$request);

        return redirect('admin/cms_page');
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
        $cms_page=$this->rCmsPage->destroy($id);
        return redirect('admin/cms_page');
    }


}

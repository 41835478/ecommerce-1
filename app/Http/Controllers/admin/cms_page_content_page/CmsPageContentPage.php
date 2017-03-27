<?php

namespace App\Http\Controllers\admin\cms_page_content_page;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_page_content_page\createRequest;
use App\Http\Requests\admin\cms_page_content_page\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsPageContentPage as mCmsPageContentPage;
use App\Repositories\admin\cms_page_content_page\CmsPageContentPageContract as rCmsPageContentPage;

 use App\Repositories\admin\cms_page\CmsPageContract as rCmsPage;
 use App\Repositories\admin\cms_page_content\CmsPageContentContract as rCmsPageContent;

class CmsPageContentPage extends Controller
{
    private $rCmsPageContentPage;

    public function __construct(rCmsPageContentPage $rCmsPageContentPage)
    {
        $this->rCmsPageContentPage=$rCmsPageContentPage;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsPageContentPage->getByFilter($request);

        return view('admin.cms_page_content_page.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsPage $rCmsPage,rCmsPageContent $rCmsPageContent)
    {

$cmsPageList=$rCmsPage->getAllList();
$cmsPageContentList=$rCmsPageContent->getAllList();

        return view('admin.cms_page_content_page.create',compact('request','cmsPageList','cmsPageContentList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsPageContentPage->create($request->all());

        return redirect('admin/cms_page_content_page');
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


        $cms_page_content_page=$this->rCmsPageContentPage->show($id);
      $request->merge(['cms_page_content_page_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_page_content_page.show', compact('cms_page_content_page','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCmsPage $rCmsPage,rCmsPageContent $rCmsPageContent)
    {


        $cms_page_content_page=$this->rCmsPageContentPage->show($id);


 $cmsPageList=$rCmsPage->getAllList();
 $cmsPageContentList=$rCmsPageContent->getAllList();
        return view('admin.cms_page_content_page.edit', compact('cms_page_content_page','cmsPageList','cmsPageContentList'));
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

        $result=$this->rCmsPageContentPage->update($id,$request);

        return redirect('admin/cms_page_content_page');
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
        $cms_page_content_page=$this->rCmsPageContentPage->destroy($id);
        return redirect('admin/cms_page_content_page');
    }


}

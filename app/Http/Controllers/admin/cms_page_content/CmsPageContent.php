<?php

namespace App\Http\Controllers\admin\cms_page_content;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_page_content\createRequest;
use App\Http\Requests\admin\cms_page_content\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsPageContent as mCmsPageContent;
use App\Repositories\admin\cms_page_content\CmsPageContentContract as rCmsPageContent;

 use App\Repositories\admin\cms_page\CmsPageContract as rCmsPage;
 use App\Repositories\admin\cms_page_content_page\CmsPageContentPageContract as rCmsPageContentPage;

class CmsPageContent extends Controller
{
    private $rCmsPageContent;

    public function __construct(rCmsPageContent $rCmsPageContent)
    {
        $this->rCmsPageContent=$rCmsPageContent;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsPageContent->getByFilter($request);

        return view('admin.cms_page_content.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsPage $rCmsPage)
    {

$cmsPageList=$rCmsPage->getAllList();

        return view('admin.cms_page_content.create',compact('request','cmsPageList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsPageContent->create($request->all());

        return redirect('admin/cms_page_content');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCmsPageContentPage $rCmsPageContentPage)
    {


        $cms_page_content=$this->rCmsPageContent->show($id);
      $request->merge(['cms_page_content_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_cms_page_content_page';
    $oCmsPageContentPageResults=$rCmsPageContentPage->getByFilter($request);

        return view('admin.cms_page_content.show', compact('cms_page_content','request','oCmsPageContentPageResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCmsPage $rCmsPage)
    {


        $cms_page_content=$this->rCmsPageContent->show($id);


 $cmsPageList=$rCmsPage->getAllList();
        return view('admin.cms_page_content.edit', compact('cms_page_content','cmsPageList'));
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

        $result=$this->rCmsPageContent->update($id,$request);

        return redirect('admin/cms_page_content');
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
        $cms_page_content=$this->rCmsPageContent->destroy($id);
        return redirect('admin/cms_page_content');
    }


}

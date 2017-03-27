<?php

namespace App\Http\Controllers\admin\cms_content;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_content\createRequest;
use App\Http\Requests\admin\cms_content\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsContent as mCmsContent;
use App\Repositories\admin\cms_content\CmsContentContract as rCmsContent;


class CmsContent extends Controller
{
    private $rCmsContent;

    public function __construct(rCmsContent $rCmsContent)
    {
        $this->rCmsContent=$rCmsContent;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsContent->getByFilter($request);

        return view('admin.cms_content.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('admin.cms_content.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsContent->create($request->all());

        return redirect('admin/cms_content');
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


        $cms_content=$this->rCmsContent->show($id);
      $request->merge(['cms_content_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_content.show', compact('cms_content','request'));
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


        $cms_content=$this->rCmsContent->show($id);


        return view('admin.cms_content.edit', compact('cms_content'));
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

        $result=$this->rCmsContent->update($id,$request);

        return redirect('admin/cms_content');
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
        $cms_content=$this->rCmsContent->destroy($id);
        return redirect('admin/cms_content');
    }


}

<?php

namespace App\Http\Controllers\admin\cms_menu;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_menu\createRequest;
use App\Http\Requests\admin\cms_menu\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsMenu as mCmsMenu;
use App\Repositories\admin\cms_menu\CmsMenuContract as rCmsMenu;

 use App\Repositories\admin\cms_menu_language\CmsMenuLanguageContract as rCmsMenuLanguage;
 use App\Repositories\admin\cms_menu_item\CmsMenuItemContract as rCmsMenuItem;

class CmsMenu extends Controller
{
    private $rCmsMenu;

    public function __construct(rCmsMenu $rCmsMenu)
    {
        $this->rCmsMenu=$rCmsMenu;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsMenu->getByFilter($request);

        return view('admin.cms_menu.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request)
    {


        return view('admin.cms_menu.create',compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsMenu->create($request->all());

        return redirect('admin/cms_menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCmsMenuLanguage $rCmsMenuLanguage,rCmsMenuItem $rCmsMenuItem)
    {


        $cms_menu=$this->rCmsMenu->show($id);
      $request->merge(['cms_menu_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_cms_menu_language';
    $oCmsMenuLanguageResults=$rCmsMenuLanguage->getByFilter($request);
    $request->page_name='page_cms_menu_item';
    $oCmsMenuItemResults=$rCmsMenuItem->getByFilter($request);

        return view('admin.cms_menu.show', compact('cms_menu','request','oCmsMenuLanguageResults','oCmsMenuItemResults'));
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


        $cms_menu=$this->rCmsMenu->show($id);


        return view('admin.cms_menu.edit', compact('cms_menu'));
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

        $result=$this->rCmsMenu->update($id,$request);

        return redirect('admin/cms_menu');
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
        $cms_menu=$this->rCmsMenu->destroy($id);
        return redirect('admin/cms_menu');
    }


}

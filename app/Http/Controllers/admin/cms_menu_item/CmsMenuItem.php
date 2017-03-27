<?php

namespace App\Http\Controllers\admin\cms_menu_item;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_menu_item\createRequest;
use App\Http\Requests\admin\cms_menu_item\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsMenuItem as mCmsMenuItem;
use App\Repositories\admin\cms_menu_item\CmsMenuItemContract as rCmsMenuItem;

 use App\Repositories\admin\cms_menu\CmsMenuContract as rCmsMenu;
 use App\Repositories\admin\cms_menu_item_language\CmsMenuItemLanguageContract as rCmsMenuItemLanguage;

class CmsMenuItem extends Controller
{
    private $rCmsMenuItem;

    public function __construct(rCmsMenuItem $rCmsMenuItem)
    {
        $this->rCmsMenuItem=$rCmsMenuItem;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsMenuItem->getByFilter($request);

        return view('admin.cms_menu_item.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsMenu $rCmsMenu,rCmsMenuItem $rCmsMenuItem)
    {

        $cmsMenuList=$rCmsMenu->getAllList();
        $cmsMenuItemList=$rCmsMenuItem->getAllList();

        return view('admin.cms_menu_item.create',compact('request','cmsMenuList','cmsMenuItemList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsMenuItem->create($request->all());

        return redirect('admin/cms_menu_item');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCmsMenuItemLanguage $rCmsMenuItemLanguage)
    {


        $cms_menu_item=$this->rCmsMenuItem->show($id);
      $request->merge(['cms_menu_item_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_cms_menu_item_language';
    $oCmsMenuItemLanguageResults=$rCmsMenuItemLanguage->getByFilter($request);

        return view('admin.cms_menu_item.show', compact('cms_menu_item','request','oCmsMenuItemLanguageResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rCmsMenu $rCmsMenu)
    {


        $cms_menu_item=$this->rCmsMenuItem->show($id);


 $cmsMenuList=$rCmsMenu->getAllList();
        return view('admin.cms_menu_item.edit', compact('cms_menu_item','cmsMenuList'));
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

        $result=$this->rCmsMenuItem->update($id,$request);

        return redirect('admin/cms_menu_item');
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
        $cms_menu_item=$this->rCmsMenuItem->destroy($id);
        return redirect('admin/cms_menu_item');
    }


}

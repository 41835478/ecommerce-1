<?php

namespace App\Http\Controllers\admin\cms_compare_list;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_compare_list\createRequest;
use App\Http\Requests\admin\cms_compare_list\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsCompareList as mCmsCompareList;
use App\Repositories\admin\cms_compare_list\CmsCompareListContract as rCmsCompareList;

 use App\Repositories\admin\users\UsersContract as rUsers;
 use App\Repositories\admin\cms_product\CmsProductContract as rCmsProduct;

class CmsCompareList extends Controller
{
    private $rCmsCompareList;

    public function __construct(rCmsCompareList $rCmsCompareList)
    {
        $this->rCmsCompareList=$rCmsCompareList;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsCompareList->getByFilter($request);

        return view('admin.cms_compare_list.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rUsers $rUsers,rCmsProduct $rCmsProduct)
    {

$usersList=$rUsers->getAllList();
$cmsProductList=$rCmsProduct->getAllList();

        return view('admin.cms_compare_list.create',compact('request','usersList','cmsProductList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsCompareList->create($request->all());

        return redirect('admin/cms_compare_list');
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


        $cms_compare_list=$this->rCmsCompareList->show($id);
      $request->merge(['cms_compare_list_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_compare_list.show', compact('cms_compare_list','request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,rUsers $rUsers,rCmsProduct $rCmsProduct)
    {


        $cms_compare_list=$this->rCmsCompareList->show($id);


 $usersList=$rUsers->getAllList();
 $cmsProductList=$rCmsProduct->getAllList();
        return view('admin.cms_compare_list.edit', compact('cms_compare_list','usersList','cmsProductList'));
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

        $result=$this->rCmsCompareList->update($id,$request);

        return redirect('admin/cms_compare_list');
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
        $cms_compare_list=$this->rCmsCompareList->destroy($id);
        return redirect('admin/cms_compare_list');
    }


}

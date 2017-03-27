<?php

namespace App\Http\Controllers\admin\cms_wishlist;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_wishlist\createRequest;
use App\Http\Requests\admin\cms_wishlist\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsWishlist as mCmsWishlist;
use App\Repositories\admin\cms_wishlist\CmsWishlistContract as rCmsWishlist;

 use App\Repositories\admin\users\UsersContract as rUsers;
 use App\Repositories\admin\cms_product\CmsProductContract as rCmsProduct;

class CmsWishlist extends Controller
{
    private $rCmsWishlist;

    public function __construct(rCmsWishlist $rCmsWishlist)
    {
        $this->rCmsWishlist=$rCmsWishlist;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsWishlist->getByFilter($request);

        return view('admin.cms_wishlist.index', compact('oResults','request'));
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

        return view('admin.cms_wishlist.create',compact('request','usersList','cmsProductList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsWishlist->create($request->all());

        return redirect('admin/cms_wishlist');
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


        $cms_wishlist=$this->rCmsWishlist->show($id);
      $request->merge(['cms_wishlist_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_wishlist.show', compact('cms_wishlist','request'));
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


        $cms_wishlist=$this->rCmsWishlist->show($id);


 $usersList=$rUsers->getAllList();
 $cmsProductList=$rCmsProduct->getAllList();
        return view('admin.cms_wishlist.edit', compact('cms_wishlist','usersList','cmsProductList'));
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

        $result=$this->rCmsWishlist->update($id,$request);

        return redirect('admin/cms_wishlist');
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
        $cms_wishlist=$this->rCmsWishlist->destroy($id);
        return redirect('admin/cms_wishlist');
    }


}

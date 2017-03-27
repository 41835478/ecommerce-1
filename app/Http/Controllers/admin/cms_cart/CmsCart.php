<?php

namespace App\Http\Controllers\admin\cms_cart;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_cart\createRequest;
use App\Http\Requests\admin\cms_cart\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsCart as mCmsCart;
use App\Repositories\admin\cms_cart\CmsCartContract as rCmsCart;

 use App\Repositories\admin\users\UsersContract as rUsers;
 use App\Repositories\admin\cms_product\CmsProductContract as rCmsProduct;

class CmsCart extends Controller
{
    private $rCmsCart;

    public function __construct(rCmsCart $rCmsCart)
    {
        $this->rCmsCart=$rCmsCart;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsCart->getByFilter($request);

        return view('admin.cms_cart.index', compact('oResults','request'));
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

        return view('admin.cms_cart.create',compact('request','usersList','cmsProductList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCmsCart->create($request->all());

        return redirect('admin/cms_cart');
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


        $cms_cart=$this->rCmsCart->show($id);
      $request->merge(['cms_cart_id'=>$id,'page_name'=>'page']);



        return view('admin.cms_cart.show', compact('cms_cart','request'));
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


        $cms_cart=$this->rCmsCart->show($id);


 $usersList=$rUsers->getAllList();
 $cmsProductList=$rCmsProduct->getAllList();
        return view('admin.cms_cart.edit', compact('cms_cart','usersList','cmsProductList'));
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

        $result=$this->rCmsCart->update($id,$request);

        return redirect('admin/cms_cart');
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
        $cms_cart=$this->rCmsCart->destroy($id);
        return redirect('admin/cms_cart');
    }


}

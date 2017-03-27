<?php

namespace App\Http\Controllers\admin\cms_product;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\cms_product\createRequest;
use App\Http\Requests\admin\cms_product\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\CmsProduct as mCmsProduct;
use App\Repositories\admin\cms_product\CmsProductContract as rCmsProduct;

 use App\Repositories\admin\cms_category\CmsCategoryContract as rCmsCategory;
 use App\Repositories\admin\cms_product_description\CmsProductDescriptionContract as rCmsProductDescription;
 use App\Repositories\admin\cms_cart\CmsCartContract as rCmsCart;
 use App\Repositories\admin\cms_wishlist\CmsWishlistContract as rCmsWishlist;
 use App\Repositories\admin\cms_compare_list\CmsCompareListContract as rCmsCompareList;

class CmsProduct extends Controller
{
    private $rCmsProduct;

    public function __construct(rCmsProduct $rCmsProduct)
    {
        $this->rCmsProduct=$rCmsProduct;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {


        $oResults=$this->rCmsProduct->getByFilter($request);

        return view('admin.cms_product.index', compact('oResults','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create(Request $request,rCmsCategory $rCmsCategory)
    {

$cmsCategoryList=$rCmsCategory->getAllList();
        return view('admin.cms_product.create',compact('request','cmsCategoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return redirect
     */
    public function store(createRequest $request)
    {

// this function is not used look to cmsProductDescription controller to store method

//        $oResults=$this->rCmsProduct->create($request->all());
//
//        return redirect('admin/cms_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function show($id,Request $request,rCmsProductDescription $rCmsProductDescription,rCmsCart $rCmsCart,rCmsWishlist $rCmsWishlist,rCmsCompareList $rCmsCompareList)
    {


        $cms_product=$this->rCmsProduct->show($id);
      $request->merge(['cms_product_id'=>$id,'page_name'=>'page']);


    $request->page_name='page_cms_product_description';
    $oCmsProductDescriptionResults=$rCmsProductDescription->getByFilter($request);
    $request->page_name='page_cms_cart';
    $oCmsCartResults=$rCmsCart->getByFilter($request);
    $request->page_name='page_cms_wishlist';
    $oCmsWishlistResults=$rCmsWishlist->getByFilter($request);
    $request->page_name='page_cms_compare_list';
    $oCmsCompareListResults=$rCmsCompareList->getByFilter($request);

        return view('admin.cms_product.show', compact('cms_product','request','oCmsProductDescriptionResults','oCmsCartResults','oCmsWishlistResults','oCmsCompareListResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return view
     */
    public function edit($id,Request $request,rCmsCategory $rCmsCategory,rCmsProductDescription $rCmsProductDescription)
    {


        $cms_product=$this->rCmsProduct->show($id);

        if(isset($request->cms_language_id)){
            if($request->cms_language_id != config('app.default_language')){

                $translate=$rCmsProductDescription->getByFilter(['cms_product_id'=>$id,'cms_language_id'=>$request->cms_language_id])->first();

                if(count($translate)){
                    $cms_product->name=$translate->name;
                    $cms_product->description=$translate->description;
                }

            }
        }


        $categoryList=$this->rCmsCategory->getAllList()->all();
        return view('admin.cms_product.edit', compact('cms_product','request','categoryList'));


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
// this function is not used look to cmsProductDescription controller to store method

//        $result=$this->rCmsProduct->update($id,$request);
//        return redirect('admin/cms_product');
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
        $cms_product=$this->rCmsProduct->destroy($id);
        return redirect('admin/cms_product');
    }


}

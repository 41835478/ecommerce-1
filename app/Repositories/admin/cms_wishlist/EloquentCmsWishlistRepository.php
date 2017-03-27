<?php
namespace App\Repositories\admin\cms_wishlist;

use Session;
use App\Models\CmsWishlist;
use App\Repositories\admin\cms_wishlist\CmsWishlistContract;

class EloquentCmsWishlistRepository implements CmsWishlistContract
{

    public function getByFilter($data)
    {


$oResults =CmsWishlist::with('Users','CmsProduct');



        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data['cms_category_id']) && !empty($data['cms_category_id'])) {
            $oResults = $oResults->where('cms_category_id', 'like', '%' . $data['cms_category_id'] . '%');
        }
        if (isset($data['name']) && !empty($data['name'])) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data['description']) && !empty($data['description'])) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
        }
        if (isset($data['location']) && !empty($data['location'])) {
            $oResults = $oResults->where('location', 'like', '%' . $data['location'] . '%');
        }
        if (isset($data['quantity']) && !empty($data['quantity'])) {
            $oResults = $oResults->where('quantity', 'like', '%' . $data['quantity'] . '%');
        }
        if (isset($data['image']) && !empty($data['image'])) {
            $oResults = $oResults->where('image', 'like', '%' . $data['image'] . '%');
        }
        if (isset($data['shipping']) && !empty($data['shipping'])) {
            $oResults = $oResults->where('shipping', 'like', '%' . $data['shipping'] . '%');
        }
        if (isset($data['price']) && !empty($data['price'])) {
            $oResults = $oResults->where('price', 'like', '%' . $data['price'] . '%');
        }
        if (isset($data['points']) && !empty($data['points'])) {
            $oResults = $oResults->where('points', 'like', '%' . $data['points'] . '%');
        }
        if (isset($data['date_available']) && !empty($data['date_available'])) {
            $oResults = $oResults->where('date_available', 'like', '%' . $data['date_available'] . '%');
        }
        if (isset($data['weight']) && !empty($data['weight'])) {
            $oResults = $oResults->where('weight', 'like', '%' . $data['weight'] . '%');
        }
        if (isset($data['length']) && !empty($data['length'])) {
            $oResults = $oResults->where('length', 'like', '%' . $data['length'] . '%');
        }
        if (isset($data['width']) && !empty($data['width'])) {
            $oResults = $oResults->where('width', 'like', '%' . $data['width'] . '%');
        }
        if (isset($data['height']) && !empty($data['height'])) {
            $oResults = $oResults->where('height', 'like', '%' . $data['height'] . '%');
        }
        if (isset($data['subtract']) && !empty($data['subtract'])) {
            $oResults = $oResults->where('subtract', 'like', '%' . $data['subtract'] . '%');
        }
        if (isset($data['minimum']) && !empty($data['minimum'])) {
            $oResults = $oResults->where('minimum', 'like', '%' . $data['minimum'] . '%');
        }
        if (isset($data['sort_order']) && !empty($data['sort_order'])) {
            $oResults = $oResults->where('sort_order', 'like', '%' . $data['sort_order'] . '%');
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('status', 'like', '%' . $data['status'] . '%');
        }
        if (isset($data['viewed']) && !empty($data['viewed'])) {
            $oResults = $oResults->where('viewed', 'like', '%' . $data['viewed'] . '%');
        }
        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('created_at', 'like', '%' . $data['created_at'] . '%');
        }
        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('updated_at', 'like', '%' . $data['updated_at'] . '%');
        }
        if (isset($data['model']) && !empty($data['model'])) {
            $oResults = $oResults->where('model', 'like', '%' . $data['model'] . '%');
        }
        if (isset($data['sku']) && !empty($data['sku'])) {
            $oResults = $oResults->where('sku', 'like', '%' . $data['sku'] . '%');
        }
        if (isset($data['upc']) && !empty($data['upc'])) {
            $oResults = $oResults->where('upc', 'like', '%' . $data['upc'] . '%');
        }
        if (isset($data['ean']) && !empty($data['ean'])) {
            $oResults = $oResults->where('ean', 'like', '%' . $data['ean'] . '%');
        }
        if (isset($data['jan']) && !empty($data['jan'])) {
            $oResults = $oResults->where('jan', 'like', '%' . $data['jan'] . '%');
        }
        if (isset($data['isbn']) && !empty($data['isbn'])) {
            $oResults = $oResults->where('isbn', 'like', '%' . $data['isbn'] . '%');
        }
        if (isset($data['mpn']) && !empty($data['mpn'])) {
            $oResults = $oResults->where('mpn', 'like', '%' . $data['mpn'] . '%');
        }
        if (isset($data->order) && !empty($data->order)) {
            $sort = (isset($data->sort) && !empty($data->sort)) ? $data->sort : 'desc';
            $oResults = $oResults->orderBy($data->order, $sort);
        }


        if(isset($data->getAllRecords) && !empty($data->getAllRecords)){
             $oResults = $oResults->get();
        }
        elseif (isset($data->page_name) && !empty($data->page_name)) {
             $oResults = $oResults->paginate(config('ecommerce.pagination_size'), ['*'], $data->page_name);
        }else{
             $oResults = $oResults->paginate(config('ecommerce.pagination_size'));
        }
        return $oResults;
    }

    public function getAllList(){

          $oResults = new CmsWishlist();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsWishlist::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_wishlist added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_wishlist = CmsWishlist::findOrFail($id);

        return $cms_wishlist;
    }

    public function destroy($id)
    {

        $result =  CmsWishlist::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_wishlist deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_wishlist = CmsWishlist::findOrFail($id);
       $result= $cms_wishlist->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_wishlist updated!');
            return true;
        } else {
            return false;
        }

    }

}

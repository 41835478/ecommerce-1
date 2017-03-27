<?php
namespace App\Repositories\admin\cms_product_description;

use Session;
use App\Models\CmsProductDescription;
use App\Repositories\admin\cms_product_description\CmsProductDescriptionContract;

class EloquentCmsProductDescriptionRepository implements CmsProductDescriptionContract
{

    public function getByFilter($data)
    {


$oResults =CmsProductDescription::with('cms_product');

        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }

        if (isset($data['cms_product_id']) && !empty($data['cms_product_id'])) {
            $oResults = $oResults->where('cms_product_id', 'like', '%' . $data['cms_product_id'] . '%');
        }

        if (isset($data['cms_language_id']) && !empty($data['cms_language_id'])) {
            $oResults = $oResults->where('cms_language_id', 'like', '%' . $data['cms_language_id'] . '%');
        }

        if (isset($data['name']) && !empty($data['name'])) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }

        if (isset($data['description']) && !empty($data['description'])) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
        }

        if (isset($data['tag']) && !empty($data['tag'])) {
            $oResults = $oResults->where('tag', 'like', '%' . $data['tag'] . '%');
        }

        if (isset($data['meta_title']) && !empty($data['meta_title'])) {
            $oResults = $oResults->where('meta_title', 'like', '%' . $data['meta_title'] . '%');
        }

        if (isset($data['meta_description']) && !empty($data['meta_description'])) {
            $oResults = $oResults->where('meta_description', 'like', '%' . $data['meta_description'] . '%');
        }

        if (isset($data['meta_keyword']) && !empty($data['meta_keyword'])) {
            $oResults = $oResults->where('meta_keyword', 'like', '%' . $data['meta_keyword'] . '%');
        }

        if (isset($data['created_at']) && !empty($data['created_at'])) {
            $oResults = $oResults->where('created_at', 'like', '%' . $data['created_at'] . '%');
        }

        if (isset($data['updated_at']) && !empty($data['updated_at'])) {
            $oResults = $oResults->where('updated_at', 'like', '%' . $data['updated_at'] . '%');
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

          $oResults = new CmsProductDescription();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsProductDescription::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_product_description added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_product_description = CmsProductDescription::findOrFail($id);

        return $cms_product_description;
    }

    public function destroy($id)
    {

        $result =  CmsProductDescription::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_product_description deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_product_description = CmsProductDescription::findOrFail($id);
       $result= $cms_product_description->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_product_description updated!');
            return true;
        } else {
            return false;
        }

    }

}

<?php
namespace App\Repositories\admin\cms_category_description;

use Session;
use App\Models\CmsCategoryDescription;
use App\Repositories\admin\cms_category_description\CmsCategoryDescriptionContract;

class EloquentCmsCategoryDescriptionRepository implements CmsCategoryDescriptionContract
{

    public function getByFilter($data)
    {


$oResults =CmsCategoryDescription::with('cms_category');



        if (isset($data['id']) && !empty($data['id'])) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data['name']) && !empty($data['name'])) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data['description']) && !empty($data['description'])) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
        }
        if (isset($data['parent_id']) && !empty($data['parent_id'])) {
            $oResults = $oResults->where('parent_id', 'like', '%' . $data['parent_id'] . '%');
        }
        if (isset($data['status']) && !empty($data['status'])) {
            $oResults = $oResults->where('status', 'like', '%' . $data['status'] . '%');
        }
        if (isset($data['sort_order']) && !empty($data['sort_order'])) {
            $oResults = $oResults->where('sort_order', 'like', '%' . $data['sort_order'] . '%');
        }
        if (isset($data['column']) && !empty($data['column'])) {
            $oResults = $oResults->where('column', 'like', '%' . $data['column'] . '%');
        }
        if (isset($data['place']) && !empty($data['place'])) {
            $oResults = $oResults->where('place', 'like', '%' . $data['place'] . '%');
        }
        if (isset($data['image']) && !empty($data['image'])) {
            $oResults = $oResults->where('image', 'like', '%' . $data['image'] . '%');
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

          $oResults = new CmsCategoryDescription();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsCategoryDescription::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_category_description added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_category_description = CmsCategoryDescription::findOrFail($id);

        return $cms_category_description;
    }

    public function destroy($id)
    {

        $result =  CmsCategoryDescription::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_category_description deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_category_description = CmsCategoryDescription::findOrFail($id);
       $result= $cms_category_description->update(is_array($data)? $data:$data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_category_description updated!');
            return true;
        } else {
            return false;
        }

    }

}

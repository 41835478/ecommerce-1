<?php
namespace App\Repositories\admin\cms_menu_item;

use Session;
use App\Models\CmsMenuItem;
use App\Repositories\admin\cms_menu_item\CmsMenuItemContract;

class EloquentCmsMenuItemRepository implements CmsMenuItemContract
{

    public function getByFilter($data)
    {

        $oResults = new CmsMenuItem();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->parent_item_id) && !empty($data->parent_item_id)) {
            $oResults = $oResults->where('parent_item_id', 'like', '%' . $data['parent_item_id'] . '%');
        }
        if (isset($data->cms_menu_id) && !empty($data->cms_menu_id)) {
            $oResults = $oResults->where('cms_menu_id', 'like', '%' . $data['cms_menu_id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->disable) && !empty($data->disable)) {
            $oResults = $oResults->where('disable', 'like', '%' . $data['disable'] . '%');
        }
        if (isset($data->hide) && !empty($data->hide)) {
            $oResults = $oResults->where('hide', 'like', '%' . $data['hide'] . '%');
        }
        if (isset($data->module_type) && !empty($data->module_type)) {
            $oResults = $oResults->where('module_type', 'like', '%' . $data['module_type'] . '%');
        }
        if (isset($data->module_id) && !empty($data->module_id)) {
            $oResults = $oResults->where('module_id', 'like', '%' . $data['module_id'] . '%');
        }
        if (isset($data->order) && !empty($data->order)) {
            $oResults = $oResults->where('order', 'like', '%' . $data['order'] . '%');
        }
        if (isset($data->created_at) && !empty($data->created_at)) {
            $oResults = $oResults->where('created_at', 'like', '%' . $data['created_at'] . '%');
        }
        if (isset($data->updated_at) && !empty($data->updated_at)) {
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
             $oResults = $oResults->paginate(config('cms.pagination_size'), ['*'], $data->page_name);
        }else{
             $oResults = $oResults->paginate(config('cms.pagination_size'));
        }
        return $oResults;
    }

    public function getAllList(){

          $oResults = new CmsMenuItem();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsMenuItem::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_menu_item added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_menu_item = CmsMenuItem::with(['cms_page','cms_article','cms_form','cms_category','cms_product'])->find($id);

        return $cms_menu_item;
    }

    public function destroy($id)
    {

        $result =  CmsMenuItem::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_menu_item deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_menu_item = CmsMenuItem::findOrFail($id);
       $result= $cms_menu_item->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_menu_item updated!');
            return true;
        } else {
            return false;
        }

    }

}

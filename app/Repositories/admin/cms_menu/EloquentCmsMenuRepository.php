<?php
namespace App\Repositories\admin\cms_menu;

use Session;
use App\Models\CmsMenu;
use App\Repositories\admin\cms_menu\CmsMenuContract;

class EloquentCmsMenuRepository implements CmsMenuContract
{

    public function getByFilter($data)
    {

        $oResults = new CmsMenu();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', 'like', '%' . $data['type'] . '%');
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

          $oResults = new CmsMenu();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsMenu::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_menu added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_menu = CmsMenu::findOrFail($id);

        return $cms_menu;
    }

    public function destroy($id)
    {

        $result =  CmsMenu::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_menu deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_menu = CmsMenu::findOrFail($id);
       $result= $cms_menu->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_menu updated!');
            return true;
        } else {
            return false;
        }

    }

}

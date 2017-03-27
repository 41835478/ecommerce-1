<?php
namespace App\Repositories\admin\cms_page_content;

use Session;
use App\Models\CmsPageContent;
use App\Repositories\admin\cms_page_content\CmsPageContentContract;

class EloquentCmsPageContentRepository implements CmsPageContentContract
{

    public function getByFilter($data)
    {

        $oResults = new CmsPageContent();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->module_id) && !empty($data->module_id)) {
            $oResults = $oResults->where('module_id', 'like', '%' . $data['module_id'] . '%');
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', 'like', '%' . $data['type'] . '%');
        }
        if (isset($data->cms_page_id) && !empty($data->cms_page_id)) {
            $oResults = $oResults->where('cms_page_id', 'like', '%' . $data['cms_page_id'] . '%');
        }
        if (isset($data->module_name) && !empty($data->module_name)) {
            $oResults = $oResults->where('module_name', 'like', '%' . $data['module_name'] . '%');
        }
        if (isset($data->order) && !empty($data->order)) {
            $oResults = $oResults->where('order', 'like', '%' . $data['order'] . '%');
        }
        if (isset($data->float) && !empty($data->float)) {
            $oResults = $oResults->where('float', 'like', '%' . $data['float'] . '%');
        }
        if (isset($data->display) && !empty($data->display)) {
            $oResults = $oResults->where('display', 'like', '%' . $data['display'] . '%');
        }
        if (isset($data->position) && !empty($data->position)) {
            $oResults = $oResults->where('position', 'like', '%' . $data['position'] . '%');
        }
        if (isset($data->all_pages) && !empty($data->all_pages)) {
            $oResults = $oResults->where('all_pages', 'like', '%' . $data['all_pages'] . '%');
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

          $oResults = new CmsPageContent();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsPageContent::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_page_content added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_page_content = CmsPageContent::findOrFail($id);

        return $cms_page_content;
    }

    public function destroy($id)
    {

        $result =  CmsPageContent::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_page_content deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_page_content = CmsPageContent::findOrFail($id);
       $result= $cms_page_content->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_page_content updated!');
            return true;
        } else {
            return false;
        }

    }

}

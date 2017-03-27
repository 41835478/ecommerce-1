<?php
namespace App\Repositories\admin\cms_page_content_page;

use Session;
use App\Models\CmsPageContentPage;
use App\Repositories\admin\cms_page_content_page\CmsPageContentPageContract;

class EloquentCmsPageContentPageRepository implements CmsPageContentPageContract
{

    public function getByFilter($data)
    {

        $oResults = new CmsPageContentPage();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->cms_page_id) && !empty($data->cms_page_id)) {
            $oResults = $oResults->where('cms_page_id', 'like', '%' . $data['cms_page_id'] . '%');
        }
        if (isset($data->cms_page_content_id) && !empty($data->cms_page_content_id)) {
            $oResults = $oResults->where('cms_page_content_id', 'like', '%' . $data['cms_page_content_id'] . '%');
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

          $oResults = new CmsPageContentPage();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsPageContentPage::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_page_content_page added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_page_content_page = CmsPageContentPage::findOrFail($id);

        return $cms_page_content_page;
    }

    public function destroy($id)
    {

        $result =  CmsPageContentPage::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_page_content_page deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_page_content_page = CmsPageContentPage::findOrFail($id);
       $result= $cms_page_content_page->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_page_content_page updated!');
            return true;
        } else {
            return false;
        }

    }

}

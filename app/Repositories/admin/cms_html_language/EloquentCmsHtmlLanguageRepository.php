<?php
namespace App\Repositories\admin\cms_html_language;

use Session;
use App\Models\CmsHtmlLanguage;
use App\Repositories\admin\cms_html_language\CmsHtmlLanguageContract;

class EloquentCmsHtmlLanguageRepository implements CmsHtmlLanguageContract
{

    public function getByFilter($data)
    {

        $oResults = new CmsHtmlLanguage();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->cms_html_id) && !empty($data->cms_html_id)) {
            $oResults = $oResults->where('cms_html_id', 'like', '%' . $data['cms_html_id'] . '%');
        }
        if (isset($data->cms_language_id) && !empty($data->cms_language_id)) {
            $oResults = $oResults->where('cms_language_id', 'like', '%' . $data['cms_language_id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->body) && !empty($data->body)) {
            $oResults = $oResults->where('body', 'like', '%' . $data['body'] . '%');
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

          $oResults = new CmsHtmlLanguage();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsHtmlLanguage::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_html_language added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_html_language = CmsHtmlLanguage::findOrFail($id);

        return $cms_html_language;
    }

    public function destroy($id)
    {

        $result =  CmsHtmlLanguage::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_html_language deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_html_language = CmsHtmlLanguage::findOrFail($id);
       $result= $cms_html_language->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_html_language updated!');
            return true;
        } else {
            return false;
        }

    }

}

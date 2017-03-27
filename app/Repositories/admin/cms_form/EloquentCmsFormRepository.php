<?php
namespace App\Repositories\admin\cms_form;

use Session;
use App\Models\CmsForm;
use App\Repositories\admin\cms_form\CmsFormContract;

class EloquentCmsFormRepository implements CmsFormContract
{

    public function getByFilter($data)
    {

        $oResults = new CmsForm();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->page_id) && !empty($data->page_id)) {
            $oResults = $oResults->where('page_id', 'like', '%' . $data['page_id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->alias) && !empty($data->alias)) {
            $oResults = $oResults->where('alias', 'like', '%' . $data['alias'] . '%');
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

          $oResults = new CmsForm();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsForm::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_form added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_form = CmsForm::findOrFail($id);

        return $cms_form;
    }

    public function destroy($id)
    {

        $result =  CmsForm::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_form deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_form = CmsForm::findOrFail($id);
       $result= $cms_form->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_form updated!');
            return true;
        } else {
            return false;
        }

    }

}

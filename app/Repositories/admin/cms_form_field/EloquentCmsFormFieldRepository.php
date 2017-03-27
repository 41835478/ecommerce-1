<?php
namespace App\Repositories\admin\cms_form_field;

use Session;
use App\Models\CmsFormField;
use App\Repositories\admin\cms_form_field\CmsFormFieldContract;

class EloquentCmsFormFieldRepository implements CmsFormFieldContract
{

    public function getByFilter($data)
    {

        $oResults = new CmsFormField();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->cms_form_id) && !empty($data->cms_form_id)) {
            $oResults = $oResults->where('cms_form_id', 'like', '%' . $data['cms_form_id'] . '%');
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

          $oResults = new CmsFormField();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = CmsFormField::create($data);

        if ($result) {
            Session::flash('flash_message', 'cms_form_field added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$cms_form_field = CmsFormField::findOrFail($id);

        return $cms_form_field;
    }

    public function destroy($id)
    {

        $result =  CmsFormField::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'cms_form_field deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$cms_form_field = CmsFormField::findOrFail($id);
       $result= $cms_form_field->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'cms_form_field updated!');
            return true;
        } else {
            return false;
        }

    }

}

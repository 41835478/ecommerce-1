<?php
namespace App\Repositories\common\email\email_mass_template;

use Session;
use App\Models\common\email\EmailMassTemplate;
use App\Repositories\common\email\email_mass_template\EmailMassTemplateContract;

class EloquentEmailMassTemplateRepository implements EmailMassTemplateContract
{

    public function getByFilter($data)
    {

        $oResults = new EmailMassTemplate();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->email_group_id) && !empty($data->email_group_id)) {
            $oResults = $oResults->where('email_group_id', 'like', '%' . $data['email_group_id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->subject) && !empty($data->subject)) {
            $oResults = $oResults->where('subject', 'like', '%' . $data['subject'] . '%');
        }
        if (isset($data->body) && !empty($data->body)) {
            $oResults = $oResults->where('body', 'like', '%' . $data['body'] . '%');
        }
        if (isset($data->language) && !empty($data->language)) {
            $oResults = $oResults->where('language', 'like', '%' . $data['language'] . '%');
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
             $oResults = $oResults->paginate(config('mycp.pagination_size'), ['*'], $data->page_name);
        }else{
             $oResults = $oResults->paginate(config('mycp.pagination_size'));
        }
        return $oResults;
    }

    public function getAllList(){

          $oResults = new EmailMassTemplate();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = EmailMassTemplate::create($data);

        if ($result) {
            Session::flash('flash_message', 'email_mass_template added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$email_mass_template = EmailMassTemplate::findOrFail($id);

        return $email_mass_template;
    }

    public function destroy($id)
    {

        $result =  EmailMassTemplate::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'email_mass_template deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$email_mass_template = EmailMassTemplate::findOrFail($id);
       $result= $email_mass_template->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'email_mass_template updated!');
            return true;
        } else {
            return false;
        }

    }

}

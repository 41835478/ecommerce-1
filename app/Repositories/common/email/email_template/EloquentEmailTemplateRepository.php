<?php
namespace App\Repositories\common\email\email_template;

use Session;
use App\Models\common\email\EmailTemplate;
use App\Repositories\common\email\email_template\EmailTemplateContract;

class EloquentEmailTemplateRepository implements EmailTemplateContract
{

    public function getByFilter($data)
    {

        $oResults = new EmailTemplate();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=',$data['id'] );
        }
        if (isset($data->email_group_id) && !empty($data->email_group_id)) {
            $oResults = $oResults->where('email_group_id', '=' , $data['email_group_id'] );
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', '=' ,$data['name']);
        }
        if (isset($data->subject) && !empty($data->subject)) {
            $oResults = $oResults->where('subject', 'like', '%' . $data['subject'] . '%');
        }
        if (isset($data->body) && !empty($data->body)) {
            $oResults = $oResults->where('body', 'like', '%' . $data['body'] . '%');
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', '=' , $data['type']);
        }
        if (isset($data->to_field) && !empty($data->to_field)) {
            $oResults = $oResults->where('to_field', 'like', '%' . $data['to_field'] . '%');
        }
        if (isset($data->to_email) && !empty($data->to_email)) {
            $oResults = $oResults->where('to_email', 'like', '%' . $data['to_email'] . '%');
        }
        if (isset($data->language) && !empty($data->language)) {
            $oResults = $oResults->where('language', '=' , $data['language'] );
        }
        if (isset($data->status) && !empty($data->status)) {
            $oResults = $oResults->where('status', '=' , $data['status'] );
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

          $oResults = new EmailTemplate();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = EmailTemplate::create($data);

        if ($result) {
            Session::flash('flash_message', 'email_template added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$email_template = EmailTemplate::findOrFail($id);

        return $email_template;
    }

    public function destroy($id)
    {

        $result =  EmailTemplate::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'email_template deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$email_template = EmailTemplate::findOrFail($id);
       $result= $email_template->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'email_template updated!');
            return true;
        } else {
            return false;
        }

    }

}

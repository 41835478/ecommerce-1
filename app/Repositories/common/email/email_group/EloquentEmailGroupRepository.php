<?php
namespace App\Repositories\common\email\email_group;

use Session;
use App\Models\common\email\EmailGroup;
use App\Repositories\common\email\email_group\EmailGroupContract;

class EloquentEmailGroupRepository implements EmailGroupContract
{

    public function getByFilter($data)
    {

        $oResults = new EmailGroup();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
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

          $oResults = new EmailGroup();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = EmailGroup::create($data);

        if ($result) {
            Session::flash('flash_message', 'email_group added!');
            return $result->id;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$email_group = EmailGroup::findOrFail($id);

        return $email_group;
    }

    public function destroy($id)
    {

        $result =  EmailGroup::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'email_group deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$email_group = EmailGroup::findOrFail($id);
       $result= $email_group->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'email_group updated!');
            return true;
        } else {
            return false;
        }

    }

}

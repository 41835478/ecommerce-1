<?php
namespace App\Repositories\common\email\email_group_users;

use Session;
use App\Models\common\email\EmailGroupUsers;
use App\Repositories\common\email\email_group_users\EmailGroupUsersContract;

class EloquentEmailGroupUsersRepository implements EmailGroupUsersContract
{

    public function getByFilter($data)
    {

        $oResults = new EmailGroupUsers();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->group_id) && !empty($data->group_id)) {
            $oResults = $oResults->where('group_id', 'like', '%' . $data['group_id'] . '%');
        }
        if (isset($data->users_id) && !empty($data->users_id)) {
            $oResults = $oResults->where('users_id', 'like', '%' . $data['users_id'] . '%');
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', 'like', '%' . $data['type'] . '%');
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

    public function getAllList($group_id=0){

          $oResults = EmailGroupUsers::where('group_id','=',$group_id)->lists('users_id','users_id');

          return $oResults;
    }

    public function create($data)
    {
        EmailGroupUsers::where(['group_id'=>$data['group_id']])->delete();
        if(!array_key_exists('users_id',$data)){return false;}
        $users_id=(is_array($data['users_id']))? $data['users_id']:[$data['users_id']];
        $rows=[];
        $result=false;
        foreach($users_id as $oneUsers_id){

            $rows[]=['group_id'=>$data['group_id'],'users_id'=>$oneUsers_id];
        }
        if(count($rows)){

            $result = EmailGroupUsers::insert($rows);
        }


        if ($result) {
            Session::flash('flash_message', 'email_group_users added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$email_group_users = EmailGroupUsers::findOrFail($id);

        return $email_group_users;
    }

    public function destroy($id)
    {

        $result =  EmailGroupUsers::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'email_group_users deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$email_group_users = EmailGroupUsers::findOrFail($id);
       $result= $email_group_users->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'email_group_users updated!');
            return true;
        } else {
            return false;
        }

    }

}

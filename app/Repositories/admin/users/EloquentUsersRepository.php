<?php
namespace App\Repositories\client\users;

use Session;
use App\Models\Users;
use App\Repositories\client\users\UsersContract;

class EloquentUsersRepository implements UsersContract
{

    public function getByFilter($data)
    {

        $oResults = new Users();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->email) && !empty($data->email)) {
            $oResults = $oResults->where('email', 'like', '%' . $data['email'] . '%');
        }
        if (isset($data->password) && !empty($data->password)) {
            $oResults = $oResults->where('password', 'like', '%' . $data['password'] . '%');
        }
        if (isset($data->permissions) && !empty($data->permissions)) {
            $oResults = $oResults->where('permissions', 'like', '%' . $data['permissions'] . '%');
        }
        if (isset($data->first_name) && !empty($data->first_name)) {
            $oResults = $oResults->where('first_name', 'like', '%' . $data['first_name'] . '%');
        }
        if (isset($data->last_name) && !empty($data->last_name)) {
            $oResults = $oResults->where('last_name', 'like', '%' . $data['last_name'] . '%');
        }
        if (isset($data->avatar) && !empty($data->avatar)) {
            $oResults = $oResults->where('avatar', 'like', '%' . $data['avatar'] . '%');
        }
        if (isset($data->order) && !empty($data->order)) {
            $sort = (isset($data->sort) && !empty($data->sort)) ? $data->sort : 'desc';
            $oResults = $oResults->orderBy($data->order, $sort);
        }

        $oResults = $oResults->paginate(15);
        return $oResults;
    }

    public function create($data)
    {

        $result = Users::create($data);

        if ($result) {
            Session::flash('flash_message', 'users added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$users = Users::findOrFail($id);

        return $users;
    }

    public function destroy($id)
    {

        $result =  Users::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'users deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$users = Users::findOrFail($id);
       $result= $users->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'users updated!');
            return true;
        } else {
            return false;
        }

    }

}

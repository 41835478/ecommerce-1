<?php
namespace App\Repositories\client\roles;

use Session;
use App\Models\Roles;
use App\Repositories\client\roles\RolesContract;

class EloquentRolesRepository implements RolesContract
{

    public function getByFilter($data)
    {

        $oResults = new Roles();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->slug) && !empty($data->slug)) {
            $oResults = $oResults->where('slug', 'like', '%' . $data['slug'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->permissions) && !empty($data->permissions)) {
            $oResults = $oResults->where('permissions', 'like', '%' . $data['permissions'] . '%');
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

          $oResults = new Roles();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function create($data)
    {

        $result = Roles::create($data);

        if ($result) {
            Session::flash('flash_message', 'roles added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$roles = Roles::findOrFail($id);

        return $roles;
    }

    public function destroy($id)
    {

        $result =  Roles::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'roles deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$roles = Roles::findOrFail($id);
       $result= $roles->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'roles updated!');
            return true;
        } else {
            return false;
        }

    }

}

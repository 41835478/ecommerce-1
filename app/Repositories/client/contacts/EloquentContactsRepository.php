<?php
namespace App\Repositories\client\contacts;

use Session;
use App\Models\Contacts;
use App\Repositories\client\contacts\ContactsContract;

class EloquentContactsRepository implements ContactsContract
{

    public function getByFilter($data)
    {

        $oResults =Contacts::with('company');

        if(!canAccess('client.contacts.otherData')){
            $oResults = $oResults->where('id','=', contacts_id() );
        }

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id'] );
        }
        if (isset($data->company_id) && !empty($data->company_id)) {
            $oResults = $oResults->where('company_id','=', $data['company_id']);
        }
        if (isset($data->users_id) && !empty($data->users_id)) {
            $oResults = $oResults->where('users_id', '=', $data['users_id'] );
        }
        if (isset($data->roles_id) && !empty($data->roles_id)) {
            $oResults = $oResults->where('roles_id', '=', $data['roles_id'] );
        }
        if (isset($data->phone) && !empty($data->phone)) {
            $oResults = $oResults->where('phone', 'like', '%' . $data['phone'] . '%');
        }
        if (isset($data->description) && !empty($data->description)) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
        }
        if (isset($data->status) && !empty($data->status)) {
            $oResults = $oResults->where('status','=',$data['status'] );
        }
        if (isset($data->permissions) && !empty($data->permissions)) {
            $oResults = $oResults->where('permissions', 'like', '%' . $data['permissions'] . '%');
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

    public function create($data)
    {

        $result = Contacts::create($data);

        if ($result) {
            Session::flash('flash_message', 'contacts added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {
        if(!canAccess('client.contacts.otherData') && $id !=contacts_id() ){

            return false;
        }
$contacts = Contacts::findOrFail($id);

        return $contacts;
    }

    public function destroy($id)
    {
        if(!canAccess('client.contacts.otherData') && $id !=contacts_id() ){

            return false;
        }
        $result =  Contacts::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'contacts deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
        if(!canAccess('client.contacts.otherData') && $id !=contacts_id() ){

            return false;
        }
       $contacts = Contacts::findOrFail($id);
       $result= $contacts->update($data->all());

        if ($result) {
            Session::flash('flash_message', 'contacts updated!');
            return $contacts->users_id;
        } else {
            return false;
        }

    }

}

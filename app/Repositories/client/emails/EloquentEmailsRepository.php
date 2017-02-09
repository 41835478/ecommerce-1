<?php
namespace App\Repositories\client\emails;

use Session;
use App\Models\Emails;
use App\Repositories\client\emails\EmailsContract;

class EloquentEmailsRepository implements EmailsContract
{

    public function getByFilter($data)
    {

        $oResults = new Emails();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id','=', $data['id']  );
        }
        if (isset($data->contacts_id) && !empty($data->contacts_id)) {
            $oResults = $oResults->where('contacts_id','=', $data['contacts_id'] );
        }
        if (isset($data->email) && !empty($data->email)) {
            $oResults = $oResults->where('email', 'like', '%' . $data['email'] . '%');
        }
        if (isset($data->module) && !empty($data->module)) {
            $oResults = $oResults->where('module', 'like', '%' . $data['module'] . '%');
        }
        if (isset($data->status) && !empty($data->status)) {
            $oResults = $oResults->where('status', '=',$data['status']);
        }
        if (isset($data->optout) && !empty($data->optout)) {
            $oResults = $oResults->where('optout', '=',$data['optout']);
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

        $result = Emails::create($data);

        if ($result) {
            Session::flash('flash_message', 'emails added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$emails = Emails::findOrFail($id);

        return $emails;
    }

    public function destroy($id)
    {

        $result =  Emails::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'emails deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$emails = Emails::findOrFail($id);
       $result= $emails->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'emails updated!');
            return true;
        } else {
            return false;
        }

    }

}

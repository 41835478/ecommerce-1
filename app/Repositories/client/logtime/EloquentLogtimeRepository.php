<?php
namespace App\Repositories\client\logtime;

use Session;
use App\Models\Logtime;
use App\Repositories\client\logtime\LogtimeContract;

class EloquentLogtimeRepository implements LogtimeContract
{

    public function getByFilter($data)
    {

        $oResults = new Logtime();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->support_id) && !empty($data->support_id)) {
            $oResults = $oResults->where('support_id', 'like', '%' . $data['support_id'] . '%');
        }
        if (isset($data->ticket_id) && !empty($data->ticket_id)) {
            $oResults = $oResults->where('ticket_id', 'like', '%' . $data['ticket_id'] . '%');
        }
        if (isset($data->hours) && !empty($data->hours)) {
            $oResults = $oResults->where('hours', 'like', '%' . $data['hours'] . '%');
        }
        if (isset($data->summary) && !empty($data->summary)) {
            $oResults = $oResults->where('summary', 'like', '%' . $data['summary'] . '%');
        }
        if (isset($data->expenses) && !empty($data->expenses)) {
            $oResults = $oResults->where('expenses', 'like', '%' . $data['expenses'] . '%');
        }
        if (isset($data->create_date) && !empty($data->create_date)) {
            $oResults = $oResults->where('create_date', 'like', '%' . $data['create_date'] . '%');
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

        $result = Logtime::create($data);

        if ($result) {
            Session::flash('flash_message', 'logtime added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$logtime = Logtime::findOrFail($id);

        return $logtime;
    }

    public function destroy($id)
    {

        $result =  Logtime::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'logtime deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$logtime = Logtime::findOrFail($id);
       $result= $logtime->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'logtime updated!');
            return true;
        } else {
            return false;
        }

    }

}

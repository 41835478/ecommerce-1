<?php
namespace App\Repositories\client\ticket;

use Session;
use App\Models\Ticket;
use App\Repositories\client\ticket\TicketContract;

class EloquentTicketRepository implements TicketContract
{

    public function getByFilter($data)
    {

        $oResults = new Ticket();

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->contact_id) && !empty($data->contact_id)) {
            $oResults = $oResults->where('contact_id', 'like', '%' . $data['contact_id'] . '%');
        }
        if (isset($data->contract_id) && !empty($data->contract_id)) {
            $oResults = $oResults->where('contract_id', 'like', '%' . $data['contract_id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', 'like', '%' . $data['type'] . '%');
        }
        if (isset($data->status) && !empty($data->status)) {
            $oResults = $oResults->where('status', 'like', '%' . $data['status'] . '%');
        }
        if (isset($data->description) && !empty($data->description)) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
        }
        if (isset($data->create_time) && !empty($data->create_time)) {
            $oResults = $oResults->where('create_time', 'like', '%' . $data['create_time'] . '%');
        }
        if (isset($data->open_time) && !empty($data->open_time)) {
            $oResults = $oResults->where('open_time', 'like', '%' . $data['open_time'] . '%');
        }
        if (isset($data->close_time) && !empty($data->close_time)) {
            $oResults = $oResults->where('close_time', 'like', '%' . $data['close_time'] . '%');
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

        $result = Ticket::create($data);

        if ($result) {
            Session::flash('flash_message', 'ticket added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$ticket = Ticket::findOrFail($id);

        return $ticket;
    }

    public function destroy($id)
    {

        $result =  Ticket::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'ticket deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$ticket = Ticket::findOrFail($id);
       $result= $ticket->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'ticket updated!');
            return true;
        } else {
            return false;
        }

    }

}

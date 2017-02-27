<?php
namespace App\Repositories\client\ticket_reply;

use Session;
use App\Models\TicketReply;
use App\Repositories\client\ticket_reply\TicketReplyContract;

class EloquentTicketReplyRepository implements TicketReplyContract
{

    public function getByFilter($data)
    {

        $oResults = TicketReply::with('contact');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->ticket_id) && !empty($data->ticket_id)) {
            $oResults = $oResults->where('ticket_id', 'like', '%' . $data['ticket_id'] . '%');
        }
        if (isset($data->contact_id) && !empty($data->contact_id)) {
            $oResults = $oResults->where('contact_id', 'like', '%' . $data['contact_id'] . '%');
        }
        if (isset($data->description) && !empty($data->description)) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
        }
        if (isset($data->create_time) && !empty($data->create_time)) {
            $oResults = $oResults->where('create_time', 'like', '%' . $data['create_time'] . '%');
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

        $result = TicketReply::create($data);

        if ($result) {
            Session::flash('flash_message', 'ticket_reply added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {
$ticket_reply = TicketReply::findOrFail($id);

        return $ticket_reply;
    }

    public function destroy($id)
    {

        $result =  TicketReply::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'ticket_reply deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$ticket_reply = TicketReply::findOrFail($id);
       $result= $ticket_reply->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'ticket_reply updated!');
            return true;
        } else {
            return false;
        }

    }

}

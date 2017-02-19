<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\ticket_reply\createRequest;
use App\Http\Requests\client\ticket_reply\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\TicketReply as mTicketReply;
use App\Repositories\client\ticket_reply\TicketReplyContract as rTicketReply;
class TicketReply extends Controller
{
    private $rTicketReply;

    public function __construct(rTicketReply $rTicketReply)
    {
        $this->rTicketReply=$rTicketReply;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rTicketReply->getByFilter($aFilterParams);

        return view('client.ticket_reply.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('client.ticket_reply.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rTicketReply->create($request->all());

        return redirect('client/ticket_reply');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {


        $ticket_reply=$this->rTicketReply->show($id);


        return view('client.ticket_reply.show', compact('ticket_reply'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {


        $ticket_reply=$this->rTicketReply->show($id);

        return view('client.ticket_reply.edit', compact('ticket_reply'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, editRequest $request)
    {

        $result=$this->rTicketReply->update($id,$request);



        return redirect('client/ticket_reply');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        $ticket_reply=$this->rTicketReply->destroy($id);
        return redirect('client/ticket_reply');
    }


}

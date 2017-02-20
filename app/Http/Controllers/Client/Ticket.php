<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\ticket\createRequest;
use App\Http\Requests\client\ticket\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Ticket as mTicket;
use App\Repositories\client\ticket\TicketContract as rTicket;
class Ticket extends Controller
{
    private $rTicket;

    public function __construct(rTicket $rTicket)
    {
        $this->rTicket=$rTicket;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rTicket->getByFilter($aFilterParams);

        return view('client.ticket.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */

    public function  create(Request $request)
    {
        return view('client.ticket.create', compact('request'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rTicket->create($request->all());

        return redirect('client/ticket');
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


        $ticket=$this->rTicket->show($id);


        return view('client.ticket.show', compact('ticket'));
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


        $ticket=$this->rTicket->show($id);

        return view('client.ticket.edit', compact('ticket'));
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

        $result=$this->rTicket->update($id,$request);



        return redirect('client/ticket');
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
        $ticket=$this->rTicket->destroy($id);
        return redirect('client/ticket');
    }


}

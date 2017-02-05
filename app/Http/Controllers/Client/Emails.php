<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Emails as mEmails;
use App\Repositories\client\emails\EmailsContract as rEmails;
class Emails extends Controller
{
    private $rEmails;

    public function __construct(rEmails $rEmails)
    {
        $this->rEmails=$rEmails;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rEmails->getByFilter($aFilterParams);

        return view('client.emails.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function  create(Request $request)
    {
        return view('client.emails.create',compact('request'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


        $oResults=$this->rEmails->create($request->all());

        return redirect('client/emails');
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


        $emails=$this->rEmails->show($id);


        return view('client.emails.show', compact('emails'));
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


        $emails=$this->rEmails->show($id);

        return view('client.emails.edit', compact('emails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {

        $result=$this->rEmails->update($id,$request);



        return redirect('client/emails');
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
        $emails=$this->rEmails->destroy($id);
        return redirect('client/emails');
    }


}

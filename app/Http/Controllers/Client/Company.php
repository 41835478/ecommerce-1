<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\company\createRequest;


use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Company as mCompany;
use App\Repositories\client\company\CompanyContract as rCompany;

use App\Repositories\client\contacts\ContactsContract as rContacts;
use App\Repositories\client\contracts\ContractsContract as rContracts;
use App\Repositories\client\licenses\LicensesContract as rLicenses;

class Company extends Controller
{
    private $rCompany;

    public function __construct(rCompany $rCompany)
    {
        $this->rCompany=$rCompany;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {

        $aFilterParams=$request;
        $oResults=$this->rCompany->getByFilter($aFilterParams);

        return view('client.company.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(Request $request)
    {
        return view('client.company.create',compact('request'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rCompany->create($request->all());

        return redirect('client/company');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id,Request $request,rContacts $rContacts,rContracts $rContracts,rLicenses $rLicenses)
    {

        $company=$this->rCompany->show($id);


        $request->merge(['company_id'=>$id,'page_name'=>'page']);

        $request->page_name='page_contacts';
        $oContactsResults=$rContacts->getByFilter($request);

        $request->page_name='page_contracts';
        $oContractsResults=$rContracts->getByFilter($request);

        $request->page_name='page_licenses';
        $oLicensesResults=$rLicenses->getByFilter($request);

        return view('client.company.show', compact('company','request','oContactsResults','oContractsResults','oLicensesResults'));
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


        $company=$this->rCompany->show($id);

        return view('client.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, createRequest $request)
    {

        $result=$this->rCompany->update($id,$request);



        return redirect('client/company');
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
        $company=$this->rCompany->destroy($id);
        return redirect('client/company');
    }


}

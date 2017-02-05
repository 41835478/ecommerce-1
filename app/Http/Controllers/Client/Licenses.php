<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Licenses as mLicenses;
use App\Repositories\client\licenses\LicensesContract as rLicenses;
use App\Repositories\client\company\CompanyContract as rCompany;
class Licenses extends Controller
{
    private $rLicenses;

    public function __construct(rLicenses $rLicenses,rCompany $rCompany)
    {
        $this->rCompany=$rCompany;
        $this->rLicenses=$rLicenses;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rLicenses->getByFilter($aFilterParams);

        return view('client.licenses.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function  create(Request $request)
    {
        $companiesList=$this->rCompany->getAllList();
        return view('client.licenses.create',compact('request','companiesList'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


        $oResults=$this->rLicenses->create($request->all());

        return redirect('client/licenses');
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


        $licenses=$this->rLicenses->show($id);


        return view('client.licenses.show', compact('licenses'));
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


        $licenses=$this->rLicenses->show($id);
        $companiesList=$this->rCompany->getAllList();

        return view('client.licenses.edit', compact('licenses','companiesList'));
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

        $result=$this->rLicenses->update($id,$request);



        return redirect('client/licenses');
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
        $licenses=$this->rLicenses->destroy($id);
        return redirect('client/licenses');
    }


}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Licenses as mLicenses;
use App\Repositories\admin\licenses\LicensesContract as rLicenses;
class Licenses extends Controller
{
    private $rLicenses;

    public function __construct(rLicenses $rLicenses)
    {
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

        return view('admin.licenses.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('admin.licenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


        $oResults=$this->rLicenses->create($request->all());

        return redirect('admin/licenses');
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


        return view('admin.licenses.show', compact('licenses'));
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

        return view('admin.licenses.edit', compact('licenses'));
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



        return redirect('admin/licenses');
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
        return redirect('admin/licenses');
    }


}

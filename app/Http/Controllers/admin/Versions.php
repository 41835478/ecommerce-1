<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Versions as mVersions;
use App\Repositories\admin\versions\VersionsContract as rVersions;
class Versions extends Controller
{
    private $rVersions;

    public function __construct(rVersions $rVersions)
    {
        $this->rVersions=$rVersions;
    }
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(Request $request)
    {



        $aFilterParams=$request;
        $oResults=$this->rVersions->getByFilter($aFilterParams);

        return view('admin.versions.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('admin.versions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {


        $oResults=$this->rVersions->create($request->all());

        return redirect('admin/versions');
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


        $versions=$this->rVersions->show($id);


        return view('admin.versions.show', compact('versions'));
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


        $versions=$this->rVersions->show($id);

        return view('admin.versions.edit', compact('versions'));
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

        $result=$this->rVersions->update($id,$request);



        return redirect('admin/versions');
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
        $versions=$this->rVersions->destroy($id);
        return redirect('admin/versions');
    }


}

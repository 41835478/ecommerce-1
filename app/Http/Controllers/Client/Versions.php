<?php

namespace App\Http\Controllers\client;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\client\versions\createRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Versions as mVersions;
use App\Repositories\client\versions\VersionsContract as rVersions;
use App\Repositories\client\products\ProductsContract as rProducts;
class Versions extends Controller
{
    private $rVersions;

    public function __construct(rVersions $rVersions,rProducts $rProducts)
    {
        $this->rVersions=$rVersions;
        $this->rProducts=$rProducts;
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

        return view('client.versions.index', compact('oResults'), compact('aFilterParams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function    create(Request $request)
    {

        $productsList=$this->rProducts->getAllList();
        return view('client.versions.create',compact('request','productsList'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(createRequest $request)
    {


        $oResults=$this->rVersions->create($request->all());

        return redirect('client/versions');
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


        return view('client.versions.show', compact('versions'));
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
        $productsList=$this->rProducts->getAllList();

        return view('client.versions.edit', compact('versions','productsList'));
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

        $result=$this->rVersions->update($id,$request);



        return redirect('client/versions');
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
        return redirect('client/versions');
    }


}

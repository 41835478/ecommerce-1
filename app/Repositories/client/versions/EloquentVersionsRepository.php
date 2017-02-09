<?php
namespace App\Repositories\client\versions;

use Session;
use App\Models\Versions;
use App\Repositories\client\versions\VersionsContract;

class EloquentVersionsRepository implements VersionsContract
{

    public function getByFilter($data)
    {

        $oResults = Versions::with('products');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }
        if (isset($data->products_id) && !empty($data->products_id)) {
            $oResults = $oResults->where('products_id', '=', $data['products_id'] );
        }
        if (isset($data->version) && !empty($data->version)) {
            $oResults = $oResults->where('version', 'like', '%' . $data['version'] . '%');
        }
        if (isset($data->manual) && !empty($data->manual)) {
            $oResults = $oResults->where('manual', 'like', '%' . $data['manual'] . '%');
        }
        if (isset($data->articale) && !empty($data->articale)) {
            $oResults = $oResults->where('articale', 'like', '%' . $data['articale'] . '%');
        }
        if (isset($data->links) && !empty($data->links)) {
            $oResults = $oResults->where('links', 'like', '%' . $data['links'] . '%');
        }
        if (isset($data->release_notes) && !empty($data->release_notes)) {
            $oResults = $oResults->where('release_notes', 'like', '%' . $data['release_notes'] . '%');
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

        $result = Versions::create($data);

        if ($result) {
            Session::flash('flash_message', 'versions added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$versions = Versions::findOrFail($id);

        return $versions;
    }

    public function destroy($id)
    {

        $result =  Versions::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'versions deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$versions = Versions::findOrFail($id);
       $result= $versions->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'versions updated!');
            return true;
        } else {
            return false;
        }

    }

}

<?php
namespace App\Repositories\client\files;

use Session;
use App\Models\Files;
use App\Repositories\client\files\FilesContract;

class EloquentFilesRepository implements FilesContract
{

    public function getByFilter($data)
    {

        $oResults =  Files::with('parentFile','products','domains','webHostingPlans','server_detail','support');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', 'like', '%' . $data['id'] . '%');
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->link) && !empty($data->link)) {
            $oResults = $oResults->where('link', 'like', '%' . $data['link'] . '%');
        }
        if (isset($data->version) && !empty($data->version)) {
            $oResults = $oResults->where('version', 'like', '%' . $data['version'] . '%');
        }
        if (isset($data->parent) && !empty($data->parent)) {
            $oResults = $oResults->where('parent', 'like', '%' . $data['parent'] . '%');
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', 'like', '%' . $data['type'] . '%');
        }
        if (isset($data->module_type) && !empty($data->module_type)) {
            $oResults = $oResults->where('module_type', 'like', '%' . $data['module_type'] . '%');
        }
        if (isset($data->module_id) && !empty($data->module_id)) {
            $oResults = $oResults->where('module_id', 'like', '%' . $data['module_id'] . '%');
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

    public function getAllList(){

          $oResults = new Files();

          $oResults = $oResults::lists('name','id');
          return $oResults;
    }

    public function getChildrenIds(&$allFilesIds,$filesIds){
        $filesIds=(is_array($filesIds))?$filesIds:[$filesIds];
        $oFiles=  Files::select('id')->whereIn("parent",$filesIds)->get();

        $CurrentFilesIds=[];
        if(count($oFiles)){
            foreach($oFiles as $file){
                $CurrentFilesIds[]=$file->id;
                $allDocumentsIds[]=$file->id;

            }
            if($filesIds !=$CurrentFilesIds){
                $this->getChildrenIds($allFilesIds,$CurrentFilesIds);
            }


        }



    }
    public function getChildren($id){
        $childrenFilesIds=[];
        $this->getChildrenIds($childrenFilesIds,$id);
        $oFiles=  Files::whereIn("id",$childrenFilesIds)->where("id",'!=',$id)->get();
        return $oFiles;
    }
    public function create($data)
    {

        $result = Files::create($data);

        if ($result) {
            Session::flash('flash_message', 'files added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$files = Files::findOrFail($id);

        return $files;
    }

    public function destroy($id)
    {

        $result =  Files::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'files deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$files = Files::findOrFail($id);
       $result= $files->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'files updated!');
            return true;
        } else {
            return false;
        }

    }

}

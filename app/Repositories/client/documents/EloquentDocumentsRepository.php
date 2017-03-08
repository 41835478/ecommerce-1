<?php
namespace App\Repositories\client\documents;

use Session;
use App\Models\Documents;
use App\Repositories\client\documents\DocumentsContract;

class EloquentDocumentsRepository implements DocumentsContract
{

    public function getByFilter($data)
    {

        $oResults =Documents::with('parentDocument','products','domains','webHostingPlans','server_detail','support');

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=' , $data['id']);
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->body) && !empty($data->body)) {
            $oResults = $oResults->where('body', 'like', '%' . $data['body'] . '%');
        }
        if (isset($data->version) && !empty($data->version)) {
            $oResults = $oResults->where('version', 'like', '%' . $data['version'] . '%');
        }

        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', '=' , $data['type']);
        }
        if (isset($data->module_type) && !empty($data->module_type)) {
            $oResults = $oResults->where('module_type', '=' , $data['module_type'] );
        }
        if (isset($data->module_id) && !empty($data->module_id)) {
            $oResults = $oResults->where('module_id', '=' , $data['module_id'] );
        }
        if (isset($data->parent) && $data->parent>-1) {
            $oResults = $oResults->where('parent', '=' , $data['parent']);
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

    public function getAllList($type=-1){

        $oResults = new Documents();
        if($type>-1){
        $oResults= $oResults->where('type','=',$type)->where('parent','=',0);
        }
        $oResults = $oResults->orderBy('name')->get();
        $aResults=[0=>trans('general.selectOne')];
        foreach($oResults as $oResult){
            $aResults[$oResult->id]=$oResult->name;
        }

        return $aResults;
    }

    public function getChildrenIds(&$allDocumentsIds,$documentsIds){
        $documentsIds=(is_array($documentsIds))?$documentsIds:[$documentsIds];
        $oDocuments=  Documents::select('id')->whereIn("parent",$documentsIds)->get();

        $CurrentDocumentsIds=[];
        if(count($oDocuments)){
            foreach($oDocuments as $document){
                $CurrentDocumentsIds[]=$document->id;
                $allDocumentsIds[]=$document->id;

            }
            if($documentsIds !=$CurrentDocumentsIds){
                $this->getChildrenIds($allDocumentsIds,$CurrentDocumentsIds);
            }


        }



    }
    public function getChildren($id){
        $childrenDocumentIds=[];
        $this->getChildrenIds($childrenDocumentIds,$id);
        $oDocuments=  Documents::whereIn("id",$childrenDocumentIds)->where("id",'!=',$id)->get();
        return $oDocuments;
    }
    public function create($data)
    {

        $result = Documents::create($data);

        if ($result) {
            Session::flash('flash_message', 'documents added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$documents = Documents::findOrFail($id);

        return $documents;
    }

    public function destroy($id)
    {

        $result =  Documents::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'documents deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
$documents = Documents::findOrFail($id);
       $result= $documents->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'documents updated!');
            return true;
        } else {
            return false;
        }

    }

}

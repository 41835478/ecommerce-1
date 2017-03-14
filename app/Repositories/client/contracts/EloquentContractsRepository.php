<?php
namespace App\Repositories\client\contracts;

use Session;
use App\Models\Contracts;
use App\Models\ContractsRenewal;
use App\Repositories\client\contracts\ContractsContract;
use Carbon\Carbon;
class EloquentContractsRepository implements ContractsContract
{

    public function getByFilter($data)
    {

        $oResults =Contracts::with(['company','products','domains','webHostingPlans','server_detail','support','renewal'=>function($query){$query->orderBy('to_date','desc');}]);

        if(!canAccess('client.contracts.otherData')){
            $oResults = $oResults->where('company_id', '=',company_id());
        }
        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }

        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->company_id) && !empty($data->company_id)) {
            $oResults = $oResults->where('company_id', '=', $data['company_id']);
        }
        if (isset($data->products_id) && !empty($data->products_id)) {
            $oResults = $oResults->where('products_id', '=', $data['products_id'] );
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', '=', $data['type'] );
        }
        if (isset($data->status) && !empty($data->status)) {
            $oResults = $oResults->where('status', '=', $data['status'] );
        }
        if (isset($data->price) && !empty($data->price)) {
            $oResults = $oResults->where('price', '=', $data['price'] );
        }
        if (isset($data->description) && !empty($data->description)) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
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

    public function getAllList($company_id=0){

        $oResults =Contracts::with('company','products');

        if(!canAccess('client.contracts.otherData')){
            $oResults = $oResults->where('company_id', '=',company_id());
        }
        if($company_id > 0){
            $oResults =$oResults->where('company_id','=',$company_id);
        }
        $oResults =$oResults->orderBy('name')->get();
        $aResults = [];
        foreach($oResults as $oResult){
            $company=(isset($oResult->company->name))? $oResult->company->name:'';
            $products=(isset($oResult->products->name))? $oResult->products->name:'';
            $aResults [$oResult->id]=$oResult->name.' ( '.$company .' - '.$products.' ) ';
        }
        return $aResults;
    }

    public function getExpired($data)
    {

        $oResults =Contracts::with('company','products')->leftJoin('contracts_renewal',function($query){
            $query->on('contracts.id','=','contracts_renewal.contracts_id');
        })->select(['contracts.*',\DB::raw('max(contracts_renewal.to_date) as expired_date')])
            ->groupBy('contracts_renewal.contracts_id');


        if(!canAccess('client.contracts.otherData')){
            $oResults = $oResults->where('company_id', '=',company_id());
        }
        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }
        if (isset($data->company_id) && !empty($data->company_id)) {
            $oResults = $oResults->where('company_id', '=', $data['company_id']);
        }
        if (isset($data->products_id) && !empty($data->products_id)) {
            $oResults = $oResults->where('products_id', '=', $data['products_id'] );
        }
        if (isset($data->type) && !empty($data->type)) {
            $oResults = $oResults->where('type', '=', $data['type'] );
        }
        if (isset($data->description) && !empty($data->description)) {
            $oResults = $oResults->where('description', 'like', '%' . $data['description'] . '%');
        }

        $daysExpireStart=(isset($data->daysToExpire) && !empty($data->daysToExpire))? $data->daysToExpire:7;
        $daysToExpire=(isset($data->daysToExpire) && !empty($data->daysToExpire))? $data->daysToExpire:30;
        $current = Carbon::now()->subDay($daysExpireStart);

        $contractExpires = Carbon::now()->addDays($daysToExpire);
        $oResults = $oResults->having(\DB::raw('expired_date'), '>=',$current);
        $oResults = $oResults->having(\DB::raw('expired_date'), '<=',$contractExpires);

        if (isset($data->order) && !empty($data->order)) {
            $sort = (isset($data->sort) && !empty($data->sort)) ? $data->sort : 'desc';
            $oResults = $oResults->orderBy($data->order, $sort);
        }



        if(true){
            $oResults = $oResults->get();
        }
        elseif (isset($data->page_name) && !empty($data->page_name)) {
            $oResults = $oResults->paginate(config('mycp.pagination_size'), ['*'], $data->page_name);
        }else{
            $oResults = $oResults->paginate(config('mycp.pagination_size'), ['*'],'page');
        }


        return $oResults;
    }

    public function create($data)
    {

        if(!canAccess('client.contracts.otherData') && $data['company_id'] !=company_id()){
            return false;
        }
        $result = Contracts::create($data);

        if ($result) {
            Session::flash('flash_message', 'contracts added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {


        $contracts = Contracts::with('company','products')->findOrFail($id);

        if(!canAccess('client.contracts.otherData') && $contracts['company_id'] !=company_id()){
            return false;
        }

        return $contracts;
    }

    public function destroy($id)
    {


        $contracts = Contracts::findOrFail($id);

        if(!canAccess('client.contracts.otherData') && $contracts['company_id'] !=company_id()){
            return false;
        }


        $result =  Contracts::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'contracts deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
        $contracts = Contracts::findOrFail($id);
        if(!canAccess('client.contracts.otherData') && $contracts['company_id'] !=company_id()){
            return false;
        }


        $result= $contracts->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'contracts updated!');
            return true;
        } else {
            return false;
        }

    }

}

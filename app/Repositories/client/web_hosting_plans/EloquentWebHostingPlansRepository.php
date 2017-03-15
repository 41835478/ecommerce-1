<?php
namespace App\Repositories\client\web_hosting_plans;

use Session;
use App\Models\WebHostingPlans;
use App\Repositories\client\web_hosting_plans\WebHostingPlansContract;

class EloquentWebHostingPlansRepository implements WebHostingPlansContract
{

    public function getByFilter($data)
    {

        $oResults =new WebHostingPlans();

        if(!canAccess('client.web_hosting_plans.otherData')){

            $oResults =$oResults->join('contracts',function($query){
                $query->on('contracts.products_id','=','web_hosting_plans.id');
                $query->where('contracts.type','=',config('array.webHostingPlansTypeIndex'));
                $query->where('contracts.company_id','=',company_id());
            })->select(['web_hosting_plans.*'])->distinct('id');

        }
        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id', '=', $data['id']);
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }

        if (isset($data->web_space) && !empty($data->web_space)) {
            $oResults = $oResults->where('web_space','=',$data['web_space']);
        }

        if (isset($data->domains_number) && !empty($data->domains_number)) {
            $oResults = $oResults->where('domains_number', '=', $data['domains_number'] );
        }

        if (isset($data->emails) && !empty($data->emails)) {
            $oResults = $oResults->where('emails', '=', $data['emails']);
        }

        if (isset($data->traffic) && !empty($data->traffic)) {
            $oResults = $oResults->where('traffic', '=', $data['traffic'] );
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

        $oResults = new WebHostingPlans();

        $oResults = $oResults->orderBy('name')->lists('name','id');
        return $oResults;
    }
    public function create($data)
    {

        $result = WebHostingPlans::create($data);

        if ($result) {
            Session::flash('flash_message', 'Web Hosting Plan added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

$webHostingPlans = WebHostingPlans::findOrFail($id);

        return $webHostingPlans;
    }

    public function destroy($id)
    {

        $result =  WebHostingPlans::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'Web Hosting Plan deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {
        $webHostingPlans = WebHostingPlans::findOrFail($id);
       $result= $webHostingPlans->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'Web Hosting Plan updated!');
            return true;
        } else {
            return false;
        }

    }

}

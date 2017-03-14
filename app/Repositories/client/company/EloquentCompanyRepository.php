<?php
namespace App\Repositories\client\company;

use Session;
use App\Models\Company;
use App\Repositories\client\company\CompanyContract;

class EloquentCompanyRepository implements CompanyContract
{

    public function getByFilter($data)
    {

        $oResults = new Company();

        if(!canAccess('client.company.otherData')){
            $oResults = $oResults->where('id','=', company_id() );
        }

        if (isset($data->id) && !empty($data->id)) {
            $oResults = $oResults->where('id','=', $data['id'] );
        }
        if (isset($data->name) && !empty($data->name)) {
            $oResults = $oResults->where('name', 'like', '%' . $data['name'] . '%');
        }
        if (isset($data->email) && !empty($data->email)) {
            $oResults = $oResults->where('email', 'like', '%' . $data['email'] . '%');
        }
        if (isset($data->phone) && !empty($data->phone)) {
            $oResults = $oResults->where('phone', 'like', '%' . $data['phone'] . '%');
        }
        if (isset($data->website) && !empty($data->website)) {
            $oResults = $oResults->where('website', 'like', '%' . $data['website'] . '%');
        }
        if (isset($data->address) && !empty($data->address)) {
            $oResults = $oResults->where('address', 'like', '%' . $data['address'] . '%');
        }
        if (isset($data->country) && !empty($data->country)) {
            $oResults = $oResults->where('country', 'like', '%' . $data['country'] . '%');
        }
        if (isset($data->city) && !empty($data->city)) {
            $oResults = $oResults->where('city', 'like', '%' . $data['city'] . '%');
        }
        if (isset($data->zipcode) && !empty($data->zipcode)) {
            $oResults = $oResults->where('zipcode', 'like', '%' . $data['zipcode'] . '%');
        }
        if (isset($data->status) && !empty($data->status)) {
            $oResults = $oResults->where('status', '=', $data['status'] );
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

        $oResults = new Company();

        if(!canAccess('client.company.otherData')){

            $oResults = $oResults->where('id','=', company_id() );
        }
        $oResults = $oResults->orderBy('name')->lists('name','id');
        return $oResults;
    }

    public function create($data)
    {

        $result = Company::create($data);

        if ($result) {
            Session::flash('flash_message', 'company added!');
            return true;
        } else {
            return false;
        }
    }

    public function show($id)
    {

        if(!canAccess('client.company.otherData') && $id !=company_id() ){

            return false;
        }
        $company = Company::findOrFail($id);

        return $company;
    }

    public function destroy($id)
    {

        if(!canAccess('client.company.otherData') && $id !=company_id() ){

            return false;
        }
        $result =  Company::destroy($id);

        if ($result) {
            Session::flash('flash_message', 'company deleted!');
            return true;
        } else {
            return false;
        }
    }

    public function update($id,$data)
    {

        if(!canAccess('client.company.otherData') && $id !=company_id() ){

            return false;
        }
        $company = Company::findOrFail($id);
        $result= $company->update($data->all());
        if ($result) {
            Session::flash('flash_message', 'company updated!');
            return true;
        } else {
            return false;
        }

    }

}

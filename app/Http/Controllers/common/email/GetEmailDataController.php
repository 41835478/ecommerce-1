<?php

namespace App\Http\Controllers\common\email;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;




use Illuminate\Http\Request;
use App\Repositories\client\contracts\EloquentContractsRepository as rContracts;
use App\Repositories\client\contacts\EloquentContactsRepository as rContacts;
class GetEmailDataController extends Controller
{



    public function __construct()
    {

    }

    public function getClientInfo($users_id){

        $accountInfoResult=[];


        if($users_id>0){

            $accountInfoResult=Users::find($users_id)->toArray();
        }else{
            $accountInfoResult = current_user()->getUser()->toArray();
        }

        $accountInfo = [];
        foreach ($accountInfoResult as $key => $value) {
            $accountInfo['accountInfo_' . $key] = $value;
        }
        return $accountInfo;
    }

    public function convertRowToArray($tableName,$oResult){
        $returnData=[];

        if(count($oResult)){
            $aResult=(is_array($oResult))?$oResult:$oResult->toArray();
            foreach($aResult as $key => $value){
                $returnData[$tableName.'_'.$key]=$value;
            }
        }
        return $returnData;
    }


    public function signUpEmailInfo($templateInfo){

        $oUser=\Fxweb\Models\User::find($templateInfo['id']);
        $oUserDetails=\Fxweb\Models\User::find($templateInfo['id']);
        $oActivation=\Activation::where('user_id','=',$templateInfo['id'])->first();
        $oRequest=new Request();


        if($oUser){
            return     $this->convertRowToArray('user',$oUser)
            +  $this->convertRowToArray('detail',$oUserDetails)
            +  $this->convertRowToArray('activation',$oActivation)
            +  ['website'=>$oRequest->root(),
                "activeLink"=>'/client/activateAccount/' .$oUser->id . '/' . $oActivation->code]
            +  $this->getClientInfo($templateInfo['id']);
        }
        return [];

    }

    public function forgetPasswordEmailInfo($templateInfo){

        $oReminder=\Cartalyst\Sentinel\Laravel\Facades\Reminder::find($templateInfo['id']);
        $oRequest=new Request();

        if($oReminder){
            return   $this->convertRowToArray('reminder',$oReminder)
            +$this->getClientInfo($oReminder->user_id)
            +     ['website'=>$oRequest->root(),
                "resetLink"=>'/client/resetForgetPassword/' .$oReminder->user_id . '/' . $oReminder->code];
        }
        return [];

    }



    public function expiredContractEmailInfo($templateInfo){



        $filterContracts=['getAllRecords'=>1];
        if(array_key_exists('contracts_id',$templateInfo) && $templateInfo['contracts_id'] > 0){

            $filterContracts['id']=$templateInfo['contracts_id'];
        }
       $rContracts=new rContracts();
        $contract= $rContracts->getExpired($filterContracts)->first();

        $templateInfo+=$this->convertRowToArray('contract',$contract);

        $templateInfo=[
            'last_renewal_from'=>'',
            'last_renewal_to'=>''
        ];
        if(isset($contract->renewal) && count($contract->renewal->first())){
        $templateInfo['last_renewal_from']=$contract->renewal->first()->from_date;
        $templateInfo['last_renewal_to']=$contract->renewal->first()->to_date;
        }

        if(count($contract)){

                $request=new Request();
                $rContacts= new rContacts();
                $oContacts= $rContacts->getByFilter(
                    $request->merge(
                        ['company_id'=>$contract->company_id,
                            'status'=>config('array.contactsStatusToSendEmail')]
                    ))->first();

                if(count($oContacts)){
                    $templateInfo+=$this->convertRowToArray('contact',$oContacts);
                }


        }

        return $templateInfo;

    }


}

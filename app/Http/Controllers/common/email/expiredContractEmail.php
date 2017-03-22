<?php

namespace App\Http\Controllers\common\email;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Mail;
use App\Models\common\email\EmailMassQueue;
use App\Models\Users;

use Session;

use App\Repositories\client\contracts\EloquentContractsRepository as rContracts;
use App\Repositories\client\contacts\EloquentContactsRepository as rContacts;

use App\Http\Controllers\common\email\EmailController as Email;
class ExpiredContractEmail extends Controller {

    protected $fromEmail = '';
    protected $fromName = '';
    protected $rContracts;
    protected $rContacts;

    public function __construct() {
        $this->fromEmail = config('mail.fromEmail');
        $this->fromName = config('mail.fromName');
        $this->rContracts= new rContracts();
        $this->rContacts= new rContacts();
    }



    public function massMailler($info) {

        Mail::raw($info['subject'], function ($message) use ($info)
        {

            $message->from(config('mycp.senderEmail'), config('mycp.displayName'));

            $message->getHeaders()->addTextHeader('Content-type', 'text/html');
            $message->to($info['email']);
            $message->subject($info['subject']);
            if(array_key_exists('bcc' ,$info)){
                $message->bcc($info['bcc']);
            }
            $message ->setBody($info['content'], 'text/html');
        });



    }




    public function sendExpiredEmail($contracts_id=0){

$filterContracts=['getAllRecords'=>1];
        if($contracts_id > 0){

            $filterContracts['id']=$contracts_id;
        }

$oExpiredContracts= $this->rContracts->getExpired($filterContracts);


        if(count($oExpiredContracts)){
           $cEmail=new Email();
            foreach($oExpiredContracts as $contract){

                $cEmail->sendExpiredContract(['contracts_id'=>$contract->id,'status'=>config('mail.expiredContractIndex')]);
            }

        }




    }

    public function getUsersEmail($last_user_id=0,$limit=0,$massGroup=0)
    {
        $oResult=[];



            $oResult = Users::select(['first_name', 'email','id'])->with('massGroup')->whereHas('massGroup', function ($query) use ($massGroup) {
                $query->where('group_id', $massGroup);

            })->where('id','>',$last_user_id);



        if($limit > 0){
            $oResult = $oResult->limit($limit);
        }
        $oResult = $oResult->get();
        return $oResult->toArray();
    }






}

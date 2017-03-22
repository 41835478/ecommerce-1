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
class Email extends Controller {

    protected $fromEmail = '';
    protected $fromName = '';

    public function __construct() {
        $this->fromEmail = config('mail.fromEmail');
        $this->fromName = config('mail.fromName');
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




    public function autoSendMassMail($limit=2,$mailId=0,$last_user_id=0,$last_mt4_user_id=0){



        $massMail=[];
        if($mailId >0){
            $massMail=EmailMassQueue::find($mailId);
        }else{
            $massMail=EmailMassQueue::where('status',0)->first();
        }

        if(!count($massMail)){return  'completed';}

        $last_user_id=($last_user_id > $massMail->last_users_id)? $last_user_id : $massMail->last_users_id;

        $userResults = $this->getUsersEmail($last_user_id,$limit,$massMail->group_id);


        $bcc=[];

        foreach ($userResults as $user) {

           if($user['email'] != ''){$bcc[]=$user['email'];}

            $last_user_id=$user['id'];
        }




        if(count($userResults) ){
        $this->massMailler([
            'subject'=>$massMail->subject,
            'email' => config('mycp.adminEmail'),
            'content' => $massMail->mail,
            'bcc'=>$bcc
        ]);
    }else{
            $massMail->status=1;
        }

        $massMail->last_users_id=$last_user_id;
        $massMail->save();

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

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Laravel\Facades\Activation;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{


    public function __construct()
    {

    }

    public function getLogin()
    {

        return view('client.public.login')
            ->with('random', rand(1, 3));
    }

    public function postLogin(Request $oRequest)
    {
        $contact = DB::table('users')->where(['email'=>$oRequest->email, 'password' => $oRequest->password])->first();


        if($contact){
            $user = Sentinel::findById($contact->id);

            $activation = Activation::exists($user);

            if(!$activation){
                $activationCreate = Activation::create($user);
                Activation::complete($user, $activationCreate->code);
            }
            Sentinel::login($user);
            return Redirect::intended('/client');
        }else{

            return Redirect::route('client.public.login')->withErrors([trans('user.InvalidLogin')]);
        }


    }






}

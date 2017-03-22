<?php

namespace App\Http\Controllers\common\authentication;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Contacts;
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

        return view('common.authentication.login')
            ->with('random', rand(1, 3));
    }

    public function postLogin(Request $oRequest)
    {


        try {
            $oUser = Sentinel::authenticate([
                'email' => $oRequest->email,
                'password' => $oRequest->password,
            ]);

            $permissions='';
            $deny_permissions='';
            foreach($oUser->roles as $role){
                $permissions.=$role['attributes']['permissions'];
                $deny_permissions.=$role['attributes']['deny_permissions'];
            }
            \Session::set('permissions',$permissions);
            \Session::set('deny_permissions',$deny_permissions);
        } catch (ThrottlingException $e) {

        } catch (NotActivatedException $e) {

        } catch (Exception $e) {
            return Redirect::route('common.authentication.login')->withErrors([trans('user.InvalidLogin')]);
        }


        return Redirect::intended(route('dashboard.index'));



    }


    public function getLogout(){
        Sentinel::logout(null, true);
        return redirect()->route('client.auth.login');
    }



}

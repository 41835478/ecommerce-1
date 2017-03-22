<?php namespace App\Http\Middleware\Client;

use Closure, Redirect,App,Session;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;


class Authenticate
{
	public function handle($oRequest, Closure $fNext)
	{

		if ($oUser = Sentinel::check()  ) {

		} else {
			// User is not logged in
			if ($oRequest->ajax()) {
				return response('Needs Login', 401);
			} else {
				return Redirect::route('client.auth.login')->withErrors([trans('user.InvalidLogin')]);
			}
		}

		return $fNext($oRequest);

	}

}

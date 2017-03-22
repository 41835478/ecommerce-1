<?php namespace App\Http\Middleware;

use Closure, Redirect,App,Session;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;


class authorization
{
	public function handle($oRequest, Closure $fNext)
	{

		if(!canAccess(\Request::route()->getName())){

			return Redirect::route('client.auth.login')->withErrors([trans('general.invalidRole')]);
		}

		$locale = ($oRequest->has('locale')) ? $oRequest->locale : false;
		$back = $this->setLocale($locale);

		if ($back == 'back') {
			return Redirect::back();
		}

		return $fNext($oRequest);


	}


	private function setLocale($locale)
	{
		if ($locale) {
			Session::put('locale', $locale);
			return 'back';
		} else if (!Session::has('locale')) {
			Session::put('locale', 'en');
		}


		App::setLocale(Session::get('locale'));

	}

}

<?php

class CompanyController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function __construct() {
	parent::__construct();
	}


public function getCreate() {
            return View::make('company');   ///this is wrong it point to the old route
        }
 


public function postCreate() {

            $company = new Company;
            $company->user()->associate(Auth::user());
         
            $company->website   = Input::get('website');
            $company->company    = Input::get('company');
            $company->street    = Input::get('street');
           
            # Try to add the company 
            try {
                $company->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/')->with('flash_message', 'company addition failed; please try again.')->withInput();
            }

            # Log the user in
           // Auth::login($user);

           return Redirect::to('/welcome')->with('flash_message', 'Welcome to CareerTrax!');

        }
    

}

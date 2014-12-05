<?php

class ResumeController extends BaseController {

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
            return View::make('resume');   ///this is wrong it point to the old route
        }
 


public function postCreate() {

            $resume = new Resume;
            $resume->user()->associate(Auth::user());
         
            $resume->url   = Input::get('url');
            $resume->name    = Input::get('name');
            $resume->resumetext    = Input::get('resumetext');
           
            # Try to add the resume 
            try {
                $resume->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/')->with('flash_message', 'resume addition failed; please try again.')->withInput();
            }

            # Log the user in
           // Auth::login($user);

           return Redirect::to('/welcome')->with('flash_message', 'Welcome to CareerTrax!');

        }
    

}

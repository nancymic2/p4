<?php

class JobController extends BaseController {



	public function __construct() {

		# Make sure BaseController construct gets called
		parent::__construct();

		$this->beforeFilter('auth');

	}



public function getCreate() 
         {
            return View::make('savedJobs');
        }
   // )
//);

  public function postCreate() {

            $postedjob = new Postedjob;
            $postedjob->user()->associate(Auth::user());
         
            $postedjob->company   = Input::get('company');
            $postedjob->role    = Input::get('role');
            $postedjob->salary    = Input::get('salary');
            $postedjob->applyby    = Input::get('applyby');
            $postedjob->url    = Input::get('url');


           
            # Try to add the job
            try {
                $postedjob->save();
            }
            # Fail
            catch (Exception $e) {
                 return Redirect::to('/savedJobs')->with('flash_message', 'resume addition failed; please try again.')->withInput();
            }
            //$calendardate=$postedjob['applyby'];
            $jobs = json_decode($postedjob, TRUE);
            $applydate=$jobs['applyby'];
            Session::put('applybydate', $applydate);


            //echo $jobs['applyby'];
            //echo $postedjob;

            return View::make('calendar');
            //->with Input(Input::only('goodate', '$applyby'));
             // return View::make('calendar')->with('applyby, $postedjob');

        }
    }
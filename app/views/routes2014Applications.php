
Route::post('/applications', 
    array(
        'before' => 'csrf', 
        function() {
             $application = new Application;
             $application->user()->associate(Auth::user());
         
             $application->company   = Input::get('company');
             $application->role    = Input::get('role');
             $application->city    = Input::get('city');
             $application->salary    = Input::get('salary');
             $application->applyDate    = Input::get('applyDate');
             $application->followupBy    = Input::get('followupBy');
             $application->hiringMgr    = Input::get('hiringMgr');
             $application->decision    = Input::get('decision');
             $application->rating    = Input::get('rating');
             $application->resumeUsed    = Input::get('resumeUsed');
             $application->howapplied    = Input::get('howapplied');
             $application->recnumber    = Input::get('recnumber');
             $application->website   = Input::get('website');
             $application->username    = Input::get('username');
             $application->password    = Input::get('password');
           
            # Try to add the resume 
            try {
                 $application->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/applications')->with('flash_message', 'resume addition failed; please try again.')->withInput();
            }
            # Log the user in
           // Auth::login($user);
           //return Redirect::to('/')->with('flash_message', 'Welcome to CareerTrax!');
            $jobs = json_decode($application, TRUE);
            $followupBy=$jobs['followupBy'];
            Session::put('followupBy', $followupBy);
            //echo $jobs['applyby'];
            //echo $postedjob;
            return View::make('calendar2');
        }
    )
);
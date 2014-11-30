<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//debug from susans notes

# /app/routes.php

Route::get('password/reset', array(
  'uses' => 'PasswordController@remind',
  'as' => 'password.remind'
));


Route::post('password/reset', array(
  'uses' => 'PasswordController@request',
  'as' => 'password.request'
));


Route::get('password/reset', array(
  'uses' => 'PasswordController@reset',
  'as' => 'password.reset'
));


Route::post('password/reset', array(
  'uses' => 'PasswordController@update',
  'as' => 'password.update'
));


Route::get('/jobstoapply', function()
{
     
   $jobs = Postedjob::where('user_id', '=', Auth::user()->id)->get();
  echo '<div class="container">'; 
  echo '<p>';
   //echo $jobs;
# loop through the Collection and access just the data
foreach($jobs as $job) {


      echo '<b>role:</b> ';
    echo $job['role']."<br>";

        echo '<b>company:</b> ';
    echo $job['company']."<br>";

        echo '<b>salary:</b> ';
    echo $job['salary']."<br>";

            echo '<b>job url:</b> ';
    //echo $job['url']."<br>";
            echo '<a href="'.$job['url'].'" target="_blank">'. $job['url'].'</a><br>';

            echo '<b>Apply by:</b> ';
    echo $job['applyby']."<br>";


    echo '____________________<br>';
echo '</p>';
echo '</div>';
} 



   echo '<br>  <a href="welcome">back</a> <br>';
    //$email = User::where('user_id', '=', Auth::user()->id)->get('email');
   

    //echo $email;



 //  $collection = Book::all();




    
});


Route::get('/completedapps', function()
{
     
   $completedapps = Application::where('user_id', '=', Auth::user()->id)->get();
  
   echo $completedapps;
   echo '<br>  <a href="welcome">back</a> <br>';
    //$email = User::where('user_id', '=', Auth::user()->id)->get('email');
   

    //echo $email;
    
});

Route::get('/resumesearch', function()
{

   $i=0;
   $resumes = Resume::where('user_id', '=', Auth::user()->id)->get();
      //$resumes->toArray();

 

  echo '<div class="container">'; 
  echo '<p>';
  
# loop through the Collection and access just the data
foreach($resumes as $resume) {
$i++;
   $resume_id[$i] = $resume->id;
//echo $resume_names[$i];
    echo '<b>Resume name:</b> ';
    echo $resume['name']."<br>";

    echo '<b>Resume id:</b> ';
    echo $resume['id']."<br>";

    echo '<b>Resume text:</b> ';
    echo $resume['resumetext']."<br>";

    echo '<b>Added:</b> ';
    echo $resume['created_at']."<br>";

    echo '<b>Resume url:</b> ';
  
    echo '<a href="'.$resume['url'].'" target="_blank">'. $resume['url'].'</a><br>';

   //echo 'delete<br>'.$resume_id[$i];
    echo '<br>';
echo '<script> var data = "<php echo $resume_id[$i]; ?>" </script>';

     $deleteres=$resume_id[$i];
           
     //echo $deleteres;
          // onclick?  Session::put('applybydate', $applydate);
echo '<a href="deleteresume.php?id=' .$deleteres .'">' .'DELETE</a>'; 

    echo '<br>';

    echo '<p style="color:red; font-weight: bold">THIS IS PERMANENT</P>';
    echo '____________________<br>';

    /// $buyshoe->delete();

  }
//return View::make('deleteresume')->with('deleteres', $deleteres);
echo '<a href="welcome">Back</a>';
  
echo '</p>';
echo '</div>';

    
});


Route::get('/calendar', function()
{
   echo '<h2>add to google canendar</h2>';  
   echo '<h3>';  

   echo '<a href="resume">add a resume</a> <br>';

    
      echo '</h3>'; 

    //echo $email;
    
});


Route::get('/lorem', function()
{

$num = Input::get('num');
  
if ($num > 20) 
{
  $num=20;
}

$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($num);

$someparas = implode('<p>', $paragraphs);

return View::make('lorem')->with('someparas', $someparas);

});





Route::get('/welcome', function()
{
   echo '<h2>Welcome</h2>';  
   echo '<h3>';  

   echo '<a href="resume">add a resume</a> <br>';
      echo '<a href="resumesearch">find your saved resumes</a> <br>';
         echo '<a href="applications">add a completed application</a> <br>';
   echo '<a href="completedapps">find completed applications</a> <br>';
   echo '<a href="savedJobs">add a job</a> <br>';
   echo '<a href="jobstoapply">get jobs you need to apply to</a> <br>';

   echo '<a href="logout">log out</a> <br>';
    
      echo '</h3>'; 

    //echo $email;
    
});

Route::get('/signup',
    array(
        'before' => 'guest',
        function() {
            return View::make('signup');
        }
    )
);

Route::post('/signup', 
    array(
        'before' => 'csrf', 
        function() {

            $user = new User;

            $user->first    = Input::get('first');

            $user->last    = Input::get('last');
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
//$user->save();


           // # Try to add the user 
            try {
                $user->save();
            }

            # Fail
            catch (Exception $e) {
               // dont resend the email or pword since email is taken. flash not working

                //return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput(Input::except('password', 'email')); 
                return Redirect::to('/password/reset')->with('flash_message', 'Sign up failed; please try again.')->withInput(Input::except('password', 'email')); 

            }


            # Log the user in
           Auth::login($user);

            return Redirect::to('/welcome')->with('flash_message', 'Welcome to CareerTrax!');

        }
    )
);




Route::get('/login',
    array(
        'before' => 'guest',
        function() {
            return View::make('login');
        }
    )
);




Route::post('/login', 
    array(
        'before' => 'csrf', 
        function() {

            $credentials = Input::only('email', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/welcome')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('/welcome');
        }
    )
);



Route::get('/logout', function() {

    # Log out
    Auth::logout();

    # Send them to the homepage
    return Redirect::to('/');

});





Route::get('/resume',
    array(
       // 'before' => 'guest',
        function() {
            return View::make('resume');
        }
    )
);

Route::post('/resume', 
    array(
        'before' => 'csrf', 
        function() {

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
                return Redirect::to('/resume')->with('flash_message', 'resume addition failed; please try again.')->withInput();
            }

            # Log the user in
           // Auth::login($user);

           return Redirect::to('/welcome')->with('flash_message', 'Welcome to CareerTrax!');

        }
    )
);


////////////////



Route::get('/savedJobs',
    array(
       // 'before' => 'guest',
        function() {
            return View::make('savedJobs');
        }
    )
);

Route::post('/savedJobs', 
    array(
        'before' => 'csrf', 
        function() {

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
    )
);



Route::get('/applications',
    array(
       // 'before' => 'guest',
        function() {
            return View::make('applications');
        }
    )
);

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

           return Redirect::to('/welcome')->with('flash_message', 'Welcome to CareerTrax!');

        }
    )
);

//////////////////////
//////////////////////
/////////////////////
/* ////////////////////////OTHER STUFF FOR TESTING ETC ////////////////////////////// */




Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});




Route::get('/practice-creating', function() {

  class Buyshoe extends Eloquent {

  }

    # Instantiate a new shoe to buy model class
    $buyshoe = new Buyshoe();

    # Set 
    $buyshoe->brand = 'louis vuitton';
    $buyshoe->model = 'heel bliss';
    $buyshoe->color= 'black';
    $buyshoe->pic = 'http://ecx.images-amazon.com/images/I/3107onLBNLL._SL150_.jpg';
    $buyshoe->size = 9;

    # This is where the Eloquent ORM magic happens
    $buyshoe->save();

    return 'A new shoe you wih to buy has been added! Check your database to see...';

});



Route::get('/practice-reading', function() {


  class Users extends Eloquent {

  }

    # The all() method will fetch all the rows from a Model/table
    $users = Users::all();

    # Make sure we have results before trying to print them...
    if($users->isEmpty() != TRUE) {

        # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
        foreach($users as $user) {
            echo $user->first.'<br>';
            echo $user->last.'<br>';
            echo $user->email.'<br>';

        }
    }
    else {
        return 'No users found';
    }

});


Route::get('/getemails', function() {


    class Users extends Eloquent {

    }

    # The all() method will fetch all the rows from a Model/table
    $users = Users::all();

    # Make sure we have results before trying to print them...
    if($users->isEmpty() != TRUE) {

        # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
        foreach($users as $user) {
            //echo $user->first.'<br>';
            //echo $user->last.'<br>';
            echo $user->email.'<br>';

        }
    }
    else {
        return 'No users found';
    }

});



Route::get('/practice-deleting', function() {

    class Postedjob extends Eloquent {

    }

    # First get a book to delete
    $postedjob = Postedjob::where('compan or other filed', 'LIKE', '%name of company here%')->first();

    # If we found the book, delete it
    if($postedjob) {

        # Goodbye!
        $postedjob->delete();

        return "Deletion complete; check the database to see if it worked...";

    }
    else {
        return "Can't delete - shoe not found.";
    }

});



//db connect

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    //echo Pre::render($results);
    echo print_r ($results);

});




//main page

/////////// reroute to / on error
////////// remove for local
//// rereoute all error urls to /  reinstate later
App::missing(function($exception)
{
  return View::make('index');
});

//////////////////////////////////
//////////////////////////////////

Route::get('/get-environment', function()
{
  echo "environment is " .App::environment();
  
});


Route::get('/', function()
{
  return View::make('index');
  
});



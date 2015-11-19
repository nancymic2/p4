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





Route::get('account', array('before' => 'auth', function()

{
    
$stylesend='</body></html>';
     
 $names = User::where('id', '=', Auth::user()->id)->get();
 include 'head.php';
 echo '<p>&nbsp;</p>';
   //echo $jobs;
   # loop through the Collection and access just the data
foreach($names as $name) {


   // echo '<b>email:</b> ';
    //echo $name['email'];

    echo '<b>Name:</b> ';
    echo $name['first'];
    echo ' ';
    echo $name['last'];
    echo '<br>';
      echo '<b>Email:</b> ';
    echo $name['email'];
    echo '<br>';
      echo '<b>Joined:</b> ';
    echo $name['created_at'];
    echo '<br>';
  
   }

   echo '<br>';
echo '<a href="/changelast">Edit Account</a>';
echo '<br>';

echo '<a href="/password/remind">Request new Password</a>';
echo '<br>';
echo $stylesend;
    
}));


Route::get('changelast', array('before' => 'auth', function()

{
   
$stylesend='</body></html>';
include 'head.php';
echo '<p>&nbsp;</p>';    
 $names = User::where('id', '=', Auth::user()->id)->get();
 
   //echo $jobs;
   # loop through the Collection and access just the data
foreach($names as $name) {
   // echo '<b>email:</b> ';
    //echo $name['email'];

    echo '<b>Name:</b> ';
    echo $name['first'];
    echo ' ';
    echo $name['last'];
    echo '<br>';
//$oldemail=$name['email'];
$id=$name['id'];
 echo '<a href="chemail.php?id=' .$id .'">' .'change name</a>'; 
  
   }
   
echo '<br>';

echo '</p>';
echo $stylesend;
    
}));

Route::get('myemail', array('before' => 'auth', function()

{
  
 $names = User::where('id', '=', Auth::user()->id)->get();
 
   //echo $jobs;
   # loop through the Collection and access just the data
foreach($names as $name) {
    echo '<b>email:</b> ';
    echo $name['email'];

  }

}));

Route::get('/job/create', 'JobController@getCreate');
Route::post('/job/create', 'JobController@postCreate');
Route::get('/resume/create', 'ResumeController@getCreate');
Route::post('/resume/create', 'ResumeController@postCreate');
//Route::get('/company/edit', 'CompanyController@getEdit');
//Route::post('/company/update', 'CompanyController@postUpdate');
///THESE CNTROLLERS SEEM TO WORK
/////////////////////////////
Route::get('/edit', function() {

  $firstnames = User::where('id', '=', Auth::user()->id)->get();
  echo '<div class="container">'; 
  echo '<p>';
   //echo $jobs;
   # loop through the Collection and access just the data
foreach($firstnames as $firstname) {


    echo '<b>name:</b> ';
    echo $firstname['first'].'&nbsp;'.$firstname['last']."<br>";

  }

/* $view  = '<form method="POST" action="">'; 
 $view .= 'First: <input type="text" name="first">'; 
 $view .= '<input type="submit">'; 
$view .= '</form>'; 
 return $view;*/

echo '<form method="POST" action="edit">'; 
echo'Change last name: <input type="text" name="last">'; 
echo '<input type="submit">'; 
echo '</form>'; 
 //return View::make('nameupdate');

 }); 

Route::post('/edit', function() {
    echo 'Your last name has been changed in our database';
//return View::make('password')->with('theword', $theword);
}
    
);



Route::get('/', function()
{
  return View::make('index');
  
});

Route::get('/applicationupdate', function()
{
  return View::make('applicationupdate');
  
});


Route::get('password/reset/{token}', array(
  'uses' => 'RemindersController@getReset',
  'as' => 'password.reset'
));

//added $ in front ot token. undef error goes away but diff error dec 6 9am
Route::post('password/reset/{token}', array(
  'uses' => 'RemindersController@postReset',
  'as' => 'password.update'
));

Route::get('password/remind', array(
  'uses' => 'RemindersController@getRemind',
  'as' => 'password.remind'
));


Route::post('password/remind', array(
  'uses' => 'RemindersController@postRemind',
  'as' => 'password.request'
));

/////////////////////////////////


Route::get('jobstoapply', array('before' => 'auth', function()

{


$stylesend='</body></html>';
     
  $jobs = Postedjob::where('user_id', '=', Auth::user()->id)->get();
  include 'head.php';
  echo '<div class="container">'; 
  echo '<h2>Your Saved Jobs</h2>';

   //echo $jobs;
   # loop through the Collection and access just the data
foreach($jobs as $job) {
     echo '<div class="myappls">';
   echo '<div class="reshead">';
  
   
    echo '<b>role:</b> ';
    echo $job['role']."<br>";

    echo '</div>';

    echo '<b>company:</b> ';
    echo $job['company']."<br>";

    echo '<b>salary:</b> ';
    echo $job['salary']."<br>";

    echo '<b>job url:</b> ';
    //echo $job['url']."<br>";
    echo '<a href="'.$job['url'].'" target="_blank">'. $job['url'].'</a><br>';

    echo '<b>Apply by:</b> ';
    echo $job['applyby']."<br>";

    
    echo '</p>';
    echo '</div>';
    
} 
  
   echo '<br>';

   echo $stylesend;
  
}));


Route::get('/completedappsOld', function()
{

   $completedapps = Application::where('user_id', '=', Auth::user()->id)->get();
  
   echo $completedapps;
   echo '<br>  <a href="/">back</a> <br>';
    //$email = User::where('user_id', '=', Auth::user()->id)->get('email');
    //echo $email;
    
});


Route::get('completedapps', array('before' => 'auth', function()
  {      
////////////////

$stylesend='</body></html>';


///////////////            

//Route::get('/completedapps', function()

  $i=0;  
  $j=0;   
  $k=0;
  $completedapps = Application::where('user_id', '=', Auth::user()->id)->get();
  $resumes = Resume::where('user_id', '=', Auth::user()->id)->get();
  $companies = Company::where('user_id', '=', Auth::user()->id)->get();
  
include 'head.php';
echo '<script type="text/javascript" src="http://p4.scholarpaws.com/js/jquery.tablesorter.min.js"></script>';
  echo '<div class="container">'; 
  echo '<h2>Your completed applications</h2>';

  echo '<p>';
  echo '<table id="myTable" class="tablesorter" border="2" cellpadding="4"> 

  <caption>
  <h3>Sort Your Applications by field</h3>
  <h4>Click Company to see or edit Company record</h4>
  <h4>Click Resume to see or edit Resume record</h4>
  <h4>Click Job name to see or edit Job record </h4>
  </caption>
  <thead>
    <tr>  
      <th>Company</th>
      <th>Role</th>
      <th>City</th>
      <th>Date applied</th>
      
      <th>Hiring manager</th>

      <th>Follow up by</th>
      <th>Job rating</th>
      <th>Resume name</th>
      <th>Job link</th>
      <th>Job ID / name</th>

    </tr>  </thead>   <tbody>';
$resum[]="";
$resid[]="";
    foreach($resumes as $resume) {
   $j++;
   $resum[$j] = $resume->name;
   $resid[$j] = $resume->id;
   //echo $resum[$i];
   //echo $resid[$i];
 }


$corp[]="";
$corpid[]="";
    foreach($companies as $company) {
   $k++;
   $corp[$k] = $company->company;
   $corpid[$k] = $company->id;
  // echo $corp[$i];
  // echo $corpid[$i];
 }


# loop through the Collection and access just the data
foreach($completedapps as $completedapp) {
   $i++;
   $app_id[$i] = $completedapp->id;


    echo '<tr>';
    echo '<td>';

    $thecompany=$completedapp['company'];

    $key = array_search($thecompany, $corpid);

    echo '<a href="/company/edit/'.$thecompany;  ///
    echo '">';  ////
    echo $corp[$key];
    echo '</a>';  ///

    //echo '<b>company:</b> ';
    //echo $completedapp['company']."<br>";
    echo '</td>';
    echo '<td>';
    //echo '<b>role:</b> ';
    echo $completedapp['role']."<br>";
    echo '</td>';
    echo '<td>';
    //echo '<b>Application id:</b> ';
    //echo $completedapp['id']."<br>";

    //echo '<b>City:</b> ';
    echo $completedapp['city']."<br>";
    echo '</td>';
    echo '<td>';
    //echo '<b>Applied date:</b> ';
    echo $completedapp['applyDate']."<br>";
    echo '</td>';
    echo '<td>';
    //echo '<b>Hiring Manager:</b> ';
    echo $completedapp['hiringMgr']."<br>";
    echo '</td>';
    echo '<td>';
    //echo '<b>Salary:</b> ';
    //echo $completedapp['salary']."<br>";
   
    //echo '<b>Follow up by:</b> ';
    echo $completedapp['followupBy']."<br>";
    echo '</td>';
    echo '<td>';
    //echo '<b>Decision:</b> ';
    //echo $completedapp['decision']."<br>";

    //echo '<b>rating:</b> ';
    echo $completedapp['rating']."<br>";
    echo '</td>';
    echo '<td>';
    //echo '<b>resume used:</b> ';
    //echo $completedapp['resumeUsed']."<br>"; //this equals the resume id on resume table
    $theresume=$completedapp['resumeUsed'];

    $key = array_search($theresume, $resid);

    echo '<a href="/resume/edit/'.$theresume;  ///
    echo '">';  ////
    echo $resum[$key];
    echo '</a>';  ///
      //$res[] = json_decode($resumeCurr, true);

      //echo gettype($res);

      //echo count($res);
       //$mystring=serialize($res);
       //echo $mystring;

       //$pieces = explode(":", $mystring);
       //echo $pieces[35];
      // echo gettype($mystring);
//echo $res['name'];
//$keys = array_keys($res);
//echo $res[$keys[1]];

    echo '</td>';
    echo '<td>';
    //echo '<b>How Applied:</b> ';
    //echo $completedapp['howapplied']."<br>";

    //echo '<b>Website:</b> ';
    echo '<a href="';
    echo $completedapp['website'];
    echo '">';
    echo $completedapp['website'];
    echo '</a>';
    echo '</td>';
    echo '<td>';
    //echo '<b>user name:</b> ';
    //echo $completedapp['username']."<br>";

    //echo '<b>password:</b> ';
    //echo $completedapp['password']."<br>";

    //echo '<b>job name:</b> ';
    echo $app_id[$i];
    echo '  ';
    echo '<a href="/application/edit/'.$app_id[$i];
    echo '">';
    echo $completedapp['recnumber']; //job name
    echo '</a>';
    
    
    echo '</td>';
    
    echo '</tr>';

   // echo '<tr> <td colspan="10" bgcolor="gray"></td></tr>';
   
   
    echo '<script> var apldata = "<php echo $app_id[$i]; ?>" </script>';

     $updateapp=$app_id[$i];
           
     //echo $deleteres;
          // onclick?  Session::put('applybydate', $applydate);
  unset($res);

  }
    echo '<br>';

    echo '</tbody> </table>';
    echo '</div>';

    /// $buyshoe->delete();

//return View::make('deleteresume')->with('deleteres', $deleteres);
echo '</p>';
echo '<br><br>';
 echo $stylesend;   
}));



Route::get('resumesearch', array('before' => 'auth', function()

{
 
$stylesend='</body></html>';

  $i=0;
  $resumes = Resume::where('user_id', '=', Auth::user()->id)->get();
      //$resumes->toArray();
include 'head.php';
  echo '<div class="container">'; 
   //echo '<p>&nbsp;</p>';
   echo '<h2>Your saved resumes</h2>';
 
  echo '<table  width="750" cellpadding="20" style="border: 2px solid; border-radius: 10px;">';
  
# loop through the Collection and access just the data
foreach($resumes as $resume) {
   $i++;
   $resume_id[$i] = $resume->id;
   //echo $resume_names[$i];
   echo '<tr>';
    echo '<td width="150" style="background-color:#eeeeee;"><b>Resume name:</b></td> ';
    echo '<td style="background-color:#eeeeee;"><b>'.$resume['name']."</b></td>";
echo '</tr><tr>';
    echo '<td><b>Resume id:</b> </td>';
    echo '<td>'.$resume['id']."</td>";
echo '</tr><tr>';
    echo '<td><b>Resume text:</b> </td>';
    echo '<td>'.$resume['resumetext']."</td>";
echo '</tr><tr>';
    echo '<td><b>Added:</b> </td>';
    echo '<td>'.$resume['created_at']."</td>";
echo '</tr><tr>';
    echo '<td><b>Resume url:</b></td> ';

    echo '<td><a href="'.$resume['url'].'" target="_blank">'. $resume['url'].'</a></td><br>';
echo '</tr>';
   //echo 'delete<br>'.$resume_id[$i];
    echo '<br>';
    echo '<script> var data = "<php echo $resume_id[$i]; ?>" </script>';

    $deleteres=$resume_id[$i];
    
    echo '<tr>';       
     //echo $deleteres;
          // onclick?  Session::put('applybydate', $applydate);

    echo '<td colspan="2">';      
    echo '<a href="deleteresume.php?id=' .$deleteres .'">' .'DELETE THIS RESUME</a>'; 
    echo '<br>';      
    echo '<span style="color:red; font-weight: bold;">THIS IS PERMANENT!</span>';
  
    echo '<br>';
    echo '</td>'; 
    echo '</tr>';
    echo '<tr>';     
    
  echo '<td colspan="2" style="background-color:#CCCCFF;">                         </td>';
   echo '</tr>';      
   }
   //
echo '</table>';      
echo '</p>';
echo '</div>';
    echo $stylesend;
}));


Route::get('/calendar', function()
{
   echo '<h2>add to google calendar</h2>';  
   echo '<h3>';  

   echo '<a href="resume">add a resume</a> <br>';
   echo '</h3>'; 

    //echo $email;
    
});


//Route::get('/welcome', function()
Route::get('welcome', array('before' => 'auth', function()

{
   echo '<h2>Welcome</h2>';  
   echo '<h3>';  

   echo '<a href="resume">add a resume</a> <br>';
   echo '<a href="resumesearch">find your saved resumes</a> <br>';
   echo '<a href="applications">add a completed application</a> <br>';
   echo '<a href="completedapps">see your jobs</a> <br>';
   echo '<a href="savedJobs">add a job</a> <br>';
   echo '<a href="jobstoapply">get jobs you need to apply to</a> <br>';

   echo '<a href="logout">log out</a> <br>';
   echo '</h3>'; 
   //echo $email;
    
}));

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

            return Redirect::to('/')->with('flash_message', 'Welcome to CareerTrax!');

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
                return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('/');
        }
    )
);

Route::get('/logout', function() {

    # Log out
    Auth::logout();

    # Send them to the homepage
    return Redirect::to('/');

});

Route::get('resume', array('before' => 'auth', function()
         {
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

           return Redirect::to('/applications')->with('flash_message', 'Welcome to CareerTrax!');

        }
    )
);


///// added 10-11-15
Route::get('company', array('before' => 'auth', function()
         {
            return View::make('company');
        }
    )
);

Route::post('/company', 
    array(
        'before' => 'csrf', 
        function() {

            $company = new Company;
            $company->user()->associate(Auth::user());
         
            $company->website   = Input::get('website');
            $company->company    = Input::get('company');
            $company->street    = Input::get('street');
            $company->rating    = Input::get('rating');
            $company->username    = Input::get('username');
            $company->pasword    = Input::get('pasword');
           
            # Try to add the company 
            try {
                $company->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/company')->with('flash_message', 'resume addition failed; please try again.')->withInput();
            }

            # Log the user in
           // Auth::login($user);

           return Redirect::to('/applications')->with('flash_message', 'Welcome to CareerTrax!');

        }
    )
);


///////////////////EXPENSES /////////////

Route::get('expenses', array('before' => 'auth', function()
         {
            //
          $user = Auth::user();
          
          /////NEED TO ASSOCIATE WITH LOGGED IN USER FOR RESUMES AD COMPANIES SOMEHOW 11/6/15
          $company1_lists = Company::where('user_id', '=', $user->id)->get()->lists('company', 'id');

          $application_lists = Application::where('user_id', '=', $user->id)->get()->lists('recnumber', 'id');

          //$resume_lists = DB::table('resumes')->where('user_id', $user->id)->lists('name');
          //$company_lists = DB::table('companies')->where('user_id', $user->id)->lists('company'); //only index

           //sample return View::make('applications', array('company_lists' => $company_lists), array('resume_lists' => $resume_lists));

          return View::make('expenses', array('company1_lists' => $company1_lists), array('application_lists' => $application_lists));       ///10/31/15

          //return View::make('expenses');
        }
    )
);

  Route::post('/expenses', 
    array(
        'before' => 'csrf', 
        function() {

            $expense = new Expense;
            $expense->user()->associate(Auth::user());
             $expense->exp_date   = Input::get('exp_date');
            $expense->company_id   = Input::get('company_id');   ////  add to dropdown later
            $expense->application_id   = Input::get('recnumber');  ////  add to dropdown later
         
            $expense->gas   = Input::get('gas');
            $expense->airfare    = Input::get('airfare');
            $expense->train    = Input::get('train');
            $expense->hotel    = Input::get('hotel');
            $expense->meals    = Input::get('meals');
            $expense->stamps    = Input::get('stamps');
            $expense->ink    = Input::get('ink');
            $expense->paper    = Input::get('paper');
            $expense->hardware    = Input::get('hardware');
            $expense->portfolio    = Input::get('portfolio');
            $expense->phone    = Input::get('phone');
            $expense->clothing    = Input::get('clothing');
            $expense->entertainment    = Input::get('entertainment');
            $expense->comments    = Input::get('comments');
           
            # Try to add the company 
            try {
                $expense->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/expenses')->with('flash_message', 'expenses addition failed; please try again.')->withInput();
            }

            # Log the user in
           // Auth::login($user);

          // return Redirect::to('/')->with('flash_message', 'Welcome to CareerTrax!');
            return Redirect::to('/expenses');

        }
    )
);

///////////////////////////////////////////////
/////////////small version of company update
///// added 10-11-15
Route::get('companysmall', array('before' => 'auth', function()
         {
            return View::make('companysmall');
        }
    )
);

// Route::post('/companysmall',   dcomment out. try no route on post

  Route::post('/companysmall', 
    array(
        'before' => 'csrf', 
        function() {

            $company = new Company;
            $company->user()->associate(Auth::user());
         
            $company->website   = Input::get('website');
            $company->company    = Input::get('company');
            $company->street    = Input::get('street');
             $company->rating    = Input::get('rating');
           
            # Try to add the company 
            try {
                $company->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/companysmall')->with('flash_message', 'resume addition failed; please try again.')->withInput();
            }

            # Log the user in
           // Auth::login($user);

          // return Redirect::to('/')->with('flash_message', 'Welcome to CareerTrax!');
            return Redirect::to('/companysmall');

        }
    )
);

////////////////////////pass value to view

//return View::make('password')->with('theword', $theword);

Route::get('savedJobs', array('before' => 'auth', function()
         {
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

            return View::make('calendar');
            //->with Input(Input::only('goodate', '$applyby'));
             // return View::make('calendar')->with('applyby, $postedjob');

        }
    )
);

Route::get('applications', array('before' => 'auth', function()
         {
            //return View::make('applications');  //commented out 10/31/15

          // 10/31/15 create the array to hold companies from companies table - $company_lists
          // us the lists method of eloquent
          // grab the company and id from the companie table for the logged in user
          //return view applications plus the array
          $user = Auth::user();
          
          /////NEED TO ASSOCIATE WITH LOGGED IN USER FOR RESUMES AD COMPANIES SOMEHOW 11/6/15
          $company_lists = Company::where('user_id', '=', $user->id)->get()->lists('company', 'id');

          //$resume_lists = DB::table('resumes')->where('user_id', $user->id)->lists('name');
          //$company_lists = DB::table('companies')->where('user_id', $user->id)->lists('company'); //only index

          $resume_lists = Resume::where('user_id', '=', $user->id)->get()->lists('name', 'id');

          return View::make('applications', array('company_lists' => $company_lists), array('resume_lists' => $resume_lists));  ///10/31/15
        }
    )
);


Route::post('/applications', 
    array(
        'before' => 'csrf', 
        function() {

         /* if (form.company!=="") { ///this will not work as i need the company_id and we dont have it yet
            alert()
          }
          */
             $application = new Application;
             $application->user()->associate(Auth::user());
         
             $application->company   = Input::get('company_id'); //Input::only('company_id') gets array. 
             //Input::get('company_id')gets index of the //select (0 to x)as co  try to convert here!!!

             ///$application->company   = Input::get('company');   //commented out 10/31/15  replaced by select
             $application->role    = Input::get('role');
             $application->city    = Input::get('city');
             $application->salary    = Input::get('salary');
             $application->applyDate    = Input::get('applyDate');
             $application->followupBy    = Input::get('followupBy');
             $application->hiringMgr    = Input::get('hiringMgr');
             $application->decision    = Input::get('decision');
             $application->rating    = Input::get('rating');
             $application->resumeUsed    = Input::get('user_id');  //THIS IS REALLY THE RESME ID FROM RESUMES TABLE
             $application->howapplied    = Input::get('howapplied');
             $application->recnumber    = Input::get('recnumber');
             $application->website   = Input::get('website');
             //$application->username    = Input::get('username');
             //$application->password    = Input::get('password');
           
            # Try to add the job 
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

//////////////////////
Route::get('/charter', function() {


  class Postedjobs extends Eloquent {

  }

  $i=0;

    # The all() method will fetch all the rows from a Model/table
    $postedjobs = Postedjobs::all();

    # Make sure we have results before trying to print them...
    if($postedjobs->isEmpty() != TRUE) {


      $low = array();
      $med = array();
      $high = array();
        # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
        foreach($postedjobs as $postedjob) {
           //echo $postedjob->salary.'<br>';
            $sal = $postedjob->salary;
            if ($sal < 75000) 
            {
              
              $low[$i] = $sal;
            }

            elseif ($sal > 75000  && $sal < 100000)
            {

              $med[$i] = $sal;
            }

            elseif ($sal > 100000)
            {

              $high[$i] = $sal;
            }

            $i++;

        }


    $countlow= count($low);
    $countmed= count($med);
    $counthigh= count($high);

    $salarycount = array ($countlow, $countmed, $counthigh);
    //echo $salarycount[0];
    }
    else {
        return 'No sal found';
    }
return View::make('chart')->with('salarycount', $salarycount);
});


//////////////////////


//app/routes.php
Route::get('/upload', function(){

  return View::make('upload');
});

Route::post('/upload', 'HomeController@upload');


///////////////////

Route::get('uploadresume', function(){
 return View::make('uploadresume');
});

Route::any('form-submit', function(){
 var_dump(Input::file('file'));
});



///////////////////



Route::get('expensereport', array('before' => 'auth', function()
  {      
////////////////

$stylesend='</body></html>';
$tgas=0;
$tair=0;
$ttrain=0;
$thotel=0;
$tmeals=0;
$tstamps=0;
$tink=0;
$tpaper=0;
$thardware=0;
$tportfolio=0;
$tphone=0;
$tclothing=0;
$tentertainment=0;

$file = 'myexpenses.csv'; ///
file_put_contents($file, "");  ///

// Open the file to get existing content
$current = file_get_contents($file);  ///

$current .= 'date, job, gas, air, train, hotel, meals, postage, ink, paper, hardware, portfolio, phone, clothing, entertainment';

$current .= "\n";

  $l=0;  
  $m=0;   
  $n=0;
  $expenses = Expense::where('user_id', '=', Auth::user()->id)->get();
  $applications = Application::where('user_id', '=', Auth::user()->id)->get();
  $companies = Company::where('user_id', '=', Auth::user()->id)->get();
  
include 'head.php';
echo '<script type="text/javascript" src="http://p4.scholarpaws.com/js/jquery.tablesorter.min.js"></script>';
  echo '<div class="container">'; 
  echo '<h2>Your Expenses</h2>';

  echo '<p>';
  echo '<table id="myTable" class="tablesorter" border="2" cellpadding="4" style="width: 100%; table-layout: fixed;"> 

  <caption>
  Sort Your Expenses by field
  </caption>
  <thead>
    <tr>  
      <th style="width: 6.66%;">Date</th>
      <th style="width: 6.66%;">Job</th>
      <th style="width: 6.66%;">Gas</th>
      <th style="width: 6.66%;">Air</th>
      
      <th style="width: 6.66%;">Train</th>

      <th style="width: 6.66%;">Hotel</th>
      <th style="width: 6.66%;">Meals</th>
      <th style="width: 6.66%;">Postage</th>
      <th style="width: 6.66%;">Ink</th>
      <th style="width: 6.66%;">Paper</th>
      <th style="width: 6.66%;">Hardware</th>
      <th style="width: 6.66%;">Portfolio</th>
      <th style="width: 6.66%;">Phone</th>
      <th style="width: 6.66%;">Clothing</th>
      <th style="width: 6.66%;">Entertain</th>



    </tr>  </thead>   <tbody>';
/*$resum[]="";
$resid[]="";
    foreach($resumes as $resume) {
   $l++;
   $resum[$l] = $resume->name;
   $resid[$l] = $resume->id;
   //echo $resum[$i];
   //echo $resid[$i];
 } */


$corp[]="";
$corpid[]="";
    foreach($companies as $company) {
   $m++;
   $corp[$m] = $company->company;
   $corpid[$m] = $company->id;
  // echo $corp[$i];
  // echo $corpid[$i];
 }


# loop through the Collection and access just the data
foreach($expenses as $expense) {
   $n++;
   $exp_id[$n] = $expense->id;


    echo '<tr>';
    echo '<td>';
echo $expense['exp_date'];

  $current .= $expense['exp_date'];
  $current .= ",";


    $thecompany=$expense['company'];

    $key = array_search($thecompany, $corpid);
    echo $corp[$key];


    //echo '<b>company:</b> ';
    //echo $completedapp['company']."<br>";
    echo '</td>';
    echo '<td>';
    ///job goes here

  $current .= '---';
  $current .= ",";


    echo '</td>';
    echo '<td>';
    //echo '<b>role:</b> ';
    echo $expense['gas'];

    $trimgas=trim($expense['gas']);

  $current .= $trimgas;
  $current .= ",";


    $tgas=$trimgas+$tgas;

    echo '</td>';
    echo '<td>';
    echo $expense['airfare']."<br>";
    $trimair=trim($expense['airfare']);

  $current .= $trimair;
  $current .= ",";

    $tair=$trimair+$tair;
    echo '</td>';
    echo '<td>';
    //echo '<b>Applied date:</b> ';
    echo $expense['train']."<br>";
    $trimtrain=trim($expense['train']);

  $current .= $trimtrain;
  $current .= ",";

    $ttrain=$trimtrain+$ttrain;
    echo '</td>';
    echo '<td>';
    //echo '<b>Hiring Manager:</b> ';
    echo $expense['hotel']."<br>";
    $trimhotel=trim($expense['hotel']);

  $current .= $trimhotel;
  $current .= ",";

    $thotel=$trimhotel+$thotel;
    echo '</td>';
    echo '<td>';

    echo $expense['meals']."<br>";
    $trimmeals=trim($expense['meals']);

  $current .= $trimmeals;
  $current .= ",";

    $tmeals=$trimmeals+$tmeals;
    echo '</td>';
    echo '<td>';

    echo $expense['stamps']."<br>";
    $trimstamps=trim($expense['stamps']);

  $current .= $trimstamps;
  $current .= ",";

    $tstamps=$trimstamps+$tstamps;
    echo '</td>';
    //echo '<td>';
    //echo '<b>resume used:</b> ';
    //echo $completedapp['resumeUsed']."<br>"; //this equals the resume id on resume table
   // $theresume=$completedapp['resumeUsed'];

    //$key = array_search($theresume, $resid);
    //echo $resum[$key];

    //echo '</td>';
    echo '<td>';

    echo $expense['ink'];
    $trimink=trim($expense['ink']);

  $current .= $trimink;
  $current .= ",";

    $tink=$trimink+$tink;
    echo '</td>';
    echo '<td>';
    echo $expense['paper']."<br>";
    $trimpaper=trim($expense['paper']);

  $current .= $trimpaper;
  $current .= ",";

    $tpaper=$trimpaper+$tpaper;
    echo '</td>';
        echo '<td>';
    echo $expense['hardware']."<br>";
    $trimhardware=trim($expense['hardware']);

  $current .= $trimhardware;
  $current .= ",";

    $thardware=$trimhardware+$thardware;
    echo '</td>';
        echo '<td>';
    echo $expense['portfolio']."<br>";
    $trimportfolio=trim($expense['portfolio']);

  $current .= $trimportfolio;
  $current .= ",";

    $tportfolio=$trimportfolio+$tportfolio;
    echo '</td>';
        echo '<td>';
    echo $expense['phone']."<br>";
    $trimphone=trim($expense['phone']);

  $current .= $trimphone;
  $current .= ",";


    $tphone=$trimphone+$tphone;
    echo '</td>';
        echo '<td>';
    echo $expense['clothing']."<br>";
    $trimclothing=trim($expense['clothing']);

  $current .= $trimclothing;
  $current .= ",";
    $tclothing=$trimclothing+$tclothing;
    echo '</td>';
        echo '<td>';
    echo $expense['entertainment']."<br>";
    $trimentertainment=trim($expense['entertainment']);

  $current .= $trimentertainment;
  $current .= ",";


    $tentertainment=$trimentertainment+$tentertainment;
    echo '</td>';
    
    echo '</tr>';

   // echo '<tr> <td colspan="10" bgcolor="gray"></td></tr>';
   
   
    echo '<script> var apldata = "<php echo $app_id[$i]; ?>" </script>';

    //$updateapp=$app_id[$i];
           
     //echo $deleteres;
          // onclick?  Session::put('applybydate', $applydate);
  //unset($res);
$current .= "\n";

  }
    echo '<br>';

    echo '</tbody> </table>';

    echo '<table border="2" cellpadding="4" style="width: 100%; table-layout: fixed;"> <tr>';

    echo '<td style="width: 6.66%;">';
    echo '<b>Totals</b>';
    echo '</td>';

    echo '<td style="width: 6.66%;">';
    echo '</td>';

    echo '<td style="width: 6.66%;">';
    echo $tgas;
    echo '</td>';
    echo '<td style="width: 6.66%;">';
     echo $tair;
    echo '</td>';
    echo '<td style="width: 6.66%;">';
    echo $ttrain;
    echo '</td>';
    echo '<td style="width: 6.66%;">';
     echo $thotel;
    echo '</td>';
        echo '<td style="width: 6.66%;">';
         echo $tmeals;
    echo '</td>';
        echo '<td style="width: 6.66%;">';
         echo $tstamps;
    echo '</td>';
        echo '<td style="width: 6.66%;">';
         echo $tink;
    echo '</td>';
        echo '<td style="width: 6.66%;">';
         echo $tpaper;
    echo '</td>';
        echo '<td style="width: 6.66%;">';
         echo $thardware;
    echo '</td>';
        echo '<td style="width: 6.66%;">';
         echo $tportfolio;
    echo '</td>';
        echo '<td style="width: 6.66%;">';
         echo $tphone;
    echo '</td>';
        echo '<td style="width: 6.66%;">';
         echo $tclothing;
    echo '</td>';
        echo '<td style="width: 6.66%;">';
         echo $tentertainment;
    echo '</td>';


    echo '</tr></table>';
    echo '</div>';

   

//return View::make('deleteresume')->with('deleteres', $deleteres);
echo '</p>';
echo '<br><br>';

file_put_contents($file, $current);

echo '<div id="stuff" style="width:730px; margin-top: 20px; margin-bottom: 20px; border: 1px solid gray; padding-left: 20px; padding-bottom: 20px; padding-right: 20px;">'; 
echo '<br>';
echo '<h3>Download:</h3>';
echo '<div class="csv">download <u><a href="myexpenses.csv">the file</a></u> in CSV format</div>';
//echo 'because you really need a file';
echo '</div>';


 echo $stylesend;   
}));




Route::get('applicationsrating', array('before' => 'auth', function()
         {
            return View::make('applicationsrating');
        }
    )
);


Route::post('/applicationsrating', 
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
                return Redirect::to('/applicationsrating')->with('flash_message', 'resume addition failed; please try again.')->withInput();
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

 //Route::get('company/(:any)/edit', array('as'=>'edit_company', 'uses'=>'company@edit'));

 //Route::put('company/update', array('uses'=>'company@update'));



  Route::get('company/edit/{id}', array('as' => 'company.edit', function($id) 
    {
        // return our view and Nerd information
        return View::make('company-edit') // pulls app/views/nerd-edit.blade.php use company/edit/1 or other id number
            ->with('company', Company::find($id));
    }));

    // route to process the form
   Route::post('/company/edit/{id}', 
    array(
        'before' => 'csrf', 
        function() {
          $id =Input::get('id');
           //$company  = Company::find(1);  got to get the co id. take from url if need be cause ive had enough
           $company  = Company::find($id);  ///works when id is hardcoded
            //$company->id   =Input::get('id');  //just added
            $company->website   = Input::get('website');
             $company->rating   = Input::get('rating');
             $company->save();
             return Redirect::to('/completedapps'); // YES NO? 
}
));

  

  Route::get('user/edit/{id}', array('as' => 'user.edit', 'before' => 'auth', function($id)  //just added before
    {

        $user = Auth::user();// just added 
        return View::make('user-edit') // pulls app/views/nerd-edit.blade.php use user/edit/1 or other id number
            ->with('user', User::find($id));  ///change $id to $user
    }));
//return View::make('chart')->with('salarycount', $salarycount);
    // route to process the form
   Route::post('/user/edit/{id}', 
    array(
        'before' => 'auth', 
        function() {
          $id =Input::get('id');
           //$user  = user::find(1);  got to get the co id. take from url if need be cause ive had enough
           $user  = User::find($id);  ///works when id is hardcoded
            //$user->id   =Input::get('id');  //just added
            $user->first   = Input::get('first');
             $user->last   = Input::get('last');
             $user->email   = Input::get('email');
             $user->save();
             return Redirect::to('/'); // YES NO? 
}
));

  



/*

///////////try to get company name ////////////////////////////////////////////////////////
  Route::get('application/edit/{id}', array('as' => 'application.edit', function($id) 
    {
      $i=0;
      $k=0;
       $user = Auth::user();
      $completedapps = Application::where('user_id', '=', Auth::user()->id)->get();
      $companies = Company::where('user_id', '=', Auth::user()->id)->get();//just added
      $company_lists = Company::where('user_id', '=', $user->id)->get()->lists('company', 'id');
      $corp[]="";
      $corpid[]="";
    foreach($companies as $company) {
       $k++;
       $corp[$k] = $company->company; //array of company names
       $corpid[$k] = $company->id;  ///array or that co ids
      // echo $corp[$i];
      // echo $corpid[$i];
    }

    foreach($completedapps as $completedapp) {
       $i++;
       $app_id[$i] = $completedapp->id;  //get this user's completedapps into array

       $thecompany=$completedapp['company']; //create array of the company ids stored in those completed apps records
    }

    $key = array_search($thecompany, $corp); //get index to the NAME of the company (company is table name AND name of company)

    $companyname= $corp[$key]; //should be the name of the company indexed by company id of available application records

    return View::make('application-edit') // pulls app/views/nerd-edit.blade.php use company/edit/1 or other id number
            ->with('application', Application::find($id), ['company' => $companyname], ['company_lists' => $company_lists] );
    }));
*/

//////////////////////////////////////////////////////////////////////////////////////////////


  Route::get('application/edit/{id}', array('as' => 'application.edit', function($id) 
    {
      $companies = Company::where('user_id', '=', Auth::user()->id)->get(); //just added
        // return our view 
        return View::make('application-edit') // pulls app/views/application-edit.blade.php use company/edit/1 or other id number
            ->with('application', Application::find($id));
    }));


    // route to process the form
   Route::post('/application/edit/{id}', 
    array(
        'before' => 'csrf', 
        function() {
          $id =Input::get('id');
           //$company  = Company::find(1);  got to get the co id. take from url if need be cause ive had enough
           $application  = Application::find($id);  ///works when id is hardcoded
            //$company->id   =Input::get('id');  //just added
            $application->company   = Input::get('company');   //calulate later
             $application->role   = Input::get('role');
               $application->recnumber   = Input::get('recnumber');
             $application->hiringMgr   = Input::get('hiringMgr');
              $application->save();
             return Redirect::to('/completedapps'); // YES NO? 
}
));



  Route::get('resume/edit/{id}', array('as' => 'resume.edit', function($id) 
    {
        // return our view and Nerd information
        return View::make('resume-edit') // pulls app/views/nerd-edit.blade.php use company/edit/1 or other id number
            ->with('resume', Resume::find($id));
    }));

    // route to process the form
   Route::post('/resume/edit/{id}', 
    array(
        'before' => 'csrf', 
        function() {
          $id =Input::get('id');
           //$company  = Company::find(1);  got to get the co id. take from url if need be cause ive had enough
           $resume  = Resume::find($id);  ///works when id is hardcoded
            //$company->id   =Input::get('id');  //just added
              $resume->url   = Input::get('url');   //calulate later
              $resume->name   = Input::get('name');
              $resume->resumetext   = Input::get('resumetext');
          
              $resume->save();
             return Redirect::to('/completedapps'); // YES NO? 
}
));





Route::get('companyreport', array('before' => 'auth', function()
  {      
////////////////

$stylesend='</body></html>';


  $companies = Company::where('user_id', '=', Auth::user()->id)->get();
  
  include 'head.php';
  echo '<script type="text/javascript" src="http://p4.scholarpaws.com/js/jquery.tablesorter.min.js"></script>';
  echo '<br><div class="container">'; 
  echo '<h2>Your Companies</h2>';

  echo '<p>';
  echo '<table id="myTable" class="tablesorter" border="2" cellpadding="4" style="width: 100%; table-layout: fixed;"> 

  <caption>
  <h4>Sort Your Companies by field</h4>
  <h4>Click company name to edit company</h4>
  </caption>
  <thead>
    <tr>  
      <th style="width: 9.09%;">Company name</th>
      <th style="width: 9.09%;">Company ID</th>
      <th style="width: 9.09%;">Career site</th>
      <th style="width: 9.09%;">Career site user name</th>
      
      <th style="width: 9.09%;">Career site password</th>

      <th style="width: 9.09%;">Company street</th>
      <th style="width: 9.09%;">Company city</th>
      <th style="width: 9.09%;">Company state</th>
      <th style="width: 9.09%;">Company zip</th>
      <th style="width: 9.09%;">Company phone</th>
      <th style="width: 9.09%;">Your rating</th>
      </tr>  </thead>   <tbody>';
//# loop through the Collection and access just the data
foreach($companies as $company) {

    echo '<tr>';
    echo '<td>';
  


    echo '<a href="/company/edit/'.$company['id'];  ///
    echo '">';  ////
    echo $company['company'];
    echo '</a>';  


    echo '</td>';
    echo '<td>';
    echo $company['id'];    
    echo '</td>';
    echo '<td>';
    echo $company['website'];
    echo '</td>';
    echo '<td>';
    echo $company['username'];
    echo '</td>';
    echo '<td>';

    echo $company['password'];
    echo '</td>';
    echo '<td>';

    echo $company['street'];
    echo '</td>';
    echo '<td>';

    echo $company['city'];
    echo '</td>';
    echo '<td>';

    echo $company['state'];
    echo '</td>';

    echo '<td>';

    echo $company['careersite']; //use for zip
   
    echo '</td>';
    echo '<td>';
    echo $company['phone'];
    echo '</td>';
    echo '<td>';
    echo $company['rating'];
    echo '</td>';
     
    echo '</tr>';

    echo '<script> var apldata = "<php echo $app_id[$i]; ?>" </script>';


  }
    echo '<br>';
    echo '</tbody> </table>';
    echo '</div>';

   

//return View::make('deleteresume')->with('deleteres', $deleteres);
echo '</p>';
echo '<br><br>';
 echo $stylesend;   
}));

Route::get('account', array('before' => 'auth', function()
         {
            return View::make('account');
        }
    )
);

Route::get('/help',

        function() {
            return View::make('help');
        }
);




Route::get('choose_resume', array('before' => 'auth', function()
  {      
////////////////

$stylesend='</body></html>';


  $resumes = Resume::where('user_id', '=', Auth::user()->id)->get();
  
  include 'head.php';
  echo '<script type="text/javascript" src="http://p4.scholarpaws.com/js/jquery.tablesorter.min.js"></script>';
  echo '<br><div class="container">'; 
  echo '<h2>Your Resumes</h2>';

  echo '<p>';
  echo '<div class="table-responsive">';
  echo '<table id="myTable" class="tablesorter table" border="2" cellpadding="4" style="width: 100%; table-layout: fixed;"> 

  <caption>
  <h4>Sort Your Resumes by field</h4>
  <h4>Click resume name to edit resume</h4>
  </caption>
  <thead>
    <tr>  
      <th style="width: 10%;">Resume name</th>
      <th style="width: 5%;">Res ID</th>
      <th style="width: 10%;">Added</th>
      <th style="width: 20%;">Resume Link</th>
      <th style="width: 55%;">Resume notes</th>

      </tr>  </thead>   <tbody>';
//# loop through the Collection and access just the data
foreach($resumes as $resume) {

    echo '<tr>';
    echo '<td>';
  


    echo '<a href="/resume/edit/'.$resume['id'];  ///
    echo '">';  ////
    echo $resume['name'];
    echo '</a>';  


    echo '</td>';
    echo '<td>';
    echo $resume['id'];    
    echo '</td>';
    echo '<td>';
    echo $resume['created_at'];
    echo '</td>';
    echo '<td>';
    echo '<a href="';
    echo $resume['url'];
    echo '">';
    echo $resume['url'];
    echo '</a>';

    echo '</td>';
    echo '<td>';

    echo $resume['resumetext'];
    echo '</td>';
   
    echo '</tr>';


   }
  echo '</tbody> </table>';
    
//return View::make('deleteresume')->with('deleteres', $deleteres);
echo '</p>';
echo '</div>';
echo '<br><br>';
 echo $stylesend;   
}));


  Route::get('resume/edit/{id}', array('as' => 'resume.edit', function($id) 
    {
        // return our view and Nerd information
        return View::make('resume-edit') // pulls app/views/nerd-edit.blade.php use company/edit/1 or other id number
            ->with('resume', Resume::find($id));
    }));

    // route to process the form
   Route::post('/resume/edit/{id}', 
    array(
        'before' => 'csrf', 
        function() {
          $id =Input::get('id');
           //$company  = Company::find(1);  got to get the co id. take from url if need be cause ive had enough
           $resume  = Resume::find($id);  ///works when id is hardcoded
            //$company->id   =Input::get('id');  //just added
            $resume->name   = Input::get('name');
             $resume->url   = Input::get('url');
            $resume->resumetext   = Input::get('resumetext');

             $resume->save();
             return Redirect::to('/choose_resume'); // YES NO? 
}
));

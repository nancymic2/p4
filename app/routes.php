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
     $styles='<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

  <title>Career Trax</title>
  <link rel="stylesheet" href="hmin.css">
</head>
<body>
  <div class="container" style="margin:30px;">
<img style="float:left" src="train2.jpg"> <h1>Get your job hunt on track.</h1>
</div>
</div>
  <!--<div class="jumbotron">-->

  <header class="navbar-inverse">
    <div class="container">
    <nav  role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">CareerTrax</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
        <li class="active"><a href="/resume">Add Resume<span class="sr-only">(current)</span></a></li>
        <li><a href="/applications">Add a Job</a></li>
        <li><a href="/savedJobs">Add Something</a></li>
        <li><a href="/completedapps">Find Completed Apps</a></li>
        <li><a href="/resumesearch">Find Your Resumes</a></li>
        <li><a href="/jobstoapply">Find Saved Jobs</a></li>
        <li><a href="/company">Add Company</a></li>
        <li><a href="/logout">Log Out</a></li>
      
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  <!--</div> container-fluid --> 
</nav>
</header>';
$stylesend='</body></html>';
     
 $names = User::where('id', '=', Auth::user()->id)->get();
 echo $styles;
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
   $styles='<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

  <title>Career Trax</title>
  <link rel="stylesheet" href="hmin.css">
</head>
<body>
  <div class="container" style="margin:30px;">
<img style="float:left" src="train2.jpg"> <h1>Get your job hunt on track.</h1>
</div>
</div>
  <!--<div class="jumbotron">-->

  <header class="navbar-inverse">
    <div class="container">
    <nav  role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">CareerTrax</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
        <li class="active"><a href="/resume">Add Resume<span class="sr-only">(current)</span></a></li>
        <li><a href="/applications">Add a Job</a></li>
        <li><a href="/savedJobs">Add Something</a></li>
        <li><a href="/completedapps">Find Completed Apps</a></li>
        <li><a href="/resumesearch">Find Your Resumes</a></li>
        <li><a href="/jobstoapply">Find Saved Jobs</a></li>
        <li><a href="/company">Add Company</a></li>
        <li><a href="/logout">Log Out</a></li>
      
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  <!--</div> container-fluid --> 
</nav>
</header>';
$stylesend='</body></html>';
echo $styles;
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
////////////////////////////////////

///////////good//////////

/*
Route::get('password/remind', array(
  'uses' => 'PasswordController@remind',
  'as' => 'password.remind'
));


Route::post('password/remind', array(
  'uses' => 'PasswordController@request',
  'as' => 'password.request'
));
*/

/*
Route::get('password/reset', array(
  'uses' => 'PasswordController@reset',
  'as' => 'password.reset'
));


Route::post('password/reset', array(
  'uses' => 'PasswordController@update',
  'as' => 'password.update'
));
*/

//////////good///////////
/*Route::get('password/reset/{token}', array(
  'uses' => 'PasswordController@reset',
  'as' => 'password.reset'
));

//added $ in front ot token. undef error goes away but diff error dec 6 9am
Route::post('password/reset', array(
  'uses' => 'PasswordController@update',
  'as' => 'password.update'
)); */
/////////////////////////////

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

  $styles='<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

  <title>Career Trax</title>
  <link rel="stylesheet" href="hmin.css">
  <style type="text/css">
.myappls {
  border: 2px dotted #00CCFF;
  border-radius: 15px;
  padding: 12px;
  width: 30%;
  color: #0099FF;
  margin-bottom: 10px;
}
.reshead {
background-color: #eeeeee;
  color: #0099FF;
  border-radius: 10px;
  padding: 6px;
  padding-left: 10px;
  margin-bottom: 8px;
}
</style>
</head>
<body>
  <div class="container" style="margin:30px;">
<img style="float:left" src="train2.jpg"> <h1>Get your job hunt on track.</h1>
</div>
</div>
  <!--<div class="jumbotron">-->

  <header class="navbar-inverse">
    <div class="container">
    <nav  role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">CareerTrax</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
        <li class="active"><a href="/resume">Add Resume<span class="sr-only">(current)</span></a></li>
        <li><a href="/applications">Add a Job</a></li>
        <li><a href="/savedJobs">Add Something</a></li>
        <li><a href="/completedapps">Find Completed Apps</a></li>
        <li><a href="/resumesearch">Find Your Resumes</a></li>
        <li><a href="/jobstoapply">Find Saved Jobs</a></li>
        <li><a href="/company">Add Company</a></li>
        <li><a href="/logout">Log Out</a></li>
      
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  <!--</div> container-fluid --> 
</nav>
<style type="text/css">
td {
     padding: 11px;
 }
 </style>
</header>';
$stylesend='</body></html>';
     
  $jobs = Postedjob::where('user_id', '=', Auth::user()->id)->get();
  echo $styles;
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
$styles='<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<style type="text/css">
.myappls {
  border: 2px dotted #00CCFF;
  border-radius: 15px;
  padding: 12px;
  width: 30%;
  color: #0099FF;
  margin-bottom: 10px;
}
.reshead {
background-color: #eeeeee;
  color: #0099FF;
  border-radius: 10px;
  padding: 6px;
  padding-left: 10px;
  margin-bottom: 8px;
}
</style>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

  <title>Career Trax</title>
  <link rel="stylesheet" href="hmin.css">
</head>
<body>
  <div class="container" style="margin:30px;">
<img style="float:left" src="train2.jpg"> <h1>Get your job hunt on track.</h1>
</div>
</div>
  <!--<div class="jumbotron">-->

  <header class="navbar-inverse">
    <div class="container">
    <nav  role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">CareerTrax</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
        <li class="active"><a href="/resume">Add Resume<span class="sr-only">(current)</span></a></li>
        <li><a href="/applications">Add a Job</a></li>
        <li><a href="/savedJobs">Add Something</a></li>
        <li><a href="/completedapps">Find Completed Apps</a></li>
        <li><a href="/resumesearch">Find Your Resumes</a></li>
        <li><a href="/jobstoapply">Find Saved Jobs</a></li>
        <li><a href="/company">Add Company</a></li>
        <li><a href="/logout">Log Out</a></li>
      
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  <!--</div> container-fluid --> 
</nav>
</header>';
$stylesend='</body></html>';


///////////////            

//Route::get('/completedapps', function()

  $i=0;     
  $completedapps = Application::where('user_id', '=', Auth::user()->id)->get();
  
echo $styles;
  echo '<div class="container">'; 
  echo '<h2>Your completed applications</h2>';

  echo '<p>';
  

# loop through the Collection and access just the data
foreach($completedapps as $completedapp) {
   $i++;
   $app_id[$i] = $completedapp->id;
    //echo $resume_names[$i];
   echo '<div class="myappls">';
   echo '<div class="reshead">';
   echo 'Application '.$i;
   echo '</div>';
    echo '<b>role:</b> ';
    echo $completedapp['role']."<br>";

    echo '<b>company:</b> ';
    echo $completedapp['company']."<br>";

    echo '<b>Application id:</b> ';
    echo $completedapp['id']."<br>";

    echo '<b>City:</b> ';
    echo $completedapp['city']."<br>";

    echo '<b>Applied date:</b> ';
    echo $completedapp['applyDate']."<br>";

    echo '<b>Hiring Manager:</b> ';
    echo $completedapp['hiringMgr']."<br>";

    echo '<b>Salary:</b> ';
    echo $completedapp['salary']."<br>";
   
    echo '<b>Follow up by:</b> ';
    echo $completedapp['followupBy']."<br>";

    echo '<b>Decision:</b> ';
    echo $completedapp['decision']."<br>";

    echo '<b>rating:</b> ';
    echo $completedapp['rating']."<br>";

    echo '<b>resume used:</b> ';
    echo $completedapp['resumeUsed']."<br>";

    echo '<b>How Applied:</b> ';
    echo $completedapp['howapplied']."<br>";

    echo '<b>Website:</b> ';
    echo $completedapp['website']."<br>";

    echo '<b>user name:</b> ';
    echo $completedapp['username']."<br>";

    echo '<b>password:</b> ';
    echo $completedapp['password']."<br>";

    echo '<b>rec number:</b> ';
    echo $completedapp['recnumber']."<br>";
   
    echo '<br>';
    echo '<script> var apldata = "<php echo $app_id[$i]; ?>" </script>';

     $updateapp=$app_id[$i];
           
     //echo $deleteres;
          // onclick?  Session::put('applybydate', $applydate);
  

    echo '<br>';

    
    echo '</div>';

    /// $buyshoe->delete();

  }
//return View::make('deleteresume')->with('deleteres', $deleteres);
echo '</p>';

 echo $stylesend;   
}));

Route::get('resumesearch', array('before' => 'auth', function()

{
  $styles='<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<style type="text/css">
td {
     padding: 11px;
 }
 </style>
  <title>Career Trax</title>
  <link rel="stylesheet" href="hmin.css">
</head>
<body>
  <div class="container" style="margin:30px;">
<img style="float:left" src="train2.jpg"> <h1>Get your job hunt on track.</h1>
</div>
</div>
  <!--<div class="jumbotron">-->

  <header class="navbar-inverse">
    <div class="container">
    <nav  role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">CareerTrax</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
        <li class="active"><a href="/resume">Add Resume<span class="sr-only">(current)</span></a></li>
        <li><a href="/applications">Add a Job</a></li>
        <li><a href="/savedJobs">Add Something</a></li>
        <li><a href="/completedapps">Find Completed Apps</a></li>
        <li><a href="/resumesearch">Find Your Resumes</a></li>
        <li><a href="/jobstoapply">Find Saved Jobs</a></li>
            <li><a href="/company">Add Company</a></li>
        <li><a href="/logout">Log Out</a></li>
      
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  <!--</div> container-fluid --> 
</nav>
</header>';
$stylesend='</body></html>';

  $i=0;
  $resumes = Resume::where('user_id', '=', Auth::user()->id)->get();
      //$resumes->toArray();
echo $styles;
  echo '<div class="container">'; 
   echo '<p>&nbsp;</p>';
   echo '<h2>Your saved resumes</h2>';
 
  echo '<table  width="750" cellpadding="20" style="border: 2px dotted #00CCFF; border-radius: 10px;">';
  
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
   echo '<a href="completedapps">find completed applications</a> <br>';
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

//////////////////////////////////////////////////
////////////////////////////  end small company CRUD

////////////////////////pass value to view

//return View::make('password')->with('theword', $theword);

////////////////

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


            //echo $jobs['applyby'];
            //echo $postedjob;

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


          $resume_lists = DB::table('resumes')->where('user_id', $user->id)->lists('name');
          $company_lists = DB::table('companies')->where('user_id', $user->id)->lists('company');


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
         
             $application->company   = Input::get('company_id');  /// added 10/31/15  need to remove company textbox or add field in db for extra co.

             ///$application->company   = Input::get('company');   //commented out 10/31/15  replaced by select
             $application->role    = Input::get('role');
             $application->city    = Input::get('city');
             $application->salary    = Input::get('salary');
             $application->applyDate    = Input::get('applyDate');
             $application->followupBy    = Input::get('followupBy');
             $application->hiringMgr    = Input::get('hiringMgr');
             $application->decision    = Input::get('decision');
             $application->rating    = Input::get('rating');
             $application->resumeUsed    = Input::get('resume_lists');
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

//////////////////////
//////////////////////
/////////////////////
/* ////////////////////////OTHER STUFF FOR TESTING ETC ////////////////////////////// */

/*

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




*/
/*

Route::get('/charting', function()
{
  $i=0;     
  $allsalaries = Postedjob::where('salary');
  
//echo $allsalaries;



  echo '<div class="container">'; 
  echo '<p>';
  

# loop through the Collection and access just the data
foreach($allsalaries as $salary) {
   $i++;
   $asalary[$i] = $salary;
    echo $asalary[$i];
    echo '<b>company:</b> ';
    //echo $completedapp['company']."<br>";

  } }
    );*/

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




           // $numbers[$i] = $sal;
            //echo $sal;
            //echo '<br>';
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

///////////////////////////

/*

Route::get('/coratings', function() {


  class Companies extends Eloquent {

  }

  $i=0;

    # The all() method will fetch all the rows from a Model/table
    $companies = Companies::all();

    # Make sure we have results before trying to print them...
    if($companies->isEmpty() != TRUE) {


      $low = array();
      $med = array();
      $high = array();
        # Typically we'd pass $books to a View, but for quick and dirty demonstration, let's just output here...
        foreach($companies as $company) {
           //echo $postedjob->salary.'<br>';
            $sal = $company->rating;
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




           // $numbers[$i] = $sal;
            //echo $sal;
            //echo '<br>';
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


*/


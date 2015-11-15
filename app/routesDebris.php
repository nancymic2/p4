/* ///// added 10-11-15
Route::get('editcompany', array('before' => 'auth', function()
    {
0/31/15
*/
       /* if (!$company->update(Input::all())) {
            return Redirect::back()
                    ->with('message', 'Something wrong happened while saving your model')
                    ->withInput();
        }*/

 /*   return View::make('editcompany');
    }
    )
);

Route::post('/editcompany', 
    array(
        'before' => 'csrf', 
        function() 
        {
    
    $company = Company::findOrFail($id);
    $company->fill(Input::all());
    $company->save();
    
 return Redirect::to('/editcompany')->with('flash_message', 'Welcome to CareerTrax!');
    
  }
    )
); */


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
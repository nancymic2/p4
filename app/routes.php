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

Route::get('/jobstoapply', function()
{
     
   $jobs = Postedjob::where('user_id', '=', Auth::user()->id)->get();
  
   echo $jobs;
    //$email = User::where('user_id', '=', Auth::user()->id)->get('email');
   

    //echo $email;
    
});


Route::get('/completedapps', function()
{
     
   $completedapps = Application::where('user_id', '=', Auth::user()->id)->get();
  
   echo $completedapps;
    //$email = User::where('user_id', '=', Auth::user()->id)->get('email');
   

    //echo $email;
    
});

Route::get('/resumesearch', function()
{
     
   $resumes = Resume::where('user_id', '=', Auth::user()->id)->get();
  
   echo $resumes;
    //$email = User::where('user_id', '=', Auth::user()->id)->get('email');
   

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

                return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput(Input::except('password', 'email')); 

            }





            # Log the user in
           Auth::login($user);

            return Redirect::to('/resume')->with('flash_message', 'Welcome to CareerTrax!');

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

            return Redirect::to('login');
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

           // return Redirect::to('/list')->with('flash_message', 'Welcome to Foobooks!');

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
           
            # Try to add the resume 
            try {
                $postedjob->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/savedJobs')->with('flash_message', 'resume addition failed; please try again.')->withInput();
            }

            # Log the user in
           // Auth::login($user);

           // return Redirect::to('/list')->with('flash_message', 'Welcome to Foobooks!');

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

           // return Redirect::to('/list')->with('flash_message', 'Welcome to Foobooks!');

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

    class Buyshoe extends Eloquent {

    }

    # First get a book to delete
    $buyshoe = Buyshoe::where('brand', 'LIKE', '%louis%')->first();

    # If we found the book, delete it
    if($buyshoe) {

        # Goodbye!
        $buyshoe->delete();

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

//text generator

/*Route::get('/lorem', function()
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


Route::get('/users', function()
{
	$numusers = Input::get('numusers');

	if ($numusers > 50) 
{
	$numusers=50;
}

return View::make('users')->with('numusers', $numusers);
});	



Route::get('/csv', function()
{
	$numusers = Input::get('numusers');
	if ($numusers > 50) 
{
	$numusers=50;
}


return View::make('csv')->with('numusers', $numusers);
});	




Route::get('/password', function()
{

$numofwords = Input::get('numofwords');
	

global $theword;

$mots = array ("aardvark", "albatross", "alligator", "alpaca", "ant", "anteater", "antelope", "ape", "armadillo", "baboon", "badger", "barracuda", "bat", "bear", "beaver", "bee", "bison", "boar", "butterfly", "camel", "capybara", "caribou", "cassowary", "cat", "caterpillar", "chamois", "cheetah", "chicken", "chimpanzee", "chinchilla", "chough", "clam", "cobra", "cockroach", "cod", "cormorant", "coyote", "crab", "crane", "crocodile", "crow", "curlew", "deer", "dinosaur", "dog", "dogfish", "dolphin", "dotterel", "dove", "dragonfly", "duck", "dugong", "dunlin", "eagle", "echidna", "eel", "eland", "elephant", "emu", "falcon", "ferret", "finch", "fish", "flamingo", "fly", "fox", "frog", "gaur", "gazelle", "gerbil", "giraffe", "gnat", "gnu", "goat", "goldfinch", "goldfish", "goose", "gorilla", "goshawk", "grasshopper", "grouse", "guanaco", "gull", "hamster", "hare", "hawk", "hedgehog", "heron", "herring", "hippopotamus", "hornet", "horse", "human", "hummingbird", "hyena", "ibex", "ibis", "jackal", "jaguar", "jay", "jellyfish", "kangaroo", "kingfisher", "koala", "kookabura", "kouprey", "kudu", "lapwing", "lark", "lemur", "leopard", "lion", "llama", "lobster", "locust", "loris", "louse", "lyrebird", "magpie", "mallard", "manatee", "mandrill", "mantis", "marten", "meerkat", "mink", "mole", "mongoose", "monkey", "moose", "mosquito", "mouse", "mule", "narwhal", "newt", "nightingale", "octopus", "okapi", "opossum", "oryx", "ostrich", "otter", "owl", "oyster", "panther", "parrot", "partridge", "peafowl", "pelican", "penguin", "pheasant", "pig", "pigeon", "porcupine", "porpoise", "quail", "quelea", "quetzal", "rabbit", "raccoon", "rail", "ram", "rat", "raven", "reindeer", "rhinoceros", "rook", "salamander", "salmon", "sandpiper", "sardine", "scorpion", "seahorse", "seal", "shark", "sheep", "shrew", "skunk", "snail", "snake", "sparrow", "spider", "spoonbill", "squid", "squirrel", "starling", "stingray", "stinkbug", "stork", "swallow", "swan", "tapir", "tarsier", "termite", "tiger", "toad", "trout", "turkey", "turtle", "viper", "vulture", "wallaby", "walrus", "wasp", "weasel", "whale", "wolf", "wolverine", "wombat", "woodcock", "woodpecker", "worm", "wren", "yak", "zebra", "absolute", "abstract", "absurd", "accident", "actuality", "aesthetics", "fortiori", "agnosticism", "altruism", "amoral", "analytic", "angst", "anthropomorphism", "antinomy", "antithesis", "apologetics", "posteriori", "priori", "archetype", "aristotelianism", "atheism", "attribute", "augustinianism", "autonomy", "axiology", "being", "categorical", "imperative", "causality", "coherence", "contingent", "correspondence", "cosmological", "cosmos", "deductive", "deism", "determinism", "dialectic", "doubt", "dualism", "empiricism", "epicureanism", "epistemology", "essence", "ethics", "existentialism", "fideism", "finite", "form", "formal", "foundationalism", "hedonism", "humanism", "idealism", "immanent", "independent", "indeterminism", "indubitable", "inductive", "reasoning", "infinite", "innate", "intuition", "logic", "cause", "materialism", "metaphysics", "monism", "moral", "naturalism", "nihilism", "noetic", "noumena", "objective", "ockham", "razor", "ontological", "ontology", "pantheism", "phenomena", "philosophy", "platonism", "pluralism", "pragmatism", "rationalism", "realism", "relativism", "skepticism", "socratic", "method", "solipsism", "subjective", "idealism", "substance", "tabularasa", "teleological", "argument", "theism", "thomism", "transcendent", "weltanschauung", "eats", "hits", "loves", "pushes", "adds", "allows", "bakes", "bangs", "calls", "chases", "damages", "drops", "ends", "escapes", "fastens", "fixes", "gathers", "grabs",  "hangs", "hugs", "imagines", "itchs", "jogs", "jumps", "kicks", "knits", "lands", "locks", "mixes", "names", "notices", "obeys", "opens", "passes", "promises", "questions", "reaches", "rinses", "scatters", "stays", "talks", "turns", "unties", "uses", "visits", "walks", "works", "yawns", "yells", "zips");


if ($numofwords < 1)  //handle zero words
{
   $numofwords = 1;
}

if ($numofwords > 9)  //handle many words
{
   $numofwords = 9;
}

 
for ($i = 1; $i <= $numofwords; $i++) 
{
    $rmot = rand(0, 355);
///////////////////////////////////////////
$theword2 = $mots[$rmot];
$theword2 .= '-';
$theword .= $theword2;


}
$numbs = rand(0, 9); 

$theword .= $numbs;
return View::make('password')->with('theword', $theword);

});
*/
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



    public function get_edit($id)
    {

	return View::make('company.edit')
	->with('company', Company::find($id))
    }


 public function put_update()
 {
    $id = Input::get('id');  //just added
         
    Company::update($id, array(

        'website' => Input::get('website'),
        'rating' => Input::get('rating'),

        ));

return Redirect::to_route('company', $id)->with('message', 'success');

 }


/*
        $company = Company::find($id);

        if (!$company->update(Input::all())) {
            return Redirect::back()
                    ->with('message', 'Something wrong happened while saving your model')
                    ->withInput();
        }

        return Redirect::route('company.saved')
                    ->with('message', 'User updated.');
    }

///////////// save edited co

	public function postEdit($id) {
		
		$company = Company::findOrFail($id);
		$company->fill(Input::all());
		$company->save();
		
		return Redirect::action('CompanyController@getIndex')->with('flash_message','Your changes have been saved.');
		
	}
*/
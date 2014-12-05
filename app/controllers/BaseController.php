<?php

class BaseController extends Controller {

	    public function __construct() {
        $this->beforeFilter('csrf', array('on'=> 'post'));
       $this->beforeFilter('auth', ['except' => 'index']);
      $this->beforeFilter('auth', ['except' => 'login']);
        $this->beforeFilter('auth', ['except' => 'signup']); 
       $this->beforeFilter('auth', ['except' => 'password/reset']); 
       $this->beforeFilter('auth', ['except' => 'password/remind']); 
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}

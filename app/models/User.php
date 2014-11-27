<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users'; //explicit table declaration

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

   

    public function application() {
        # user has many Applications
        # Define a one-to-many relationship.
        return $this->hasMany('Application');
    }

    public function postedJob() {
        # user has many possibel jobs
        # Define a one-to-many relationship.
        return $this->hasMany('Postedjob');
    }

    public function resume() {
        # user has many possible resumes
        # Define a one-to-many relationship.
        return $this->hasMany('Resume');
    }

    public function updatepword() {
        # user has many possible resumes
        # Define a one-to-many relationship.
        return $this->hasMany('Password_reminder');
    }


}

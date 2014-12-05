<?php
class PasswordController extends BaseController {
 
  public function remind()
  {
    return View::make('password.remind');
  }

public function request()
{
$credentials = array('email' => Input::get('email'), 'password' => Input::get('password'));
  return Password::remind($credentials);
}


public function reset()
{
  return View::make('password.reset');
}


public function update()
{
  //$credentials = array('email' => Input::get('email'));
  $credentials = array('email' => Input::get('email'), 'password' => Input::get('password'), 'password_confirmation' => Input::get('password_confirmation'));
 
  return Password::reset($credentials, function($user, $password)
  {
    $user->$password = Hash::make($password); ///
 
    $user->save();
 
    return Redirect::to('login')->with('flash', 'Your password has been reset');
  });
}
}

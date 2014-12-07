@if (Session::has('error'))
  {{ trans(Session::get('reason')) }}
@endif
@extends('_master')

@section ('reset')

 
{{ Form::open(array('route' => array('password.update'))) }}


 
  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}</p>
 
  <p>{{ Form::label('password', 'Password') }}
  {{ Form::text('password') }}</p>
 
  <p>{{ Form::label('password_confirmation', 'Password confirm') }}
  {{ Form::text('password_confirmation') }}</p>
 
  <input type="hidden" name="token" value="{{ $token }}">
 
  <p>{{ Form::submit('Submit') }}</p>
 
{{ Form::close() }}

<br>
Your password will be reset in our database.
<br>

@stop


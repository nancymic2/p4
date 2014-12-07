
@extends('_master')

@section ('remind')

<br>



@if (Session::has('error'))
  {{ trans(Session::get('reason')) }}
@elseif (Session::has('success'))
  An email with the password reset has been sent.
@endif



{{ Form::open(array('route' => 'password.request')) }}


 
  <p>{{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}&nbsp;&nbsp;&nbsp;{{ Form::submit('Submit') }}</p>
 
{{ Form::close() }}

<br>
Clicking Submit will send a password reset link to this email address.<br>
Please check your email.
<br>

@stop
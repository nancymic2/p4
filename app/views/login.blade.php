






{{ Form::open(array('url' => '/login')) }}

    Email&nbsp;
    {{ Form::text('email') }} &nbsp;

    Password:&nbsp;
    {{ Form::password('password') }}&nbsp;

    {{ Form::submit('Submit') }}

{{ Form::close() }}



@extends('_master')






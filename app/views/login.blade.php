

@extends('_master')

@section ('login')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Please log in</h2>





{{ Form::open(array('url' => '/login')) }}

    Email&nbsp;
    {{ Form::text('email') }} &nbsp;

    Password:&nbsp;
    {{ Form::password('password') }}&nbsp;

    {{ Form::submit('Submit') }}

{{ Form::close() }}



</div>
</div>
@stop







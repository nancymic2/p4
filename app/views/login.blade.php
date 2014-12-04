

@extends('_master')

@section ('login')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Please log in</h2>





{{ Form::open(array('url' => '/login')) }}

    Email&nbsp;<br>
    {{ Form::text('email') }} &nbsp; <br>

    Password:&nbsp;<br>
    {{ Form::password('password') }}&nbsp; <br><br>

    {{ Form::submit('Submit') }}

{{ Form::close() }}



</div>
</div>
@stop









@extends('_master')

@section ('login')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Please log in</h2>





{{ Form::open(array('url' => '/login')) }}

    Email&nbsp;<br>
    {{ Form::text('email', '', array('class'=>'form-control'))}}  &nbsp; <br>

    Password:&nbsp;<br>
    {{ Form::text('password', '', array('class'=>'form-control'))}} &nbsp; <br><br>

    {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}   

{{ Form::close() }}

<!--password field was called password not text change  for bootstrap-->
<br>
 <a class="btn btn-warning" href="/signup">Or sign up</a> <br> &nbsp;

</div>
</div>
@stop







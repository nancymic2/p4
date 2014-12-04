

@extends('_master')

@section ('signup')

<div class="container" style="width:500px; margin-left: -10px;">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h4>Glad you decided to sign up!</h4>






{{ Form::open(array('url' => '/signup')) }}

 	First Name<br>
    {{ Form::text('first', '', array('class'=>'form-control'))}}  &nbsp; <br>


 	Last Name<br>
    {{ Form::text('last', '', array('class'=>'form-control'))}}  &nbsp; <br>



    Email&nbsp;<br>
    {{ Form::text('email', '', array('class'=>'form-control'))}}  &nbsp; <br>

    Password:&nbsp;<br>
    {{ Form::text('password', '', array('class'=>'form-control'))}} &nbsp; <br>






  {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}   <br>

{{ Form::close() }}


</div>
</div>
@stop








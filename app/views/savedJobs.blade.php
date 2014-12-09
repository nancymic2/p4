@extends('_master')

@section ('savedJobs')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add a job</h2>
<p>Here you can add jobs you see and wish to apply for <br>
	as soon as you have a chance. You can add a reminder to your<br>
	google calendar here too.</p>







{{ Form::open(array('url' => '/savedJobs')) }}

company<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 


role (required)<br>
    {{ Form::text('role', '', array('class'=>'form-control'))}} 



salary<br>
    {{ Form::text('salary', '', array('class'=>'form-control'))}} 

    Apply by (enter as yyyy-mm-dd)<br>
    {{ Form::text('applyby', '', array('class'=>'form-control'))}} 

    Job listing URL (required)<br>
    {{ Form::text('url', '', array('class'=>'form-control'))}} <br>



 {{ Form::submit('Submit', array('class'=>'btn btn-default'))}}   

{{ Form::close() }}


<?php
Session::put('url', 'url');
//echo '<a href="/">Cancel</a> <br>';
echo '<br><a class="btn btn-danger" href="/">Cancel</a>';
?>

</div>
</div>
@stop






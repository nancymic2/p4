@extends('_master')

@section ('savedJobs')

<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add a job</h2>







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
    {{ Form::text('url', '', array('class'=>'form-control'))}} 



    {{ Form::submit('Submit', '', array('class'=>'form-control'))}} 

{{ Form::close() }}


<?php
Session::put('url', 'url');
echo '<a href="/">Cancel</a> <br>';

?>

</div>
</div>
@stop






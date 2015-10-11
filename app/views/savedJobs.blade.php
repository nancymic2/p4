@extends('_master')

@section ('savedJobs')

<link rel="stylesheet"
href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css"
type="text/css" media="all" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"
type="text/javascript"></script>
<script src="//code.jquery.com/jquery-1.9.1.js"></script> 
<script
src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"
type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$('input.date').datepicker({dateFormat: 'yy-mm-dd'});
})
</script>
<div class="container">
	<div class="col-sm-6">
<h2>&nbsp;</h2>
<h2>Add Something</h2>
<p>Here you can add something. I just have not decided what<br>
	</p>
	<h4>Ignore salary, role and other fields for now. This is a placeholder page pending DB restructure</h4>
	Here you will be able to:
	<ul>
		<li>Add a company</li>
		<li>Add their contact info</li>

		<li>Add their career website</li>

		<li>Add username and password to career site</li>

		<li>Add contact names</li>

		<li>relate to jobs you've added to the DB</li>

		</ul>








{{ Form::open(array('url' => '/savedJobs')) }}

company<br>
    {{ Form::text('company', '', array('class'=>'form-control'))}} 


role (required)<br>
    {{ Form::text('role', '', array('class'=>'form-control'))}} 



salary<br>
    {{ Form::text('salary', '', array('class'=>'form-control'))}} 

    Apply by <br>
 <input class="date" name="applyby" type="text" size="46"  id="applyby" /><br>

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


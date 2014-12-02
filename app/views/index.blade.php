	
@extends('_master')

@section ('index')

<div class="container">
	<div class="col-sm-6"
<h2>&nbsp;</h2>
<h2>Join CareerTrax! or log in</h2>
<p>CareerTrax lets you keep track of your job appplications, jobs you plan to apply for, and your resumes</p>
   
	<div class="col-sm-6"

</div>


<?php 

echo '<a class="btn btn-success" href="/signup">sign up</a> <br> <p>&nbsp;</p>';
echo '<a class="btn btn-primary" href="/login">&nbsp;log &nbsp;in&nbsp;</a> <br> <p>&nbsp;</p>';
echo '<a class="btn btn-primary" href="/logout">&nbsp;log &nbsp;out</a> <br>';
echo '<br><a href="/edit">change account</a> <br>';
//echo '<a href="logout">log out</a> <br>';
?>


</div>

</div>

@stop
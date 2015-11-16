	
@extends('_master')

@section ('index')

<div class="container">
	<div class="col-sm-6"
<h2>&nbsp;</h2>
<h2>Join CareerTrax! All user pages are behind the login screen.</h2>
<p>test credentials: user test@test.com, password: testtest</p>
<p>To see some data, try user: 4@5.com,  password: 123456
<p>CareerTrax lets you keep track of 
	<ul><li>your job appplications</li>
		<li>jobs you plan to apply for</li>
	    <li>your resumes</li>
	    <li>important dates</li>
	    <li>your candidate login info</li>
	</ul>    
</p>
	<p>No ads, no artilces, no clutter, and nothing to sell. Just a place to track your jub hunt activities and
		get calendar reminders.</p>
  <?php  echo '<a class="btn btn-primary" href="/charter">see salary chart</a> <p>&nbsp;</p>'; ?>
  <?php  echo '<a class="btn btn-primary" href="/charter">see company ratings</a> <p>&nbsp;</p>'; ?>



<?php 
$user = Auth::user();
echo '<a class="btn btn-success" href="/signup">sign up</a> <br> <p>&nbsp;</p>';
echo '<a class="btn btn-primary" href="/login">&nbsp;log &nbsp;in&nbsp;</a> <p>&nbsp;</p>';
//echo '<a class="btn btn-primary" href="/logout">&nbsp;log &nbsp;out</a> <br>';
echo '<a href="/account">get account details</a> <br>';
echo '<a href="/changelast">change account</a> <br>';
echo '<a href="/password/remind">change password</a> <br>';

echo '<a href="/user/edit/';
echo $id.'">change acct info</a> <br>';
//echo '<a href="logout">log out</a> <br>';
?>


</div>

</div>

@stop
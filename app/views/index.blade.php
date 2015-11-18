	
@extends('_master')

@section ('index')

<div class="container">
	<div class="col-sm-6"
<h2>&nbsp;</h2>
<h2>Welcome to CareerTrax!</h2>
<p>test credentials: user test@test.com, password: testtest</p>
<p>To see some data, try user: 4@5.com,  password: 123456
<p>CareerTrax lets you keep track of 
	<ul><li>your job appplications</li>
		<li>your job listings</li>
		<li>your contacts</li>
	    <li>your resumes</li>
	    <li>your expenses</li>
	    <li>important dates</li>
	    <li>your candidate system login info</li>
	</ul>    
</p>
	<p>Organize your job hunt and keep your Career on Track.</p>
  <?php  echo '<a class="btn btn-primary" href="/charter">see salary chart</a> <p>&nbsp;</p>'; ?>
  <?php  echo '<a class="btn btn-primary" href="/charter">see company ratings</a> <p>&nbsp;</p>'; ?>






</div>

</div>

@stop
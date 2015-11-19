<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="http://p4.scholarpaws.com/js/jquery-latest.js"></script> 
    <script type="text/javascript" src="http://p4.scholarpaws.com/js/jquery.tablesorter.min.js"></script> 
    <link rel="stylesheet" href="hmin.css">
    <link rel="stylesheet" href="css/layout.css">
    <title>Career Trax</title>


    <style type="text/css">
      #myTable > thead{
        cursor: pointer;
      } 
    </style>

    <script type="text/javascript" >
      $(document).ready(function() 
      { 
        $("#myTable").tablesorter(); 
      }); 
    </script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="page-header">
				<h1>
					LayoutIt! <small>Interface Builder for Bootstrap</small>
				</h1>
			</div>
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Brand</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								        <li><a href="/applications">Add Job, Company, Resume</a></li>
        <li><a href="/expenses">Add Expenses</a></li>
        <li><a href="/expensereport">View Expenses</a></li>
        <li><a href="/completedapps">View Jobs</a></li>
        <li><a href="/resumesearch">View Resumes</a></li>
        <li><a href="/companyreport">View Companies</a></li>
        <li><a href="/account">Account</a></li>

								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">One more separated link</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div> 
						<button type="submit" class="btn btn-default">
							Submit
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Link</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
						        <li><a href="/help">Help</a></li>
        <li><a href="/charter">Charts</a></li>
        <li><a href="/logout">Log Out</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/password/remind">Forgot password</a></li> 
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
			<p>
				Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
			</p>
		</div>
		


@yield ('index')
@yield ('resume')
@yield ('savedJobs')
@yield ('applications')
@yield ('login')
@yield ('signup')
@yield ('jobstoapply')
@yield ('remind')
@yield ('reset')
@yield ('chart')
@yield ('company')
@yield ('expenses')
@yield ('editcompany')
@yield ('company-edit')
@yield ('content')
@yield ('upload')
@yield ('edit')
@yield ('user-edit')
@yield ('resume-edit')
@yield ('application-edit')
@yield ('account')
@yield ('help')
<!--/////////////////-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<div class="col-md-2">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

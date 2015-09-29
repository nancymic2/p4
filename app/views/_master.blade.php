<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="shortcut icon" href="http://p4.scholarpaws.com/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://p4.scholarpaws.com/favicon.ico" type="image/x-icon">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="pw.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<script type="text/javascript" src="jquery.complexify.js"></script>

  <title>Career Trax</title>
  <link rel="stylesheet" href="hmin.css">
</head>
<body>
  <div class="container" style="margin:30px;">
<img style="float:left" src="http://p4.scholarpaws.com/train2.jpg"> <h1>CareerTrax</h1> <h3>Get your job hunt on track.</h3>
</div>

</div>
  <!--<div class="jumbotron">-->

  <header class="navbar-inverse">
    <div class="container">
    <nav  role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">CareerTrax Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
        <!--<li class="active"><a href="/resume">Add Resume<span class="sr-only">(current)</span></a></li>-->

        <!-- changed above to make resume not the active link. above it it alsways atve -->

        <li><a href="/resume">Add Resume</a></li>

        <!--changed add app to add job text link only 9-29   test to see if master.blade is used everywhere-->
        <li><a href="/applications">Add a Job</a></li>
        <li><a href="/savedJobs">Add a Company</a></li>
        <!--<li><a href="/completedapps">Find Completed Apps</a></li>
        <li><a href="/resumesearch">Find Your Resumes</a></li>
        <li><a href="/jobstoapply">Find Saved Jobs</a></li>-->  
        <!--commented out 929-->

        <li><a href="/logout">Log Out</a></li>
      
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  <!--</div> container-fluid --> 
</nav>
</header>
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


<!--/////////////////-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>



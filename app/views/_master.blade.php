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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/dropdown.js"></script>
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
</head>
<body>
<img style="float:left; max-width: 100%;" class="img-responsive" src="http://p4.scholarpaws.com/train2.jpg">
<div class="container" style="margin:30px;">

</div>
</div>
  <!--<div class="jumbotron">-->


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/login">Log in</a></li>
        <li><a href="/help">Help</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/applications">Job</a></li>
            <li><a href="/resume">Resume</a></li>
            <li><a href="/company">Company</a></li>
            <li><a href="/recruiters">Contact/recruiter</a></li>
            <li><a href="/expenses">Expense</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/completedapps">Your Job Applications</a></li>
            <li><a href="/choose_resume">Resumes</a></li>
            <li><a href="/companyreport">Companies</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="/expensereport">Expense Report</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Edit<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/completedapps">Job</a></li>
            <li><a href="/choose_resume">Resumes</a></li>
            <li><a href="/companyreport">Companies</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="/expensereport">Expenses</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>

                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/account">Edit Account/profile Info</a></li>
            <li><a href="/profile">Create Profile</a></li>
            <!--<li><a href="/profile">Edit Profile</a></li>-->
            <li><a href="/password/remind">Forgot Password/Change Password</a></li>
            <li><a href="#">Contact</a></li>
         
          </ul>
        </li>


      </ul>


      <ul class="nav navbar-nav navbar-right">
        <li><a href="/logout">Log Out</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Goodies<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/charter">Salary Charts</a></li>
            <li><a href="/charter">Industry Stats</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



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
@yield ('calendar')
@yield ('csv')
@yield ('profile')
@yield ('profile-edit')
@yield ('expense-edit')
@yield ('recruiter')

<!--/////////////////-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<br><br><img style="float:left; max-width: 100%;" class="img-responsive" src="http://p4.scholarpaws.com/foot.png">
</body>
</html>
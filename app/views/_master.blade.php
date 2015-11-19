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
<div class="container" style="margin:30px;">
<img style="float:left" src="http://p4.scholarpaws.com/train2.jpg">
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
      <a class="navbar-brand" href="/">Home/a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/login">Log in<span class="sr-only">(current)</span></a></li>
        <li><a href="/help">Help</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Add <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/applications">Job</a></li>
            <li><a href="/applications">Resume</a></li>
            <li><a href="/applications">Company</a></li>
            <li><a href="#">Contact</a></li>
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
            <li><a href="/applications">Job</a></li>
            <li><a href="/applications">Resume</a></li>
            <li><a href="/applications">Company</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="/expenses">Expense</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>


      </ul>


      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/logout">Log Out</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
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
<!--/////////////////-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

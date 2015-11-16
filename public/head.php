<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

  <title>Career Trax</title>
  <link rel="stylesheet" href="hmin.css">
  <link rel="stylesheet" href="css/layout.css">
<script type="text/javascript" src="js/jquery-latest.js"></script> 
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script> 

<style type="text/css">
#myTable > thead{
  cursor: pointer;
} 
</style>
</head>
<body>
<script type="text/javascript" >
$(document).ready(function() 
{ 
  $("#myTable").tablesorter(); 
} 
); 
 


</script>
</head>
<body>
  <div class="container" style="margin:30px;">
<img style="float:left" src="http://p4.scholarpaws.com/train2.jpg">
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
      <a class="navbar-brand" href="/"><u>CT</u></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
  
        <li><a href="/applications">Add Job, Company, Resume</a></li>
        <li><a href="/completedapps">View/Edit Jobs, Company, Resume</a></li>
        <li><a href="/expenses">Add Expenses</a></li>
        <li><a href="/expensereport">View/Edit Expenses</a></li>
       
        <?php 

$user = Auth::user();
$id = Auth::user()->id;  //note this works bec there is only 1 logged-in user, not an array/object of


echo '<li><a href="/user/edit/';
echo $id;
echo'">Edit acct info</a> </li>';
//echo '<a href="logout">log out</a> <br>';
?>
        <li><a href="/logout">Log Out</a></li>
      
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
</div>  <!--</div> container-fluid --> 
</nav>
</div>

</header>

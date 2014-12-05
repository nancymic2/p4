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
</head>
<body>
  <div class="container" style="margin:30px;">
<img style="float:left" src="train2.jpg"> <h1>CareerTrax</h1> <h3>Get your job hunt on track.</h3>
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
      <a class="navbar-brand" href="/">CareerTrax</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
        <li class="active"><a href="/resume">Add Resume<span class="sr-only">(current)</span></a></li>
        <li><a href="/applications">Add Application</a></li>
        <li><a href="/savedJobs">Add a Job</a></li>
        <li><a href="/completedapps">Find Completed Apps</a></li>
        <li><a href="/resumesearch">Find Your Resumes</a></li>
        <li><a href="/jobstoapply">Find Saved Jobs</a></li>
        <li><a href="/logout">Log Out</a></li>
      
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  <!--</div> container-fluid --> 
</nav>
</header>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "BDBpQgPk4N";
$dbname = "shoes";
$newname = $_POST['newname'];
$id2= $_POST['hidden1'];
//echo $newname;
//echo $id2;

//echo $id;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

//echo $newname;


$sql = "UPDATE users SET last = '$newname' WHERE id = $id2";

if ($conn->query($sql) === TRUE) {
echo "Last name ";
echo "has been updated successfully to ";
echo $newname;
echo '<br>';
echo '<a href="/">Back</a>';

} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

 ?> 


<!--/////////////////-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>






///////////////////////////////////////////////////////////

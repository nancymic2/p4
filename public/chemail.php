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
</head>
<body>
<?php

$id = $_GET['id'];
//echo $id;


// $_SESSION[id] = $id;

	echo '<h1>Enter your new last name</h1>';

		echo '<form method="post" id=$id action="updatename.php">';
		echo '<input type=hidden name=hidden1 value='. $id.'>';
		echo 'new last name:<input type="text" name="newname">';
	//echo 'new email:<input type="text" name="newemail">';
		echo '<input type="submit">';
		echo '</form>';
		
?>
	</body>
	</html>
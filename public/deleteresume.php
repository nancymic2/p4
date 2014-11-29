<?php

$id = $_GET['id'];
//echo $id;



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 


// sql to delete a record
$sql = "DELETE FROM resumes WHERE id =$id";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

echo '<br><a href="welcome">Back</a>';
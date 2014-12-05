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
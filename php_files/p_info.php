<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "input db name here";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

$sql = "select *from patient where patient_id='$username';


if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

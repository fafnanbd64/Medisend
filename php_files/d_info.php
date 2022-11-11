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
 

$sql = "select *from doctor where doctor_id='$username'";
$sql2= "update *from doctor";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
   if($conn->query($sql2) === TRUE){
echo "updated successfully";
}
	else{ 
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

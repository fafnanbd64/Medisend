<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "inpur db name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

$sql = "select *from stock where s_id="$username";


if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

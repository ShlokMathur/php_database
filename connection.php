<?php
$server = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysqli_connect($server, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . 
    mysqli_connect_error());
}
echo "connect succesful";

$name = $_POST['name'];
$egNumber = $_POST['regNumber'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$year = $_POST['year'];
$branch = $_POST['nbranch'];

$sql = "INSERT INTO `trip` (`Name`, `egNumber`, 
`Gender`, `Phone no.`, `Year`, 
`Branch`, `Date`) 
VALUES ('$name', '$regNumber', '$gender', '$phone', '$year', '$branch', 
current_timestamp());";
?>

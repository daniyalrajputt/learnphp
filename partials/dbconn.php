<?php
$db_host = "localhost";
$db_name = "learnphp";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

require_once "functions.php";
//$conn = new mysqli("localhost","my_user","my_password","my_db");

// Check connection
//if ($conn->connect_errno) {
//    echo "Failed to connect to MySQL: " . $conn -> connect_error;
//    exit();
//}
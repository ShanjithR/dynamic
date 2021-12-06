<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "smartdb";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact(name, email, message) VALUES ('$user','$email','$message')";

$conn->close();

?>
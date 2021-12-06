<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "smartdb";

$conn = new mysqli($server,$username,$password,$dbname);
    $email = $_POST['email'];
    $app_type = $_POST['app_type'];
    $budget = $_POST['budget'];
    $description = $_POST['description'];
    $functionalities = $_POST['functionalities'];

    $sql2 = "INSERT INTO details(email, type, budget, description, functions) VALUES ('$email','$app_type','$budget','$description','$functionalities')";

    if ($conn->query($sql2)==TRUE){
        echo "form submitted";
    }else{
        echo "ERROR: ".$sql2."<br>".$conn->error;
    }
    $conn->close();
?>
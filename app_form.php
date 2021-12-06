<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications form</title>
    <link rel="stylesheet" href="app_form.css">
    
</head>
<body>
<div class="container"> 
  
  <form id="contact" action="mapp.php" method="post">
    <h3>Application Form</h3>
    <h4>
      fill the required fields 
    </h4>
    <fieldset>
      <input placeholder="Your email address" type="text" name="email">
    </fieldset>
    <fieldset>
      <input placeholder="Software type" type="text" name="app_type">
    </fieldset>
    <fieldset>
      <input placeholder="Your budget" type="text" name="budget">
    </fieldset>
    <fieldset>
      <textarea placeholder="Description about your app..." name="description"></textarea>
    </fieldset>
    <fieldset>
      <textarea placeholder="Special functionalities if any(optional)...." name="functionalities"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
</div>
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "smartdb";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name, email, password) VALUES ('$name','$email','$password')";

if ($conn->query($sql)==TRUE){
    echo "record entered";
} else {
    echo "Error: ".$sql. "<br>". $conn-> error;
}
$conn->close();
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart devs</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo7.png"/>
            </a>
            
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#fture">Features</a></li>
                <li><a href="#abt">About us</a></li>
                <li><a href="#cntct">Contact us</a></li>
            </ul>
        </nav>
        <div class="main-heading">
                <h1>We build apps straight out of your head</h1>
                <p>We are responsible for the smooth functionality and attractive design of your dream apps or softwares. We will build you mobile apps, web apps
                    or softwares that match your need and functionality
                </p>
                <a class="main-btn" href="signup.php" target="new">Sign up</a>
        </div>
    </section>  
    
    <section class="features" id="fture">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Web applications</h4>
                    <p>We will develop any kind of web-based applications for you</p>
                    <a href="signup.php" class="main-btn" target="new">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Mobile applications</h4>
                    <p>Specialized mobile developers.With hands on experience in Java and swift</p>
                    <a href="signup.php" class="main-btn" target="new">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>Software development</h4>
                    <p>We will develop you any kind of software to much your needs.</p>
                    <a href="signup.php" class="main-btn" target="new">Check</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="abt">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
         <h2>About our greatness</h2>
            <p>We are a team of skilled developers who are masters in building all kind of applications and softwares.
                we gurantee you a quality work with in deadline. And we are offering you a money back gurantee if you are not 
                satistied with your software that we have built for you.
            </p>
            <button class="main-btn">Read More</button>
        </div>
    </section>
    <section class="contact" id="cntct">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Feel free to message us</p>
        </div>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <input type="text" name="user" placeholder="Your full name"/>
            <input type="text" name="email" placeholder="Your E-mail"/>
            <textarea type="text" name="message" placeholder="Your message here..."></textarea>
            <button class="main-btn  contact-btn" type="submit">Continue</button>
        </form>
    </section>
    <?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "smartdb";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}

$name = htmlspecialchars($_POST['user']);
$email = htmlspecialchars($_POST['email']);
$message =  htmlspecialchars($_POST['message']);

$sql = "INSERT INTO contact(name, email, message) VALUES ('$name','$email','$message')";
if ($conn->query($sql)==TRUE){
    echo "record entered";
} else {
    echo "Error: ".$sql. "<br>". $conn-> error;
}
$conn->close();

?>
</body>
</html>
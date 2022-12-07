<?php 
session_start();

	include("connection.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$mail = $_POST['email'];
		$subject = $_POST['subject'];

		if(!empty($mail) && !empty($subject) && !is_numeric($mail))
		{

			//save to database
			$query = "insert into messages (email,subject) values ('$mail','$subject')";

			mysqli_query($con, $query);

			header("Location: contact.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Hire Me | Wb2c0</title>
<meta charset="utf-8">
<link rel="icon" href="img/icon.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/hireme.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<header>
  <h2>Hire Me</h2>
</header>

<section>

  <nav>
    <ul>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="works.html">My Works</a></li>
        <li><a class="active" href="contact.html">Contact</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
  </nav>
  
  <article>
    <div class="posted">
      <div style="text-align:center">
        <p>Gmail: mailwhilmar@gmail.com</p>
      </div>
      <div class="row">
        <div class="column">
          <img src="img/mailbox.jpg" draggable="false">
        </div>
        <div class="column">
          <form id="form" name="myForm" method="POST">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..." required>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..." required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email address..." required>
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something for me..." style="height:170px"></textarea>
            <input type="submit" name="submit"  onclick="checkscope()" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </article>

</section>

<footer>
<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
    <a href="https://www.twitter.com/" class="fa fa-twitter"></a>
    <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a>
    <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
    <a href="https://www.pinterest.com/" class="fa fa-pinterest"></a>
    <a href="https://www.snapchat.com/" class="fa fa-snapchat-ghost"></a>
    <a href="https://www.reddit.com/" class="fa fa-reddit"></a>
    <p>Copyright © wb2c0</p>
</footer>

<div class="popup">
  <h3>We use cookies in this website to improve your experience.</h3>
  <button class="popup-btn">Accept</button>
  <button class="popup-lrm"><a href="maintenance.html">Learn More</a></button>
</div>
<script src="main.js"></script>
<script src="hireme.js"></script>
</body>
</html>


    
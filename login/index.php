<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin | wb2c0</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section>
  <nav>
    <ul>
      <li><a class="active" href="index.php">Dashboard</a></li>
      <li><a href="#">Blog</a></li>
      <li><a href="messages.php">Email</a></li>
    </ul>
  </nav>
  
  <article>
      <div class="posted">
          <h1>Welcome, <?php echo $user_data['user_name']; ?></h1>
         <a href="logout.php"> <input type="button" value="Logout"></a>
      </div>
  </article>
</section>

<footer>
<a href="maintenance.html" class="fa fa-facebook"></a>
    <a href="../maintenance.html" class="fa fa-twitter"></a>
    <a href="../maintenance.html" class="fa fa-google"></a>
    <a href="../maintenance.html" class="fa fa-linkedin"></a>
    <a href="../maintenance.html" class="fa fa-youtube"></a>
    <a href="../maintenance.html" class="fa fa-instagram"></a>
    <a href="../maintenance.html" class="fa fa-pinterest"></a>
    <a href="../maintenance.html" class="fa fa-snapchat-ghost"></a>
    <a href="../maintenance.html" class="fa fa-skype"></a>
    <a href="../maintenance.html" class="fa fa-reddit"></a>
    <p>Copyright &copy; wb2c0</p>
</footer>

</body>

<style>
  * {
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial, Helvetica, sans-serif;

  }
    
 
  nav {
    float: left;
    width: 15%;
    height: 600px; 
    background: #ccc;
    padding: 0 10px;
    font-family: 'Lato', sans-serif;
    font-size: 20px;
  }
  
ul a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
  
  nav a.active {
    background-color:  #101820FF;
    color: white;
  }

 nav a:hover:not(.active) {
    background-color: #F2AA4CFF;
    color: white;
  }
  

  /* Style the list inside the menu */
  nav ul {
    list-style-type: none;
    padding: 0;
  }

  input[type=button]{
    cursor: pointer;
    border-radius: 5em;
    color: #fff;
    background: #101820FF;
    border: 0;
    padding-left: 40px;
    padding-right: 40px;
    padding-bottom: 10px;
    padding-top: 10px;
    font-family: 'Ubuntu', sans-serif;
    font-size: 13px;

}  

input[type=button]:hover{
  background-color: #F2AA4CFF;
}

  article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 600px; /* only for demonstration, should be removed */
  }

  .posted{
  font-weight: 100;
  letter-spacing: 2;
  padding: 5px;
  margin: 0;
  margin-bottom: 10px;
  border-style: solid;
  font-family: 'Hammersmith One', sans-serif;
  font-family: 'Lexend Mega', sans-serif;
  border-color: #00000009;
  border-radius: 10px;
}
  
  /* Clear floats after the columns */
  section::after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Style the footer */
  footer {
    background-color: #00203FFF;
    padding: 10px;
    text-align: center;
    color: white;
  }
  
  /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
  @media (max-width: 600px) {
    nav, article {
      width: 100%;
      height: 100%;
    }
  }

  @media screen and (max-width: 700px) {
    nav {
      width: 100%;
      height: auto;
      position: relative;
    }
    ul a {float: left;}
    article {margin-left: 0;}
  }
  
  @media screen and (max-width: 400px) {
    nav a {
      text-align: center;
      float: none;
    }
  }

  .fa {
    padding: 15px;
    font-size: 30px;
    width: 50px;
    height: 50px;
    color: #f1f1f1;
    background: #000000;
    border-radius: 50%;
    text-align: center;
    align-items: center;
    text-decoration: none;
    margin: 5px 2px;
  }
  
  .fa:hover {
      opacity: 0.7;
  }

</style>

</html>

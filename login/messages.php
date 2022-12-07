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
      <li><a href="index.php">Dashboard</a></li>
      <li><a href="#">Blog</a></li>
      <li><a class="active" href="messages.php">Email</a></li>
    </ul>
  </nav>
  
  <article>
      <div class="posted">
     <table>
    <tr>
      <th>mail</th>
      <th>subject</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "contact");
    if ($conn-> connect_error){
      die("Connection failed:".$conn-> connect_error);
    }

    $sql = "SELECT email, subject from messages";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0){
      while ($row = $result-> fetch_assoc()){
        echo "<tr><td>".$row["email"]."</td><td>".$row["subject"]."</td></tr>";
      }
      echo "</table>";
    }
    else{
      echo "0 result";
    }
    
    $conn-> close();
    ?>
     </table>
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
    height: auto; /* only for demonstration, should be removed */
  }

  .posted{
  font-weight: 100;
  letter-spacing: 2;
  margin: 0;
  padding: 5px;
  text-align: center;
  margin-bottom: 10px;
  font-family: 'Hammersmith One', sans-serif;
  font-family: 'Lexend Mega', sans-serif;

}

table{
    border-collapse: collapse;
    width: 100%;
    color: #555;
    font-family: monospace;
    font-size: 25px;
    text-align: left;
}

td{
    border-style: solid;
    border-color: #555;
    padding: 5px;
}

th{
    border-style: solid;
    border-color: orange;
    padding: 5px;
    background-color: orange;
    color: white;
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

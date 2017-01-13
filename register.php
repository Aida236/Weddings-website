<!DOCTYPE HTML>

<html>
<head>
<meta charset="UTF-8">
<title>Aida Weddings</title>
<link rel = "stylesheet" type="text/css" href="homestyle.css">
<link rel="icon" type="image/ico" href="/events/images/flowers.ico" />
<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet"> 


</head>

<body>

<h1 id="titlu" > Aida Weddings </h1>





<ul class="nav">
  <li><a href="/events/home.php">Home</a></li>
  <li><a href="/events/portofoliu.php">Portofoliu</a></li>
  <li><a href="/events/servicii.php">Servicii</a></li>
  <li><a href="/events/login.php">Login</a></li>
  <li><a href="/events/contact.php">Contact</a></li>
</ul>



<?php

session_start();

if(isset($_SESSION['message'])) {
echo "<div id='error_msg'>".$_SESSION['message']."</div>";
unset($_SESSION['message']);
}

?>
<form method="post" action = "mail_cod.php">
<table>
	<tr>
	<td>Username: </td>
	<td><input type="text" name="username" class="textInput"></td>
	</tr>
	<tr>
	<td>Email: </td>
	<td><input type="email" name="email" class="textInput"></td>
	</tr>
	<tr>
	<td>Parola: </td>
	<td><input type="password" name="password" class="textInput"></td>
	</tr>
	<tr>
	<td>Parola din nou: </td>
	<td><input type="password" name="password2" class="textInput"></td>
	</tr>
	<tr>
	<td> </td>
	<td><input type="submit" name="register_btn" value="Register"></td>
	</tr>


	
</table>

</form>	

</body>


</html>


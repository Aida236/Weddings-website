
<?php

session_start();

//connect to db

$db = mysqli_connect("localhost", "root", "", "authentication");

if (isset($_POST['login_btn'])) {

	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);

	$password = md5($password); // cand am pus in db am folosit hash
	$sql = "SELECT * FROM users WHERE username ='$username' AND password='$password'";
	$result = mysqli_query($db, $sql);

	if(mysqli_num_rows($result) == 1) {
		$_SESSION['message'] = "You are now logged in";
		$_SESSION['username'] = $username;
		header("location: home.php");

	}
	else {
		$_SESSION['message'] = "Username/password combination incorrect";
	}
}

?>



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

<h4> <?php 

if(isset($_SESSION['username'])) {
echo "Welcome, ".$_SESSION['username']." "."<a href = 'logout.php'>Logout</a>"; 

}
else  {
 	echo "Welcome.";
 } 


?>
 </h4>



<ul class="nav">
  <li><a href="/events/home.php">Home</a></li>
  <li><a href="/events/portofoliu.php">Portofoliu</a></li>
  <li><a href="/events/servicii.php">Servicii</a></li>
  <li><a href="/events/login.php">Login</a></li>
  <li><a href="/events/contulmeu.php">Contul Meu</a></li>
  <li><a href="/events/contact.php">Contact</a></li>
</ul>



<?php

if(isset($_SESSION['message'])) {
echo "<div id='error_msg'>".$_SESSION['message']."</div>";
unset($_SESSION['message']);
}

?>

<form method="post" action = "login.php">

<table>
	<tr>
	<td>Username: </td>
	<td><input type="text" name="username" class="textInput"></td>
	</tr>
	
	<tr>
	<td>Password: </td>
	<td><input type="password" name="password" class="textInput"></td>
	</tr>
	
	<tr>
	<td> </td>
	<td><input id="loginbtn" type="submit" name="login_btn" value="Login"></td>
	</tr>


</table>	
<p> sau <a href="/events/register.php">Inregistreaza-te</a></p> 

</form>	

</body>


</html>



<?php
session_start();

$cod = $_POST["cod"]; 

if($_SESSION['cod_email'] == $cod)
{
	

	//**********************************************


//connect to db

$db = mysqli_connect("localhost", "root", "", "authentication");

if (isset($_POST['Submit'])) {

	$username = mysql_real_escape_string($_SESSION['username']);
	$email = mysql_real_escape_string($_SESSION['email']);
	$password = mysql_real_escape_string($_SESSION['password']);
	$password2 = mysql_real_escape_string($_SESSION['password2']);
	
	if($password == $password2) {
	//create user
		$password = md5($password); // parola cu hash  
		$sql = "INSERT INTO users(username, email, password) VALUES('$username','$email','$password')";
		mysqli_query($db, $sql);

$_SESSION['message'] = "Felicitari! Ati creat un cont nou!";
$_SESSION['username'] = $username;
header("location: home.php"); //redirect

		}
	else {
	//failed
		$_SESSION['message'] = "The two passwords do not match";
		}

	}





	// -------------------------all good pana aici -------------------------------------------



	//********************************************

}
else
{
	$_SESSION['message'] = "Cod incorect";
	header("location: register.php");
}



?>



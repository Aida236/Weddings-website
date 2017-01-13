
<?php

session_start();


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





<section class="continut_pagina">
<h2>Trimite o sugestie:</h2>


<form method="post" action = "sendmail.php">


	Nume: <input type="text" name="nume" class="textInput"><br>
	Email: <input type="text" name="emailul" class="textInput"><br>	
	Mesaj: <input type="text" name="mesaj" class="textInput"><br>
	
	<input type="submit" name="send" value="Trimite">
	
	
<p> sau contacteaza-ne la: <br><Br> Telefon: 0770.111.222 <br> Adresa: Str. Brailei nr. 20, Galati </p> 


</form>	



</section>



</body>


</html>



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
</br>
<a href="mirelasicostel.php"> <img src="images/mirela_si_costel.jpg" width="30%" /> </a>
	<h3>Mirela si Costel</h3>

<a href="anasiradu.php"> <img src="images/ana_si_radu.jpg" width="30%" /> </a>
	<h3>Ana si Radu</h3>

<a href="georgianasipetru.php"> <img src="images/georgiana_si_petru.jpg" width="30%" /> </a>
	<h3>Georgiana si Petru</h3>

<a href="mariasimircea.php"> <img src="images/maria_si_mircea.jpg" width="30%" /> </a>
	<h3>Maria si Mircea</h3>


</section>



</body>


</html>


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


<ul class="nav">
  <li><a href="/events/home.php">Home</a></li>
  <li><a href="/events/portofoliu.php">Portofoliu</a></li>
  <li><a href="/events/servicii.php">Servicii</a></li>
  <li><a href="/events/login.php">Login</a></li>
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
 
	<h3>Ana si Radu</h3>

<img src="images/ana_si_radu.jpg" width="30%" />
<img src="images/ana_si_radu2.jpg" width="20%" />
<img src="images/ana_si_radu1.jpg" width="30%" />


<p>
	Numar invitati: 60 <br>
	Meniu: Meniu 1<br>
	Buchet: Buchet 3<br>
	Tort: Tort 4 <br>
	Locatie: Imperial House <br>
	Data: 15.08.2015 <br>




</p>

</section>



</body>


</html>

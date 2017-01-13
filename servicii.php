
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

	<p> Aida Weddings este partenerul ideal in organizarea evenimentelor dumneavoastra, oferind servicii de calitate deosebita datorita experientei noastre si dorintei de a crea evenimente unice. </p>


<ul class="servicii">
  <li><a href="meniu.php">Meniu</a></li>
  <li><a href="tort.php">Tort</a></li>
  <li><a href="buchet.php">Buchet mireasa</a></li>
  <li><a href="locatie.php">Locatie</a></li>
  <li><a href="invitatii.php">Invitatii</a></li>
  
</ul>
<br>


</section>



</body>


</html>


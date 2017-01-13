
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

<img src="images/tort1.jpg" width="20%"/> <h3>Tort 1</h3>
<img src="images/tort2.jpg" width="20%"/> <h3>Tort 2</h3>
<img src="images/tort3.jpg" width="20%"/> <h3>Tort 3</h3>
<img src="images/tort4.jpg" width="20%"/> <h3>Tort 4</h3>
<img src="images/tort5.jpg" width="20%"/><h3>Tort 5</h3>
<img src="images/tort6.jpg" width="20%"/><h3>Tort 6</h3>
<img src="images/tort7.jpg" width="20%"/><h3>Tort 7</h3>
<img src="images/tort8.jpg" width="20%"/><h3>Tort 8</h3>
<img src="images/tort9.jpg" width="20%"/><h3>Tort 9</h3>
<img src="images/tort10.jpg" width="20%"/><h3>Tort 10</h3>
<img src="images/tort11.jpg" width="20%"/><h3>Tort 11</h3>
<img src="images/tort12.jpg" width="20%"/><h3>Tort 12</h3>



</section>



</body>


</html>


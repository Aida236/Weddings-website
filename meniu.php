
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

<div id="wrap">
    <div id="meniu1">Meniu 1: Clasic

<h1><span style="font-size: medium;"><strong>Gustare rece:</strong></span></h1>
<p> <span style="font-size: small;">* Rulada Mozaic</span></p>
<p><span style="font-size: small;"> * Rulada Fantasy</span></p>
<p><span style="font-size: small;"> * Chec aperitiv</span></p>
<p><span style="font-size: small;"> * Rulada Dobos</span></p>
<p><span style="font-size: small;"> * Rulada Montana</span></p>
<p><span style="font-size: small;"> * Frigarui cu crochete de carne (pui, porc) si legume</span></p>
<p><span style="font-size: small;"> * Chicken Fingers</span></p>
<p><span style="font-size: small;"> * Icre de crap pe lamaie</span></p>
<p><span style="font-size: small;"> * Floare de rosie cu salata de vinete</span></p>
<p><span style="font-size: small;"> * Mozaic de masliine</span></p>
<p><span style="font-size: small;"> * Cruditati</span></p>
<h1><span style="font-size: medium;"><strong> Gustare calda:</strong></span></h1>
<p><span style="font-size: small;"> * Saramura de crap</span></p>
<p><span style="font-size: small;"> * Mamaliguta</span></p>
<p><span style="font-size: small;"> * Ardei iute</span></p>
<h1><span style="font-size: medium;"><strong>Fel principal:</strong></span></h1>
<p><span style="font-size: small;"> * Ceafa de porc grill</span></p>
<p><span style="font-size: small;"> * Pulpa de pui dezosata</span></p>
<p><span style="font-size: small;"> * Cartofi wedges picanti</span></p>
<p><span style="font-size: small;"> * Salata de varza alba si rosie</span></p>
<p><span style="font-size: medium;"> 130 ron/pers</span></p>



</div>
 <div id="meniu2">Meniu 2: Festiv

<h1><span style="font-size: medium;"><strong>Gustare rece:</strong></span></h1>
<p> <span style="font-size: small;">* Rulada Mozaic</span></p>
<p><span style="font-size: small;"> * Rulada Fantasy</span></p>
<p><span style="font-size: small;"> * Chec aperitiv</span></p>
<p><span style="font-size: small;"> * Rulada Dobos</span></p>
<p><span style="font-size: small;"> * Rulada Montana</span></p>
<p><span style="font-size: small;"> * Frigarui cu crochete de carne (pui, porc) si legume</span></p>
<p><span style="font-size: small;"> * Chicken Fingers</span></p>
<p><span style="font-size: small;"> * Icre de crap pe lamaie</span></p>
<p><span style="font-size: small;"> * Floare de rosie cu salata de vinete</span></p>
<p><span style="font-size: small;"> * Mozaic de masliine</span></p>
<p><span style="font-size: small;"> * Cruditati</span></p>
<h1> <span style="font-size: medium;"><strong> Gustare calda:</strong></span></h1>
<p><span style="font-size: small;"> * Saramura de crap</span></p>
<p><span style="font-size: small;"> * Mamaliguta</span></p>
<p><span style="font-size: small;"> * Ardei iute</span></p>
<h1><span style="font-size: medium;"><strong>Fel principal:</strong></span></h1>
<p><span style="font-size: small;"> * Ceafa de porc grill</span></p>
<p><span style="font-size: small;"> * Pulpa de pui dezosata</span></p>
<p><span style="font-size: small;"> * Cartofi wedges picanti</span></p>
<p><span style="font-size: small;"> * Salata de varza alba si rosie</span></p>
<p><span style="font-size: medium;"> 140 ron/pers</span></p>

</div>


 <div id="meniu3">Meniu 3: Traditional
<h1><span style="font-size: medium;"><strong>Gustare rece:</strong></span></h1>
<p> <span style="font-size: small;">* Rulada Mozaic</span></p>
<p><span style="font-size: small;"> * Rulada Fantasy</span></p>
<p><span style="font-size: small;"> * Chec aperitiv</span></p>
<p><span style="font-size: small;"> * Rulada Dobos</span></p>
<p><span style="font-size: small;"> * Rulada Montana</span></p>
<p><span style="font-size: small;"> * Frigarui cu crochete de carne (pui, porc) si legume</span></p>
<p><span style="font-size: small;"> * Chicken Fingers</span></p>
<p><span style="font-size: small;"> * Icre de crap pe lamaie</span></p>
<p><span style="font-size: small;"> * Floare de rosie cu salata de vinete</span></p>
<p><span style="font-size: small;"> * Mozaic de masliine</span></p>
<p><span style="font-size: small;"> * Cruditati</span></p>
<h1><span style="font-size: medium;"> <strong>Gustare calda:</strong></span></h1>
<p><span style="font-size: small;"> * Mozaic de sarmalute (in foi de vita si varza) / Sarmalute in foi de varza cu afumatura</span></p>
<p><span style="font-size: small;"> * Mamaliguta</span></p>
<h1><span style="font-size: medium;"><strong>Fel principal:</strong></span></h1>
<p> <span style="font-size: small;">* Ceafa de porc grill</span></p>
<p><span style="font-size: small;"> * Pulpa de pui dezosata</span></p>
<p><span style="font-size: small;"> * Sote de ciuperci</span></p>
<p><span style="font-size: small;"> * Salata de castraveti si gogosari murati</span></p>
<p><span style="font-size: medium;"> 135 ron/pers</span></p>

</div>
</div> <!--End wrap div-->
</section>



</body>


</html>


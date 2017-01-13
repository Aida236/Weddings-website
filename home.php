
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

<br>
<img src="images/home.jpg" width="40%"/>

	<p> Aida Weddings este partenerul ideal in organizarea evenimentelor dumneavoastra, oferind servicii de calitate deosebita datorita experientei noastre si dorintei de a crea evenimente unice. </p>
	<p>Ne caracterizeaza profesionalismul, dorinta de a realiza evenimente unice cat si stilul inovator, atentia la detalii si creativitatea. Consideram ca fiecare nunta trebuie sa se distinga printr-o eleganta si un rafinament desavarsit, fapt pentru care Aida Weddings il poate realiza prin decoruri spectaculoase, care sunt adaptate diferitelor saloane si personalitatii dumneavoastra. Va asteptam la sediul nostru unde consilierii nostri pot realiza o oferta personalizata in functie de bugetul si preferintele dumneavoastra.<br></p>

</section>



</body>

<footer>
	<?php 

$counter_name = "counter.txt";

if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}

$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);


if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f); 
}
echo " $counterVal vizitatori, ";




$counter1_name = "counter1.txt";

if (!file_exists($counter1_name)) {
  $f1 = fopen($counter1_name, "w");
  fwrite($f1,"0");
  fclose($f1);
}

$f1 = fopen($counter1_name,"r");
$counterVal1 = fread($f1, filesize($counter1_name));
fclose($f1);


  $counterVal1++;
  $f1 = fopen($counter1_name, "w");
  fwrite($f1, $counterVal1);
  fclose($f1); 
echo " $counterVal1 accesari";








	?>
</footer>

</html>


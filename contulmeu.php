<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "authentication");
$nume = mysql_real_escape_string($_SESSION['username']);

if (isset($_POST['btn'])) {

	
	$locatie =  mysql_real_escape_string($_POST['locatie']);
	$tort =  mysql_real_escape_string($_POST['tort']);
	$buchet =  mysql_real_escape_string($_POST['buchet']);
	$meniu =  mysql_real_escape_string($_POST['meniu']);
	$nr_invitati = mysql_real_escape_string($_POST['nr_invitati']);
	$data = mysql_real_escape_string($_POST['data']);


	$sql = "INSERT INTO rezervari (Nume, Locatie, Meniu, Nr_invitati, Tort, Buchet, Data)
       VALUES ('$nume', '$locatie', '$meniu', '$nr_invitati', '$tort', '$buchet', '$data');";
	$result = mysqli_query($db, $sql);

}

$sql2 = "SELECT * FROM rezervari WHERE nume ='$nume'";

$locatie =mysqli_query($db, "SELECT Locatie FROM rezervari WHERE nume = '$nume'");
$tort = mysqli_query($db, "SELECT Tort FROM rezervari WHERE nume = '$nume'");
$buchet = mysqli_query($db, "SELECT Buchet FROM rezervari WHERE nume = '$nume'");
$meniu =  mysqli_query($db,"SELECT Meniu FROM rezervari WHERE nume = '$nume'");
$nr_invitati =  mysqli_query($db,"SELECT Nr_invitati FROM rezervari WHERE nume = '$nume'");
$data =  mysqli_query($db,"SELECT Data FROM rezervari WHERE nume = '$nume'");


$row1 = mysqli_fetch_assoc($locatie);
$row2 = mysqli_fetch_assoc($tort);
$row3 = mysqli_fetch_assoc($buchet);
$row4 = mysqli_fetch_assoc($meniu);
$row5 = mysqli_fetch_assoc($nr_invitati);
$row6 = mysqli_fetch_assoc($data);





$result = mysqli_query($db, $sql2);

if(mysqli_num_rows($result) == 1) {

	$_SESSION['message'] = "Ai o rezervare! ";
	$_SESSION['messsage2'] = "Ai rezervat localul ".$row1['Locatie']." pe data de ".$row6['Data'].", cu meniu de tip ".$row4['Meniu']." pentru ".$row5['Nr_invitati']." de persoane, cu tort de tipul ".$row2['Tort']." si buchet de tipul ".$row3['Buchet'];
   

	
}
else {

$_SESSION['formular'] =  "<h3>Rezervare:</h3>
<form method='post' action = 'contulmeu.php' >
<table id='tabel1' >
	<tr>
	<td>Locatie: </td>
	<td><select name='locatie' class='textInput'>
	<option value='Barletto'>Barletto</option>
	<option value='Amadeus'>Amadeus</option>
	<option value='Imperial House'>Imperial House</option>
	<option value='Viva Ballroom'>Viva Ballroom</option>
	<option value='Chicago'>Chicago</option>
	<option value='Panoramic'>Panoramic</option>
	<option value='Dakota'>Dakota</option>
	<option value='Queen'>Queen</option>
	<option value='Dunarea'>Dunarea</option>
	 </select></td>
	</tr>
	<tr>
	<td>Meniu: </td>
	<td><select name='meniu' class='textInput'>
	<option value='Meniu1'>Meniu 1: Clasic</option>
	<option value='Meniu2'>Meniu 2: Festiv</option>
	<option value='Meniu3'>Meniu 3: Traditional</option>
	 </select></td>
	</tr>
	<tr>
	<td>Tort: </td>
	<td><select name='tort' class='textInput'>
	<option value='Tort1'>Tort 1</option>
	<option value='Tort2'>Tort 2</option>
	<option value='Tort3'>Tort 3</option>
	<option value='Tort4'>Tort 4</option>
	<option value='Tort5'>Tort 5</option>
	<option value='Tort6'>Tort 6</option>
	<option value='Tort7'>Tort 7</option>
	<option value='Tort8'>Tort 8</option>
	<option value='Tort9'>Tort 9</option>
	<option value='Tort10'>Tort 10</option>
	<option value='Tort11'>Tort 11</option>
	<option value='Tort12'>Tort 12</option>
	 </select></td>
	</tr>
	<tr>
	<td>Buchet: </td>
	<td><select name='buchet' class='textInput'>
	<option value='Buchet1'>Buchet 1</option>
	<option value='Buchet2'>Buchet 2</option>
	<option value='Buchet3'>Buchet 3</option>
	<option value='Buchet4'>Buchet 4</option>
	<option value='Buchet5'>Buchet 5</option>
	<option value='Buchet6'>Buchet 6</option>
	<option value='Buchet7'>Buchet 7</option>
	<option value='Buchet8'>Buchet 8</option>
	<option value='Buchet9'>Buchet 9</option>

	 </select></td>
	</tr>
	<tr>
	<td>Numar Invitati: </td>
	<td><input type='text' name='nr_invitati' class='textInput'></td>
	</tr>
	<tr>
	<td>Data: </td>
	<td><input type='text' name='data' class='textInput'></td>
	</tr>

	<tr>
	<td> </td>
	<td><input type='submit' name='btn' value='Rezerva acum'></td>
	</tr>


	
</table>

</form>	";

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
 	header("location:login.php");
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

if(isset($_SESSION['message']) ) {
	echo "<div id='error_msg'>".$_SESSION['message']."</div>";
	unset($_SESSION['message']);
	echo $_SESSION['messsage2'];
	$_SESSION['messsage3'] = "<br>  <form method='post' action='contulmeu.php'> Doresti sa stergi rezervarea?<input type='submit' name='btn1' value='DA'> 
	<input type='submit' name='btn2' value='NU'></form>";
	echo $_SESSION['messsage3'];

	if (isset($_POST['btn2'])) {
		unset($_SESSION['messsage3']);

	}
	if (isset($_POST['btn1'])) {
		$sqld = "DELETE FROM rezervari WHERE nume = '$nume'";
				if (mysqli_query($db, $sqld)) {
				    echo "Rezervarea a fost stearsa!";
				} else {
			    	echo "Eroare: " . mysqli_error($conn);
				}

	 }
}
else {
	echo $_SESSION['formular'];
}




?>





<section class="continut_pagina">
	




</section>



</body>


</html>


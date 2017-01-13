

<?php
session_start();

require_once('./phpmailer/class.phpmailer.php');
require_once('./phpmailer/conections/mail_config.php');


function GenCode($qtd){

$Caractere = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
$Nrcaractere = strlen($Caractere);
$Nrcaractere--;

$Hash=NULL;
    for($x=1;$x<=$qtd;$x++){
        $Pos = rand(0,$Nrcaractere);
        $Hash .= substr($Caractere,$Pos,1);
    }

return $Hash;
}

function mesaj_mail_cod($cod)
{
$text='<html>
<body style="margin: 5px 10px 0px 10px;">
<div style="width: 100%; font-family: Times; font-size: 14px;">
<br>
<p>Buna ziua,</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; Folositi codul urmator pentru a valida inregistrarea <b>'.$cod.'</b>.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; Multumim!</p>

<p>Aida Weddings</p>
<p><a href="http://193.226.51.37/down/sql/probleme/afisare_probleme.php" target="blank">Problems - site</a></p>

</div>
</body>
</html>';

return $text;
}


$mail = new PHPMailer(true); 

$mail->IsSMTP();

$_SESSION['cod_email']=GenCode(6);
$_SESSION['email']=$_POST["email"];
$_SESSION['username']=$_POST['username'];

$_SESSION['password'] = $_POST['password'];
$_SESSION['password2'] = $_POST['password2'];

$username1 = "codmailphp@gmail.com";
$password1 = "codmailphp1234";


try {
  $mail->SMTPDebug  = 0;                     
  $mail->SMTPAuth   = true;                  
  $mail->SMTPSecure = "ssl";                 
  $mail->Host       = "smtp.gmail.com";      
  $mail->Port       = 465;                   
  $mail->Username   = $username1;  			// GMAIL username
  $mail->Password   = $password1;            // GMAIL password
  $mail->AddReplyTo('lab223fmi@gmail.com', 'LAB 223');
  $mail->AddAddress($_SESSION['email'], $_SESSION['username']);
  $mail->SetFrom('php_registration@gmail.com', 'PHP Master');
  $mail->Subject = 'PHP registartion - validation code';
  $mail->AltBody = 'To view this post you need a compatible HTML viewer!'; 
  $mail->MsgHTML(mesaj_mail_cod($_SESSION['cod_email']));
  $mail->Send();
  //echo "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //error from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //error from anything else!
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





<ul class="nav">
  <li><a href="/events/home.php">Home</a></li>
  <li><a href="/events/portofoliu.php">Portofoliu</a></li>
  <li><a href="/events/servicii.php">Servicii</a></li>
  <li><a href="/events/login.php">Login</a></li>
  <li><a href="/events/contact.php">Contact</a></li>
</ul>




<form action="cod.php" method="POST">
Introduceti codul aici:<br>
<input type="text" name="cod"> 
<br> <input type="submit" name="Submit">

</body>


</html>



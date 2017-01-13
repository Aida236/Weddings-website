
<?php

session_start();




require_once('./phpmailer/class.phpmailer.php');
require_once('./phpmailer/conections/mail_config.php');



function mesaj_mail_cod($mesaj)
{
$text='<html>
<body style="margin: 5px 10px 0px 10px;">
<div style="width: 100%; font-family: Times; font-size: 14px;">
<br>
<p>'.$mesaj.'</p>
</div>
</body>
</html>';

return $text;
}


$mail = new PHPMailer(true); 

$mail->IsSMTP();

$_SESSION['email']=$_POST["emailul"];
$_SESSION['nume']=$_POST['nume'];
$_SESSION['mesaj']=$_POST['mesaj'];

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
  $mail->AddReplyTo($_SESSION['email'], $_SESSION['nume']);
  $mail->AddAddress($username1, 'Mail Wedding');
  $mail->SetFrom($_SESSION['email'], $_SESSION['nume']);
  $mail->Subject = $_SESSION['nume'];
  $mail->AltBody = 'To view this post you need a compatible HTML viewer!'; 
  $mail->MsgHTML(mesaj_mail_cod($_SESSION['mesaj']));
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

<?php

if(isset($_SESSION['message'])) {
echo "<div id='error_msg'>".$_SESSION['message']."</div>";
unset($_SESSION['message']);
}

?>





<section class="continut_pagina">
<p>Multumim pentru sugestia oferita!</p>

</section>



</body>


</html>


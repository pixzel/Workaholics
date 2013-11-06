<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kontakt</title>
<link href="mg.css" rel="stylesheet" type="text/css" />



</head>

<html>

<body>
<h2>Her kan du ta kontakt med oss bak markensgate.no</h2>
<hr />
<html>
<body>

<?php
if (isset($_REQUEST['E-post']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['E-post'] ;
  $subject = $_REQUEST['Emne'] ;
  $message = $_REQUEST['Beskjed'] ;
  mail("syztek@gmail.com", $subject,
  $message, "From:" . $email);
  echo "Takk for at du sendte oss en tilbakemelding!";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mailform.php'>
  E-post: <input name='email' type='text'><br>
  Emne: <input name='subject' type='text'><br>
  Beskjed:<br>
  <textarea name='beskjed' rows='15' cols='40'>
  </textarea><br>
  <input type='submit'>
  </form>";
  }
?>

<p>Behzad<br />
  <strong>Telefon:</strong> 9832141<br />
<strong>Epost: </strong><a href="mailto:you@youraddress.com">behzad@markensgate.no</a></p>
<p>Jens<br />
  <strong>Telefon:</strong> 9832141<br />
  <strong>Epost: </strong><a href="mailto:you@youraddress.com">jens@markensgate.no</a></p>
<p>Tor<br />
  <strong>Telefon:</strong> 9832141<br />
  <strong>Epost: </strong><a href="mailto:you@youraddress.com">tor@markensgate.no</a></p>


<p>Sondre<br />
  <strong>Telefon:</strong> 9832141<br />
  <strong>Epost: </strong><a href="mailto:you@youraddress.com">sondre@markensgate.no</a></p>
</html>
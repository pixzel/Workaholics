<?php
session_start();
include('connection.php');


$fnavn=$_POST['fnavn'];
$enavn=$_POST['enavn'];
$adresse=$_POST['adresse'];
$tlf=$_POST['tlf'];
$mail=$_POST['mail'];
$bnavn=$_POST['bnavn'];
$passord =$_POST['passord'];
$gpassord=$_POST['gpassord'];


mysql_query("INSERT INTO medlemmer(
`Fornavn`,
`Etternavn`, 
`Adresse`,
`Telefonnummer`,
`E_mail`,
`Brukernavn`, 
`Passord`,
`Gjenta passor`)
VALUES(
'$fnavn',
'$enavn',
'$adresse',
'$tlf',
'$mail',
'$bnavn',
'$passord',
'$gpassord')");


$remarks=$_GET['remarks'];
header("location: main_login.php?remarks=success");
mysql_close($con);


?>
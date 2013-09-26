<?php
$løper = 1;
$gtabb = $_POST['gtab'];
$glengde = 1+$_POST['hvtabb'];
include'gangetabell.html';


	if($gtabb==""){
		echo "<h3>Du må skrive inn hvilken tabell du vil ha</h3>";
		}
		if($glengde =="1"){
	echo "<h3>Du må skrive inn hvor lang gange tabellen skal være</h3>";
	
	}

	else{
while($løper<$glengde){
	echo "$løper gange $gtabb =".$løper*$gtabb."<br>";
	$løper++;
	
	}
	}
echo "<hr>";	






/*include 'lånekalulator.html';
$lbløp = $_POST['lbløp'];
$rente = $_POST['rente'];
$nbår = $_POST['nbår'];

echo "<p> $lbløp $nbår $nbår</p>";*/


?>
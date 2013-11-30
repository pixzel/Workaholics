
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Brukerkonto</title>
<link href="mg.css" rel="stylesheet" type="text/css" />
<script src="mg.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<?php

session_start();

if(!session_is_registered('myusername')){
header("location:main_login.php");
}

?>

<body>

<div id="header">
		<div class="section">
			<div class="logo">
			<a href="index.html" class="logo">Markensgate</a></div>
			<ul>
				<li class="selected"><a href="index.html">Hjem</a>
				</li>
				<li>
					<a href="butikker.html">Butikker</a>
				</li>
			  <li>
					<a href="omoss.html">Om Oss</a>
			  </li>
				<li>
					<a href="kontakt.html">Kontakt</a>
				</li>
				<li>
					<a href="logginn.html">LogIn</a>

				</li>
			</ul>
		</div>
</div>

 <form id="cse-search-box" action="http://google.com/cse" style="float: right; left: 1056px; top: 185px; width: 217px;">
    <input type="hidden" name="cx" value="005570125805745513577:0_6wgsjeos8" />
  <input type="hidden" name="ie" value="UTF-8" />
  <input type="text" name="q" size="20" />
     <input class="knapp" type="submit" name="sa" value="Søk" />
</form>
<div id="body"><img src="pic/gata.jpg" id="m-bilde" height="200" alt="gata" /></div>

<div id="infok" style="height:550px;">
<span class="overskriftnyskrift">Her kommer det brukerinformasjon</span>
<table border="2" bordercolor="0090FF" width="100%" cellpadding="5" cellspacing="0">
	<tr>
		<td>Navn</td>
	</tr>
	<tr>
		<td>Brukernavn</td>
	</tr>
	<tr>
		<td>E-post</td>
	</tr>
	<tr>
		<td>Passord </td>
	</tr>
</table>






<hr>



</div>

<div id="footer">
  <p>©2013 Workaholics</p>

</div>

</body>
</html>


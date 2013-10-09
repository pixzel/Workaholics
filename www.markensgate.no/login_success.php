
<?php
session_start();
if(!session_is_registered('myusername')){
header("location:main_login.php");


}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="mg.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="mg.js"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
<div id="hedder">

<form class="form">
  <input type="text" name="søkefelt" id="sfelt"   />
  <input type="button" value="Søk" />
  </form>
</div>


<div id="midten">
<center><h3>Her kommer det bilde av markesgate</h3></center>
</div>
<div id="mybox">

</body>

</html>


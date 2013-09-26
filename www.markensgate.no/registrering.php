<html>
<head>
<title>
</title>

</head>

<body>

<form name="reg" action="code_exec.php" onSubmit="return validateForm()" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2">
		<div align="center">
		  <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Registrer her';
		}
		if ($remarks=='success')
		{
		echo 'Registrering var vellykket';
		}
		?>	
	    </div></td>
  </tr>
  <tr>
    <td width="95"><div align="right">Fornavn:</div></td>
    <td width="171"><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td><div align="right">Etternavn:</div></td>
    <td><input type="text" name="lname" /></td>
  </tr>
  <tr>
    <td><div align="right">Kjønn:</div></td>
    <td><input type="text" name="mname" /></td>
  </tr>
  <tr>
    <td><div align="right">Adresse:</div></td>
    <td><input type="text" name="address" /></td>
  </tr>
  <tr>
    <td><div align="right">Telefonnummer.:</div></td>
    <td><input type="text" name="contact" /></td>
  </tr>
  <tr>
    <td><div align="right">Bilede:</div></td>
    <td><input type="text" name="pic" /></td>
  </tr>
 <tr>
    <td><div align="right">Brukernavn:</div></td>
    <td><input type="text" name="username" /></td>
  </tr>
 <tr>
    <td><div align="right">Passord:</div></td>
    <td><input type="text" name="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Registrer" /></td>
  </tr>
</table>
</form>

</body>
</html>
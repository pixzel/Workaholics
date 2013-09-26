<html>
<head>
<title>
</title>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var c=document.forms["reg"]["mname"].value;
var d=document.forms["reg"]["address"].value;
var e=document.forms["reg"]["contact"].value;
var f=document.forms["reg"]["username"].value;
var g=document.forms["reg"]["password"].value;
var h=document.forms["reg"]["gpassword"].value;
/*if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("All Field must be filled out");
  return false;
  }*/
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Gender name must be filled out");
  return false;
  }
if (d==null || d=="")
  {
  alert("address must be filled out");
  return false;
  }
if (e==null || e=="")
  {
  alert("contact must be filled out");
  return false;
  }
if (f==null || f=="")
  {
  alert("Du må lage et brukernavn");
  return false;
  }
if (g==null || g=="")
  {
  alert("Du må lage et passord");
  return false;
  }
if (h==null || h=="")
  {
  alert("Gjenta passord");
  return false;
  }
if(g!=h){
	
	 alert("Passordet stemmer ikke overens");
  return false;
	}
}
</script>
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
    <td><div align="right">Brukernavn:</div></td>
    <td><input type="text" name="username" /></td>
  </tr>
 <tr>
    <td><div align="right">Passord:</div></td>
    <td><input type="text" name="password" /></td>
  </tr>
 <tr>
    <td><div align="right">Gjenta Passord:</div></td>
    <td><input type="password" name="gpassword" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Registrer" /></td>
  </tr>
</table>
</form>

</body>
</html>
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
var f=document.forms["reg"]["pic"].value;
var g=document.forms["reg"]["pic"].value;
var h=document.forms["reg"]["pssword"].value;

//if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  {
  alert("Alle felt må fylles ut");
  return false;
  }
if (a==null || a=="")
  {
  alert("Alle felt må fylles ut");
  return false;
  }
if (b==null || b=="")
  {
  alert("Alle felt må fylles ut");
  return false;
  }
if (c==null || c=="")
  {
  alert("Alle felt må fylles ut");
  return false;
  }
if (d==null || d=="")
  {
  alert("Alle felt må fylles ut");
  return false;
  }
//if (e==null || e=="")
//  {
//  alert("contact must be filled out");
//  return false;
//  }
if (f==null || f=="")
  {
  alert("Alle felt må fylles utt");
  return false;
  }
if (g==null || g=="")
  {
  alert("Alle felt må fylles ut");
  return false;
  }
if (h==null || h=="")
  {
  alert("Alle felt må fylles ut");
  return false;
  }
  if(c!=h){
	   alert("Passodet stemmer ikke overens");
	  
	  }
}
</script>
</head>

<body>

<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2">
		<div align="center">
		  <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration Success';
		}
		?>	
	    </div></td>
  </tr>
  <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" /></td>
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
    <td><div align="right">E-mail:</div></td>
    <td><input type="text" name="pic" /></td>
  </tr>
 <tr>
    <td><div align="right">Brukernavn:</div></td>
    <td><input type="text" name="username" /></td>
  </tr>
 <tr>
    <td><div align="right">Passord:</div></td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td><div align="right">Gjenta Passordet:</div></td>
    <td><input type="password" name="mname" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
  </tr>
</table>
</form>
</body>
</html>
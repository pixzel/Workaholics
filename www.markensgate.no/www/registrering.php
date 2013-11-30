<html>
<head>
<link href="mg.css" rel="stylesheet" type="text/css" />
<title>
</title>

<script type="text/javascript">

function validateForm()
{
var a=document.forms["reg"]["fnavn"].value;
var b=document.forms["reg"]["enavn"].value;
var c=document.forms["reg"]["adresse"].value;
var d=document.forms["reg"]["tlf"].value;
var e=document.forms["reg"]["mail"].value;
var f=document.forms["reg"]["bnavn"].value;
var g=document.forms["reg"]["passord"].value;
var h=document.forms["reg"]["gpassord"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
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
if (e==null || e=="")
  {
  alert("E-post adressen må fylles ut");
  return false;
  }
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
  if(g!=h){
	
	 
	   alert("Passodet stemmer ikke overens");
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
		<div align="center"><div class="nyskrift">
		  <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo'Registrer deg her';
		}
		if ($remarks=='success')
		{
		echo 'Registration Success';
		}
				?>	
	    </div></td>
  </tr>
  <tr>
    <td width="109"><div align="right"><span class="nyskrift">Fornavn</span></span>:</div></td>
    <td width="157"><input type="text" name="fnavn" /></td>
  </tr>
  <tr>
    <td><div align="right"><span class="nyskrift">Etternavn</span>:</div></td>
    <td><input type="text" name="enavn" /></td>
  </tr>
  
  <tr>
    <td><div align="right"><span class="nyskrift">Adresse</span>:</div></td>
    <td><input type="text" name="adresse" /></td>
  </tr>
  <tr>
    <td><div align="right"><span class="nyskrift">Telefonnummer</span>.:</div></td>
    <td><input type="text" name="tlf" /></td>
  </tr>
  <tr>
    <td><div align="right"><span class="nyskrift">E-mail</span>:</div></td>
    <td><input type="text" name="mail" /></td>
  </tr>
 <tr>
    <td><div align="right"><span class="nyskrift">Brukernavn</span>:</div></td>
    <td><input type="text" name="bnavn" /></td>
  </tr>
 <tr>
    <td><div align="right"><span class="nyskrift">Passord</span>:</div></td>
    <td><input type="password" name="passord" /></td>
  </tr>
  <tr>
    <td><div align="right"><span class="nyskrift">Gjenta Passord</span>:</div></td>
    <td><input type="password" name="gpassord" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    
    <td><input name="submit" type="submit" value="Registrer" /></td>
  </tr>
</table>
</form>
</body>
</html>
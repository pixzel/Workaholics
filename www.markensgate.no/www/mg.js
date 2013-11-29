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
   
       
                              
 

 
 //script for å oppdatere ifodiven       
       
                              
  function butikker() {
	  var request = $.ajax({
		  url: "butikker.php",
		  type: "GET",            
		  dataType: "html"
	  });

	  request.done(function(msg) {
		  $("#mybox").html(msg);          
	  });

	  request.fail(function(jqXHR, textStatus) {
		  alert( "Request failed: " + textStatus );
	  });
  }

		 
  function infodiv() {
	  var request = $.ajax({
		  url: "infodiv.php",
		  type: "GET",            
		  dataType: "html"
	  });

	  request.done(function(msg) {
		  $("#mybox").html(msg);          
	  });

	  request.fail(function(jqXHR, textStatus) {
		  alert( "Request failed: " + textStatus );
	  });
  }
  
   function omoss() {
	  var request = $.ajax({
		  url: "omoss.php",
		  type: "GET",            
		  dataType: "html"
	  });

	  request.done(function(msg) {
		  $("#mybox").html(msg);          
	  });

	  request.fail(function(jqXHR, textStatus) {
		  alert( "Request failed: " + textStatus );
	  });
  }
  
   function kontakt() {
	  var request = $.ajax({
		  url: "kontakt.php",
		  type: "GET",            
		  dataType: "html"
	  });

	  request.done(function(msg) {
		  $("#mybox").html(msg);          
	  });

	  request.fail(function(jqXHR, textStatus) {
		  alert( "Request failed: " + textStatus );
	  });
  }
  
  
  
 function medlem() {
	  var request = $.ajax({
		  url: "registrering.php",
		  type: "GET",            
		  dataType: "html"
	  });

	  request.done(function(msg) {
		  $("#mybox").html(msg);          
	  });

	  request.fail(function(jqXHR, textStatus) {
		  alert( "Request failed: " + textStatus );
	  });
  }
  
  function loginn() {
	  var request = $.ajax({
		  url: "main_login.php",
		  type: "GET",            
		  dataType: "html"
	  });

	  request.done(function(msg) {
		  $("#mybox").html(msg);          
	  });

	  request.fail(function(jqXHR, textStatus) {
		  alert( "Request failed: " + textStatus );
	  });
  }


//Kode for å laste in bilder inn i infodiveve







function random_imglink(){
var myimages=new Array();
//specify random images below. You can have as many as you wish





 // refresh every 10000 milliseconds


myimages[1]="pic/infodiv/image1.gif";
myimages[2]="pic/infodiv/image2.gif";
myimages[3]="pic/infodiv/image3.gif";
myimages[4]="pic/infodiv/image4.gif";
myimages[5]="pic/infodiv/image5.gif";
myimages[6]="pic/infodiv/image6.gif";

	
var ry=Math.floor(Math.random()*myimages.length);
if (ry==0){
ry=1;}


document.getElementById("info1").innerHTML=('<img src="'+myimages[ry]+'" border=1 width="250px" height="250px" margin-bottom="5px">');
$('#info1').fadeIn("slow");
	


}








var auto_refresh = setInterval(
function ()
{
random_imglink();
}, 10000);



//tester for reg formen


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

//if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (f==null || f==""))
  //{
//  alert("Alle felt må fylles ut");
//  return false;
//  }
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
  if(c!=h){
	   alert("Passodet stemmer ikke overens");
	  
	  }
	  
}

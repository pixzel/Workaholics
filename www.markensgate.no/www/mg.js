 
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

// Google custom search //

  (function() {
    var cx = '005570125805745513577:0_6wgsjeos8';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();

// Google custom search //

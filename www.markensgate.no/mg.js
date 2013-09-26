 
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
		  url: "medlem.php",
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
  
  //script for å loggein 
  
  
 
 
function check()/*function to check userid & password*/
{
	
	alert(hei)
	
var bnavn = document.getElementsById(brid).innerHTML;
 var passord = document.getElementsById(passord).innerHTML;
 var gpassord= document.getElementsById(gpassord).innerHTML;
 /*the following code checkes whether the entered userid and password are matching*/
 //if(form.userid.value == "myuserid" && form.pswrd.value == "mypswrd")
//  {
//    window.open('target.html')/*opens the target page while Id & password matches*/
//  }
// else
// {
//   alert("Error Password or Username")/*displays error message*/
//  }


if(passord ==gpassord ){
	alert (bnavn );
	window.open('target.html')
	
	}
}

 
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


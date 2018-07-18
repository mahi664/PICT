<!DOCTYPE html>
<html>
<head>
	<title>Facutly At a Glance</title>
<link rel='stylesheet' href='at-a-glance.css' >
<!--script src='/home/ask149/Website/Faculty/Front-page/at-a-glance.js'></script-->
<title>Google Sign In</title>
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="google-signin-client_id" content="675675619749-i7qbpm9m1kn3dedqrn8qbjie6l8hch4k.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js?onload=init" async defer></script>
<script type="text/javascript">	
	
	function init(){
  		gapi.load('auth2', function() { 
  		//	alert('Ready') ;
  		})
	}

	function onSignIn(googleUser) {
	  var profile = googleUser.getBasicProfile();
	  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
	  console.log('Name: ' + profile.getName());
	  console.log('Image URL: ' + profile.getImageUrl());
	  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
	  redirect('?email='+profile.getEmail());
	}

	function redirect(temp)
	{
	  	alert("Front-page/main.php"+temp);
		document.location.href="http://localhost:/Front-page/main.php"+temp;
		//window.location
	}
	
	function signOut() {
		var auth2 = gapi.auth2.getAuthInstance();
		auth2.signOut().then(function () {
			console.log('User signed out.');
		});
	}

</script>
</head>
<body>
	<?php
		echo $_POST['email'];
		//include("at-a-glance.php");
	?>
	<!--div class='container'>
		<div class="row">
    		<a class="btn btn-primary" data-toggle="modal" href="#myModal" >Login</a>
			<div class="modal" id="myModal">
      			<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal">x</button>
      			</div>
      			<div class="modal-body">
        			<form method="post" action="localhost/Front-page/main.php" name="login_form">
          				<p><input type="email" class="span3" name="eid" id="email" placeholder="Email" autocomplete="email"></p>
          				<p><input type="password" class="span3" name="passwd" placeholder="Password" autocomplete="password"></p>
          				<p><button type="submit">Sign In</button>
          				<a href="#">Forgot Password?</a></p>
			        </form>
        			<div class="modal-footer">
			        	<div class="g-signin2" data-onsuccess="onSignIn"></div>
        			</div>
      			</div>
    		</div>
		</div-->
		<!--section id='hod' class='professor-category col-lg-12 col-sm-12'>
			<h3 id="head">Head of Department</h3>
			<?php create_cards('Head Of Department');?>
		</section>
		<section id='professor' class='professor-category col-lg-12 col-sm-12'>
			<h3>Professor</h3>
			<?php create_cards('Professor');?>
		</section>
		<section id='associate' class='professor-category col-lg-12 col-sm-12'>
			<h3>Associate Professor</h3>
			<?php create_cards('Associate Professor');?>
		</section>
		<section id='assistant' class='professor-category col-lg-12 col-sm-12'>
			<h3>Assistant Professor</h3>
			<?php create_cards('Assistant Professor');?>
		</section>
		<section id='labassistant' class='professor-category col-lg-12 col-sm-12'>
			<h3>Lab Assistant</h3>
			<?php create_cards('Lab Assistant');?>
		</section-->		
	<!--script type="text/javascript">callcard();</script-->	
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Google Sign In</title>
	<link rel='stylesheet' href='at-a-glance.css' >
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale = 1.0" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<meta name="google-signin-client_id" content="675675619749-i7qbpm9m1kn3dedqrn8qbjie6l8hch4k.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
<script type="text/javascript">
	
  var done=false;
  var clicked = false;
  function init(){
  		gapi.load('auth2', function() { 
  		//	alert('Ready') ;
      done=true;
  		})
	}

	function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  post(profile.getEmail());
  //redirect('?email='+profile.getEmail());
}

function redirect(){
  
  clicked = true;
  if( done==false)
  {init();}
  document.getElementById('myform').submit();
}

function post(email) {
    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("id", "myform");
    form.setAttribute("action", "view.php");

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "email");
    hiddenField.setAttribute("value", email);

    form.appendChild(hiddenField);
    document.body.appendChild(form);//document.getElementById('SignIn').onclick(function(){if(once){form.submit();}});
    if(clicked==true)
      {
        form.submit();
      }
}

  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
  <body>
	    <div class="row" style="background-color:#2d2d2d; height: 38px;">
        <div style="float: right;" class="g-signin2" data-onsuccess="onSignIn" id="SignIn" onclick="redirect()"></div>
      </div>
      <div class="container">
      <div class="row" style="height: auto;">
        <?php
          include("at-a-glance.php");
        ?>  
        <h2 id="head">Head of Department</h2>
        <section id='hod' class='professor-category col-lg-12 col-xs-12'>          
          <?php create_cards('Head Of Department');?>
        </section>
        <h2  id="head">Professor</h2>
        <section id='professor' class='professor-category col-lg-12 col-xs-12'>
          <?php create_cards('Professor');?>
        </section>
        <h2  id="head">Associate Professor</h2>
        <section id='associate' class='professor-category col-lg-12 col-xs-12'>
          <?php create_cards('Associate Professor');?>
        </section>
        <h2  id="head">Assistant Professor</h2>
        <section id='assistant' class='professor-category col-lg-12 col-xs-12'>
          <?php create_cards('Assistant Professor');?>
        </section>
        <h2  id="head">Lab Assistant</h2>
        <section id='labassistant' class='professor-category col-lg-12 col-xs-12'>
          <?php create_cards('Lab Assistant');?>        
        </section>    
      </div>
  </div>
	<!--a href="#" onclick="signOut();">Sign out</a-->
</body>
</html>
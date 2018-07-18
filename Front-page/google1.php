<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Google Sign In</title>
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <link rel='stylesheet' href='at-a-glance.css' >
  
 <meta name="viewport" content="width=device-width, initial-scale=0.4, maximum-scale=0.5">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <meta name="google-signin-client_id" content="423638288873-7h9c8l5uh87tddjndhapvek05dtkra2u.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <link rel="stylesheet" type="text/css" href="view.css">
  </head>
<script type="text/javascript">
  
var done=false;
var clicked = false;
function init(){
    gapi.load('auth2', function() { 
        //alert('Ready') ;
        done=true;
    })
}

var auth2;
var initClient = function(){
  gapi.load('auth2',function()
  {
    auth2 = gapi.auth2.init({
      client_id: '423638288873-7h9c8l5uh87tddjndhapvek05dtkra2u.apps.googleusercontent.com'
    });
  });
};

var onSuccess = function(error){
  //console.log('Signed in as '+user.getBasicProfile().getName());
};

var revokeAllScopes = function() {
  auth2.disconnect();
};

var onFailure = function(error){
  console.log(error);
  revokeAllScopes();
};

initClient();


function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  //console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  //console.log('Name: ' + profile.getName());
  //console.log('Image URL: ' + profile.getImageUrl());
  //console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
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
    form.setAttribute("action", "main.php");

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
  <body onload="JavaScript:AutoRefresh(5000);">
    
  <div class="container-fluid" style="padding-top: 30px; padding-bottom: 30px; background:#2d2d2d; color:white;">
    <div class="col-md-2 col-lg-2">
    </div>
    <div class="col-md-1 col-lg-1">
      <img src="images/logo.png" align="center"/>
    </div>
    <div class="col-md-6 col-lg-6 col-xs-12" align="center">
      <div style="text-align: center;">
        <b>
            <p>Society for Computer Technology and Research's</p>
            <h2 class="media-heading">Pune Institute of Computer Technology</h2>
            <p>Affiliated to university of Pune, AICTE Approved, NACC Accredited, ISO 9001:2008</p>
        </b>        
      </div>
    </div>
    <div class="col-md-2 col-lg-2">
    </div>
  </div>
    
<nav class="navbar navbar-inverse" style="">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <!--ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Faculty Profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Video Lectures</a></li>
          <li><a href="#">Notes</a></li>
          <li><div style="float: right; margin-top: 5px;" class="g-signin2" data-onsuccess="onSignIn" id="SignIn" onclick="redirect()"></div></li>
        </ul-->
        <div style="float: right; margin-top: 5px; color: white; background: #2d2d2d;" data-theme="dark" class="g-signin2" data-onsuccess="onSignIn" id="SignIn" onclick="redirect()"></div>
      </div>
    </div>
  </nav>

  <div class="container">
      <div class="row">
        <?php
          include("at-a-glance.php");
        ?>  
        <section id='hod' class='professor-category col-lg-12 col-xs-12'>
          <h2 id="head">Head of Department</h2>
          <?php create_cards('Head Of Department');?>
        </section>
        <section id='professor' class='professor-category col-lg-12 col-xs-12'>
          <h2  id="head">Professor</h2>
          <?php create_cards('Professor');?>
        </section>
        <section id='associate' class='professor-category col-lg-12 col-xs-12'>
          <h2  id="head">Associate Professor</h2>
          <?php create_cards('Associate Professor');?>
        </section>
        <section id='assistant' class='professor-category col-lg-12 col-xs-12'>
          <h2  id="head">Assistant Professor</h2>
          <?php create_cards('Assistant Professor');?>
        </section>
        <section id='labassistant' class='professor-category col-lg-12 col-xs-12'>
          <h2  id="head">Lab Assistant</h2>
          <?php create_cards('Lab Assistant');?>
        </section>    
      </div>
  </div>
  <footer class="container-fluid text-center">
  <a class="fa fa-facebook"></a>
  <a class="fa fa-twitter"></a>
  <p>Connect with us!</p>
</footer>

  <!--a href="#" onclick="signOut();">Sign out</a-->
</body>
</html>
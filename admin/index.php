<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <meta name="google-signin-client_id" content="675675619749-i7qbpm9m1kn3dedqrn8qbjie6l8hch4k.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
    var done=false;
    var clicked = false;
    function init(){
        gapi.load('auth2', function() { 
        //  alert('Ready') ;
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
      form.setAttribute("action", "/PICT/admin/login.php");

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

    window.onload()
    {
      location.reload();
    }

  </script>
</head>
<body style="font-size: 15px;  background-image: url('../images/BodyBG.jpg'); background-attachment: fixed; background-size: 100% 100%; background-repeat: no-repeat;">
 <div class="container-fluid" style="padding-top: 30px; padding-bottom: 30px; color:#1a237e;">
    <div class="row">
    <div class="col-md-2 col-lg-2">
    </div>
    <div class="col-md-1 col-lg-1">
      <img src="../images/logo.png" align="center"/>
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
    </div>
  </div>
 
<div class="container">
  <div class="card" style="margin: 50px 200px;">
    <div class="card-header" style="background-color: #000066; color: white;">Admin Login</div>
    <div class="card-body" style="background-color: #cccfff; color: #000066;">
      <form action="login.php" method="POST">
        <div style="float: right; margin-top: 5px; color: white; background: #2d2d2d;" data-theme="dark" class="g-signin2" data-onsuccess="onSignIn" id="SignIn" onclick="redirect()"></div>
      </form>
    </div> 
  </div>
</div>
</body>
</html>

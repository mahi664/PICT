<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0 max-scale = 0.4">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
    <div class="card-header" style="background-color: #000066; color: white;">Contact Faculty</div>
    <div class="card-body" style="background-color: #cccfff; color: #000066;">
      <form action="contactSearch.php" method="POST">
        <div class="form-group">
          <label for="email">Faculty Name:</label>
          <input type="text" class="form-control" id="email" placeholder="Search by fullname/firstname" name="fname">
        </div>
        <button type="submit" class="btn" name="Search" style="background-color: #000066; color: white;">Search</button>

      </form>
    </div> 
  </div>
</div>

</body>
</html>

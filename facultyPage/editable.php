<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="mystyle.css">

  <script src="upload.js"></script>
</head>

<body>

<!--div class="jumbotron">
  <div class="container text-center ">
    <div class="row">
      <div class="col-sm-1"><img src="images/logo.png"></div>
      <div class="col-sm-11"><b><h2>Pune Institue of Computer Technology</h2></b></div>
    </div>
  </div>
</div-->

<div class="jumbotron" style="margin-bottom: 0px;">
    <div class="container">
      <div class="media">
        <div class="media-left">
          <img src="images/logo.png">
        </div>
        <div class="media-body" style="text-align: center;">
          <p>Society for Computer Technology and Research's</p>
          <h2 class="media-heading">Pune Institue of Computer Technology</h2>
          <p>Affiliated to university of Pune, AICTE Approved, NACC Accredited, ISO 9001:2008</p>
        </div>
      </div>
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
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Faculty Profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Video Lectures</a></li>
          <li><a href="#">Notes</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span>LogOut</a></li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container" style="">

  <div class="container" id="info" style="margin-top: 10px;">
      <div class="card bg-light">
        <div class="card-image">
          <img src="images/faculty.jpg" style="float: left; margin-right: 10px; margin-bottom: 18px;">
        </div>
        <div class="card-header">
          <h1 class="NameHeadings" style="padding-left: 8px; padding-right: 8px;">Aditya Dikshit </h1>
        </div>
        <div class="card-body">
            <table  class="table-striped">
              <tr>
                <td class="mytbstyle">Email:</td>
                <td>aditya9707@gmail.com</td>
              </tr>
              <tr>
                <td class="NameHeadings mytbstyle">Phone:</td>
                <td>8975108619</td>
              </tr>
              <tr>
                <td class="NameHeadings mytbstyle">Department:</td>
                <td>Comp</td>
              </tr>
              <tr>
                <td class="NameHeadings mytbstyle">Designation:</td>
                <td>Kamchukar</td>
              </tr>
              <tr>
                <td class="NameHeadings mytbstyle">Responsibility:</td>
                <td>Nusta Time Pass</td>
              </tr>
            </table>
        </div>
        <div class="card-footer" align="right">
          <a href="editpage.php" class="btn btn-primary" style="margin: 10px;">Edit Profile</a>
        </div>
      </div>
  </div>
  <br>

  <div class="card" id="nav2">
    
    <ul class="nav nav-pills nav-justified" >
      <li class="active"><a data-toggle="tab" href="#videosTab"><b>Videos</b></a></li>
      <li><a data-toggle="tab" href="#notesTab"><b>Notes</b></a></li>
      <li><a data-toggle="tab" href="#forgotTab"><b>Reset Password</b></a></li>
    </ul>

    <div class="tab-content">
    
      <div id="videosTab" class="tab-pane fade in active">
        <h3>Videos Tab</h3>
        <p>Videos can be uploaded here.</p>
        <div class="card-footer" style="margin-top: 10px; margin-bottom: 10px; ">
          
          <form action="#navbar">
            <div class="form-group">
              <input type="file" name="UploadedVideo" accept="video/*" class="Videofile" required style="visibility: hidden; position: absolute;">
              <div class="input-group col-xs-12">
                <span class="input-group-addon"><i class="glyphicon glyphicon-facetime-video"></i></span>
                <input type="text" class="form-control input-lg" disabled placeholder="Upload Video">
                <span class="input-group-btn">
                  <button class="browse btn btn-primary input-lg"><i class="glyphicon glyphicon-search"></i>Browse</button>
                </span>
              </div><br>
              <div align="center"><button type="submit" class="upbutton btn btn-primary" align="center">Upload Video</button></div>
            </div>
          </form>

        </div>
      </div>
      
      <div id="notesTab" class="tab-pane fade">
        <h3>Notes tab</h3>
        <p>Notes can be added here.</p>
        <div class="card-footer" style="margin-top: 10px; margin-bottom: 10px; ">
          
          <form action="#navbar">
            <div class="form-group">
              <input type="file" name="UploadedNotes" class="Videofile" required style="visibility: hidden; position: absolute;">
              <div class="input-group col-xs-12">
                <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                <input type="text" class="form-control input-lg" disabled placeholder="Upload Notes">
                <span class="input-group-btn">
                  <button class="browse btn btn-primary input-lg"><i class="glyphicon glyphicon-search"></i>Browse</button>
                </span>
              </div><br>
              <div align="center"><button type="submit" class="upbutton btn btn-primary" align="center">Add Notes</button></div>
            </div>
          </form>


        </div>
      </div>
      
      <div id="forgotTab">
        
      </div>
    </div>
  
  </div>

</div>


<footer class="container-fluid text-center">
  <a class="fa fa-facebook"></a>
  <a class="fa fa-twitter"></a>
  <p>Connect with us!</p>
</footer>

</body>
</html>

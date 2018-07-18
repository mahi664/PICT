<?php

require "connect.php";

if (isset($_POST['Search']))
{
	if(!empty($_POST['fname']))
	{
		$fname = $_POST['fname'];
		$sql = "SELECT fullname,contact,acontact,email FROM faculty WHERE fullname like '%$fname%'";
		$run = $conn->query($sql);
		//$row = $run->fetch_assoc();
		if($run->num_rows<1)
		{
			echo "<script>alert('Sorry! No such faculty there in PICT!!!');
            window.location.href = '/PICT/contactFaculty/contact.php';</script>";		
		}
		
	}
	else
	{
		echo "<script>alert('Name field cannot be empty!!!');
            window.location.href = '/PICT/contactFaculty/contact.php';</script>";
	}
}
else
{
	echo "<script>alert('Something Went wrong!!!');
            window.location.href = '/PICT/contactFaculty/contact.php';</script>";
}


?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0 max-scale = 0.4">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="view.css">
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
    <div class="card-header" style="background-color: #000066; color: white;">Faculty Contact Details</div>

    <div class="card-body" style="background-color: #cccfff; color: #000066;" align="center">
      <table class="table-striped table-bordered ">
      	<tr>
      		<th>Full Name</th>
      		<th>Contact</th>
      		<th>Extension</th>
      		<th>Email</th>
      	</tr>
      
      <?php
      	while($row = $run->fetch_assoc())
      	{
      		$fullname = $row['fullname'];
      		$contact = $row['contact'];
      		$acontact = $row['acontact'];
      		$email = $row['email'];

      		echo "<tr'>
      		<td  style='padding: 10px;'> ".$fullname."</td>
      		<td>".$contact."</td>
      		<td>".$acontact."</td>
      		<td>".$email."</td>
      		</tr>";
      	}
      ?>
      </table>
    </div> 

  </div>
</div>

</body>
</html>


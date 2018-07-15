<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel='stylesheet' href='at-a-glance.css' >
<!--script src='/home/ask149/Website/Faculty/Front-page/at-a-glance.js'></script-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 	
	function create_cards($desig){
		include("connect.php");
		$mydept = 'Computer';
		$sql = "SELECT fullname,contact,eid,image from faculty where designation='$desig' and enable = '1'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$name = $row['fullname'];
		    	$contact = $row['contact'];
		    	$email = $row['eid'];
		    	$imgpath = 'facultyPage/'.$row['image'];
		    	$url = "view.php?eid=$email";
		 		echo   "<div class='card-container col-lg-4 col-xs-6 col-md-6' style='padding:0px;' >
		 					<div class='card' style='margin:0px;'>
		 					<div class='card-image'>
		 						<img alt='Image comes here' src='$imgpath'>
		 					</div>
		 					<div class='card-body'>
			 					<div class='title info'>
		 							<font style='color:black;'><b>$name</b></font> 
		 						</div>
		 						<!--div class='desc info'>
			 						<font size='20%' style='color:black;'></i>$contact</font>
		 						</div-->
		 						<div class='desc info'>
			 						<font style='color:black;'>$email</font>
		 						</div>
		 						<div class='desc info'  >
			 						<a href='$url'; ?>View Profile</a>
		 						</div>
		 					</div>
		 				</div>
		 				</div>";
		    	}
		    }
		$conn->close();
		}
?>
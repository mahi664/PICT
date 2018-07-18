<script>
	location.reload(true);
</script>
<?php


include "connect.php";

//$eid = 'C2K';
//$email = $_POST['email'];
//echo $eid;
//$sql = "SELECT eid,image,fullname,contact,acontact,texperience,iexperience,doj,department,designation,responsibility,aoi,other,cv FROM faculty F WHERE F.eid = '$eid'";
/*$sql = "SELECT eid,image,fullname,contact,acontact,texperience,iexperience,doj,department,designation,responsibility,aoi,other,cv FROM faculty F WHERE F.eid = '$eid'";*/
session_start();
if(empty($_SESSION['row']))
{
	echo"<script> alert('Session Expired'); window.location.href='../google1.php'</script>";
}
$_SESSION['testcomplete'] = 'no';
$row = $_SESSION['row'];
//$query = $conn->query($sql);
//if ($query) 
//{
	//$row = $query->fetch_assoc();
	//$_SESSION['row'] = $row;
	$eid = $row['eid'];
	$_SESSION['eidName'] = $eid;	
	$img = $row['image'];
	$fullname = $row['fullname'];
	$contact = $row['contact'];
	$department = $row['department'];
	$designation = $row['designation'];
	$responsibility = $row['responsibility'];
	$aoi = $row['aoi'];
	$doj = $row['doj'];
	$texperience = $row['texperience'];
	$iexperience = $row['iexperience'];
	$other = $row['other'];
	$cv = $row['cv'];
	$email = $row['email'];


$eid = "C2K";
$total = 14;
$current = 0;
$sql = "SELECT * FROM faculty WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
{
	$row = $run->fetch_assoc();
	if($row['image']!="")
		$current++;
	if($row['texperience']!="")
		$current++;
	if($row['iexperience']!="")
		$current++;
	if($row['responsibility']!="")
		$current++;
	if($row['aoi']!="")
		$current++;
	if($row['other']!="")
		$current++;
	if($row['cv']!="")
		$current++;
}
$sql = "SELECT eid FROM qualifications WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;
$sql = "SELECT eid FROM journals WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;
$sql = "SELECT eid FROM books WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;
$sql = "SELECT eid FROM conferences WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;
$sql = "SELECT eid FROM consultancy WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;
$sql = "SELECT eid FROM patent WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;
$sql = "SELECT eid FROM fundedrp WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;
$per = round(($current/$total)*100);

//}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=0.4, maximum-scale=0.5">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="view.css">
	
	<script type="text/javascript">
		//onload
		window.onload = function(){
			var x = window.location.href;
			var idname = x.split("#");
			if(idname.length == 2){
				displayblock(idname[1]);
			}
		}
		function signOut() {
    		var auth2 = gapi.auth2.getAuthInstance();
    		auth2.signOut().then(function () {
      		console.log('User signed out.');
      		revokeAllScopes();
    		});
  		}
		//personal details edit
		var editpersonalBTN = 0;
		function editpersonal(){
			editpersonalBTN = 1;
			var x = document.getElementsByClassName("pdetails");
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}
		function checkeditpersonal(){
			if(editpersonalBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}
		//experience details edit
		var editexperienceBTN = 0;
		function editexperience(){
			editexperienceBTN = 1;
			var x = document.getElementsByClassName('exdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}
		function checkeditexperience() {
			if(editexperienceBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}
		//other details
		var editotherdBTN = 0;
		function editotherdetails(){
			editotherdBTN = 1;
			var x = document.getElementsByClassName('oddetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}
		function checkeditotherdetails() {
			if(editotherdBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}
		//Qualifications
		var editqualiBTN = 0;
		function editqualifications(){
			editqualiBTN = 1;
			var x = document.getElementsByClassName('qdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}
		function checkeditqualifications() {
			if(editqualiBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}
		//Journal Details
		var editjournalBTN = 0;
		function editjournal(){
			editjournalBTN = 1;
			var x = document.getElementsByClassName('jdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}
		function checkeditjournal() {
			if(editjournalBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}
		//book details
		var editbooksBTN = 0;
		function editbooks(){
			editbooksBTN = 1;
			var x = document.getElementsByClassName('bdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}
		function checkeditbooks() {
			if(editbooksBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}
		//Confrence details
		var editconferencesBTN = 0;
		function editconferences(){
			editconferencesBTN = 1;
			var x = document.getElementsByClassName('cdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}
		function checkeditconferences() {
			if(editconferencesBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}
		//patent details
		var editpatentsBTN = 0;
		function editpatents(){
			editpatentsBTN = 1;
			var x = document.getElementsByClassName('ptdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}
		function checkeditpatents() {
			if(editpatentsBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}
		//consultancy details
		var editconsulBTN = 0;
		function editconsul(){
			editconsulBTN = 1;
			var x = document.getElementsByClassName('conddetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}
		function checkeditconsul() {
			if(editconsulBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}		
		//for displaying blocks
		function displayblock(s){
			var allpage = document.getElementsByClassName('mycard');
			
			for(var i=0; i<allpage.length;i++){
				allpage[i].style.display = "none";
			}
			document.getElementById(s).style.display = "block";
		}

		function AdjustDegree(s1,s2){
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);
			s2.innerHTML = "BE";
			if(s1.value == "Graduate"){
				var optionArray = ["BE|BE","BTech|BTech"];
			}
			else if(s1.value == "Post-Graduate"){
				var optionArray = ["ME|ME","MTech|MTech"];
			}
			for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value =pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			}
		}

		var auth2;
		var initClient = function(){
			gapi.load('auth2',function()
			{
				auth2 = gapi.auth2.init({
					client_id: '675675619749-i7qbpm9m1kn3dedqrn8qbjie6l8hch4k.apps.googleusercontent.com'
				});
			});
		};

		var onSuccess = function(error){
			console.log('Signed in as '+user.getBasicProfile().getName());
		};

		var revokeAllScopes = function() {
			auth2.disconnect();
		};
		
		var onFailure = function(error){
			console.log(error);
			revokeAllScopes();
		};

		initClient();

	</script>
</head>
<body onload="JavaScript:AutoRefresh(5000);" style="font-size: 15px;  background-image: url('../images/BodyBG.jpg'); background-attachment: fixed; background-size: 100% 100%; background-repeat: no-repeat;">
  <div class="container-fluid" style="padding-top: 30px; padding-bottom: 30px; color:#1a237e;">
  	<div class="row">
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
    <div class="col-md-2 col-lg-3">
    </div>
  </div>
    </div>
  </div>
	<!--div class="jumbotron" >
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
	</div-->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	  <ul class="navbar-nav navbar-right">
	    <li class="nav-item active">
	      <a class="nav-link" href="#">Active</a>
	    </li>
	    <li class="nav-item ">
	      <a class="nav-link" href="/PICT/google1.php" onclick="signOut();">Signout</a>
	    </li>
	  </ul>
	  	<div class="col-lg-8"></div>
	  	<div class="col-lg-3">
	  		<h4 style="color: white;">Profile:</h4>
  			<div class="progress">
    			<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per;?>%; color: black;">
    			<?php echo $per;?>%
    			</div>
  			</div>
		</div>
	</nav>


	<div class="container mytabs" style="margin-bottom: 20px;margin-top: 20px;">

		
		
			<h2>Update Details</h2>
				
		
		<div class="row">

			<!--div class="col-md-3" align="center">
				<a class="btn btn-primary w-100" style="margin: 5px;" href="">Photo</a>
			</div-->

			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px;" onclick="displayblock('photo')">Photo</button>
			</div>

			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px;" onclick='displayblock("personaltab")'>Personal Details</button>
			</div>
			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px;" onclick="displayblock('qualifications')">Qualifications</button> 
			</div>
			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px;" onclick="displayblock('experience')">Experience</button>			
			</div>

		</div>
		<div class="row">
			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px;" onclick="displayblock('journals')">Journals</button>
			</div>

			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px; " onclick="displayblock('books')">Books</button>			
			</div>
			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px;" onclick="displayblock('conference')">Conference</button>			
			</div>		
			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px;" onclick="displayblock('patents')">Patents</button>
			</div>				
		</div>
		<div class="row">
			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px; " onclick="displayblock('consultancy')">Consultancy Details</button>			
			</div>
			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px; " onclick="displayblock('frp')">Funded Research Projects</button>			
			</div>
			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px; " onclick="displayblock('CVupload')">Upload CV</button>			
			</div>						
			<div class="col-md-3" align="center">
				<button class="btn btn-primary w-100" style="margin: 5px; " onclick="displayblock('other')">Other Details</button>			
			</div>
		</div>
	</div>

	<div class="container-fluid" id="mainContent">

			<div id="photo" class="card mycard">
				<form action="uploadContent.php" method="post" enctype="multipart/form-data">
					<div class="card-header" align="center"><h2>Current Photo</h2></div>
					<div class="card-body" align="center">
						<h4>Update Profile Pic</h4>
						<img src="<?php echo($img) ?>" alt="Faculty Photos" class="img-responsive" style="border-radius: 5px; width: 250px; height: 250px;">
						<input class="btn btn-info" type="file" accept="image/*" name="imageToUpload" id="imageToUpload">
					</div>
					<div class="card-footer" align="center">
						<input type="submit" name="picsubmit" value="Upload" class="btn btn-success">
					</div>					
				</form>
			</div>
			
			<div id="personaltab" class="card mycard" >
				<div class="card-header" align="center">
					<h2>Personal Details
						<span>
							<button class="personalclick btn btn-primary" style="margin: 5px;float: right;" onclick="editpersonal()">
								Edit
							</button>
						</span>
					</h2>
				</div>
				<div class="col-md-12">
					<form action="uploadContent.php" method="post" onsubmit ="return checkeditpersonal()">

						<div class="card-body" style=" padding: 0px;" align="center">
							<table style="margin-top: 10px; margin-bottom: 10px;">
								<tr>
									<td class="NameHeadings mytbstyle">Name:</td>
									<td>
										<input class="pdetails" type="text" name="pdname" placeholder="<?php echo $fullname; ?>" disabled>
									</td>
								</tr>
								<!--<tr>
									<td class="NameHeadings mytbstyle">Email:</td>
									<td>
										<input class="pdetails" type="email" name="pdemail" placeholder="<?php echo $email; ?>" disabled>
									</td>
								</tr>-->
								<tr>
									<td class="NameHeadings mytbstyle">Phone:</td>
									<td>
										<input class="pdetails" type="text" name="pdphone" placeholder="<?php echo $contact; ?>" disabled>
									</td>
								</tr>
								<tr>
									<td class="NameHeadings mytbstyle">Department:</td>
									<td>
										<input class="pdetails" type="text" name="pddept" placeholder="<?php echo $department; ?>" disabled>
									</td>

								</tr>
								<tr>
									<td class="NameHeadings mytbstyle">Designation:</td>
									<td>
										<input class="pdetails" type="text" name="pddesg" placeholder="<?php echo $designation; ?>" disabled>
									</td>
								</tr>
								<tr>
									<td class="NameHeadings mytbstyle">Date of joining:</td>
									<td>
										<input class="pdetails" type="text" name="pddoj" placeholder="<?php echo $doj; ?>" disabled>
									</td>
								</tr>
								<tr>
									<td class="NameHeadings mytbstyle">Responsibility:</td>
									<td>
										<input class="pdetails" type="text" name="pdresp" placeholder="<?php echo $responsibility; ?>" disabled>
									</td>
								</tr>
							</table>
						</div>
						<div class="card-footer" align="center">
							<input type="submit" name="pdsubmit" value="Upload" class="btn btn-success">
						</div>
					</form>
				</div>
			</div>
			<!--QUALIFICATION -->
			<div id="qualifications" class="card mycard">
				<div class="card-header" align="center">
					<h2>Qualifications
						<span>
							<button class="personalclick btn btn-primary" data-toggle="modal" data-target="#myModal1" style="margin: 5px;float: right;" onclick="editpersonal()">
								Add Qualification
							</button>
						</span>
						<span>
							<button class="personalclick btn btn-primary" style="margin: 5px;float: right;" onclick="editqualifications()">
								Edit
							</button>
						</span>
					</h2>
				</div>

				<form action="uploadContent.php" method="post" onsubmit ="return checkeditqualifications()">
				
					<div class="card-body">

						<table class="table-striped table-bordered card-body table-responsive" id="qualificationstable" ">					
							<?php


							$sql1 = "SELECT * FROM qualifications WHERE eid = '$eid'";
							$result1 = $conn->query($sql1);

							if($result1->num_rows>0)
							{
								echo '<tr>
								<th class="mytbstyle">Level</th>
								<th>Degree</th>
								<th>Specialization</th>
								<th>Name of University</th>
								<th>Name of College</th>
								<th>Year of Passing</th>
								</tr>';
								$rowcnt = 0;
								while ($row1 = $result1->fetch_assoc()) 
								{
									$rowcnt = $rowcnt + 1;
									$rowname = "rowq".$rowcnt;
									$_SESSION[$rowname] = $row1;
			
			echo'<tr>
				<td><input class="qdetails mytbstyle" type="text" name="qlevel[]" placeholder="'.$row1["level"].'" disabled></td>
				<td><input class="qdetails mytbstyle" type="text" name="qdegree[]" placeholder="'.$row1["degree"].'" disabled></td>
				<td><input class="qdetails mytbstyle" type="text" name="qspec[]" placeholder="'.$row1["specialization"].'" disabled></td>
				<td><input class="qdetails mytbstyle" type="text" name="quname[]" placeholder="'.$row1["uname"].'" disabled></td>
				<td><input class="qdetails mytbstyle" type="text" name="qcollege[]" placeholder="'.$row1["college"].'" disabled></td>
				<td><input class="qdetails mytbstyle" type="text" name="qyear[]" placeholder="'.$row1["year"].'" disabled></td>
				</tr>';
								}
								$_SESSION['rowcntq'] = $rowcnt;
							} 
							else
							{
								echo '<tr><td class="mytbstyle">NA</td></tr>';
							}
							?>
						</table>
					</div>
 					<div class="card-footer" align="center">
						<input type="submit" name="qsubmit" value="Upload" class="btn btn-success">
					</div>
				</form>

			</div>

			<div id="experience" class="card mycard" >
				<div class="card-header" align="center">
					<h2>Experience
						<span>
							<button class="btn btn-primary" style="margin: 5px;float: right;" onclick="editexperience()">
								Edit
							</button>
						</span>
					</h2>
				</div>
				<form action="uploadContent.php" method="post" onsubmit="return checkeditexperience()">
					<table class="table-striped table-bordered" style="width: 100%;text-align: center;">
						<tr><th></th></tr>

						<tr><th class="CardHeader mytbstyle">Areas of Interest:</th></tr>
						<tr>
							<td>
								<input class="exdetails" type="text" name="exaoi" placeholder="<?php echo $aoi; ?>" disabled style="padding: 10px;">
							</td>
						</tr>

						<tr><th class="CardHeader mytbstyle">Teaching Experience:</th></tr>
						<tr>
							<td>
								<input class="exdetails" type="text" name="extexperience" placeholder="<?php echo $texperience; ?>" disabled style="padding: 10px;">
							</td>
						</tr>


						<tr><th class="CardHeader mytbstyle">Industrial Experience:</th></tr>
						<tr>
							<td>
								<input class="exdetails" type="text" name="exiexperience" placeholder="<?php echo $iexperience; ?>" disabled style="padding: 10px;">
							</td>
						</tr>


						<!--tr><th class="CardHeader mytbstyle">Other details:</th></tr>
						<tr>
							<td>
								<input class="exdetails" type="text" name="exother" placeholder="<?php echo $other; ?>" disabled style="padding: 10px;">
							</td>
						</tr-->

					</table>
					<div class="card-footer" align="center" style="margin-top: 0px;">
						<input type="submit" name="exsubmit" value="Upload" class="btn btn-success">
					</div>
				</form>
			</div>

			<div class="card mycard" id="journals" style="margin-bottom: 10px;">
				<div class="card-header" align="center">
					<h2>Journal Details
						<span>
							<button class="personalclick btn btn-primary" data-toggle="modal" data-target="#myModal2" style="margin: 5px;float: right;" onclick="editpersonal()">
								Add Journal
							</button>
						</span>
						<span>
							<button class="btn btn-primary" style="margin: 5px;float: right;" onclick="editjournal()">
								Edit
							</button>
						</span>
					</h2>
				</div>
				<form action="uploadContent.php" method="post" onsubmit="return checkeditjournal()">
					<div class="card-body">
						<?php
						$sql1 = "SELECT * from journals WHERE eid = '$eid'";
						$result1 = $conn->query($sql1);
						echo '<table class="table-striped table-bordered card-body"  style="width: 100%;">';
						if($result1->num_rows>0)
						{
							echo'<h5>Total Number of Journals: <a href="#">'.$result1->num_rows.'</a></h5>
							
								<tr>
									<th class="mytbstyle">Journal Title</th>
									<th>Journal Type</th>
									<th>Journal Year</th>
									<th></th>
									
								</tr>';
								$rowcnt = 0;
								while($row1 = $result1->fetch_assoc())
								{
									$rowcnt = $rowcnt + 1;
									$rowname = "rowj".$rowcnt;
									$_SESSION[$rowname] = $row1;
			
									echo'<tr>
										<td><input class="jdetails mytbstyle" type="text" name="jtitle[]" placeholder="'.$row1["title"].'" disabled></td>
										<td><input class="jdetails mytbstyle" type="text" name="jtype[]" placeholder="'.$row1["type"].'" disabled></td>
										<td><input class="jdetails mytbstyle" type="text" name="jyear[]" placeholder="'.$row1["year"].'" disabled></td>
										<td><textarea class="jdetails mytbstyle" name="jdes[]" placeholder="'.$row1["description"].'" disabled style="width:100%;resize:none;"></textarea></td>
									</tr>';
								}	

								$_SESSION['rowcntj'] = $rowcnt;


								/*while($row1 = $result1->fetch_assoc())
								{
									echo'<tr>
										<td class="mytbstyle">'.$row1["title"].'</td>
										<td>'.$row1["type"].'</td>
										<td>'.$row1['year'].'</td>

										<td><button type="button" class="btn btn-light mybtn view_journal" name="view" id="'.$row1["jid"].'">View Details</button></td>
									</tr>';
								}*/	
								
						}
						else
						{
							echo "<tr><td class='mytbstyle'>NA</td></tr>";
						}
						echo'</table>';
						?>
					</div>	
					<div class="card-footer" align="center" style="margin-top: 0px;">
						<input type="submit" name="jsubmit" value="Upload" class="btn btn-success">
					</div>
				</form>
			</div>

			<div class="card mycard" id="books" style="margin-bottom: 10px;">
				<div class="card-header" align="center">
					<h2>Books Details
						<span>
							<button class="personalclick btn btn-primary" data-toggle="modal" data-target="#myModal3" style="margin: 5px;float: right;" onclick="editpersonal()">
								Add Book
							</button>
						</span>
						<span>
							<button class="btn btn-primary" style="margin: 5px;float: right;" onclick="editbooks()">
								Edit
							</button>
						</span>
					</h2>
				</div>
				<form action="uploadContent.php" method="post" onsubmit="return checkeditbooks()">
					<div class="card-body">
						<?php
						echo '<table class="table-striped table-bordered card-body"  style="width: 100%;">';
						$sql1 = "SELECT * FROM books WHERE eid = '$eid'";
						$result1 = $conn->query($sql1);						

						if($result1->num_rows>0)
						{
							echo'<h5>Total Number of Books: <a href="#">'.$result1->num_rows.'</a></h5>
							
								<tr>
									<th class="mytbstyle">Book Name</th>
									<th>Publication</th>
									<th>Published year</th>
									<th></th>
									
								</tr>';
								$rowcnt = 0;
								while($row1 = $result1->fetch_assoc())
								{
									$rowcnt = $rowcnt + 1;
									$rowname = "rowb".$rowcnt;
									$_SESSION[$rowname] = $row1;
			
									echo'<tr>
										<td><input class="bdetails mytbstyle" type="text" name="bname[]" placeholder="'.$row1["bname"].'" disabled></td>
										<td><input class="bdetails mytbstyle" type="text" name="bpub[]" placeholder="'.$row1["publication"].'" disabled></td>
										<td><input class="bdetails mytbstyle" type="text" name="byear[]" placeholder="'.$row1["year"].'" disabled></td>
										<td><textarea class="bdetails mytbstyle" name="bdes[]" placeholder="'.$row1["description"].'" disabled style="width:100%;resize:none;"></textarea></td>
									</tr>';
								}
								$_SESSION['rowcntb'] = $rowcnt;
						}
						else
						{
							echo "<tr><td class='mytbstyle'>NA</td></tr>";
						}
						echo '</table>';
						?>
					</div>	
					<div class="card-footer" align="center" style="margin-top: 0px;">
						<input type="submit" name="bsubmit" value="Upload" class="btn btn-success">
					</div>
				</form>
			</div>

			<div class="card mycard" id="conference" style="margin-bottom: 10px;">
				<div class="card-header" align="center">
					<h2>Conferences Details
						<span>
							<button class="personalclick btn btn-primary" data-toggle="modal" data-target="#myModal4" style="margin: 5px;float: right;" onclick="editpersonal()">
								Add new
							</button>
						</span>

						<span>
							<button class="btn btn-primary" style="margin: 5px;float: right;" onclick="editconferences()">
								Edit
							</button>
						</span>
					</h2>
				</div>
				<form action="uploadContent.php" method="post" onsubmit="return checkeditconferences()">
					<div class="card-body">
						<?php
						echo '<table class="table-striped table-bordered card-body"  style="width: 100%;">';
						$sql1 = "SELECT * FROM conferences WHERE eid = '$eid'";
						$result1 = $conn->query($sql1);
						if($result1->num_rows>0)
						{
							echo'<h5>Total Number of Conferences: <a href="#">'.$result1->num_rows.'</a></h5>
							
								<tr>
									<th class="mytbstyle">Conference Title</th>
									<th>Type</th>
									<th>Year</th>
									<th>Details</th>
								</tr>';
								$rowcnt = 0;
								while($row1 = $result1->fetch_assoc())
								{
									$rowcnt = $rowcnt + 1;
									$rowname = "rowc".$rowcnt;
									$_SESSION[$rowname] = $row1;
			
									echo'<tr>
										<td><input class="cdetails mytbstyle" type="text" name="ctitle[]" placeholder="'.$row1["ctitle"].'" disabled></td>
										<td><input class="cdetails mytbstyle" type="text" name="ctype[]" placeholder="'.$row1["ctype"].'" disabled></td>
										<td><input class="cdetails mytbstyle" type="text" name="cyear[]" placeholder="'.$row1["year"].'" disabled></td>
										<td><textarea class="cdetails mytbstyle" name="cdetails[]" placeholder="'.$row1["cdetails"].'" disabled style="width:100%;resize:none;"></textarea></td>
									</tr>';
								}
								$_SESSION['rowcntc'] = $rowcnt;
				
						}
						else
						{
							echo "<tr><td class='mytbstyle'>NA</td></tr>";
						}
						echo '</table>';
						?>
					</div>
					<div class="card-footer" align="center" style="margin-top: 0px;">
						<input type="submit" name="csubmit" value="Upload" class="btn btn-success">
					</div>
		
				</form>
				
			</div>

			<div class="card mycard" id="patents" style="margin-bottom: 10px;">

				<div class="card-header" align="center">
					<h2>Patents Details
						<span>
							<button class="personalclick btn btn-primary" data-toggle="modal" data-target="#myModal5" style="margin: 5px;float: right;" onclick="editpersonal()">
								Add Patent
							</button>
						</span>

						<span>
							<button class="btn btn-primary" style="margin: 5px;float: right;" onclick="editpatents()">
								Edit
							</button>
						</span>
					</h2>
				</div>

				<form action="uploadContent.php" method="post" onsubmit="return checkeditpatents()">
					<div class="card-body">
						<?php
						echo '<table class="table-striped table-bordered card-body table-responsive" style="width:100%">';
						$sql1 = "SELECT * FROM patent WHERE eid = '$eid'";
						$result1 = $conn->query($sql1);
						if($result1->num_rows>0)
						{
							echo'<p>Total Number of Patent: <a href="#">'.$result1->num_rows.'</a></p>
							
								<tr>
									<th class="mytbstyle">Patent Number</th>
									<th>Patent Title</th>
									<th>Assignee</th>
									<th>Country</th>
									<th>Year</th>
									<th>Web Address</th>
								</tr>';
								$rowcnt = 0;
								while($row1 = $result1->fetch_assoc())
								{
									$rowcnt = $rowcnt + 1;
									$rowname = "rowpp".$rowcnt;
									$_SESSION[$rowname] = $row1;
									echo'<tr>
										<td><input class="ptdetails mytbstyle" type="text" name="ptpatentno[]" placeholder="'.$row1["patentno"].'" disabled></td>
										<td><input class="ptdetails mytbstyle" type="text" name="pttitle[]" placeholder="'.$row1["ptitle"].'" disabled></td>
										<td><input class="ptdetails mytbstyle" type="text" name="ptassignee[]" placeholder="'.$row1["assignee"].'" disabled></td>
										<td><input class="ptdetails mytbstyle" type="text" name="ptcountry[]" placeholder="'.$row1["country"].'" disabled></td>
										<td><input class="ptdetails mytbstyle" type="text" name="ptyear[]" placeholder="'.$row1["year"].'" disabled></td>
										<td><input class="ptdetails mytbstyle" type="text" name="ptwebadd[]" placeholder="'.$row1["webadd"].'" disabled></td>		
									</tr>';
								}
								$_SESSION['rowcntpp'] = $rowcnt;
				
						}
						else
						{
							echo "<tr><td class='mytbstyle'>NA</td></tr>";
						}
						echo '</table>';
						?>
					</div>
					<div class="card-footer" align="center" style="margin-top: 0px;">
						<input type="submit" name="ptsubmit" value="Upload" class="btn btn-success">
					</div>
		
				</form>




			</div>

			<div class="card mycard" id="consultancy">

				<div class="card-header" align="center">
					<h2>Consultancy Details
						<span>
							<button class="personalclick btn btn-primary" data-toggle="modal" data-target="#myModal6" style="margin: 5px;float: right;" onclick="editpersonal()">
								Add Consultancy Details
							</button>
						</span>
						<span>
							<button class="btn btn-primary" style="margin: 5px;float: right;" onclick="editconsul()">
								Edit
							</button>
						</span>
					</h2>
				</div>
			
				<form action="uploadContent.php" method="post" onsubmit="return checkeditconsul()">
					<div class="card-body">
						<?php
							echo '<table class="table-striped table-bordered card-body table-responsive" style="width: 100%;">';
							$sql1 = "SELECT * FROM consultancy WHERE eid = '$eid'";
							$result1 = $conn->query($sql1);
							if($result1->num_rows>0)
							{
								echo'
									<tr>
									<th>Sr.No.</th>
									<th class="mytbstyle">Industry/Organization/Institute/University</th>
									<th>Start Date</th>
									<th>End Date</th>
									<th>Duration</th>
									<th>Amount</th>
									<th>Status</th>
									<th>Details</th>
									<th></th>		
									</tr>';
								$i=1;
								$rowcnt = 0;
								while($row1 = $result1->fetch_assoc())
								{
									$rowcnt = $rowcnt + 1;
									$rowname = "rowcd ".$rowcnt;
									$_SESSION[$rowname] = $row1;
									echo'<tr>
									<td class="mytbstyle">'.$i.'</td>
									<td><input class="conddetails mytbstyle" type="text" name="condioiu[]" placeholder="'.$row1["ioiu"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condsdate[]" placeholder="'.$row1["sdate"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condedate[]" placeholder="'.$row1["edate"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condduration[]" placeholder="'.$row1["duration"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condamount[]" placeholder="'.$row1["amount"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="condstatus[]" placeholder="'.$row1["status"].'" disabled></td>
									<td><input class="conddetails mytbstyle" type="text" name="conddetails[]" placeholder="'.$row1["details"].'" disabled></td>
									</tr>';
									/*<td><button type="button" class="btn btn-light mybtn view_book" name="condview[]" id="'.$row1["bid"].'">View Details</button></td>
									*/

								}
								$_SESSION['rowcntcd'] = $rowcnt;

							}
							else
							{
								echo "<tr><td class='mytbstyle'>NA</td></tr>";
							}
							echo '</table>';
						?>			
					</div>
					<div class="card-footer" align="center" style="margin-top: 0px;">
						<input type="submit" name="condsubmit" value="Upload" class="btn btn-success">
					</div>
				</form>
			
		</div>

		<div class="card mycard" id="frp">
				<div class="card-header" align="center">
					<h2>Funded Research Projects

						<span>
							<button class="personalclick btn btn-primary" data-toggle="modal" data-target="#myModal7" style="margin: 5px;float: right;" onclick="editpersonal()">
								Add Research Project
							</button>
						</span>

						<span>
							<button class="btn btn-primary" style="margin: 5px;float: right;" onclick="editfrp()">
								Edit
							</button>
						</span>
					</h2>
				</div>
				<form action="uploadContent.php" method="post" onsubmit="return checkeditfrp()">
					<div class="card-body">
						<?php
							echo '<table class="table-striped table-bordered card-body table-responsive" style="width: 100%;">';
							$sql1 = "SELECT * FROM fundedrp WHERE eid = '$eid'";
							$result1 = $conn->query($sql1);
							if($result1->num_rows>0)
							{
								echo'<p>Total Number of projects: <a href="#">'.$result1->num_rows.'</a></p>
									<tr>
									<th>Sr.No.</th>
									<th class="mytbstyle">Project Title</th>
									<th>PI & CO-PI</th>
									<th>Duration</th>
									<th>Funding Amount</th>
									<th>Funding Agency</th>
									<th>Remark</th>			
									</tr>';
								$i=1;
								$rowcnt = 0;
								while($row1 = $result1->fetch_assoc())
								{
									$rowcnt = $rowcnt + 1;
									$rowname = "rowfrp".$rowcnt;
									$_SESSION[$rowname] = $row1;
									echo'<tr>
									<td class="mytbstyle">'.$i.'</td>
									<td><input class="frpdetails mytbstyle" type="text" name="frptitle[]" placeholder="'.$row1["ptitle"].'" disabled></td>
									<td><input class="frpdetails mytbstyle" type="text" name="frpicoi[]" placeholder="'.$row1["picoi"].'" disabled></td>
									<td><input class="frpdetails mytbstyle" type="text" name="frpduration[]" placeholder="'.$row1["duration"].'" disabled></td>
									<td><input class="frpdetails mytbstyle" type="text" name="frpfamount[]" placeholder="'.$row1["famount"].'" disabled></td>
									<td><input class="frpdetails mytbstyle" type="text" name="frpfegency[]" placeholder="'.$row1["fegency"].'" disabled></td>
									<td><input class="frpdetails mytbstyle" type="text" name="frpremark[]" placeholder="'.$row1["remark"].'" disabled></td>
									</tr>';
								}
								$_SESSION['rowcntfrp'] = $rowcnt;
							}
							else
							{
								echo "<tr><td class='mytbstyle'>NA</td></tr>";
							}
							echo '</table>';
						?>			
					</div>
					<div class="card-footer" align="center" style="margin-top: 0px;">
						<input type="submit" name="frpsubmit" value="Upload" class="btn btn-success">
					</div>
				</form>
			
		</div>

		<div class="card mycard" id="CVupload">
		
				<!--<tr><td class="CardHeader" style="padding: 10px;">Conference Details</td></tr>
				<tr><td class="mytbstyle"><p>Total Number of Conferences: <a href="#">04</a></p></td></tr>

					<tr><td class="CardHeader" style="padding: 10px;">Curriculum Vitae:</td></tr>
					<tr><td class="mytbstyle"><a href="<?php $cv; ?>" target=" ">Click</a> to view Complete CV </p></td></tr>-->
				<form action="uploadContent.php" method="post" enctype="multipart/form-data">

					<div class="card-header" align="center"><h2>Curriculum Vitae</h2></div>
					<div class="card-body" align="center">
						<p><a href="<?php echo($cv) ?>" target=" ">Click</a> to view Complete CV</p>
						<input class="btn btn-info" type="file" accept="application/pdf" name="fileToUpload" id="fileToUpload">
					</div>
					<div class="card-footer" align="center">
						<input type="submit" name="ccvsubmit" value="Upload" class="btn btn-success">
					</div>					
				</form>



		</div>
	
		<div class="card mycard" id ="other">
			<div class="card-header" align="center">
					<h2>Other Details
						<span>
							<button class="btn btn-primary" style="margin: 5px;float: right;" onclick="editotherdetails()">
								Edit
							</button>
						</span>
					</h2>
			</div>  
			<form action="uploadContent.php" method="post" onsubmit="return checkeditotherdetails()">
				<table class="table-striped table-bordered" style="width: 100%; text-align: center;">
					<tr><th></th></tr>
							<tr>
								<td>
									<input class="oddetails" type="text" name="odother" placeholder="<?php echo $other; ?>" disabled style="padding: 10px;">
								</td>
							</tr>
				</table>
				<div class="card-footer" align="center" style="margin-top: 0px;">
					<input type="submit" name="odsubmit" value="Upload" class="btn btn-success">
				</div>
			</form>
		</div>
	</div>


	<!-- The Modal Add new qualification -->
		<div class="modal fade" id="myModal1">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add Qualification</h4>
		        
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		         
		      </div>
		      <p class="mandatory">(* All Fields Are Required!!!)</p>
		      <!-- Modal body -->
		      <div class="modal-body">

		        <form action="SendToAdmin.php" method="POST">
				  <div class="form-group">
				   	<label for="level">Level:<span class="mandatory">*</span></label><br>	
				    <select name="level" class="myselect" onchange="AdjustDegree(this.id, 'degree')" id="level">
				    	<option value="">Select Level</option>
				    	<option value="Graduate">Graduate</option>
				    	<option value="Post-Graduate">Post-Graduate</option>
				    	<option value="PhD">Phd</option>
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="degree">Degree:<span class="mandatory">*</span></label><br>	
				    <select name="degree" class="myselect" id="degree">
				    	<option>Select Degree</option>
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="email">Specialization:<span class="mandatory">*</span></label>
				    <input type="text" class="form-control" id="email" name="specialization">
				  </div>

				  <div class="form-group">
				    <label for="email">Name of University:<span class="mandatory">*</span></label>
				    <input type="text" class="form-control" id="email" name="nou">
				  </div>

				  <div class="form-group">
				    <label for="email">Name of College:<span class="mandatory">*</span></label>
				    <input type="text" class="form-control" id="email" name="college">
				  </div>

				  <div class="form-group">
				    <label for="email">Year of Passing:<span class="mandatory">*</span></label>
				    <input type="text" class="form-control" id="email" name="year">
				  </div>
				  <button type="submit" name="submitQualifications" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>


		<!-- The Modal Add new journal -->
		<div class="modal fade" id="myModal2">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add Journal</h4>
		        
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		         
		      </div>
		      <p class="mandatory">(* All Fields Are Required!!!)</p>
		      <!-- Modal body -->
		      <div class="modal-body">

		        <form action="SendToAdmin.php" method="POST">
				  <div class="form-group">
				   	<label for="level">Journal Title:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="journaltitle">
				  </div>

				  <div class="form-group">
				    <label for="level">Journal Type:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="journaltype">
				  </div>

				  <div class="form-group">
				    <label for="level">Year of Publication:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="year">
				  </div>

				  <div class="form-group">
				    <label for="level">Journal Details:<span class="mandatory">*</span></label><br>	
				    <textarea class="mytextarea" rows="10" name="details"> 
				    	
				    </textarea>
				  </div>

				 
				  <button type="submit" name="submitJournal" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>


		<!-- The Modal Add new books -->
		<div class="modal fade" id="myModal3">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add Book</h4>
		        
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		         
		      </div>
		      <p class="mandatory">(* All Fields Are Required!!!)</p>
		      <!-- Modal body -->
		      <div class="modal-body">

		        <form action="SendToAdmin.php" method="POST">
				  <div class="form-group">
				   	<label for="level">Book Name:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="bookname">
				  </div>

				  <div class="form-group">
				    <label for="level">Publication:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="publication">
				  </div>

				  <div class="form-group">
				    <label for="level">Year of Publication:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="year">
				  </div>

				  <div class="form-group">
				    <label for="level">Book Details:<span class="mandatory">*</span></label><br>	
				    <textarea class="mytextarea" rows="10" name="details"> 
				    	
				    </textarea>
				  </div>

				 
				  <button type="submit" name="submitBook" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>


		<!-- The Modal Add new conference -->
		<div class="modal fade" id="myModal4">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add New Conference Details</h4>
		        
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		         
		      </div>
		      <p class="mandatory">(* All Fields Are Required!!!)</p>
		      <!-- Modal body -->
		      <div class="modal-body">

		        <form action="SendToAdmin.php" method="POST">
				  <div class="form-group">
				   	<label for="level">Conference Title:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="conferencetitle">
				  </div>

				  <div class="form-group">
				    <label for="level">Conderence Type:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="conferencetype">
				  </div>

				  <div class="form-group">
				    <label for="level">Year:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="year">
				  </div>

				  <div class="form-group">
				    <label for="level">Conference Details:<span class="mandatory">*</span></label><br>	
				    <textarea class="mytextarea" rows="10" name="details"> 
				    	
				    </textarea>
				  </div>

				 
				  <button type="submit" name="submitConference" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>


		<!-- The Modal Add new Patents -->
		<div class="modal fade" id="myModal5">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add New Patent Details</h4>
		        
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		         
		      </div>
		      <p class="mandatory">(* All Fields Are Required!!!)</p>
		      <!-- Modal body -->
		      <div class="modal-body">

		        <form action="SendToAdmin.php" method="POST">
				  <div class="form-group">
				   	<label for="level">Patent Number:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="patentnumber">
				  </div>

				  <div class="form-group">
				    <label for="level">Patent Title:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="patenttitle">
				  </div>

				   <div class="form-group">
				    <label for="level">Page Numbers:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="pagenos">
				  </div>

				  <div class="form-group">
				    <label for="level">Assignee:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="assignee">
				  </div>

				  <div class="form-group">
				    <label for="level">Country:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="country">
				  </div>

				  <div class="form-group">
				    <label for="level">Year:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="year">
				  </div>

				  <div class="form-group">
				    <label for="level">Web Address:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="webaddress">
				  </div>

				 
				  <button type="submit" name="submitPatent" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>


		<!-- The Modal Add new consultancy -->
		<div class="modal fade" id="myModal6">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add Consultancy Details</h4>
		        
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		         
		      </div>
		      <p class="mandatory">(* All Fields Are Required!!!)</p>
		      <!-- Modal body -->
		      <div class="modal-body">

		        <form action="SendToAdmin.php" method="POST">
				  <div class="form-group">
				   	<label for="level">Industry/Organization/Institute/University:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="ioiu">
				  </div>

				  <div class="form-group">
				    <label for="level">Start Date:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="sdate" placeholder="DD/MM/YYYY">
				  </div>

				   <div class="form-group">
				    <label for="level">End Date:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="edate" placeholder="DD/MM/YYYY">
				  </div>

				  <div class="form-group">
				    <label for="level">Duration:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="duration">
				  </div>

				  <div class="form-group">
				    <label for="level">Amount Received:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="areceived">
				  </div>

				  <div class="form-group">
				    <label for="level">Status:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="status">
				  </div>

				  <div class="form-group">
				    <label for="level">Consultancy Details:<span class="mandatory">*</span></label><br>	
				    <textarea class="mytextarea" name="details" rows="10">
				    	
				    </textarea>
				  </div>

				 
				  <button type="submit" name="submitConsultancy" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>


		<!-- The Modal Add new fundedrp -->
		<div class="modal fade" id="myModal7">
		  <div class="modal-dialog modal-dialog-centered modal-lg">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Add Research Project</h4>
		        
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		         
		      </div>
		      <p class="mandatory">(* All Fields Are Required!!!)</p>
		      <!-- Modal body -->
		      <div class="modal-body">

		        <form action="SendToAdmin.php" method="POST">
				  <div class="form-group">
				   	<label for="level">Project Title:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="title">
				  </div>

				  <div class="form-group">
				    <label for="level">PI & CO-PI:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="picoi">
				  </div>

				   <div class="form-group">
				    <label for="level">Duration:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="duration">
				  </div>

				  
				  <div class="form-group">
				    <label for="level">Funding Amount:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="famount">
				  </div>

				  <div class="form-group">
				    <label for="level">Funding Agency:<span class="mandatory">*</span></label><br>	
				    <input type="text" class="form-control" id="email" name="fagency">
				  </div>

				  <div class="form-group">
				    <label for="level">Remark:<span class="mandatory">*</span></label><br>	
				    <textarea class="mytextarea" name="remark" rows="5">
				    	
				    </textarea>
				  </div>

				 
				  <button type="submit" name="submitFundedrp" class="btn btn-primary">Submit</button>
				</form>

		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>

		    </div>
		  </div>
		</div>
</body>
</html>
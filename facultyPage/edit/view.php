<?php

include "connect.php";

$eid = 'I2K15101931';
//echo $eid;
$sql = "SELECT image,fullname,contact,department,designation,responsibility,aoi,texperience,iexperience,other,cv FROM Faculty F WHERE F.eid = '$eid'";
$query = $conn->query($sql);
if ($query) 
{
	$row = $query->fetch_assoc();
	$img = $row['image'];
	$fullname = $row['fullname'];
	$contact = $row['contact'];
	$department = $row['department'];
	$designation = $row['designation'];
	$responsibility = $row['responsibility'];
	$aoi = $row['aoi'];
	$texperience = $row['texperience'];
	$iexperience = $row['iexperience'];
	$other = $row['other'];
	$cv = $row['cv'];
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Faculty Portal|View Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=0.4, maximum-scale=0.5">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<link rel="stylesheet" type="text/css" href="view.css">
</head>
<body>
	<div class="container-fluid">	
		<!--Card with Initial Information and images-->
			<div class="card mycard">
				<p class="CardHeader"><b>Teacher's Photo and Personal Details:</b></p>
				<div class="col-md-12">
					<img class=" img-responsive myimg" src="<?php echo($img) ?>" alt="Faculty Photos">

					<div class="card-body" style="margin-left: 300px; padding: 0px;">
						<table style="margin-top: 15px;">
							<tr>
								<td class="NameHeadings mytbstyle">Name:</td>
								<td><?php echo $fullname; ?></td>
							</tr>
							<tr>
								<td class="NameHeadings mytbstyle">Email:</td>
								<td>aditya9707@gmail.com</td>
							</tr>
							<tr>
								<td class="NameHeadings mytbstyle">Phone:</td>
								<td><?php echo $contact; ?></td>
							</tr>
							<tr>
								<td class="NameHeadings mytbstyle">Department:</td>
								<td><?php echo $department; ?></td>
							</tr>
							<tr>
								<td class="NameHeadings mytbstyle">Designation:</td>
								<td><?php echo $designation; ?></td>
							</tr>
							<tr>
								<td class="NameHeadings mytbstyle">Responsibility:</td>
								<td><?php echo $responsibility; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		<!--Navigation bar to traverse through the profile-->
		<!--<div id="navBar" class="card mycard">
			<nav class="navbar navbar-expand-sm bg-light navbar-light">
  				<ul class="navbar-nav">
    				<li class="nav-item active">
      					<a class="nav-link" href="#">Qualifiactions</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="#">Journals</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="#">Projects</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="#">Books</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="#">Conferences</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="#">Patents</a>
    				</li>
  				</ul>
			</nav>
		</div>-->

		<!--Qualification Details Table-->
		<div id="Qualifications" class="card mycard">
			<p class="CardHeader"><b>Qualifications:</b></p>
			<table class="table-striped table-bordered card-body">
				
				<?php

				$sql1 = "SELECT * FROM Qualifications WHERE eid = '$eid'";
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
					while ($row1 = $result1->fetch_assoc()) 
					{
						echo'<tr>
								<td class="mytbstyle">'.$row1["level"].'</td>
								<td>'.$row1["degree"].'</td>
								<td>'.$row1["specialization"].'</td>
								<td>'.$row1["uname"].'</td>
								<td>'.$row1["college"].'</td>
								<td>'.$row1["year"].'</td>
							</tr>';
					}	
				} 
				else
				{
					echo '<tr><td class="mytbstyle">NA</td></tr>';
				}
				
				?>
			</table>
		</div>


		<!--<div class="card" style="margin: 0% 5%;">
			<p class="CardHeader"><b>Areas of Interest:</b></p>
			<p>DATA SECURITY, MACHINE LEARNING, BRAIN COMPUTER INTERFACE</p>
		</div>

		<div class="card" style="margin: 0% 5%;">
			<p class="CardHeader"><b>Teaching Experience:</b></p>
			<p>15 years 6 months</p>
		</div>

		<div class="card" style="margin: 0% 5%;">
			<p class="CardHeader"><b>Industrial Experience:</b></p>
			<p>0 years 0 months</p>
		</div>

		<div class="card" style="margin: 0% 5%;">
			<p class="CardHeader"><b>Other details:</b></p>
			<p>worked in various committee's in College level.</p>
		</div>-->
		<div class="card mycard">
			<table class="table-striped table-bordered">
				<tr><th></th></tr>

				<tr><th class="CardHeader mytbstyle">Areas of Interest:</th></tr>
				<tr><td style="padding: 10px;"><?php echo $aoi; ?></td></tr>

				<tr><th class="CardHeader mytbstyle">Teaching Experience:</th></tr>
				<tr><td style="padding: 10px;"><?php echo $texperience; ?></td></tr>

				<tr><th class="CardHeader mytbstyle">Industrial Experience:</th></tr>
				<tr><td style="padding: 10px;"><?php echo $iexperience; ?></td></tr>

				<tr><th class="CardHeader mytbstyle">Other details:</th></tr>
				<tr><td style="padding: 10px;"><?php echo $other; ?></td></tr>
			</table>
			
		</div>

		<div  class="card mycard" style="padding-bottom: 30px;">
			<p class="CardHeader"><b>Publications:</b></p>
			<!-- Journal Details-->
			<div class="card mycard" id="Journals" style="margin-bottom: 10px;">
				<p class="CardHeader">Journal Details:</p>
				<?php
				$sql1 = "SELECT * from Journals WHERE eid = '$eid'";
				$result1 = $conn->query($sql1);
				echo '<table class="table-striped table-bordered card-body">';
				if($result1->num_rows>0)
				{
					echo'<p>Total Number of Journals: <a href="#">'.$result1->num_rows.'</a></p>
					
						<tr>
							<th class="mytbstyle">Journal Title</th>
							<th>Journal Type</th>
							<th>Journal Year</th>
							<th></th>
							
						</tr>';
						while($row1 = $result1->fetch_assoc())
						{
							echo'<tr>
								<td class="mytbstyle">'.$row1["title"].'</td>
								<td>'.$row1["type"].'</td>
								<td>'.$row1['year'].'</td>
								<td><button type="button" class="btn btn-light mybtn view_journal" name="view" id="'.$row1["jid"].'">View Details</button></td>
							</tr>';
						}	
						
				}
				else
				{
					echo "<tr><td class='mytbstyle'>NA</td></tr>";
				}
				echo'</table>';
				?>
			</div>


			<!-- Book Details-->
			<div class="card mycard" id="Journals" style="margin-bottom: 10px;">
				<p class="CardHeader">Book Details:</p>

				<?php
				echo '<table class="table-striped table-bordered card-body">';
				$sql1 = "SELECT * FROM Books WHERE eid = '$eid'";
				$result1 = $conn->query($sql1);
				if($result1->num_rows>0)
				{
					echo'<p>Total Number of Books: <a href="#">'.$result1->num_rows.'</a></p>
					
						<tr>
							<th class="mytbstyle">Book Name</th>
							<th>Publication</th>
							<th>Published year</th>
							<th></th>
							
						</tr>';
						while($row1 = $result1->fetch_assoc())
						{
							echo'<tr>
								<td class="mytbstyle">'.$row1["bname"].'</td>
								<td>'.$row1["publication"].'</td>
								<td>'.$row1["year"].'</td>
								<td><button type="button" class="btn btn-light mybtn view_book" name="view" id="'.$row1["bid"].'">View Details</button></td>
							</tr>';
						}
				}
				else
				{
					echo "<tr><td class='mytbstyle'>NA</td></tr>";
				}
				echo '</table>';
				?>
			</div>


			<div class="card mycard" id="Journals" style="margin-bottom: 10px;">
				<p class="CardHeader">Patent Details:</p>

				<?php
				echo '<table class="table-striped table-bordered card-body">';
				$sql1 = "SELECT * FROM Patent WHERE eid = '$eid'";
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
						while($row1 = $result1->fetch_assoc())
						{
							echo'<tr>
								<td class="mytbstyle">'.$row1["patentno"].'</td>
								<td>'.$row1["ptitle"].'</td>
								<td>'.$row1["assignee"].'</td>
								<td>'.$row1["country"].'</td>
								<td>'.$row1["year"].'</td>
								<td><a href="'.$row1["webadd"].'" target=" ">'.$row1["webadd"].'</a></td>
								
							</tr>';
						}
				}
				else
				{
					echo "<tr><td class='mytbstyle'>NA</td></tr>";
				}
				echo '</table>';
				?>
			</div>


			<div class="card mycard" id="Journals" style="margin-bottom: 10px;">
				<p class="CardHeader">Conferences Details:</p>

				<?php
				echo '<table class="table-striped table-bordered card-body">';
				$sql1 = "SELECT * FROM Conferences WHERE eid = '$eid'";
				$result1 = $conn->query($sql1);
				if($result1->num_rows>0)
				{
					echo'<p>Total Number of Conferences: <a href="#">'.$result1->num_rows.'</a></p>
					
						<tr>
							<th class="mytbstyle">Conference Title</th>
							<th>Type</th>
							<th>Year</th>
							<th>Details</th>
						</tr>';
						while($row1 = $result1->fetch_assoc())
						{
							echo'<tr>
								<td class="mytbstyle">'.$row1["ctitle"].'</td>
								<td>'.$row1["ctype"].'</td>
								<td>'.$row1["year"].'</td>
								<td>'.$row1["cdetails"].'</td>
							</tr>';
						}
				}
				else
				{
					echo "<tr><td class='mytbstyle'>NA</td></tr>";
				}
				echo '</table>';
				?>
			</div>


			<!--div class="card mycard">
				<table class="table-striped table-bordered">
					<tr><th></th></tr>

					<tr><td class="CardHeader" style="padding: 10px;">Patent Details:</td></tr>
					<tr><td class="mytbstyle"><p>Total Number of Patents: <a href="#">00</a></p></td></tr>

					<tr><td class="CardHeader" style="padding: 10px;">Conference Details</td></tr>
					<tr><td class="mytbstyle"><p>Total Number of Conferences: <a href="#">04</a></p></td></tr>

					<!--<tr><td class="CardHeader" style="padding: 10px;">Curriculum Vitae:</td></tr>
					<tr><td class="mytbstyle"><a href="<?php echo $cv; ?>" target=" ">Click</a> to view Complete CV </p></td></tr>
				</table>
			</div-->
		</div>
		<!-- Modal for journal details -->
		<div class="modal fade" id="dataModal1">
  			<div class="modal-dialog modal-xl modal-dialog-centered">
    			<div class="modal-content">

			      <!-- Modal Header -->
			      <div class="modal-header">
			        <h4 class="modal-title CardHeader">Journals Published by <?php echo $fullname; ?></h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>

			      <!-- Modal body -->
			      <div class="modal-body" id="journal_detail">

			      	
			      </div>

			      <!-- Modal footer -->
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			      </div>
    			</div>
  			</div>
		</div>

		<script>
			$(document).ready(function(){
				$('.view_journal').click(function(){
					var journal_id = $(this).attr("id");	

					$.ajax({
						url:'select_description.php',
						method:"POST",
						data: {journal_id:journal_id},
						success:function(data){
							$('#journal_detail').html(data);
							$('#dataModal1').modal("show");
						}
					});

					
				});
			});
		</script>


		<!-- Modal for Book details -->
		<div class="modal fade" id="dataModal2">
  			<div class="modal-dialog modal-lg modal-dialog-centered">
    			<div class="modal-content">

			      <!-- Modal Header -->
			      <div class="modal-header">
			        <h4 class="modal-title CardHeader">Books Published by <?php echo $fullname; ?></h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>

			      <!-- Modal body -->
			      <div class="modal-body" id="book_detail">

			      	
			      </div>

			      <!-- Modal footer -->
			      <div class="modal-footer">
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			      </div>
    			</div>
  			</div>
		</div>

		<script>
			$(document).ready(function(){
				$('.view_book').click(function(){
					var book_id = $(this).attr("id");

					$.ajax({
						url:"select_book_details.php",
						method:"POST",
						data:{book_id:book_id},
						success:function(data){
							$('#book_detail').html(data);
							$('#dataModal2').modal("show");
						}
					});
					
				});
			});
		</script>

		<div class="card mycard" id="frp">
			<p class="CardHeader"><b>Funded Research Projects:</b></p>

			<?php
				echo '<table class="table-striped table-bordered card-body">';
				$sql1 = "SELECT * FROM Fundedrp WHERE eid = '$eid'";
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
					while($row1 = $result1->fetch_assoc())
					{
						echo'<tr>
						<td class="mytbstyle">'.$i.'</td>
						<td>'.$row1["ptitle"].'</td>
						<td>'.$row1["picoi"].'</td>
						<td>'.$row1["duration"].'</td>
						<td>'.$row1["famount"].'</td>
						<td>'.$row1["fegency"].'</td>
						<td>'.$row1["remark"].'</td>
						
						</tr>';
					}
				}
				else
				{
					echo "<tr><td class='mytbstyle'>NA</td></tr>";
				}
				echo '</table>';
			?>
		</div>

		<div class="card mycard" id="consultancy">
			<p class="CardHeader"><b>Consultancy Details:</b></p>

			<?php
				echo '<table class="table-striped table-bordered card-body">';
				$sql1 = "SELECT * FROM Consultancy WHERE eid = '$eid'";
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
						<th></th>		
						</tr>';
					$i=1;
					while($row1 = $result1->fetch_assoc())
					{
						echo'<tr>
						<td class="mytbstyle">'.$i.'</td>
						<td>'.$row1["ioiu"].'</td>
						<td>'.$row1["year"].'</td>
						<td>'.$row1["sdate"].'</td>
						<td>'.$row1["edate"].'</td>
						<td>'.$row1["duration"].'</td>
						<td><button type="button" class="btn btn-light mybtn view_book" name="view" id="'.$row1["bid"].'">View Details</button></td>
						</tr>';
					}
				}
				else
				{
					echo "<tr><td class='mytbstyle'>NA</td></tr>";
				}
				echo '</table>';
			?>
		</div>

		<div class="card mycard">
			<table class="table-striped table-bordered">
				<tr><th></th></tr>

				<tr><th class="CardHeader" style="padding: 10px;">Curriculum Vitae:</th></tr>
				<tr><td class="mytbstyle"><a href="<?php $cv; ?>" target=" ">Click</a> to view Complete CV </p></td></tr>
				<!--<tr><td class="CardHeader" style="padding: 10px;">Conference Details</td></tr>
				<tr><td class="mytbstyle"><p>Total Number of Conferences: <a href="#">04</a></p></td></tr>

					<tr><td class="CardHeader" style="padding: 10px;">Curriculum Vitae:</td></tr>
					<tr><td class="mytbstyle"><a href="<?php $cv; ?>" target=" ">Click</a> to view Complete CV </p></td></tr>-->
			</table>
		</div>

	</div>
</body>
</html>
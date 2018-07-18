<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>
<?php 
$server = "localhost";
$uname="root";
$password="";
$db="PICT";
$conn = mysqli_connect($server,$uname,$password,$db);

if(isset($_POST['view_id']))
{
	$id = $_POST['view_id'];

}

$arr = explode("#",$id);

$tname = $arr[0];

$ref = $arr[1];

$ioru = $arr[2];




if($ioru=='i')
{
switch ($tname) {

	case 'tqualifications':
		echo '<h2>Qualifications</h2><br><br>';
		$sql = "SELECT * FROM tqualifications where qid = '$ref'";
		$result = $conn->query($sql);
		if($result)
		{

			$row = $result->fetch_assoc();
			//echo $row['eid'];
			//echo $ioru;
		echo '<table class ="table table-striped table-bordered" style="margin-top:-300px;">
					<tr><td><b class="">Field</b></td><td>Value</td></tr><br><br>
					<tr><td><b class="">EID </b></td><td>'.$row['eid'].'</td></tr><br><br>

					<tr><td><b class="CardHeader">Level </b></td><td>'.$row['level'].'</td></tr><br><br>
					<tr><td><b class="CardHeader">Degree </b></td><td>'.$row['degree'].'</td></tr><br><br>
					<tr><td><b class="CardHeader">Specialization </b></td><td>'.$row['specialization'].'</td></tr><br><br>
					<tr><td><b class="CardHeader">University </b></td><td>'.$row['uname'].'</td></tr><br><br>
					<tr><td><b class="CardHeader">College </b></td><td>'.$row['college'].'</td></tr><br><br>
					<tr><td><b class="CardHeader">Year </b></td><td>'.$row['year'].'</td></tr><br><br>
				</table>';
			}
		break;
	
	case 'tconferences':
		echo '<h2>Conference</h2><br><br><br><br>';
									$sql = "SELECT * FROM tconferences where cid = '$ref'";
									$result = $conn->query($sql);
									if($result)
									{

									$row = $result->fetch_assoc();
									//echo $row['eid'];
									//echo $ioru;
									echo '<table class ="table table-striped table-bordered" style="margin-top:-300px;">
											<tr><td><b class="">Field</b></td><td>Value</td></tr><br><br>
											<tr><td><b class="">EID </b></td><td>'.$row['eid'].'</td></tr><br><br>

											<tr><td><b class="CardHeader">Title </b></td><td>'.$row['ctitle'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Year </b></td><td>'.$row['year'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Type </b></td><td>'.$row['ctype'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Details </b></td><td>'.$row['cdetails'].'</td></tr><br><br>
											
										</table>';
									}		

			break;

	case 'tconsultancy':
		echo '<h2>Consultancy</h2><br><br><br><br>';
									$sql = "SELECT * FROM tconsultancy where csid = '$ref'";
									$result = $conn->query($sql);
									if($result)
									{

									$row = $result->fetch_assoc();
									//echo $row['eid'];
									//echo $ioru;
									echo '<table class ="table table-striped table-bordered" style="margin-top:-300px;">
											<tr><td><b class="">Field</b></td><td>Value</td></tr><br><br>
											<tr><td><b class="">EID </b></td><td>'.$row['eid'].'</td></tr><br><br>

											<tr><td><b class="CardHeader">Ioui </b></td><td>'.$row['ioiu'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Start Date </b></td><td>'.$row['sdate'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">End Date </b></td><td>'.$row['edate'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Duration </b></td><td>'.$row['duration'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Amount </b></td><td>'.$row['amount'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Status </b></td><td>'.$row['status'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Details </b></td><td>'.$row['details'].'</td></tr><br><br>
											
										</table>';
									}		

	break;

	case 'tfundedrp':
		echo '<h2>Funded Research projects</h2><br><br><br><br>';
									$sql = "SELECT * FROM tfundedrp where fid = '$ref'";
									$result = $conn->query($sql);
									if($result)
									{

									$row = $result->fetch_assoc();
									//echo $row['eid'];
									//echo $ioru;
									echo '<table class ="table table-striped table-bordered" style="margin-top:-300px;">
											<tr><td><b class="">Field</b></td><td>Value</td></tr><br><br>
											<tr><td><b class="">EID </b></td><td>'.$row['eid'].'</td></tr><br><br>

											<tr><td><b class="CardHeader">Title </b></td><td>'.$row['ptitle'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Picoi </b></td><td>'.$row['picoi'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Duration </b></td><td>'.$row['duration'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Amount </b></td><td>'.$row['famount'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Agency </b></td><td>'.$row['fegency'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Remarks </b></td><td>'.$row['remark'].'</td></tr><br><br>
											
										</table>';
									}		

		break;



		case 'tpatent':
		echo '<h2>Patents</h2><br><br>';
									$sql = "SELECT * FROM tpatent where pid = '$ref'";
									$result = $conn->query($sql);
									if($result)
									{

									$row = $result->fetch_assoc();
									//echo $row['eid'];
									//echo $ioru;
									echo '<table class ="table table-striped table-bordered" style="margin-top:-300px;">
											<tr><td><b class="">Field</b></td><td>Value</td></tr><br><br>
											<tr><td><b class="">EID </b></td><td>'.$row['eid'].'</td></tr><br><br>

											<tr><td><b class="CardHeader">Title </b></td><td>'.$row['ptitle'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Year </b></td><td>'.$row['year'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Country </b></td><td>'.$row['country'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Assignee </b></td><td>'.$row['assignee'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Patent no. </b></td><td>'.$row['tpatentno'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Web Address </b></td><td>'.$row['webadd'].'</td></tr><br><br>
										</table>';
									}		

			break;





			case 'tbooks':
		echo '<h2>Books</h2><br><br><br><br>';
									$sql = "SELECT * FROM tbooks where bid = '$ref'";
									$result = $conn->query($sql);
									if($result)
									{

									$row = $result->fetch_assoc();
									//echo $row['eid'];
									//echo $ioru;
									echo '<table class ="table table-striped table-bordered" style="margin-top:-300px;">
											<tr><td><b class="">Field</b></td><td>Value</td></tr><br><br>
											<tr><td><b class="">EID </b></td><td>'.$row['eid'].'</td></tr><br><br>

											<tr><td><b class="CardHeader">Title </b></td><td>'.$row['bname'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Year </b></td><td>'.$row['year'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Type </b></td><td>'.$row['publication'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Details </b></td><td>'.$row['description'].'</td></tr><br><br>
											
										</table>';
									}		

			break;




			case 'tjournals':
		echo '<h2>Journals</h2><br><br><br><br>';
									$sql = "SELECT * FROM tjournals where jid = '$ref'";
									$result = $conn->query($sql);
									if($result)
									{

									$row = $result->fetch_assoc();
									//echo $row['eid'];
									//echo $ioru;
									echo '<table class ="table table-striped table-bordered" style="margin-top:-300px;">
											<tr><td><b class="">Field</b></td><td>Value</td></tr><br><br>
											<tr><td><b class="">EID </b></td><td>'.$row['eid'].'</td></tr><br><br>

											<tr><td><b class="CardHeader">Title </b></td><td>'.$row['jtitle'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Year </b></td><td>'.$row['year'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Type </b></td><td>'.$row['type'].'</td></tr><br><br>
											<tr><td><b class="CardHeader">Details </b></td><td>'.$row['description'].'</td></tr><br><br>
											
										</table>';
									}		

			break;




		
		
}
}
else
{
	
	$sql1 = "SELECT * FROM temp where tid = '$ioru'";
									$result1 = $conn->query($sql1);
									if($result1)
									{$row1 = $result1->fetch_assoc();
									
									echo '<h2>Updation in the field '.$row1["tname"].'</h2><br>
									<table class ="table table-striped table-bordered" style="margin-top:-50px;">
											<tr><td><b class="">Parameter name</b></td><td>Value</td></tr><br><br>
											<tr><td><b class="">'.$row1["pname"].'</b></td><td>'.$row1["value"].'</td></tr><br><br>

											
																						
										</table>';
}
}




?>


</body>
</html>
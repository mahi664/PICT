<?php

include 'connect.php';
session_start();

$row = $_SESSION['row'];
$eid = $row['eid'];
if(isset($_POST['submitQualifications']))
{
	if(!empty($_POST['level']) && !empty($_POST['specialization']) && !empty($_POST['nou']) && !empty($_POST['college']) && !empty($_POST['year']))
	{
		$level = $_POST["level"];
		$degree = $_POST["degree"];
		
		$specialization = $_POST['specialization'];
		$nou = $_POST["nou"];
		$college = $_POST['college'];
		$year = $_POST["year"];

		$query = "INSERT INTO `tqualifications`(`eid`, `qid`, `level`, `degree`, `specialization`, `uname`, `college`, `year`) VALUES ('$eid','','$level','$degree','$specialization','$nou','$college','$year')";
		//$sql = "INSERT INTO Temp VALUES('$eid','','-','Qualifications','$query')";
		$result = $conn->query($query);
		if ($result) {

			$query1 = "SELECT qid FROM tqualifications ORDER BY qid DESC LIMIT 1";
			$result = $conn->query($query1);
			$row = $result->fetch_assoc();
			$last_row = $row["qid"];
			//if($result = $conn->query($query1))
			//{
				
			//	echo $row['qid'];	
			//}
			//else
			//{
			//	echo "string";
			//}

			$query = "INSERT INTO temp2 VALUES('','$last_row','$eid','qualifications')";
			$conn->query($query);
			echo '<script type="text/javascript">alert("Request Sent to Admin!!");window.location.href="editpage.php#qualifications";</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Request Can not be Sent to Admin. Avoid use of special Characters!!");window.location.href="editpage.php#qualifications";</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("All Fields Are Mandatory");window.location.href="editpage.php#qualifications";</script>';
	}	
}

if(isset($_POST['submitJournal']))
{
	if(!empty($_POST['journaltitle']) && !empty($_POST['journaltype']) && !empty($_POST['year']) && !empty($_POST['details']))
	{
		$journaltitle = $_POST['journaltitle'];
		$journaltype = $_POST['journaltype'];
		$year = $_POST['year'];
		$details = $_POST['details'];

		$query = "INSERT INTO tjournals VALUES('$eid','','$journaltitle','$journaltype','$year','$details')";
		//$sql = "INSERT INTO Temp VALUES('$eid','','-','Journals','$query')";
		$result = $conn->query($query);
		if ($result) {

			$query1 = "SELECT jid FROM tjournals ORDER BY jid DESC LIMIT 1";
			$result = $conn->query($query1);
			$row = $result->fetch_assoc();
			$last_row = $row["jid"];


			
			$query = "INSERT INTO temp2 VALUES('','$last_row','$eid','journals')";
			$conn->query($query);
			echo '<script type="text/javascript">alert("Request Sent to Admin!!");window.location.href="editpage.php#journals";</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Request Can not be Sent to Admin. Avoid use of special Characters!!");window.location.href="editpage.php#journals";</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("All Fields Are Mandatory");window.location.href="editpage.php#journals";</script>';
	}
}


if(isset($_POST['submitBook']))
{
	if(!empty($_POST['bookname']) && !empty($_POST['publication']) && !empty($_POST['year']) && !empty($_POST['details']))
	{
		$bookname = $_POST['bookname'];
		$publication = $_POST['publication'];
		$year = $_POST['year'];
		$details = $_POST['details'];

		$query = "INSERT INTO tbooks VALUES('$eid','','$bookname','$publication','$year','$details')";
		//$sql = "INSERT INTO Temp VALUES('$eid','','-','Books','$query')";
		$result = $conn->query($query);
		if ($result) {
			
			$query1 = "SELECT bid FROM tbooks ORDER BY bid DESC LIMIT 1";
			$result = $conn->query($query1);
			$row = $result->fetch_assoc();
			$last_row = $row["bid"];


			$query = "INSERT INTO temp2 VALUES('','$last_row','$eid','books')";
			$conn->query($query);
			echo '<script type="text/javascript">alert("Request Sent to Admin!!");window.location.href="editpage.php#books";</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Request Can not be Sent to Admin!!");window.location.href="editpage.php#books";</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("All Fields Are Mandatory");window.location.href="editpage.php#books";</script>';
	}
}


if(isset($_POST['submitConference']))
{
	if(!empty($_POST['conferencetitle']) && !empty($_POST['conferencetype']) && !empty($_POST['year']) && !empty($_POST['details']))
	{
		$conferencetitle = $_POST['conferencetitle'];
		$conferencetype = $_POST['conferencetype'];
		$year = $_POST['year'];
		$details = $_POST['details'];

		$query = "INSERT INTO tconferences VALUES('$eid','','$conferencetitle','$conferencetype','$year','$details')";
		//$sql = "INSERT INTO Temp VALUES('$eid','','-','Conferences','$query')";
		$result = $conn->query($query);
		if ($result) {

			$query1 = "SELECT cid FROM tconferences ORDER BY cid DESC LIMIT 1";
			$result = $conn->query($query1);
			$row = $result->fetch_assoc();
			$last_row = $row["cid"];


			
			$query = "INSERT INTO temp2 VALUES('','$last_row','$eid','conferences')";
			$conn->query($query);
			echo '<script type="text/javascript">alert("Request Sent to Admin!!");window.location.href="editpage.php#conference";</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Request Can not be Sent to Admin!!");window.location.href="editpage.php#conference";</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("All Fields Are Mandatory");window.location.href="editpage.php#conference";</script>';
	}
}

if(isset($_POST['submitPatent']))
{
	if(!empty($_POST['patentnumber']) && !empty($_POST['patenttitle']) && !empty($_POST['pagenos']) && !empty($_POST['assignee']) && !empty($_POST['country']) && !empty($_POST['year']) && !empty($_POST['webaddress']))
	{
		$patentnumber = $_POST['patentnumber'];
		$patenttitle = $_POST['patenttitle'];
		$pagenos = $_POST['pagenos'];
		$assignee  =$_POST['assignee'];
		$country = $_POST['country'];
		$year = $_POST['year'];
		$webaddress = $_POST['webaddress'];

		$query = "INSERT INTO tpatent VALUES('$eid','','$patenttitle','$year','$country','$assignee','$patentnumber','$pagenos','$webaddress')";
		//$sql = "INSERT INTO Temp VALUES('$eid','','-','Patent','$query')";
		$result = $conn->query($query);
		if ($result) {
			$query1 = "SELECT pid FROM tpatent ORDER BY pid DESC LIMIT 1";
			$result = $conn->query($query1);
			$row = $result->fetch_assoc();
			$last_row = $row["pid"];


			
			$query = "INSERT INTO temp2 VALUES('','$last_row','$eid','patents')";
			$conn->query($query);	
			echo '<script type="text/javascript">alert("Request Sent to Admin!!");window.location.href="editpage.php#patents";</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Request Can not be Sent to Admin!!");window.location.href="editpage.php#patents";</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("All Fields Are Mandatory");window.location.href="editpage.php#patents";</script>';
	}
}

if(isset($_POST['submitConsultancy']))
{
	if(!empty($_POST['ioiu']) && !empty($_POST['sdate']) && !empty($_POST['edate']) && !empty($_POST['duration']) && !empty($_POST['areceived']) && !empty($_POST['status']) && !empty($_POST['details']))
	{
		$ioiu = $_POST['ioiu'];
		$sdate = $_POST['sdate'];
		$edate = $_POST['edate'];
		$duration  =$_POST['duration'];
		$areceived = $_POST['areceived'];
		$status = $_POST['status'];
		$details = $_POST['details'];

		$query = "INSERT INTO tconsultancy VALUES('$eid','','$ioiu','$sdate','$edate','$duration','$areceived','$status','$details')";
		//$sql = "INSERT INTO Temp VALUES('$eid','','-','Consultancy','$query')";
		$result = $conn->query($query);
		if ($result) {
			$query1 = "SELECT csid FROM tconsultancy ORDER BY csid DESC LIMIT 1";
			$result = $conn->query($query1);
			$row = $result->fetch_assoc();
			$last_row = $row["csid"];


			
			$query = "INSERT INTO temp2 VALUES('','$last_row','$eid','consultancy')";
			$conn->query($query);
			echo '<script type="text/javascript">alert("Request Sent to Admin!!");window.location.href="editpage.php#consultancy";</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Request Can not be Sent to Admin!!");window.location.href="editpage.php#consultancy";</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("All Fields Are Mandatory");window.location.href="editpage.php#consultancy";</script>';
	}
}


if(isset($_POST['submitFundedrp']))
{
	if(!empty($_POST['title']) && !empty($_POST['picoi'])  && !empty($_POST['duration']) && !empty($_POST['famount']) && !empty($_POST['fagency']) && !empty($_POST['remark']))
	{
		$title = $_POST['title'];
		$picoi = $_POST['picoi'];
		$duration  =$_POST['duration'];
		$famount = $_POST['famount'];
		$fagency = $_POST['fagency'];
		$remark = $_POST['remark'];

		$query = "INSERT INTO tfundedrp VALUES('$eid','','$title','$picoi','$duration','$famount','$fagency','$remark')";
		//$sql = "INSERT INTO Temp VALUES('$eid','','-','Fundedrp','$query')";
		$result = $conn->query($query);
		if ($result) {
			$query1 = "SELECT fid FROM tfundedrp ORDER BY fid DESC LIMIT 1";
			$result = $conn->query($query1);
			$row = $result->fetch_assoc();
			$last_row = $row["fid"];


			
			$query = "INSERT INTO temp2 VALUES('','$last_row','$eid','fundedrp')";
			$conn->query($query);	
			echo '<script type="text/javascript">alert("Request Sent to Admin!!");window.location.href="editpage.php#frp";</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Request Can not be Sent to Admin!!");window.location.href="editpage.php#frp";</script>';
		}
	}
	else
	{
		echo '<script type="text/javascript">alert("All Fields Are Mandatory");window.location.href="editpage.php#frp";</script>';
	}
}


?>
<?php 
$server = "localhost";
$uname="root";
$password="";
$db="PICT";
$conn = mysqli_connect($server,$uname,$password,$db);
$status = $_GET['status'];
$tid = $_GET['tid'];
if($status=='1'){
	

	$sql1 = "SELECT * FROM temp2 WHERE tid = '$tid'";

	$r1 = $conn->query($sql1);

	$row = $r1->fetch_assoc();
	
	$tname = $row['tname'];

	$rowid = $row['rowid'];

	$eidd = $row['eid'];


	
	echo $tname;

	echo $rowid;
	
	
	switch ($tname) {


		case 'tqualifications':
			$sql3 = "select * from tqualifications where qid = '$rowid'";
			$result = $conn->query($sql3);
			$row3 = $result->fetch_assoc();

			$sql4 = "INSERT into qualifications values ('".$row3['eid']."','','".$row3['level']."','".$row3['degree']."','".$row3['specialization']."','".$row3['uname']."','".$row3['college']."','".$row3['year']."')";
			$result2 = $conn->query($sql4);
			
			break;

		case 'tconferences':

				$sql3 = "select * from tconferences where cid = '$rowid'";
				$result = $conn->query($sql3);
				$row3 = $result->fetch_assoc();

				$sql4 = "INSERT into conferences values ('".$row3['eid']."','','".$row3['ctitle']."','".$row3['ctype']."','".$row3['year']."','".$row3['cdetails']."')";
				$result2 = $conn->query($sql4);

			break;

		case 'tconsultancy':

				$sql3 = "select * from tconsultancy where csid = '$rowid'";
				$result = $conn->query($sql3);
				$row3 = $result->fetch_assoc();

				$sql4 = "INSERT into consultancy values ('".$row3['eid']."','','".$row3['ioiu']."','".$row3['sdate']."','".$row3['edate']."','".$row3['duration']."','".$row3['amount']."','".$row3['status']."','".$row3['details']."')";
				$result2 = $conn->query($sql4);
				break;

		case 'tfundedrp':
				$sql3 = "select * from tfundedrp where fid = '$rowid'";
				$result = $conn->query($sql3);
				$row3 = $result->fetch_assoc();

				$sql4 = "INSERT into fundedrp values ('".$row3['eid']."','','".$row3['ptitle']."','".$row3['picoi']."','".$row3['duration']."','".$row3['famount']."','".$row3['fegency']."','".$row3['remark']."')";
				$result2 = $conn->query($sql4);
				break;


		case 'tjournals':

				$sql3 = "select * from tjournals where jid = '$rowid'";
				$result = $conn->query($sql3);
				$row3 = $result->fetch_assoc();

				$sql4 = "INSERT into journals values ('".$row3['eid']."','','".$row3['title']."','".$row3['type']."','".$row3['year']."','".$row3['description']."')";
				$result2 = $conn->query($sql4);
				break;


		case 'tpatent':
		
				$sql3 = "select * from tpatent where pid = '$rowid'";
				$result = $conn->query($sql3);
				$row3 = $result->fetch_assoc();

				$sql4 = "INSERT into patent values ('".$row3['eid']."','','".$row3['ptitle']."','".$row3['year']."','".$row3['country']."','".$row3['assignee']."','".$row3['tpatentno']."','".$row3['pagenos']."','".$row3['webadd']."')";
				$result2 = $conn->query($sql4);
				break;

		case 'tbooks':
					$sql3 = "select * from tbooks where bid = '$rowid'";
			$result = $conn->query($sql3);
			$row3 = $result->fetch_assoc();

			$sql4 = "INSERT into books values ('".$row3['eid']."','','".$row3['bname']."','".$row3['publication']."','".$row3['year']."','".$row3['description']."')";
			$result2 = $conn->query($sql4);
			break;				
		}

	$sql4 = "delete from temp2 where tid = '$tid' ";
	
	$result1 = $conn->query($sql4);	
	echo '<script>alert("Approved and Inserted");window.location.href="request.php";</script>';
		
}
elseif ($status=='3') {
	$sql2 = "select * from temp where tid = '$tid'";
	$res1 = $conn->query($sql2);
	$row4 = $res1->fetch_assoc();

	$ttname = $row4['tname'];
	$pname = $row4['pname'];
	$pvalue = $row4['value'];
	$rrowid = $row4['rowid'];
		switch ($ttname) {
			case 'qualifications':
				$sql10 = "update qualifications set $pname = '$pvalue' where qid = '$rrowid' ";
				$red = $conn->query($sql10);
				break;
			case 'conferences':
				$sql10 = "update conferences set $pname = '$pvalue' where cid = '$rrowid' ";
				$red = $conn->query($sql10);
				break;
			case 'consultancy':
				$sql10 = "update consultancy set $pname = '$pvalue' where csid = '$rrowid' ";
				$red = $conn->query($sql10);
			    break;

			 case 'books':
			 	$sql10 = "update books set $pname = '$pvalue' where bid = '$rrowid' ";
				$red = $conn->query($sql10);
			 	break;

			 case 'patent':
			 		$sql10 = "update patent set $pname = '$pvalue' where pid = '$rrowid' ";
				    $red = $conn->query($sql10);
			 	break;

			 case 'fundedrp':
			 $sql10 = "update fundedrp set $pname = '$pvalue' where fid = '$rrowid' ";
			 $red = $conn->query($sql10);
			 	break;

			 case 'journals':
			 			//echo $pname;
			 			$sql10 = "update journals set $pname = '$pvalue' where jid = '$rrowid' ";
						$red = $conn->query($sql10);
						break;
			 case 'faculty':
			 			$sql1 = "SELECT * FROM temp WHERE tid = '$tid'";

	                     $r1 = $conn->query($sql1);

	                     $row = $r1->fetch_assoc();

	                     $eidd = $row['eid'];
			 			
			 			$sql10 = "update faculty set $pname = '$pvalue' where eid = '$eidd' ";
						$red = $conn->query($sql10);			
						
			 	break;


			
		}

	$sql2 = "DELETE FROM temp WHERE tid = '$tid'";
	$res1 = $conn->query($sql2);
	echo '<script>alert("Updated");window.location.href="request.php";</script>';

}
elseif ($status=='4') {
	$sql2 = "DELETE FROM temp WHERE tid = '$tid'";
	$res1 = $conn->query($sql2);
	echo '<script>alert("Removed");window.location.href="request.php";</script>';
}
elseif ($status=='2') 
{
	$sql2 = "DELETE FROM temp2 WHERE tid = '$tid'";
	$res1 = $conn->query($sql2);
	echo '<script>alert("Removed");window.location.href="request.php";</script>';
}
?>

<?php
session_start();

include "connect.php";
//pdsubmit line70 how to give alert?


if(isset($_POST['picsubmit'])){

	$eid = $_SESSION['eidName'];
	define('ROOT_PATH', dirname(__DIR__) . "/facultyPage/");


	$target_dir = ROOT_PATH.'facultyImages/';
	
	$name = pathinfo($_FILES['imageToUpload']['name']);
	$ext = $name['extension'];
	$dbpath = $eid.'.'.$ext;
	$target_file = $target_dir.$eid.'.jpeg';
	
	if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
		$query = "UPDATE faculty SET image = 'facultyImages/$dbpath' WHERE eid = '$eid'";
		if($conn->query($query))
		{
        echo "<script>alert('Image successfully uploaded!!');
        		window.location.href = '/PICT/admin/editpage.php#personaltab';</script>";
        	}
    } else {
        echo "<script>alert('Error uploading file!')
               ";
    }

}

if(isset($_POST['ccvsubmit'])){

	$eid = $_SESSION['eidName'];
	define('ROOT_PATH', dirname(__DIR__) . "/facultyPage/");


	$target_dir = ROOT_PATH.'facultyCV/';
	
	$name = pathinfo($_FILES['fileToUpload']['name']);
	$ext = $name['extension'];
	$dbpath = $eid.'.'.$ext;
	$target_file = $target_dir.$eid.'.'.$ext;
		
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		
		$query = "UPDATE faculty SET cv = 'facultyCV/$dbpath' WHERE eid = '$eid'";
		if($conn->query($query))
		{
        echo "<script>alert('File successfully uploaded!! $target_file');
        		window.location.href = '/PICT/admin/editpage.php#other';</script>";
    	}
    } else {
        echo "<script>alert('Error uploading file');
               window.location.href = '/PICT/admin/editpage.php#other';</script> ";
    }

}
//

if(isset($_POST['pdsubmit'])){

	$row = $_SESSION['row'];
	$eid = $row["eid"];

	$fullname = $row['fullname'];
	$contact = $row['contact'];
	$department = $row['department'];
	$designation = $row['designation'];
	$responsibility = $row['responsibility'];
	$eid = $row['eid'];
	
	$pddoj = $_POST['pddoj'];
	$pdname = $_POST['pdname'];
	$pdemail = $_POST['pdemail'];
	$pdphone = $_POST['pdphone'];
	$pddept = $_POST['pddept'];
	$pddesg = $_POST['pddesg'];
	$pdresp = $_POST['pdresp'];
	$pdmrmrs = $_POST['mrmrs'];
	$change = 0;

	$namefull = $pdmrmrs." ".$pdname;
	if($pdname!=""){
		$sql = "UPDATE faculty SET fullname = '$namefull' WHERE eid='$eid'";
		$query = $conn->query($sql);
		if($query){
			$change = 1;
		}
		else{
			$change = 0;
		}

		//add
	}
	if($pdphone!=""){
		$sql = "UPDATE faculty SET contact = '$pdphone' WHERE eid='$eid'";
		$query = $conn->query($sql);
		if($query){
			$change = 1;
		}
		else{
			$change = 0;
		}
		//add
	}
	if($pddept!=""){
		$sql = "UPDATE faculty SET department = '$pddept' WHERE eid='$eid'";		
		$query = $conn->query($sql);
		if($query){
			$change = 1;
		}
		else{
			$change = 0;
		}
		//add
	}
	if($pddesg!=""){
		$sql = "UPDATE faculty SET designation = '$pddesg' WHERE eid='$eid'";
		$query = $conn->query($sql);
		if($query){
			$change = 1;
		}
		else{
			$change = 0;
		}
		//add
	}	
	if($pdresp!=""){
		$sql = "UPDATE faculty SET responsibility = '$pdresp' WHERE eid='$eid'";
		$query = $conn->query($sql);
		if($query){
			$change = 1;
		}//add
		else{
			$change = 0;
		}
	}
	if($pddoj!=""){
		$sql = "UPDATE faculty SET doj = '$pddoj' WHERE eid='$eid'";
		$query = $conn->query($sql);
		if($query){
			$change = 1;
		}
		else{
			$change = 0;
		}
		//add
	}
	if($change == 1){
		echo 
		"<script>
			alert('Data updated successfully!!');		
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}
	else{
		echo 
		"<script>
			alert('Error in data updation!!');				
			window.location.href = '/PICT/admin/editpage.php#journals';
		</script>";
	}	
}

//Experience tab
 if(isset($_POST['exsubmit'])){
 	$row = $_SESSION['row'];

 	$aoi = $row['aoi'];
	$texperience = $row['texperience'];
	$iexperience = $row['iexperience'];
	$other = $row['other'];

	$eid = $row['eid'];
	$exaoi = $_POST['exaoi'];
	$extexperience = $_POST['extexperience'];
	$exiexperience = $_POST['exiexperience'];

	$change = 0;

	if($exaoi!=""){
		$sql = "UPDATE faculty SET aoi = '$exaoi' WHERE eid='$eid'";		
		$query = $conn->query($sql);
		if($query){
			$change = 1;
		}
		else{
			$change = 0;
		}		//add
	}
	if($extexperience!=""){
		$sql = "UPDATE faculty SET texperience = '$extexperience' WHERE eid='$eid'";		
		$query = $conn->query($sql);
		if($query){
			$change = 1;
		}
		else{
			$change = 0;
		}		
		//add
	}
	if($exiexperience!=""){
		$sql = "UPDATE faculty SET iexperience = '$exiexperience' WHERE eid='$eid'";
		$query = $conn->query($sql);
		if($query){
			$change = 1;
		}
		else{
			$change = 0;
		}		
		//add
	}
	if($change == 1){
		echo 
		"<script>
			alert('Data updated successfully!!');		
			window.location.href = '/PICT/admin/editpage.php#books';
		</script>";
	}
	else{
		echo 
		"<script>
			alert('Error in data updation!!');				
			window.location.href = '/PICT/admin/editpage.php#journals';
		</script>";
	}	
 }

//Others tab
if(isset($_POST['odsubmit'])){
	$row = $_SESSION['row'];
	$eid = $row['eid'];
	$oddetails = $_POST['odother'];
	$change = 0;
	if($oddetails!=""){
		$sql = "UPDATE faculty SET other = '$oddetails' WHERE eid='$eid'";
		$query = $conn->query($sql);
		if($query){
			$change = 1;
		}
		else{
			$change = 0;
		}		
		//add
	}
	if($change == 1){
		echo 
		"<script>
			alert('Data updated successfully!!');		
			window.location.href = '/PICT/admin/editpage.php#books';
		</script>";
	}
	else{
		echo 
		"<script>
			alert('Error in data updation!!');				
			window.location.href = '/PICT/admin/editpage.php#journals';
		</script>";
	}	
}

if(isset($_POST['qsubmit'])){
	$trowcnt = (int)$_SESSION['rowcntq'];
	$i = 0;
	$qlevel = $_POST['qlevel'];
	$qdegree = $_POST['qdegree'];
	$qspec = $_POST['qspec'];
	$quname = $_POST['quname'];
	$qcollege = $_POST['qcollege'];
	$qyear = $_POST['qyear'];	

	$change = 0;

	while ($i < $trowcnt) {
		# code...
		$rowname = "rowq".($i+1);
		$row = $_SESSION[$rowname];
		$qid = $row['qid'];
		$eid = $row['eid'];


		if($qlevel[$i] != ""){

			//$query1 = 'UPDATE Qualifications SET level='.'\"'.$qlevel[$i].'\"'.' WHERE qid = '.'\"'.$qid.'\"';
			
			if($qlevel[$i] == "Graduate" || $qlevel[$i] == "Post-Graduate"|| $qlevel[$i] == "Phd")
			{
				$sql = "UPDATE qualifications SET level = '$qlevel[$i]' WHERE eid = '$eid' and qid = '$qid'";
				$query = $conn->query($sql);
				if($query){
					$change = 1;
				}
				else{
					$change = 0;
				}
			}
			else{
				echo "<script>
				alert('Enter Graduate/Post-Graduate/Phd!!!');				
				window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
			}		
		}
		if($qdegree[$i] != ""){
			//$query1 = 'UPDATE Qualifications SET degree='.'\"'.$qdegree[$i].'\"'.' WHERE qid = '.'\"'.$qid.'\"';
			//$query1 = "UPDATE Qualifications SET level="."\'".$qlevel[$i]."\'"." WHERE qid = "."\'".$qid."\'";
			if($qlevel[$i] == "Graduate" && ($qdegree[$i]!="BE" || $qdegree[$i]!="BTech"))
			{
				echo "<script>
				alert('Graduation Degree should be BE/BTech!!!');				
				window.location.href = '/PICT/admin/editpage.php?eid=$eid';
				</script>";
			}
			$sql = "UPDATE qualifications SET degree = '$qdegree[$i]' WHERE eid = '$eid' and qid = '$qid'";
			
			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","","degree","Qualifications","'.$query1.'")';
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($qspec[$i] != ""){
			//$query1 = 'UPDATE Qualifications SET specialization='.'\"'.$qspec[$i].'\"'.' WHERE qid = '.'\"'.$qid.'\"';
			

			$sql = "UPDATE qualifications SET specialization = '$qspec[$i]' WHERE eid = '$eid' and qid = '$qid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","","specialization","Qualifications","'.$query1.'")';
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($quname[$i] != ""){
			//$query1 = 'UPDATE Qualifications SET uname='.'\"'.$quname[$i].'\"'.' WHERE qid = '.'\"'.$qid.'\"';
			//$query1 = "UPDATE Qualifications SET level="."\'".$qlevel[$i]."\'"." WHERE qid = "."\'".$qid."\'";
			
			$sql = "UPDATE qualifications SET uname = '$quname[$i]' WHERE eid = '$eid' and qid = '$qid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","uname","Qualifications","'.$query1.'")';
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($qcollege[$i] != ""){
			//$query1 = 'UPDATE Qualifications SET college='.'\"'.$qcollege[$i].'\"'.' WHERE qid = '.'\"'.$qid.'\"';
			//$query1 = "UPDATE Qualifications SET level="."\'".$qlevel[$i]."\'"." WHERE qid = "."\'".$qid."\'";
			
			$sql = "UPDATE qualifications SET college = '$qcollege[$i]' WHERE eid = '$eid' and qid = '$qid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","college","Qualifications","'.$query1.'")';
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($qyear[$i] != ""){
			//$query1 = 'UPDATE Qualifications SET year='.'\"'.$qyear[$i].'\"'.' WHERE qid = '.'\"'.$qid.'\"';
			//$query1 = "UPDATE Qualifications SET level="."\'".$qlevel[$i]."\'"." WHERE qid = "."\'".$qid."\'";
			
			$sql = "UPDATE qualifications SET year = '$qyear[$i]' WHERE eid = '$eid' and qid = '$qid'";
			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","year","Qualifications","'.$query1.'")';
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}

		#increment
		$i = $i + 1;
	}
	if($change == 1){

		echo 
		"<script>
			alert('Data updated successfully!!!');
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';	
			
		</script>";
	}
	else{
		echo 
		"<script>
			alert('Error in Data updation!!!');				
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}
	
}

if(isset($_POST['jsubmit'])){
$trowcnt = (int)$_SESSION['rowcntj'];

	$i = 0;
	$jtitle = $_POST['jtitle'];
	$jtype = $_POST['jtype'];
	$jyear = $_POST['jyear'];
	$jdes = $_POST['jdes'];
	$change = 0;	

	while ($i < $trowcnt) {
		# code...
		$rowname = "rowj".($i+1);
		$row = $_SESSION[$rowname];
		$jid = $row['jid'];
		$eid = $row['eid'];

		if($jtitle[$i] != ""){
			//$query1 = 'UPDATE Journals SET title='.'\"'.$jtitle[$i].'\"'.' WHERE jid = '.'\"'.$jid.'\"';
			$sql = "UPDATE journals SET title = '$jtitle[$i]' WHERE eid = '$eid' and jid = '$jid'";
			
			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","title","Journals","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($jtype[$i] != ""){
			//$query1 = 'UPDATE Journals SET type='.'\"'.$jtype[$i].'\"'.' WHERE jid = '.'\"'.$jid.'\"';
			$sql = "UPDATE journals SET type = '$jtype[$i]' WHERE eid = '$eid' and jid = '$jid'";

			
			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","type","Journals","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}		
		if($jyear[$i] != ""){
			//$query1 = 'UPDATE Journals SET year='.'\"'.$jyear[$i].'\"'.' WHERE jid = '.'\"'.$jid.'\"';
			
			$sql = "UPDATE journals SET year = '$jyear[$i]' WHERE eid = '$eid' and jid = '$jid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","year","Journals","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($jdes[$i] != ""){
			//$query1 = 'UPDATE Journals SET description='.'\"'.$jdes[$i].'\"'.' WHERE jid = '.'\"'.$jid.'\"';

			$sql = "UPDATE journals SET description = '$jdes[$i]' WHERE eid = '$eid' and jid = '$jid'";
			
			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","description","Journals","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}	
		#increment
		$i = $i + 1;
	}

	if($change == 1){
		echo 
		"<script>
			alert('Data updated successfully!!');		
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}
	else{
		echo 
		"<script>
			alert('Error in data updation!!');				
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}	
}


if(isset($_POST['bsubmit'])){
$trowcnt = (int)$_SESSION['rowcntb'];

	$i = 0;
	$bname = $_POST['bname'];
	$bpub = $_POST['bpub'];
	$byear = $_POST['byear'];
	$bdes = $_POST['bdes'];	

	while ($i < $trowcnt) {
		# code...
		$rowname = "rowb".($i+1);
		$row = $_SESSION[$rowname];
		$bid = $row['bid'];
		$eid = $row['eid'];

		if($bname[$i] != ""){
			//$query1 = 'UPDATE Books SET bname='.'\"'.$bname[$i].'\"'.' WHERE bid = '.'\"'.$bid.'\"';
			
			$sql = "UPDATE books SET bname = '$bname[$i]' WHERE eid = '$eid' and bid = '$bid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","bname","Books","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($bpub[$i] != ""){
			//$query1 = 'UPDATE Books SET publication='.'\"'.$bpub[$i].'\"'.' WHERE bid = '.'\"'.$bid.'\"';

			$sql = "UPDATE books SET publication = '$bpub[$i]' WHERE eid = '$eid' and bid = '$bid'";
			
			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","publication","Books","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($byear[$i] != ""){
			//$query1 = 'UPDATE Books SET year='.'\"'.$byear[$i].'\"'.' WHERE bid = '.'\"'.$bid.'\"';
			
			$sql = "UPDATE books SET year = '$byear[$i]' WHERE eid = '$eid' and bid = '$bid'";
			
			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","year","Books","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($bdes[$i] != ""){
			//$query1 = 'UPDATE Books SET description='.'\"'.$bdes[$i].'\"'.' WHERE bid = '.'\"'.$bid.'\"';
			
			$sql = "UPDATE books SET description = '$bdes[$i]' WHERE eid = '$eid' and bid = '$bid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","description","Books","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}		
		#increment
		$i = $i + 1;
	}

	if($change == 1){
		echo 
		"<script>
			alert('Data updated successfully!!');		
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}
	else{
		echo 
		"<script>
			alert('Error in data updation!!');				
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}	
}

if(isset($_POST['csubmit'])){
$trowcnt = (int)$_SESSION['rowcntc'];

	$i = 0;
	$ctitle = $_POST['ctitle'];
	$ctype = $_POST['ctype'];
	$cyear = $_POST['cyear'];
	$cdetails = $_POST['cdetails'];	

	while ($i < $trowcnt) {
		# code...
		$rowname = "rowc".($i+1);
		$row = $_SESSION[$rowname];
		$cid = $row['cid'];
		$eid = $row['eid'];

		if($ctitle[$i] != ""){
			//$query1 = 'UPDATE Conferences SET ctitle='.'\"'.$ctitle[$i].'\"'.' WHERE cid = '.'\"'.$cid.'\"';
			
			$sql = "UPDATE conferences SET ctitle = '$ctitle[$i]' WHERE eid = '$eid' and cid = '$cid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","ctitle","Conferences","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($ctype[$i] != ""){
			//$query1 = 'UPDATE Conferences SET ctype='.'\"'.$ctype[$i].'\"'.' WHERE cid = '.'\"'.$cid.'\"';
			
			$sql = "UPDATE conferences SET ctype = '$ctype[$i]' WHERE eid = '$eid' and cid = '$cid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","ctype","Conferences","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($cyear[$i] != ""){
			//$query1 = 'UPDATE Conferences SET year='.'\"'.$cyear[$i].'\"'.' WHERE cid = '.'\"'.$cid.'\"';
			
			$sql = "UPDATE conferences SET year = '$cyear[$i]' WHERE eid = '$eid' and cid = '$cid'";			

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","year","Conferences","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($cdetails[$i] != ""){
			//$query1 = 'UPDATE Conferences SET cdetails='.'\"'.$cdetails[$i].'\"'.' WHERE cid = '.'\"'.$cid.'\"';
			
			$sql = "UPDATE conferences SET cdetails = '$cdetails[$i]' WHERE eid = '$eid' and cid = '$cid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","cdetails","Conferences","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}		
		#increment
		$i = $i + 1;
	}	
	if($change == 1){
		echo 
		"<script>
			alert('Data updated successfully!!');		
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}
	else{
		echo 
		"<script>
			alert('Error in data updation!!');				
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}	

}


if(isset($_POST['ptsubmit'])){
$trowcnt = (int)$_SESSION['rowcntpp'];

	$i = 0;
	$ptpatentno = $_POST['ptpatentno'];
	$pttitle = $_POST['pttitle'];
	$ptassignee = $_POST['ptassignee'];
	$ptcountry = $_POST['ptcountry'];
	$ptyear = $_POST['ptyear'];	
	$ptwebadd = $_POST['ptwebadd'];	

	while ($i < $trowcnt) {
		# code...
		$rowname = "rowpp".($i+1);
		$row = $_SESSION[$rowname];
		$pid = $row['pid'];
		$eid = $row['eid'];

		if($ptpatentno[$i] != ""){
			//$query1 = 'UPDATE Patent SET patentno='.'\"'.$ptpatentno[$i].'\"'.' WHERE pid = '.'\"'.$pid.'\"';

			$sql = "UPDATE patent SET patentno = '$ptpatentno[$i]' WHERE eid = '$eid' and pid = '$pid'";
			
			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","patentno","Patent","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($pttitle[$i] != ""){
			//$query1 = 'UPDATE Patent SET ptitle='.'\"'.$pttitle[$i].'\"'.' WHERE pid = '.'\"'.$pid.'\"';
			
			$sql = "UPDATE patent SET ptitle = '$pttitle[$i]' WHERE eid = '$eid' and pid = '$pid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","ptitle","Patent","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($ptassignee[$i] != ""){
			//$query1 = 'UPDATE Patent SET assignee='.'\"'.$ptassignee[$i].'\"'.' WHERE pid = '.'\"'.$pid.'\"';
			
			$sql = "UPDATE patent SET assignee = '$ptassignee[$i]' WHERE eid = '$eid' and pid = '$pid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","assignee","Patent","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($ptcountry[$i] != ""){
			//$query1 = 'UPDATE Patent SET country='.'\"'.$ptcountry[$i].'\"'.' WHERE pid = '.'\"'.$pid.'\"';
			
			$sql = "UPDATE patent SET country = '$ptcountry[$i]' WHERE eid = '$eid' and pid = '$pid'";			

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","country","Conferences","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($ptyear[$i] != ""){
			//$query1 = 'UPDATE Patent SET year='.'\"'.$ptyear[$i].'\"'.' WHERE pid = '.'\"'.$pid.'\"';
			
			$sql = "UPDATE patent SET year = '$ptyear[$i]' WHERE eid = '$eid' and pid = '$pid'";			

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","year","Conferences","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}		
		if($ptwebadd[$i] != ""){
			//$query1 = 'UPDATE Patent SET webadd='.'\"'.$ptwebadd[$i].'\"'.' WHERE pid = '.'\"'.$pid.'\"';
			
			$sql = "UPDATE patent SET webadd = '$ptwebadd[$i]' WHERE eid = '$eid' and pid = '$pid'";

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","webadd","Conferences","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}				
		#increment
		$i = $i + 1;
	}
	if($change == 1){
		echo 
		"<script>
			alert('Data updated successfully!!');		
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}
	else{
		echo 
		"<script>
			alert('Error in data updation!!');				
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}	
}

if(isset($_POST['condsubmit'])){
	$trowcnt = (int)$_SESSION['rowcntcd'];

	$i = 0;
	$condioiu = $_POST['condioiu'];
	$condsdate = $_POST['condsdate'];
	$condedate = $_POST['condedate'];
	$condduration = $_POST['condduration'];
	$condamount = $_POST['condamount'];
	$condstatus = $_POST['condstatus'];
	$conddetails = $_POST['conddetails'];			
	//$condview = $_POST['condview'];	

	while ($i < $trowcnt) {
		# code...
		$rowname = "rowcd".($i+1);
		$row = $_SESSION[$rowname];
		$pid = $row['csid'];
		$eid = $row['eid'];

		if($condioiu[$i] != ""){
			//$query1 = 'UPDATE Consultancy SET ioiu='.'\"'.$condioiu[$i].'\"'.' WHERE csid = '.'\"'.$pid.'\"';
			
			$sql = "UPDATE consultancy SET ioiu = '$condioiu[$i]' WHERE eid = '$eid' and pid = '$pid'";			

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","ioiu","Consultancy","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($condsdate[$i] != ""){
//			$query1 = 'UPDATE Consultancy SET sdate='.'\"'.$condsdate[$i].'\"'.' WHERE csid = '.'\"'.$pid.'\"';

			$sql = "UPDATE consultancy SET sdate = '$condsdate[$i]' WHERE eid = '$eid' and pid = '$pid'";			
			
//			$sql = 'INSERT INTO temp VALUES ("'.$eid.'","sdate","Consultancy","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($condedate[$i] != ""){
//			$query1 = 'UPDATE Consultancy SET edate='.'\"'.$condedate[$i].'\"'.' WHERE csid = '.'\"'.$pid.'\"';

			$sql = "UPDATE consultancy SET edate = '$condedate[$i]' WHERE eid = '$eid' and pid = '$pid'";			
			
//			$sql = 'INSERT INTO temp VALUES ("'.$eid.'","edate","Consultancy","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($condduration[$i] != ""){
//			$query1 = 'UPDATE Consultancy SET duration='.'\"'.$condduration[$i].'\"'.' WHERE csid = '.'\"'.$pid.'\"';

			$sql = "UPDATE consultancy SET duration = '$condduration[$i]' WHERE eid = '$eid' and pid = '$pid'";			
			
//			$sql = 'INSERT INTO temp VALUES ("'.$eid.'","duration","Consultancy","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($condamount[$i] != ""){
			//$query1 = 'UPDATE Consultancy SET ioiu='.'\"'.$condioiu[$i].'\"'.' WHERE csid = '.'\"'.$pid.'\"';
			
			$sql = "UPDATE consultancy SET amount = '$condamount[$i]' WHERE eid = '$eid' and pid = '$pid'";			

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","ioiu","Consultancy","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($condstatus[$i] != ""){
			//$query1 = 'UPDATE Consultancy SET ioiu='.'\"'.$condioiu[$i].'\"'.' WHERE csid = '.'\"'.$pid.'\"';
			
			$sql = "UPDATE consultancy SET status = '$condstatus[$i]' WHERE eid = '$eid' and pid = '$pid'";			

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","ioiu","Consultancy","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($conddetails[$i] != ""){
			//$query1 = 'UPDATE Consultancy SET ioiu='.'\"'.$condioiu[$i].'\"'.' WHERE csid = '.'\"'.$pid.'\"';
			
			$sql = "UPDATE consultancy SET details = '$conddetails[$i]' WHERE eid = '$eid' and pid = '$pid'";			

			//$sql = 'INSERT INTO temp VALUES ("'.$eid.'","ioiu","Consultancy","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}		
		#increment
		$i = $i + 1;
	}
	if($change == 1){
		echo 
		"<script>
			alert('Data updated successfully!!');		
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}
	else{
		echo 
		"<script>
			alert('Error in data updation!!');				
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}	
}

if(isset($_POST['frpsubmit'])){
	$trowcnt = (int)$_SESSION['rowcntfrp'];

	$i = 0;
	$frptitle = $_POST['frptitle'];
	$frpicoi = $_POST['frpicoi'];
	$frpduration = $_POST['frpduration'];
	$frpfamount = $_POST['frpfamount'];
	$frpfegency = $_POST['frpfegency'];
	$frpremark = $_POST['frpremark'];		
	//$condview = $_POST['condview'];	

	while ($i < $trowcnt) {
		# code...
		$rowname = "rowfrp".($i+1);
		$row = $_SESSION[$rowname];
		$pid = $row['fid'];
		$eid = $row['eid'];

		if($frptitle[$i] != ""){
//			$query1 = 'UPDATE Fundedrp SET ptitle='.'\"'.$frptitle[$i].'\"'.' WHERE fid = '.'\"'.$pid.'\"';

			$sql = "UPDATE fundedrp SET ptitle = '$frptitle[$i]' WHERE eid = '$eid' and pid = '$pid'";			
			
//			$sql = 'INSERT INTO temp VALUES ("'.$eid.'","ptitle","Fundedrp","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($frpicoi[$i] != ""){
//			$query1 = 'UPDATE Fundedrp SET picoi='.'\"'.$frpicoi[$i].'\"'.' WHERE fid = '.'\"'.$pid.'\"';

			$sql = "UPDATE fundedrp SET picoi = '$frpicoi[$i]' WHERE eid = '$eid' and pid = '$pid'";

//			$sql = 'INSERT INTO temp VALUES ("'.$eid.'","picoi","Fundedrp","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($frpduration[$i] != ""){
//			$query1 = 'UPDATE Fundedrp SET duration='.'\"'.$frpduration[$i].'\"'.' WHERE fid = '.'\"'.$pid.'\"';

			$sql = "UPDATE fundedrp SET duration = '$frpduration[$i]' WHERE eid = '$eid' and pid = '$pid'";
			
//			$sql = 'INSERT INTO temp VALUES ("'.$eid.'","duration","Fundedrp","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($frpfamount[$i] != ""){
//			$query1 = 'UPDATE Fundedrp SET famount='.'\"'.$frpfamount[$i].'\"'.' WHERE fid = '.'\"'.$pid.'\"';

			$sql = "UPDATE fundedrp SET famount = '$frpfamount[$i]' WHERE eid = '$eid' and pid = '$pid'";
			
//			$sql = 'INSERT INTO temp VALUES ("'.$eid.'","famount","Fundedrp","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($frpfegency[$i] != ""){
//			$query1 = 'UPDATE Fundedrp SET fegency='.'\"'.$frpfegency[$i].'\"'.' WHERE fid = '.'\"'.$pid.'\"';

			$sql = "UPDATE fundedrp SET fegency = '$frpfegency[$i]' WHERE eid = '$eid' and pid = '$pid'";
			
//			$sql = 'INSERT INTO temp VALUES ("'.$eid.'","fegency","Fundedrp","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}
		if($frpremark[$i] != ""){
//			$query1 = 'UPDATE Fundedrp SET remark='.'\"'.$frpremark[$i].'\"'.' WHERE fid = '.'\"'.$pid.'\"';

			$sql = "UPDATE fundedrp SET remark = '$frpremark[$i]' WHERE eid = '$eid' and pid = '$pid'";
			
//			$sql = 'INSERT INTO temp VALUES ("'.$eid.'","remark","Fundedrp","'.$query1.'")';
			
			$query = $conn->query($sql);
			if($query){
				$change = 1;
			}
			else{
				$change = 0;
			}		
		}		
		#increment
		$i = $i + 1;
	}	
	
	if($change == 1){
		echo 
		"<script>
			alert('Data updated successfully!!');		
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}
	else{
		echo 
		"<script>
			alert('Error in data updation!!');				
			window.location.href = '/PICT/admin/editpage.php?eid=$eid';
		</script>";
	}	

}

?>
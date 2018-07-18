<?php
include "connect.php";
session_start();
$email = $_POST['email'];

//echo $email;

$sql = "SELECT eid,image,fullname,contact,acontact,texperience,iexperience,doj,department,designation,responsibility,aoi,other,cv,email FROM faculty F WHERE F.email = '$email'";
//$sql = "SELECT eid,image,fullname,contact,acontact,texperience,iexperience,doj,department,designation,responsibility,aoi,other,cv FROM faculty F WHERE F.eid = '$eid'";*/
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($result->num_rows<=0) {
	echo "<script>alert('Sorry!!!You are not a faculty member!!')
                window.location.href = '/PICT/google1.php';</script>";
}
$_SESSION['row'] = $row;
 echo "<script>
                window.location.href = '/PICT/facultyPage/editpage.php';</script>";

?>
<?php 
$server = "localhost";
$uname="root";
$password="";
$db="PICT";
$conn = mysqli_connect($server,$uname,$password,$db);
$hi = $_GET["eid"];

$name = "asd";

$sql = "SELECT * FROM admin where emp_id='$hi'";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc())
      {
        $name = $row["fullname"];
    }
$sql1 = "delete from admin where emp_id='$hi'";
	$result = $conn->query($sql1);
	echo '<script>alert("Deleted");window.location.href="removeadmin.php";</script>'
?>

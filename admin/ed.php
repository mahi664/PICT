<?php 
$server = "localhost";
$uname="root";
$password="";
$db="PICT";
$conn = mysqli_connect($server,$uname,$password,$db);
$hi = $_GET["eid"];

$name = "asd";
$enable='a';

$sql = "SELECT fullname,enable FROM faculty where eid='$hi'";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc())
      {
        $name = $row["fullname"];
        $enable = $row["enable"];
    }
//$sql1 = "DELETE FROM faculty WHERE eid='$hi'";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Enable/Disable</title>
</head>
<body>

<?php 

if($enable == '1')
{
	$sql2 = "UPDATE faculty set enable ='0' where eid='$hi' ";
	$result = $conn->query($sql2);
	echo '<script>window.location.href = "admin.php" ;</script>';
}
else
{
	$sql2 = "UPDATE faculty set enable ='1' where eid='$hi' ";
	$result = $conn->query($sql2);
	echo '<script>window.location.href = "admin.php" ;</script>';
}
?>
</script>
</body>
</html>
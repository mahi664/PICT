<?php 
$server = "localhost";
$uname="root";
$password="";
$db="PICT";
$conn = mysqli_connect($server,$uname,$password,$db);
$hi = $_GET["eid"];

$name = "asd";

$sql = "SELECT fullname,enable FROM faculty where eid='$hi'";
$result = $conn->query($sql);
 while($row = $result->fetch_assoc())
      {
        $name = $row["fullname"];
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>

<script type="text/javascript">
	var txt;
var r = confirm("Are you sure you want to Delete <?php echo $name ?>");
if (r == true) {


var yes= "<?php echo $hi; ?>";

 window.location.href = "delcon.php?eid=" + yes; 
 
  }
   else {
     window.location.href = "admin.php";
}
</script>
</body>
</html>
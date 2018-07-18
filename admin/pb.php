<?php

require "connect.php";
$eid = "C2K1";
$total = 14;
$current = 0;
$sql = "SELECT * FROM faculty WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
{
	$row = $run->fetch_assoc();
	if($row['image']!="")
		$current++;echo $current;
	if($row['texperience']!="")
		$current++;echo $current;
	if($row['iexperience']!="")
		$current++;echo $current;
	if($row['responsibility']!="")
		$current++;echo $current;
	if($row['aoi']!="")
		$current++;echo $current;
	if($row['other']!="")
		$current++;echo $current;
	if($row['cv']!="")
		$current++;echo $current;
}
$sql = "SELECT eid FROM qualifications WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;echo $current;
$sql = "SELECT eid FROM journals WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;echo $current;
$sql = "SELECT eid FROM books WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;echo $current;
$sql = "SELECT eid FROM conferences WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;echo $current;
$sql = "SELECT eid FROM consultancy WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;echo $current;
$sql = "SELECT eid FROM patent WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;echo $current;
$sql = "SELECT eid FROM fundedrp WHERE eid ='$eid'";
$run = $conn->query($sql);
if($run->num_rows>0)
	$current++;echo $current;
$per = round(($current/$total)*100);

?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Progress Bar With Label</h2>
  <div class="col-lg-6">
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per;?>%">
    	<?php echo $per;?>%
    </div>
  </div>
</div>
</div>

</body>
</html>


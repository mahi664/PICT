<?php
include "connect.php";
if(isset($_POST['book_id']))
{
	$id = $_POST['book_id'];
	$sql = "SELECT * FROM Books WHERE bid = '$id'";
	$result = $conn->query($sql);
	if ($result)
	{
		$row = $result->fetch_assoc();
		$name = $row['bname'];
		$publication = $row['publication'];
		$description = $row['description'];
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="card">
	<p class="card-header">
		<b class="CardHeader">Book Name: </b><?php echo $name; ?> <br><br>
		<b class="CardHeader">Publication: </b><?php echo $publication; ?> 
	</p> 
	<p class="card-body">
		<b class="CardHeader">Book Description:</b><?php echo $description; ?>	
	</p>
</div>

</body>
</html>
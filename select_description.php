<?php
include "connect.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if(isset($_POST['journal_id']))
{
	$id = $_POST['journal_id'];
	$sql = "SELECT * FROM journals WHERE jid = '$id'";
	$result = $conn->query($sql);
	if ($result)
	{
		$row = $result->fetch_assoc();
		$title = $row['title'];
		$type = $row['type'];
		$description = $row['description'];

		echo'<div class="card">
			<p class="card-header">
				<b class="CardHeader">Journal Title: </b>'.$title.'<br><br>
				<b class="CardHeader">Journal Type: </b>'.$type.' 
			</p> 
			<p class="card-body">
				<b class="CardHeader">Journal Description:</b>'.$description.'	
			</p>
		</div>';
		echo $_POST['x'];
	}	
}

if (isset($_POST['consult_id']))
{
	$id = $_POST['consult_id'];
	$sql = "SELECT * FROM consultancy WHERE csid = '$id'";
	$result = $conn->query($sql);
	if ($result)
	{
		$row = $result->fetch_assoc();
		$title = $row['ioiu'];
		$type = $row['duration'];
		$description = $row['details'];
		//echo $title.$type;
		echo'<div class="card">
			<p class="card-header">
				<b class="CardHeader">Industry/Organization/Institute/University: </b>'.$title.'<br><br>
				<b class="CardHeader">Duration: </b>'.$type.' 
			</p> 
			<p class="card-body">
				<b class="CardHeader">Details:</b>'.$description.'	
			</p>
		</div>';
	}	

}

if (isset($_POST['book_id']))
{
	$id = $_POST['book_id'];
	$sql = "SELECT * FROM books WHERE bid = '$id'";
	$result = $conn->query($sql);
	if ($result)
	{
		$row = $result->fetch_assoc();
		$title = $row['bname'];
		$type = $row['publication'];
		$description = $row['description'];
		//echo $title.$type;
		echo'<div class="card">
			<p class="card-header">
				<b class="CardHeader">Journal Title: </b>'.$title.'<br><br>
				<b class="CardHeader">Journal Type: </b>'.$type.' 
			</p> 
			<p class="card-body">
				<b class="CardHeader">Journal Description:</b>'.$description.'	
			</p>
		</div>';
	}	

}

?>

</body>
</html>
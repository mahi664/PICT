<?php
require "connect.php";

if(isset($_POST['current-affair']))
{
	$subject = "Current Affairs";
	if(!empty($_POST['question']) && !empty($_POST['optionA']) && !empty($_POST['optionB']) && !empty($_POST['optionC']) && !empty($_POST['optionD']))
	{
		$question = $_POST['question'];
		$optionA = $_POST['optionA'];
		$optionB = $_POST['optionB'];
		$optionC = $_POST['optionC'];
		$optionD = $_POST['optionD'];
		$correctopt = $_POST['correctopt'];

		$sql = "INSERT INTO questions(question,A,B,C,D,correctopt,subject) VALUES('$question','$optionA','$optionB','$optionC','$optionD','$correctopt','$subject')";
		$query = $conn->query($sql);
		if($query){
			echo "<script type='text/javascript'>alert('धन्यवाद!! तुमचा प्रश्न यशस्वीरीत्या जतन केला गेला आहे.'); window.location.href='index.php'</script>";		
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('कृपया सर्व पर्याय समाविष्ट करा '); window.location.href='index.php'</script>";
	}
}

else if(isset($_POST['History']))
{
	$subject = "History";
	if(!empty($_POST['question']) && !empty($_POST['optionA']) && !empty($_POST['optionB']) && !empty($_POST['optionC']) && !empty($_POST['optionD']))
	{
		$question = $_POST['question'];
		$optionA = $_POST['optionA'];
		$optionB = $_POST['optionB'];
		$optionC = $_POST['optionC'];
		$optionD = $_POST['optionD'];
		$correctopt = $_POST['correctopt'];

		$sql = "INSERT INTO questions(question,A,B,C,D,correctopt,subject) VALUES('$question','$optionA','$optionB','$optionC','$optionD','$correctopt','$subject')";
		$query = $conn->query($sql);
		if($query){
			echo "<script type='text/javascript'>alert('धन्यवाद!! तुमचा प्रश्न यशस्वीरीत्या जतन केला गेला आहे.'); window.location.href='index.php'</script>";		
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('कृपया सर्व पर्याय समाविष्ट करा '); window.location.href='index.php'</script>";
	}
}

else if(isset($_POST['Geography']))
{
	$subject = "Geography";
	if(!empty($_POST['question']) && !empty($_POST['optionA']) && !empty($_POST['optionB']) && !empty($_POST['optionC']) && !empty($_POST['optionD']))
	{
		$question = $_POST['question'];
		$optionA = $_POST['optionA'];
		$optionB = $_POST['optionB'];
		$optionC = $_POST['optionC'];
		$optionD = $_POST['optionD'];
		$correctopt = $_POST['correctopt'];

		$sql = "INSERT INTO questions(question,A,B,C,D,correctopt,subject) VALUES('$question','$optionA','$optionB','$optionC','$optionD','$correctopt','$subject')";
		$query = $conn->query($sql);
		if($query){
			echo "<script type='text/javascript'>alert('धन्यवाद!! तुमचा प्रश्न यशस्वीरीत्या जतन केला गेला आहे.'); window.location.href='index.php'</script>";		
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('कृपया सर्व पर्याय समाविष्ट करा '); window.location.href='index.php'</script>";
	}
}

else if(isset($_POST['Economy']))
{
	$subject = "Economy";
	if(!empty($_POST['question']) && !empty($_POST['optionA']) && !empty($_POST['optionB']) && !empty($_POST['optionC']) && !empty($_POST['optionD']))
	{
		$question = $_POST['question'];
		$optionA = $_POST['optionA'];
		$optionB = $_POST['optionB'];
		$optionC = $_POST['optionC'];
		$optionD = $_POST['optionD'];
		$correctopt = $_POST['correctopt'];

		$sql = "INSERT INTO questions(question,A,B,C,D,correctopt,subject) VALUES('$question','$optionA','$optionB','$optionC','$optionD','$correctopt','$subject')";
		$query = $conn->query($sql);
		if($query){
			echo "<script type='text/javascript'>alert('धन्यवाद!! तुमचा प्रश्न यशस्वीरीत्या जतन केला गेला आहे.'); window.location.href='index.php'</script>";		
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('कृपया सर्व पर्याय समाविष्ट करा '); window.location.href='index.php'</script>";
	}
}

else if(isset($_POST['Polity']))
{
	$subject = "Polity";
	if(!empty($_POST['question']) && !empty($_POST['optionA']) && !empty($_POST['optionB']) && !empty($_POST['optionC']) && !empty($_POST['optionD']))
	{
		$question = $_POST['question'];
		$optionA = $_POST['optionA'];
		$optionB = $_POST['optionB'];
		$optionC = $_POST['optionC'];
		$optionD = $_POST['optionD'];
		$correctopt = $_POST['correctopt'];

		$sql = "INSERT INTO questions(question,A,B,C,D,correctopt,subject) VALUES('$question','$optionA','$optionB','$optionC','$optionD','$correctopt','$subject')";
		$query = $conn->query($sql);
		if($query){
			echo "<script type='text/javascript'>alert('धन्यवाद!! तुमचा प्रश्न यशस्वीरीत्या जतन केला गेला आहे.'); window.location.href='index.php'</script>";		
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('कृपया सर्व पर्याय समाविष्ट करा '); window.location.href='index.php'</script>";
	}
}

else
{
	$subject = "General Science";
	if(!empty($_POST['question']) && !empty($_POST['optionA']) && !empty($_POST['optionB']) && !empty($_POST['optionC']) && !empty($_POST['optionD']))
	{
		$question = $_POST['question'];
		$optionA = $_POST['optionA'];
		$optionB = $_POST['optionB'];
		$optionC = $_POST['optionC'];
		$optionD = $_POST['optionD'];
		$correctopt = $_POST['correctopt'];

		$sql = "INSERT INTO questions(question,A,B,C,D,correctopt,subject) VALUES('$question','$optionA','$optionB','$optionC','$optionD','$correctopt','$subject')";
		$query = $conn->query($sql);
		if($query){
			echo "<script type='text/javascript'>alert('धन्यवाद!! तुमचा प्रश्न यशस्वीरीत्या जतन केला गेला आहे.'); window.location.href='index.php'</script>";		
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('कृपया सर्व पर्याय समाविष्ट करा '); window.location.href='index.php'</script>";
	}
}
/*$sql = "SELECT * from questions";
$query = $conn->query($sql);
if($query)
{
	$row = $query->fetch_assoc();

	echo $row['qid'];
	echo $row['question'];
	echo $row['A'];
	echo $row['B'];
	echo $row['C'];
	echo $row['D'];
	echo $row['correctopt'];
	echo $row['subject'];

}*/

?>
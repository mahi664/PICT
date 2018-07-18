<?php
include "connect.php";

session_start();

if(!empty($_POST['email']))
{
	$email = $_POST['email'];
  $sql = "SELECT dept FROM admin WHERE email = '$email'";
  $run =  $conn->query($sql);
  if($run->num_rows>0)
  {
    $row = $run->fetch_assoc();
    $dept = $row["dept"];
    //session_start();
    $_SESSION['email'] = $email;
    $_SESSION['dept'] = $dept;
    echo "<script>
            window.location.href = '/PICT/admin/admin.php';</script>";   
  }

  else
  {
  	echo "<script>alert('Sorry!! You are not a authorized person!!!!');
            window.location.href = '/PICT/admin/index.php';</script>";	
  }
}
else
{
  echo "<script>alert('Username or Password can not be empty!!!');
            window.location.href = '/PICT/admin/index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/JavaScript">
         <!--
            function AutoRefresh( t ) {
               setTimeout("location.reload(true);", t);
            }
         //-->
      </script>
</head>
<body onload="JavaScript:AutoRefresh(5000);">

</body>
</html>

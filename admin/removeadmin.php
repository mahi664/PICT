<?php 
$server = "localhost";
$uname="root";
$password="";
$db="PICT";
$conn = mysqli_connect($server,$uname,$password,$db);

session_start();
if(empty($_SESSION['email']) && empty($_SESSION['dept']))
{
  echo "<script>alert('Session Expired!!!');
            window.location.href = '/PICT/admin/index.php';</script>"; 
}
else
{
  $email = $_SESSION['email'];
  $dept = $_SESSION['dept'];
  if($email != "aditya9707@gmail.com" && $dept != "")
  {
    echo "<script>window.location.href = '/PICT/admin/dept_admin.php';</script>"; 
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <style type="text/css">
    
    h4{
      margin-left: 15px;
      color: blue;
    }

 
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.5">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sidebar.css">
</head>

<body>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
     <div class="nav navbar-nav">
   
 
   
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 

      </button>
<a class="navbar-brand" data-scroll="" href="#" target="_blank">&nbsp &nbsp Admin Panel</a>
      </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       <li class=""><a href="logout.php"><span class="glyphicon glyphicon-user"></span>&nbsp Logout</a></li>
      
  
      </ul>
    </div>
  </div>
</nav>
  
  <div id="wrapper" style="position:fixed; height: 100%;">
  <div id="sidebar">
    <ul class="sidebar-nav">
    <br>
      <li class="" style="color: white;"><span class="glyphicon glyphicon-user"></span>&nbsp Manage faculty</li>
      <ul class="inner">
        <li><a  data-toggle="modal" href="#mfmodal1">Add Admin</a></li>
        <li><a  data-toggle="modal" href="#mfmodal">Add Faculty</a></li>
         <li><a href="admin.php">Remove Faculty</a></li>
      </ul>

      <li class="active" ><a href="request.php" style="color: white;"><span class="glyphicon glyphicon-bell"></span>&nbsp  Requests</a></li>
    </ul>
  </div>
  

  <div id="page-content" class="page-content">

<div class="container-fluid " style="background-color: white; ">
  <h3 style="color: blue;">Admins</h3>
 
  </div>
  <br>
    
 

<br>
        
        
               
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="20%">
              <col width="20%">
              <col width="25%">
              <col width="5%">
             
                   
      <tr>
        <th>Employee id</th>
        <th>Full name</th>
        <th>Department</th>
        <th>Email-id</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT emp_id,dept,email,fullname FROM admin";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["emp_id"];
        echo '<tr><td>'.$eid.'</td>';
        echo '<td>'.$row["fullname"].'</td>';
        echo '<td>'.$row["dept"].'</td>';
        echo '<td>'.$row["email"].'</td>';
        

        echo '<td><a href="delete1.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td></tr>';
      }
    ?>
    </table>

    

  
  
  
        </div>
      </div>
        </div>

 
        <!-- Modal -->
  <div class="modal fade" id="mfmodal" role="dialog">
    <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Add faculty</b></h4>
          <p style="color: red;">(* indicates the field is mandatory)</p>
        </div>
        <div class="modal-body">
          
            <form action="admin.php" method="post">
              <div class="form-group">

              <select name="in" required="">
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Dr.">Dr.</option>
              </select>
                              <br>
                              <br>
                <label for="inputsm">Name<span style="color: red;"> *</span></label>

                  <input class="form-control input-sm" id="inputsm" type="text" name="name" required="">
                  <br>
                            
                 <label for="inputsm">Middle name</label>

                  <input class="form-control input-sm" id="inputsm" type="text" name="mname">
                  <br>

                  <label for="inputsm">Surname<span style="color: red;"> *</span></label>

                  <input class="form-control input-sm" id="inputsm" type="text" name="sname" required="">
                  <br>
                    <label for="inputsm">Enrollment-no.<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="eno" required="">
                  <br>
                    <label>Department<span style="color: red;"> *</span></label>
                     <select name="dep" style="margin-left: 10px;">
                                <option value="Computer Engineering">Computer Engineering</option>
                                <option value="Information Technology">IT</option>
                                <option value="Electronics & Telecommunication">EnTC</option>
                                <option value="Applied Science">Applied Science</option>
                              </select>
                              <br>
                              <br>
                                <label>Designation<span style="color: red;"> *</span></label>
                                 <select name="des" style="margin-left: 10px;" id="desig" onchange="ftype()">
                                <option value="HOD">HOD</option>
                                <option value="Professor">Professor</option>
                                <option value="Associate Professor">Associate Professor</option>
                                  <option value="Assistant Professor">Assistant Professor</option>
                                  <option value="Adjunct Professor">Adjunct Professor</option>

                              </select>
                              <br>
                              <br>

                              

                    <label for="inputsm">Date of Joining:<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="Date" name="date">
                  
                  <label for="inputsm" style="display: none;" id="edate1">End Date:<span style="color: red;"> *</span></label>
                  <input style="display: none;" id="edate2" class="form-control input-sm" id="inputsm" type="Date" name="edate">

                    <label for="inputsm">Email-id<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="email" name="mail">
                  <br>
                    <label for="inputsm">Mobile number<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="no" pattern="[0-9]{10}" title="Mobile Number must be 10 digit including numbers only">
                  <center>
                  <br>
                  <br>

                    <button type="submit" class="btn btn-success" name="add">Add</button>
                  </center>
             </div>
            </form>
              <?php
if(isset($_POST['add']))
{
    $inf = $_POST['in'];
    $mname = $_POST['mname'];
    $sname = $_POST['sname'];
    $name = $_POST['name'];
     $in = $inf." ".$name." ".$mname." ".$sname;
    $eno = $_POST['eno'];
    $mail = $_POST['mail'];
    $no = $_POST['no'];
    $department = $_POST['dep'];
    $designation = $_POST['des'];
    $date = $_POST["date"];
    $edate = $_POST["edate"];
    //$level = $_POST["level"];
    $es = '1';
    $sql = "Insert into faculty (fullname,eid,contact,email,designation,department,enable,doj,edate) values ('$in','$eno','$no','$mail','$designation','$department','$es','$date','$edate')";
    if(mysqli_query($conn,$sql))
    {
   echo '<script>alert("Successfully added");window.location.href="admin.php"</script>';

    }
    else
    {
      echo $conn->error_connect;
    }

}
?>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



  <div class="modal fade" id="mfmodal1" role="dialog">
    <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Add faculty</b></h4>
          <p style="color: red;">(* indicates the field is mandatory)</p>
        </div>
        <div class="modal-body">
          
            <form action="admin.php" method="post">
              <div class="form-group">

              
                <label for="inputsm">Employee id<span style="color: red;"> *</span></label>

                  <input class="form-control input-sm" id="inputsm" type="text" name="eid1" required="">
                  <br>
                            
                 
                    <label>Department<span style="color: red;"> *</span></label>
                     <select name="dep1" style="margin-left: 10px;">
                                <option value="Computer Engineering">Computer Engineering</option>
                                <option value="Information Technology">IT</option>
                                <option value="Electronics & Telecommunication">EnTC</option>
                                <option value="Applied Science">Applied Science</option>
                              </select>
                              <br>
                              <br>
                               
                  <label for="inputsm">Email-id<span style="color: red;"> *</span></label>
                  <input class="form-control input-sm" id="inputsm" type="email" name="mail1">
                              
                  <br>
                  <br>
                    
                    <button type="submit" class="btn btn-success" name="adda">Add</button>
                  </center>
             </div>
            </form>
              <?php
if(isset($_POST['adda']))
{
    
    $eid1 = $_POST['eid1'];
    $mail1 = $_POST['mail1'];
    $department1 = $_POST['dep1'];
    
    //$level = $_POST["level"];
   
    $sqlasd = "Insert into admin (emp_id,dept,email) values ('$eid1','$department1','$mail1')";
    if(mysqli_query($conn,$sqlasd))
    {
   echo '<script>alert("Successfully added");window.location.href="admin.php"</script>';

    }
    else
    {
      echo $conn->error_connect;
    }

}
?>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<footer style="position: fixed; bottom: 0; text-align: center; background-color: black; width: 100%; z-index: 9999; height: 30px; color: white;">
    &copy PICT 2018
  </footer>
  



</script>
</body>
</html>


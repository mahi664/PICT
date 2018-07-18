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
  <meta name="viewport" content="width=device-width, initial-scale=0.4">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sidebar.css">

  <script type="text/javascript">
    function displayBlock(c,s){
      var x = document.getElementsByClassName('mycontent');
      for(var i=0;i<x.length;i++)
      {
        x[i].style.display="none";

      }

      //alert(s);
      document.getElementById('c0').className = "";
      document.getElementById('c1').className = "";
      document.getElementById('c2').className = "";
      document.getElementById('c3').className = "";

      document.getElementById(s).style.display="block";
      document.getElementById(c).className = "active";
    }

function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }

    } 
  }
}

function myFunction1() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }

    } 
  }
}


function ftype(){
    var ft = document.getElementById("desig").value;
    document.getElementById("edate1").style.display = "none";
      document.getElementById("edate2").style.display = "none";
    if(ft == "Adjunct Professor")
    {
      document.getElementById("edate1").style.display = "block";
      document.getElementById("edate2").style.display = "block";
    }
}


function myFunction2() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable2");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }

    } 
  }
}



  </script>


</head>

<body style="font-size: 15px; ">
  <div class="container-fluid" style="padding-top: 30px; padding-bottom: 30px; color:#1a237e; background-image: url('../images/BodyBG.jpg'); background-attachment: fixed; background-size: 100% 100%; background-repeat: no-repeat;">
    <div class="row">
    <div class="col-md-2 col-lg-2">
    </div>
    <div class="col-md-1 col-lg-1">
      <img src="../images/logo.png" align="center"/>
    </div>
    <div class="col-md-6 col-lg-6 col-xs-12" align="center">
      <div style="text-align: center;">
        <b>
            <p>Society for Computer Technology and Research's</p>
            <h2 class="media-heading">Pune Institute of Computer Technology</h2>
            <p>Affiliated to university of Pune, AICTE Approved, NACC Accredited, ISO 9001:2008</p>
        </b>        
      </div>
    </div>
    <div class="col-md-2 col-lg-2">
    </div>
  </div>
    </div>
  </div>

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
<div id="wrapper" style="position:relative;">
  <div id="sidebar">
    <ul class="sidebar-nav">
    <br>
      <li class="" style="color: white;"><span class="glyphicon glyphicon-user"></span>&nbsp Manage faculty</li>
      <ul class="inner">
        <li><a  data-toggle="modal" href="#mfmodal1">Add Admin</a></li>
        <li><a  data-toggle="modal" href="#mfmodal">Add Faculty</a></li>
         <li><a href="#">Remove Faculty</a></li>
      </ul>

      <li class="active" ><a href="request.php" style="color: white;"><span class="glyphicon glyphicon-bell"></span>&nbsp  Requests</a></li>
    </ul>
  </div>
  
<div class="container-fluid page-content" style="background-color: white; ">
  <h3 style="color: blue;">Departments</h3>
  <ul class="nav nav-tabs">
    <li id="c0" class="active"><a href="#" onclick="displayBlock('c0','AS')">Applied Science</a></li>
    <li id="c1"><a href="#" onclick="displayBlock('c1','COMP')">Computer Engineering</a></li>
    <li id="c2"><a href="#" onclick="displayBlock('c2','IT')">Information Technology</a></li>
    <li id="c3"><a href="#" onclick="displayBlock('c3','ENTC')">Electronics & Telecommunication</a></li>
    
  </ul>
  </div>
  <br>


<div class="page-content mycontent" id="AS" style="display: block; margin-bottom: 40px;">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    
<br>
        
        <h4 style="color: blue;"> <b>HOD</b> </h4>
               
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Applied Science' and designation='HOD'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>

            <h4 style="color: blue;"> <b>Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Applied Science' and designation='Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>
  
  

    
        <h4 style="color: blue;"> <b>Associate Professor</b> </h4>
        
          
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Applied Science' and designation='Associate Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>



    
        <h4 style="color: blue;"> <b>Assistant Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped" id="myTable">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Applied Science' and designation='Assistant Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
      echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>





    <h4 style="color: blue;"> <b>Adjunct Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped" id="myTable">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Applied Science' and designation='Adjunct Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
      echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>



        </div>  




<div class="page-content mycontent" id="COMP" style="margin-bottom: 40px;">

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    
<br>
        
        <h4 style="color: blue;"> <b>HOD</b> </h4>
               
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Computer Engineering' and designation='HOD'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>

            <h4 style="color: blue;"> <b>Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Computer Engineering' and designation='Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>
  
  

    
        <h4 style="color: blue;"> <b>Associate Professor</b> </h4>
        
          
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Computer Engineering' and designation='Associate Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>



    
        <h4 style="color: blue;"> <b>Assistant Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped" id="myTable">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Computer Engineering' and designation='Assistant Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
      echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>



        <h4 style="color: blue;"> <b>Adjunct Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped" id="myTable2">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Computer Engineering' and designation='Adjunct Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
      echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>




        </div>  


    <div class="page-content mycontent" id="IT" style="margin-bottom: 40px;">
      <input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Search for names..">
    

<br>
        
        <h4 style="color: blue;"> <b>HOD</b> </h4>
               
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Information Technology' and designation='HOD'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
      echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>

        <h4 style="color: blue;"> <b>Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Information Technology' and designation='Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>


    
        <h4 style="color: blue;"> <b>Associate Professor</b> </h4>
        
          
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Information Technology' and designation='Associate Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>



    
        <h4 style="color: blue;"> <b>Assistant Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped" id="myTable1">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Information Technology' and designation='Assistant Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>

      <h4 style="color: blue;"> <b>Adjunct Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped" id="myTable2">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>

    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Information Technology' and designation='Adjunct Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
      echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>

  
  
  
        </div>


        <div class="page-content mycontent" id="ENTC" style="margin-bottom: 40px;">

    <input type="text" id="myInput2" onkeyup="myFunction2()" placeholder="Search for names..">

<br>
        
        <h4 style="color: blue;"> <b>HOD</b> </h4>
               
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Electronics & Telecommunication' and designation='HOD'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
      echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>

        <h4 style="color: blue;"> <b>Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Electronics & Telecommunication' and designation='Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>

  

    
        <h4 style="color: blue;"> <b>Associate Professor</b> </h4>
        
          
              <table class="table table-bordered table-striped">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Electronics & Telecommunication' and designation='Associate Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>



    
        <h4 style="color: blue;"> <b>Assistant Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped" id="myTable2">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        
  
    
    
    <?php 
      $sql = "SELECT eid,fullname,enable FROM faculty where department='Electronics & Telecommunication' and designation='Assistant Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
       echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
      }
    ?>
    </table>


 <h4 style="color: blue;"> <b>Assistant Professor</b> </h4>
        
            
              <table class="table table-bordered table-striped" id="myTable2">
              <col width="20%">
              <col width="45%">
              <col width="5%">
              <col width="10%">
              <col width="10%">
              <col width="10%">
                   
      <tr>
        <th>Enrollment no</th>
        <th>Name</th>
        <th>Edit</th>
        <th>Enable</th>
        <th>Disable</th>
        <th>Delete</th>
        </tr>
        

    
    <?php 
      $sql = "SELECT eid,fullname,enable,edate FROM faculty where department='Electronics & Telecommunication' and designation='Adjunct Professor'";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
        $eid = $row["eid"];
        $edates = $row["edate"];
        echo $edates;
        $dates = date_create($edates);
        // date_format($dates,"Y-m-d");
        date_default_timezone_set("Asia/Kolkata");
        $date1 = date_create("Y-m-d");
        $diff = date_diff($dates,$date1);
        echo $diff;
        echo '<tr><td>'.$row["eid"].'</td>';
        echo '<td>'.$row["fullname"].'</td>';
      echo '<td><a href="editpage.php?eid='.$eid.'"><button type="button" class="btn btn-primary "><span class="glyphicon glyphicon-pencil"></button></td>';
        if($row["enable"]=='1')
        {
          echo '<td><button type="button" class="btn btn-primary disabled">Enable</button></td>';
          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Disable</button></td>';
        }
        else
        {

          echo '<td><a href="ed.php?eid='.$eid.'"><button type="button" class="btn btn-primary ">Enable</button></td>';
          echo '<td><button type="button" class="btn btn-primary disabled">Disable</button></td>';
        }

        echo '<td><a href="delete.php?eid='.$eid.'"<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a></td>';
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


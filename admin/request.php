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
$dept123 = $_SESSION['dept'];

?>



<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.5">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="sidebar.css">
  <script type="text/javascript">
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
  </script>
  <style type="text/css">
    
    #page-content{
  
  padding-left: 280px;
}
  </style>
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
<div id="wrapper">
  <div id="sidebar">
    <ul class="sidebar-nav">
    <br>
      <li class="" style="color: white;"><span class="glyphicon glyphicon-user"></span>&nbsp Manage faculty</li>
      <ul class="inner">
        <li><a  data-toggle="modal" href="#mfmodal">Add Faculty</a></li>
         <li><a href="admin.php">Remove Faculty</a></li>
      </ul>

      <li class="active" ><a href="#" style="color: white;"><span class="glyphicon glyphicon-bell"></span>&nbsp  Requests</a></li>
    </ul>
  </div>
  </div>
  

  <div id="page-content">
    <div class="container-fluid">
     
          

           <div class="well">Requests for Insertion
           </div>

            <table class="table table-bordered">
              <col width="10%">
              <col width="60%">
              <col width="10%">
               <col width="10%">
               <col width="10%">
    
      <tr>
        <th>Sr. no</th>
        <th>Subject</th>
        <th>View</th>
        <th>Approve</th>
        <th>Reject</th>
      </tr>
      <?php
   $sql = "SELECT * from temp2";
   $result = $conn->query($sql);
   $no = 1;
   //$table = array();
   while($row = $result->fetch_assoc())
   {    
        $tname = $row['tname'];
          $ref = $row['rowid'];
          switch ($tname) {
            case 'tqualifications':
               
              $sql1 = "select * from tqualifications where qid = '$ref'";
              $result1 = $conn->query($sql1);
              $row1 = $result1->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row1['eid'];
                  
                  $sql2 = "select fullname from faculty where eid = '$eid' ";
                  $result2 = $conn->query($sql2); 
                  $row2 = $result2->fetch_assoc();
                  $name = $row2['fullname'];
                  echo '<td>Insertion is requested by '.$name.' </td>';
                  $tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#i';
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=1"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=2"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';
                

              break;


            case 'tconferences':



                      $sql3 = "select * from tconferences where cid = '$ref'";
              $result3 = $conn->query($sql3);
              $row3 = $result3->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row3['eid'];
                  
                  $sql4 = "select fullname from faculty where eid = '$eid' ";
                  $result4 = $conn->query($sql4); 
                  $row4 = $result4->fetch_assoc();
                  $name = $row4['fullname'];
                  echo '<td>Insertion is requested by '.$name.' </td>';
                  $tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#i';
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=1"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=2"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';

              break;
            case 'tconsultancy':
              $sql5 = "select * from tconsultancy where csid = '$ref'";
              $result5 = $conn->query($sql5);
              $row5 = $result5->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row5['eid'];
                  
                  $sql6 = "select fullname from faculty where eid = '$eid' ";
                  $result6 = $conn->query($sql6); 
                  $row6 = $result6->fetch_assoc();
                  $name = $row6['fullname'];
                  echo '<td>Insertion is requested by '.$name.' </td>';
                  $tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#i';
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=1"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=2"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';

              break;
            case 'tjournals':
            
                     $sql5 = "select * from tjournals where jid = '$ref'";
              $result5 = $conn->query($sql5);
              $row5 = $result5->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row5['eid'];
                  
                  $sql6 = "select fullname from faculty where eid = '$eid' ";
                  $result6 = $conn->query($sql6); 
                  $row6 = $result6->fetch_assoc();
                  $name = $row6['fullname'];
                  echo '<td>Insertion is requested by '.$name.' </td>';
                  $tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#i';
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=1"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=2"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';
              break;

            case 'tfundedrp':
                       $sql5 = "select * from tfundedrp where fid = '$ref'";
              $result5 = $conn->query($sql5);
              $row5 = $result5->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row5['eid'];
                  
                  $sql6 = "select fullname from faculty where eid = '$eid' ";
                  $result6 = $conn->query($sql6); 
                  $row6 = $result6->fetch_assoc();
                  $name = $row6['fullname'];
                  echo '<td>Insertion is requested by '.$name.' </td>';
                  $tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#i';
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=1"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=2"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';
              break;

            case 'tbooks':

                   $sql5 = "select * from tbooks where bid = '$ref'";
              $result5 = $conn->query($sql5);
              $row5 = $result5->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row5['eid'];
                  
                  $sql6 = "select fullname from faculty where eid = '$eid' ";
                  $result6 = $conn->query($sql6); 
                  $row6 = $result6->fetch_assoc();
                  $name = $row6['fullname'];
                  echo '<td>Insertion is requested by '.$name.' </td>';
                  $tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#i';
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=1"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=2"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';
              break;

            case 'tpatent':
                  $sql5 = "select * from tpatent where pid = '$ref'";
              $result5 = $conn->query($sql5);
              $row5 = $result5->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row5['eid'];
                  
                  $sql6 = "select fullname from faculty where eid = '$eid' ";
                  $result6 = $conn->query($sql6); 
                  $row6 = $result6->fetch_assoc();
                  $name = $row6['fullname'];
                  echo '<td>Insertion is requested by '.$name.' </td>';
                  $tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#i';
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=1"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=2"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';
              break;      
           
          } //switch cha 

    }?>


      </table>
        <div class="well">Requests for Updation
           </div>

            <table class="table table-bordered">
              <col width="10%">
              <col width="60%">
              <col width="10%">
               <col width="10%">
               <col width="10%">
    
      <tr>
        <th>Sr. no</th>
        <th>Subject</th>
        <th>View</th>
        <th>Approve</th>
        <th>Reject</th>
      </tr>
      <?php
   $sqlu = "SELECT * from temp";
   $resultu = $conn->query($sqlu);
   $no = 1;
   $table = array();
   while($rowu = $resultu->fetch_assoc())
   {      
        $eid123 = $rowu['eid'];
        $adya = "SELECT department from faculty WHERE eid = '$eid123'";
        $runadya = $conn->query($adya);
        $row123 = $runadya->fetch_assoc();
        if($dept123 != $row123['department'])
        {
          if($dept123!="")
            continue;
        }
          $tname = $rowu['tname'];
          $ref = $rowu['rowid'];
          $tid = $rowu['tid'];
          $eidd = $rowu['eid'];
          switch ($tname) {
            case 'qualifications':
               
              $sql10 = "select * from qualifications where qid = '$ref'";
              $result10 = $conn->query($sql10);
              $row10 = $result10->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row10['eid'];
                  
                  $sql20 = "select fullname from faculty where eid = '$eid' ";
                  $result20 = $conn->query($sql20); 
                  $row20 = $result20->fetch_assoc();
                  $name = $row20['fullname'];
                  echo '<td>Updation is requested by '.$name.' </td>';
                  //$tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#'.$tid;
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=3"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=4"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';
                

              break;
              case  'conferences':

                $sql10 = "select * from conferences where cid = '$ref'";
              $result10 = $conn->query($sql10);
              $row10 = $result10->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row10['eid'];
                  
                  $sql20 = "select fullname from faculty where eid = '$eid' ";
                  $result20 = $conn->query($sql20); 
                  $row20 = $result20->fetch_assoc();
                  $name = $row20['fullname'];
                  echo '<td>Updation is requested by '.$name.' </td>';
                  //$tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#'.$tid;
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=3"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=4"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';

              break;

              case 'consultancy':
              $sql10 = "select * from consultancy where csid = '$ref'";
              $result10 = $conn->query($sql10);
              $row10 = $result10->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row10['eid'];
                  
                  $sql20 = "select fullname from faculty where eid = '$eid' ";
                  $result20 = $conn->query($sql20); 
                  $row20 = $result20->fetch_assoc();
                  $name = $row20['fullname'];
                  echo '<td>Updation is requested by '.$name.' </td>';
                  //$tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#'.$tid;
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=3"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=4"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';
              break;

              case 'journals':

              $sql10 = "select * from journals where jid = '$ref'";
              $result10 = $conn->query($sql10);
              $row10 = $result10->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row10['eid'];
                  
                  $sql20 = "select fullname from faculty where eid = '$eid' ";
                  $result20 = $conn->query($sql20); 
                  $row20 = $result20->fetch_assoc();
                  $name = $row20['fullname'];
                  echo '<td>Updation is requested by '.$name.' </td>';
                  //$tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#'.$tid;
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=3"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=4"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';

              break;


              case 'fundedrp':
                           $sql10 = "select * from fundedrp where fid = '$ref'";
              $result10 = $conn->query($sql10);
              $row10 = $result10->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row10['eid'];
                  
                  $sql20 = "select fullname from faculty where eid = '$eid' ";
                  $result20 = $conn->query($sql20); 
                  $row20 = $result20->fetch_assoc();
                  $name = $row20['fullname'];
                  echo '<td>Updation is requested by '.$name.' </td>';
                  //$tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#'.$tid;
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=3"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=4"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';
              break;


              case 'patent':
                             $sql10 = "select * from patent where pid ='$ref'";
              $result10 = $conn->query($sql10);
              $row10 = $result10->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row10['eid'];
                  
                  $sql20 = "select fullname from faculty where eid = '$eid' ";
                  $result20 = $conn->query($sql20); 
                  $row20 = $result20->fetch_assoc();
                  $name = $row20['fullname'];
                  echo '<td>Updation is requested by '.$name.' </td>';
                  //$tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#'.$tid;
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=3"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=4"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';
              break;


              case 'books':
                     $sql10 = "select * from books where bid = '$ref'";
              $result10 = $conn->query($sql10);
              $row10 = $result10->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row10['eid'];
                  
                  $sql20 = "select fullname from faculty where eid = '$eid' ";
                  $result20 = $conn->query($sql20); 
                  $row20 = $result20->fetch_assoc();
                  $name = $row20['fullname'];
                  echo '<td>Updation is requested by '.$name.' </td>';
                  //$tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#'.$tid;
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=3"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=4"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';

              break;


               case 'faculty':
                     $sql10 = "select * from faculty where eid = '$eidd'";
              $result10 = $conn->query($sql10);
              $row10 = $result10->fetch_assoc(); 
              echo '<tr><td>'.$no.'</td>';
                      $no++;
                  //$eid = $row10['eid'];
                  
                 
                  $name = $row10['fullname'];
                  echo '<td>Updation is requested by '.$name.' </td>';
                  //$tid = $row['tid'];
                  $hi = $tname.'#'.$ref.'#'.$tid;
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=3"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=4"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';

              break;



       /*  if(empty($table))
         {

          
          array_push($table,$row['tname']);
          //print_r($table);

          $sql1 = "SELECT * from $tname";
          $result2 = $conn->query($sql1);
          while($row2 = $result2->fetch_assoc())
          {       
                  echo '<tr><td>'.$no.'</td>';
                      $no++;
                  $eid = $row2['eid'];
                  $rowid = $row2['rowid'];
                  $sql7 = "select fullname from faculty where eid = '$eid' ";
                  $result7 = $conn->query($sql7); 
                  $row7 = $result7->fetch_assoc();
                  $name = $row7['fullname'];
                  echo '<td>Insertion is requested by '.$name.' </td>';
                  $tid = $row['tid'];
                  $hi = $tname.'#'.$rowid.'#i';
                  //echo $hi;
                  echo '<center>';
                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                  echo '</center>';
                  echo '<center>';
                  echo '<td><a href="approve.php?tid='.$tid.'&status=1"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                  echo '</center>';
                  echo '<center>';

                  echo '<td><a href="approve.php?tid='.$tid.'&status=2"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                  echo '</center>';
                }
          }
          else
          {
              if(in_array($tname,$table)) {

              }
              else{
                     array_push($table,$row['tname']);
                      //print_r($table);

                          $sql5 = "SELECT * from $tname";
                          $result2 = $conn->query($sql5);
                          while($row5 = $result2->fetch_assoc())
                          {       
                                  echo '<tr><td>'.$no.'</td>';
                                      $no++;
                                  $eid = $row['eid'];
                                  $rowid = $row5['$rowid'];
                                 // echo $eid;
                                  $sql6 = "select fullname from faculty where eid = '$eid' ";
                                  $result6 = $conn->query($sql6); 
                                  $row6 = $result6->fetch_assoc();
                                  $name = $row6['fullname'];
                                  echo '<td>Insertion is requested by '.$name.' </td>';
                                  $tid = '';
                                  $hi = $tname.'#'.$rowid.'#i';
                                  echo '<center>';
                                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                                  echo '</center>';
                                  echo '<center>';
                                  echo '<td><a href="approve.php?tid='.$tid.'&status=1"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                                  echo '</center>';
                                  echo '<center>';

                                  echo '<td><a href="approve.php?tid='.$tid.'&status=2"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                                  echo '</center>';
                                }

                              }

          }

         }
  
       //$sql1 = "SELECT * fro,"
  
  


   ?>
  </table>
</div>      


         <div class="well">Requests for Updation
           </div>

            <table class="table table-bordered">
              <col width="10%">
              <col width="60%">
              <col width="10%">
               <col width="10%">
               <col width="10%">
    
      <tr>
        <th>Sr. no</th>
        <th>Subject</th>
        <th>View</th>
        <th>Approve</th>
        <th>Reject</th>
      </tr>
      <?php
   $sql4 = "SELECT * from temp";
   $result4 = $conn->query($sql4);
   $no = 1;
   $table = array();
   while($row4 = $result4->fetch_assoc())
                                { echo '<tr><td>'.$no.'</td>';
                                      $no++;
                                  $eid1 = $row4['eid'];
                                  $sql3 = "select fullname from faculty where eid = '$eid1' ";
                                  $result3 = $conn->query($sql3); 
                                  $row3 = $result3->fetch_assoc();
                                  $name = $row3['fullname'];
                                  echo '<td>Updation is requested by '.$name.' </td>';
                                  $tid = $row['tid'];
                                  $ttname = $row4['tname'];
                                  $hi = $ttname.'#'.$no.'#u';
                                  echo '<center>';
                                  echo '<td><button type="button" class="btn btn-primary view" id="'.$hi.'"><span class="glyphicon glyphicon-glyphicon glyphicon-eye-open"></button></td>';
                                  echo '</center>';
                                  echo '<center>';
                                  echo '<td><a href="approve.php?tid='.$tid.'&status=1"><button type="button" class="btn btn-success "><span class="glyphicon glyphicon-ok"></button></a></td>';
                                  echo '</center>';
                                  echo '<center>';

                                  echo '<td><a href="approve.php?tid='.$tid.'&status=2"><button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-remove"></button></a></td></tr>';
                                  echo '</center>';
                                }

*/
                              }
                            }
   ?>
  </table>
</div>

        </div>
      
  
    


<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Insertion/Update</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="data1">
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('.view').click(function(){
      var view_id = $(this).attr("id");
      //alert(view_id);
      $.ajax({
        url:'view.php',
        method : "POST",
        data:{view_id:view_id},
        success:function(data){
          $("#data1").html(data);
          $("#myModal1").modal('show');
        }
      });
    });
  });
</script>







        <!-- Modal -->
  <div class="modal fade" id="mfmodal" role="dialog">
    <div class="modal-dialog modal-dialog-lg modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add faculty</h4>
        </div>
        <div class="modal-body">
          
            <form action="request.php" method="post">
              <div class="form-group">

              <select name="in">
                                <option value="Mr.">Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Dr.">Dr.</option>
                              </select>
                              <br>
                              <br>
                <label for="inputsm">Name</label>

                  <input class="form-control input-sm" id="inputsm" type="text" name="name">
                  <br>
                            
                 <label for="inputsm">Middle name</label>

                  <input class="form-control input-sm" id="inputsm" type="text" name="mname">
                  <br>

                  <label for="inputsm">Surname</label>

                  <input class="form-control input-sm" id="inputsm" type="text" name="sname">
                  <br>
                    <label for="inputsm">Enrollment-no.</label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="eno">
                  <br>
                    <label>Designation</label>
                     <select name="dep" style="margin-left: 10px;">
                                <option value="Computer Engineering">Computer Engineering</option>
                                <option value="Information Technology">IT</option>
                                <option value="Electronics & Telecommunication">EnTC</option>
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

                    <label for="inputsm">Email-id</label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="mail">
                  <br>
                    <label for="inputsm">Mobile number</label>
                  <input class="form-control input-sm" id="inputsm" type="text" name="no">
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
  $edate = $_POST['edate'];
  //echo '<script>alert($edate);window.location.href="request.php"</script>';
  $es = '1';
  $date = $_POST['date'];
  //$level = $_POST['level'];
  $sql = "Insert into faculty (fullname,eid,contact,email,designation,department,enable,doj,adjunct,edate) values ('$in','$eno','$no','$mail','$designation','$department','$es','$date','$edate')";
  if(mysqli_query($conn,$sql))
  {
 echo '<script>alert("Successfully added");window.location.href="request.php"</script>';

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

</body>
</html>
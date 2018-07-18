<?php
include "connect.php";
session_start();
session_unset();
session_destroy();
echo "<script>window.location.href = '/PICT/admin/index.php';</script>";
echo "<script> function signOut() { var auth2 = gapi.auth2.getAuthInstance();  auth2.signOut().then(function () {console.log('User signed out.'); });}</script>";
?>
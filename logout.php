<?php 
session_start();
 include "conn.php";
 if(isset($_SESSION['access']) && $_SESSION['fullname'] &&  $_SESSION['access']=="Admin") { 
     $date = date('d-m-Y');
	 date_default_timezone_set('Africa/Harare');
     $time=date("H:i:s");
	 $query="INSERT INTO `audit_tray`(`username`, `operation` , `date`, `time`) VALUES ('$_SESSION[fullname]','Logged Out','$date','$time')";
		if($connection-> query($query)) { header("location:admin/index.php");}
		else {echo "Error: ".$query."<br>".mysqli_error($connection);}
	 
unset($_SESSION['username']);
unset($_SESSION['fullname']);


session_unset();
session_destroy();

header("location:index.php");
 }
else{header('location:../index.php');} ?>
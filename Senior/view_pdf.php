<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php 
include("conn.php"); 
error_reporting(0);
ob_start();
session_start(); 
$nat=$_GET['id'];
$select=mysqli_query($connection,"SELECT * FROM `education` WHERE `nat_id`='$nat'");
while ($row=mysqli_fetch_assoc($select)){
   $rez=$row['results'];
   $rezo="../application/uploads/".$rez."";
$file=$rezo;

$filename=$rezo;
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="'.$filename.'"');
header('Content-Transfer-Ecoding:binary');
header('Accep-ranges:bytes');
@readfile($file);
}
?>
</body>
</html>
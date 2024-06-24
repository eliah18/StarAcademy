<?php 
ob_start();
session_start();
error_reporting(0);
include("../conn.php");

?>
<?php

function clean($str) {
    $str = @trim($str);
    if (get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
}
                    function qoutess($str){
$remove[] = "'";
$remove[] = '"';
$remove[] = "-"; // just as another example
$new = str_replace($remove, "", $str);
return $new;
}
if(isset($_POST['btnSubmit'])) {

    //tell us abt yrself details
    $what_qtn=$_SESSION['what_qtn'];
    $where_qtn=$_SESSION['where_qtn'];
    $who_qtn=$_SESSION['who_qtn'];
    $why_qtn=$_SESSION['why_qtn'];
    //xul_info
    $xul_name= $_SESSION['xul_name']; 
    $xul_head= $_SESSION['xul_head'];
    $xul_area= $_SESSION['xul_area'];
    $xul_province= $_SESSION['xul_province'];
    //personal details
    $FN= $_SESSION['FN'];
    $surname= $_SESSION['surname'];
    $nat_id= $_SESSION['nat_id'];
    $MTN= $_SESSION['MTN'];
    $gender= $_SESSION['gender'];
    $p_email= $_SESSION['email'];
    $SDR= $_SESSION['SDR'];
    $HA= $_SESSION['HA'];
  //guardian details
  $G_NAME = clean(qoutess($_POST["G_NAME"]));
  $G_SUR= clean(qoutess($_POST["G_SUR"]));
  $email = clean(qoutess($_POST["g_email"]));
  $FON_NUM= clean(qoutess($_POST["FON_NUM"]));
  $relationship = clean(qoutess($_POST["relationship"]));
  $_SESSION['G_NAME']=$G_NAME;
  $_SESSION['G_SUR']=$G_SUR;
  $_SESSION['g_email']=$email;
  $_SESSION['FON_NUM']=$FON_NUM;
  $_SESSION['FON_NUM']=$FON_NUM;
  //education qualifications
  $b1 = $_SESSION['sub1'];
  $g1 = $_SESSION['g1'];
  $b2 =  $_SESSION['sub2'];
  $g2 = $_SESSION['g2'];
  $b3 = $_SESSION['sub3'];
  $g3 = $_SESSION['g3'];
  $pass =  $_SESSION['pass'];
  $As = $_SESSION['As'];
  $m = $_SESSION['grade4'];
  $s =  $_SESSION['grade5'];
  $e =  $_SESSION['grade6'];
  $rezo = $_SESSION['results'];
 
 if ($m=="D" || $m=="E" || $m=="U"){echo "<script language = javascript>alert('Sorry!!!! You did not meet the minimum requirements needed');window.location='step_1.php'; </script>";}
else if ($s=="D" || $s=="E" || $s=="U"){echo "<script language = javascript>alert('Sorry!!!! You did not meet the minimum requirements needed');window.location='step_1.php'; </script>";}
 else if($e=="D" || $e=="E" || $e=="U"){echo "<script language = javascript>alert('Sorry!!!! You did not meet the minimum requirements needed');window.location='step_1.php'; </script>";} 
 else{//insert code for multiple queries
$query="INSERT INTO `self`(`nat_id`, `what_qtn`, `where_qtn`, `who_qtn`, `why_qtn`)
 VALUES ('$nat_id','$what_qtn','$where_qtn','$who_qtn','$why_qtn')";
if($connection-> query($query))
{
    $xquery="INSERT INTO `xul_info`(`nat_id`, `xul_name`, `xul_head`, `xul_area`, `xul_province`)
     VALUES ('$nat_id','$xul_name','$xul_head','$xul_area','$xul_province')";
    if($connection-> query($xquery))
    {
        $hquery="INSERT INTO `personal_info`(`name`, `surname`, `nat_id`, `gender`, `email`, `mobile`, `dietary_req`, `home_address`,`xul_name`,`Province`, `Az`)
         VALUES ('$FN','$surname','$nat_id','$gender','$p_email','$MTN','$SDR','$HA','$xul_name','$xul_province','$As')";
        if($connection-> query($hquery))
        {
        $vquery="INSERT INTO `gurdian_info`(`nat_id`, `name`, `surname`, `email`, `mobile`, `relationship`)
         VALUES ('$nat_id','$G_NAME','$G_SUR','$email','$FON_NUM','$relationship')";
    if($connection-> query($vquery))
    {
        $zquery="INSERT INTO `education`(`nat_id`, `b1`, `g1`, `b2`, `g2`, `b3`, `g3`, `passed_subs`, `Az`, `Maths`, `Science`, `English`, `results`)
         VALUES ('$nat_id','$b1','$g1','$b2','$g2','$b3','$g3','$pass','$As','$m','$s','$e','$rezo')";
    if($connection-> query($zquery)){
        echo ("<script> alert('Registration Successful');window.location='step_1.php';</script>");
     
    }
    else {echo "Error: ".$zquery."<br>".mysqli_error($connection);}
}
    else {echo "Error: ".$vquery."<br>".mysqli_error($connection);}
   
    }
    else {echo "Error: ".$hquery."<br>".mysqli_error($connection);}
}
else {echo "Error: ".$xquery."<br>".mysqli_error($connection);}
}
 }
}

?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="0lB8uwMuKXP45gNsLME6Wq7RvmiDjpCK8zzkDPz3">
	<title>    Higherlife Foundation :: Star Academy - Application 
</title>
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/custom.css">
	<link type="text/css" rel="stylesheet" href="css/additional.css">
	<link rel="icon" href="images/HLF (2).png" sizes="32x32">
    <script src="steps/jquery.min.js"></script>
  <script src="steps/bootstrap.js" type="text/javascript"></script>
  <link rel="stylesheet" href="steps/bootstrap.min.css">

</head>

<body>
<?php include 'includes/navigation.php'; ?>
	<div style="background:#f5f5f5;padding:20px;"><h4 style="text-align: center;font-weight: 300;">Scholarship Applications Portal</h4></div>

    <!--End Navigation-->
	<!--Page Contains-->
	<div class="container-fluid">
		<div class="row">
			<!--Begin Side Bar-->
						<div class="col-sm-9 col-md-10 col-md-offset-1 main" style="padding-top: 40px;">
				<!--Bread Crumb-->
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					    <li><a href="#">Star Academy Scholarship</a></li>
    <li><a href="#">Application</a></li>
    
				</ol>
				<!--End Breadcrumbs-->
				<!--Begin Page Contents-->
				<div class="page-contents">
                    <?php echo $message;?>
                <form method="POST" action=""  class="form-horizontal" >
			<div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Gurdian Details</strong></h4></div>
        <div class="panel-body ">

		
       <!--first row of the form  -->
       <div class="container">
       <div class="col-md-4">
            <h5>Name:</h5>
				<div class="form-group">
					<input type="text" name="G_NAME" value="<?php echo $_SESSION['G_NAME']; ?>" required="" class="form-control" id="G_NAME" placeholder="e.g Mike" pattern="[A-Za-z.' ]+">
				</div>
			</div>
            <div class="col-md-2"></div>
			<div class="col-md-4">
              <h5>Surname:</h5>
				<div class="form-group">
					<input type="text" name="G_SUR" value="<?php echo $_SESSION['G_SUR']; ?>"  required="" class="form-control" id="G_SUR" placeholder="e.g Adams" pattern="[A-Za-z.' ]+">
				</div>
			</div>
			
		</div>
         <!--second row of the form  -->
                <div class="container">
			<div class="col-md-4">
            <h5>Email:</h5>
				<div class="form-group">
					<input type="email" name="g_email" class="form-control" id="g_email" value="<?php echo $_SESSION['g_email']; ?>" placeholder="star@staracademy.org">
                    <span class="help-block" style="font-size: 12px"><em>email address requirement is optional</em></span>
                </div>
			</div>
            <div class="col-md-2"></div>
			<div class="col-md-4">
              <h5>Phone number:</h5>
				<div class="form-group">
					<input type="text" name="FON_NUM" value="<?php echo $_SESSION['FON_NUM']; ?>" required="" pattern="2637\d{8}" class="form-control" id="FON_NUM" placeholder="2637772227548">
				</div>
			
		</div>
        </div>
        <!--third row of the form  -->
        <div class="container">
			<div class="col-md-4">
            <h5>Relationship:</h5>
				<div class="form-group">
					<input type="text" name="relationship" value="<?php echo $_SESSION['relationship']; ?>" required="" class="form-control" id="relationship" placeholder="uncle" pattern="[A-Za-z.' ]+">
				</div>
			</div>
            </div>
    <div class="col-md-8">
                <br>
                
                <button type="submit" name="btnSubmit" class="btn btn-info col-md-3" >Finish <i class="fa fa-arrow-circle-down bold"></i></button>
            </div>

            </form>

        </div>

        <div class="progress inner-progress-bar">
 <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:98%">98%      </div>
        </div>

    </div>
	</div>
    </div>
    </div>
	
<?php include 'includes/footer.php'; ?>

</body>
</html>
 

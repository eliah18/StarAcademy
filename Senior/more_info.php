<?php 
include("conn.php"); 
error_reporting(0);
ob_start();
session_start(); 
$nat_id=$_GET['id'];



?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="0lB8uwMuKXP45gNsLME6Wq7RvmiDjpCK8zzkDPz3">
	<title>    Higherlife Foundation :: Star Academy - Application 
</title>
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../application/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="../application/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="../application/css/custom.css">
	<link type="text/css" rel="stylesheet" href="../application/css/additional.css">
	<link rel="icon" href="../application/images/HLF (2).png" sizes="32x32">
    <script src="../application/steps/jquery.min.js"></script>
  <script src="../application/steps/bootstrap.js" type="text/javascript"></script>
  <link rel="stylesheet" href="../application/steps/bootstrap.min.css">

  <style>
  .box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>
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
			<!-- new code -->
            <br />
  <div class="container box">
   <br />
  
  
   <form method="post" id="register_form">
    <ul class="nav nav-tabs">
     <li class="nav-item">
      <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_Step1_details">Step 1</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_step2_details" style="border:1px solid #ccc">Step 2</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_step3_details" style="border:1px solid #ccc">Step 3</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" style="border:1px solid #ccc" id="list_step4_details">Step 4</a>
     </li>
     <li class="nav-item">
      <a class="nav-link inactive_tab1" id="list_step5_details" style="border:1px solid #ccc">Step 5</a>
     </li>
   
    
    </ul>
    <div class="tab-content" style="margin-top:16px;">
    <!-- step 1 -->
     <div class="tab-pane active" id="step1_details">
      <div class="panel panel-primary">
       <div class="panel-heading"><h4><strong>Tell us about your self?</strong></h4></div>
       <div class="panel-body ">
       <?php   $select=mysqli_query($connection,"SELECT * FROM `self` WHERE `nat_id`='$nat_id'");
  while ($row=mysqli_fetch_assoc($select)){
     ?>
       <div class="tab">
       <div class="form-group">
      <h5>What do you want to be when you grow up and why?</h5>
      <input class="form-control" value="<?php  echo $row['what_qtn']; ?>"  rows="3" id="comment" >
    </div>
    
    <div class="form-group">
    <h5>Where do you see your self in 20 years?</h5>
                <input  type="text" value="<?php  echo $row['where_qtn']; ?>"  class="form-control" id="where_qtn" >
              </div>
      
   <div class="form-group">
      <h5>Who is your role model and why?</h5>
      <input class="form-control" value="<?php  echo $row['who_qtn']; ?>" rows="3" id="who_qtn">
    </div>
     
    <div class="form-group">
      <h5>why do you want to be part of Star leadership bootcamp?</h5>
      <input class="form-control" value="<?php  echo $row['why_qtn']; ?>" rows="3" id="why_qtn">
    </div>
    </div>
  <?php } ?>
        <br />
        <div align="center">
         <button type="button" name="btn_step1_details" id="btn_step1_details" class="btn btn-info  col-md-3">Next <i class="fa fa-arrow-circle-right bold"></i></button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <!-- end of step 1 -->
     
      <!-- step 2 -->

     <div class="tab-pane fade" id="step2_details">
      <div class="panel panel-primary ">
       <div class="panel-heading"><h4><strong>Tell us about your school:</strong></h4></div>
       <div class="panel-body ">
       <!--first row of the form  -->
       <?php   $select=mysqli_query($connection,"SELECT * FROM `xul_info` WHERE `nat_id`='$nat_id'");
  while ($row=mysqli_fetch_assoc($select)){
     ?>
       <div class="container">
			<div class="col-md-4">
            <h5>Name of school:</h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['xul_name']; ?>" class="form-control" id="xul_name">
				</div>
			</div>
			<div class="col-md-3">
              <h5>School Head:</h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['xul_head']; ?>" class="form-control"  id="xul_head" >
				</div>
			</div>
			
		</div>
        <!--second row of the form  -->
            <div class="container">
			<div class="col-md-4">
				<div class="form-group">
                 <h5>School area:</h5>
					<input type="text" value="<?php  echo $row['xul_area']; ?>" class="form-control" id="xul_area" >
				</div>
      </div>
     
			<div class="col-md-3">
              <h5>School province:<h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['xul_province']; ?>" class="form-control" id="xul_province">
				</div>
			</div>
			
		</div>  
  <?php }?>   
        <br />
        <div style="text-align: center;">
         <button type="button" name="previous_btn_step2_details" id="previous_btn_step2_details" class="btn btn-default col-md-3"><i class="fa fa-arrow-circle-left bold"></i> Previous</button>
         <div class="col-md-2"></div>
         <button type="button" name="btn_step2_details" id="btn_step2_details" class="btn btn-info  col-md-3">Next <i class="fa fa-arrow-circle-right bold"></i></button>
        </div>
        <br />
       </div>
      </div>
     </div>
      <!-- end of step 2 -->
       <!--  step 3 -->
     <div class="tab-pane fade" id="step3_details">
      <div class="panel panel-primary">
       <div class="panel-heading"></div>
       <div class="panel-body ">
       <h4>What subjects are you best at, at school? Choose 3 and tell us your grades:</h4>
             <!--first row of the form  -->
             <?php   $select=mysqli_query($connection,"SELECT * FROM `education` WHERE `nat_id`='$nat_id'");
  while ($row=mysqli_fetch_assoc($select)){
     ?>
             <div class="container">
			<div class="col-md-3">
            
				<div class="form-group">
                <h5>Subject 1:</h5>
                <input type="text" value="<?php  echo $row['b1']; ?>" class="form-control"  >
				</div>
			</div>
			<div class="col-md-3">
             	<div class="form-group">
                 <h5>Grade:</h5>
                 <input type="text" value="<?php  echo $row['g1']; ?>" class="form-control"  >
				</div>
			</div>
			
		</div>
        <!--second row of the form  -->
                      <div class="container">
			<div class="col-md-3">
            
				<div class="form-group">
                <h5>Subject 2:</h5>
                <input type="text" value="<?php  echo $row['b2']; ?>" class="form-control"  >
				</div>
			</div>
			<div class="col-md-3">
              
				<div class="form-group">
                <h5>Grade:</h5>
                <input type="text" value="<?php  echo $row['g2']; ?>" class="form-control"  >
				</div>
			</div>
			
		</div>
        <!--third row of the form  -->
                  <div class="container">
			<div class="col-md-3">
            
				<div class="form-group">
                <h5>Subject 3:</h5>
                <input type="text" value="<?php  echo $row['b3']; ?>" class="form-control"  >
				</div>
			</div>
			<div class="col-md-3">
              
				<div class="form-group">
                <h5>Grade:</h5>
                <input type="text" value="<?php  echo $row['g3']; ?>" class="form-control" >
				</div>
			</div>
			
		</div>
        <!-- another section -->
        <h4>What grades did you get at these 3 subjects and number of subjects passed?</h4>
          <!--first row of the form  -->
       <div class="container">
			<div class="col-md-3">
            <h5>Passed Subjects</h5>
				<div class="form-group">
        <input type="text" value="<?php  echo $row['passed_subs']; ?>" class="form-control" >
				</div>
			</div>
			<div class="col-md-3">
            <h5>Number of As</h5>
				<div class="form-group">
        <input type="text" value="<?php  echo $row['Az']; ?>" class="form-control"  >
				</div>
			</div>
	</div>
			
		
        <!--second row of the form  -->
             <div class="container">
             <div class="col-md-3">
            <h5>Mathematics</h5>
				<div class="form-group">
        <input type="text" value="<?php  echo $row['Maths']; ?>" class="form-control"  >
				</div>
			</div>
			<div class="col-md-3">
            <h5> Science</h5>
		    <div class="form-group">
				<input type="text" value="<?php  echo $row['Science']; ?>" class="form-control" >
				</div>
			</div>
			
			</div>
			
		
        <!--third row of the form  -->
             <div class="container">
             
			<div class="col-md-3">
            <h5>English</h5>
		   <div class="form-group">
       <input type="text" value="<?php  echo $row['English']; ?>" class="form-control"  >
			</div>
			</div>
  <?php } ?>   
			</div>
			
        <br />
        <div align="center">
         <button type="button" name="previous_btn_step3_details" id="previous_btn_step3_details" class="btn btn-default col-md-3 "><i class="fa fa-arrow-circle-left bold"></i> Previous</button>
         <div class="col-md-2"></div>
         <button type="button" name="btn_step3_details" id="btn_step3_details" class="btn btn-info col-md-3 ">Next <i class="fa fa-arrow-circle-right bold"></i> </button>
        </div>
        <br />
       </div>
      </div>
     </div>
      <!-- end of step 3-->
      <!-- step 4 -->
     <div class="tab-pane fade" id="step4_details">
      <div class="panel panel-primary">
       <div class="panel-heading">Personal Details</div>
       <div class="panel-body ">
        <!--first row of the form  -->
        <?php   $select=mysqli_query($connection,"SELECT * FROM `personal_info` WHERE `nat_id`='$nat_id'");
  while ($row=mysqli_fetch_assoc($select)){
     ?>
        <div class="container">
			<div class="col-md-3">
            <h5>Surname:</h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['surname']; ?>" class="form-control" id="fam_name" >
				</div>
			</div>
			<div class="col-md-3">
              <h5>First Name(s):<h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['name']; ?>" class="form-control" id="FN" >
				</div>
			</div>
			
		</div>
         <!--second row of the form  -->
                <div class="container">
			<div class="col-md-3">
            <h5>National ID:<h5>
				<div class="form-group">
					<input type="text" class="form-control" value="<?php  echo $row['nat_id']; ?>" id="nat_id" >
				</div>
			</div>
			<div class="col-md-3">
              <h5>Gender:<h5>
				<div class="form-group">
        <input type="text" class="form-control" value="<?php  echo $row['gender']; ?>" id="gender" >
			</div>
			
		</div>
        </div>
        <!--third row of the form  -->
                <div class="container">
			<div class="col-md-3">
            <h5>Email Address:<h5>
				<div class="form-group">
					<input type="text" class="form-control" id="email" value="<?php  echo $row['email']; ?>">
				</div>
			</div>
      <div class="col-md-3">
              <h5>Mobile Number:</h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['mobile']; ?>" class="form-control" id="MTN">
				</div>
			</div>
			
		</div>
         <!--fourth row of the form  -->
               
        <div class="container">
        <div class="col-md-3">
              <h5>State any Dietary requirements</h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['dietary_req']; ?>" class="form-control" id="SDR">
				</div>
			</div>
			<div class="col-md-3">
         <!-- home address textbox-->
        <div class="form-group">
      <h5>Home Address</h5>
      <input type="text" value="<?php  echo $row['home_address']; ?>" class="form-control" id="HA">
    </div>
    </div>
  <?php } ?>
    <!-- end of personal details-->
  </div>
        <br />
        <div align="center">
        <button type="button" name="previous_btn_step4_details" id="previous_btn_step4_details" class="btn btn-default col-md-3"> <i class="fa fa-arrow-circle-left bold"></i>Previous </button>
        <div class="col-md-2"></div>
        <button type="button" name="btn_step4_details" id="btn_step4_details" class="btn btn-info col-md-3">Next <i class="fa fa-arrow-circle-right bold"></i></button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <!-- end of step 4 -->
      <!-- step 5 -->
      <div class="tab-pane fade" id="step5_details">
      <div class="panel panel-primary">
       <div class="panel-heading">Gurdian's Details</div>
       <div class="panel-body ">
         <!--first row of the form  -->
         <?php   $select=mysqli_query($connection,"SELECT * FROM `gurdian_info` WHERE `nat_id`='$nat_id'");
  while ($row=mysqli_fetch_assoc($select)){
     ?>
         <div class="container">
			<div class="col-md-3">
            <h5>Name:</h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['name']; ?>" class="form-control" id="G_NAME">
				</div>
			</div>
			<div class="col-md-3">
              <h5>Surname:</h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['surname']; ?>" class="form-control" id="G_SUR" >
				</div>
			</div>
			
		</div>
         <!--second row of the form  -->
                <div class="container">
			<div class="col-md-3">
            <h5>Email:</h5>
				<div class="form-group">
					<input type="email" value="<?php  echo $row['email']; ?>" class="form-control" id="email" >
				</div>
			</div>
			<div class="col-md-3">
              <h5>Phone number:</h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['mobile']; ?>" class="form-control" id="FON_NUM" >
				</div>
			
		</div>
        </div>
        <!--third row of the form  -->
        <div class="container">
			<div class="col-md-4">
            <h5>Relationship:</h5>
				<div class="form-group">
					<input type="text" value="<?php  echo $row['relationship']; ?>" class="form-control" >
				</div>
			</div>
            </div>
        <br />
        <?php } ?>
        <div align="center">
        <button type="button" name="previous_btn_step5_details" id="previous_btn_step5_details" class="btn btn-default col-md-3">Previous</button>
        <div class="col-md-2"></div>
        <button type="button" name="btn_step5_details" id="btn_step5_details" class="btn btn-success col-md-3">Finish <i class="fa fa-arrow-circle-right bold"></i></button>
        </div>
        <br />
       </div>
      </div>
     </div>
     <!-- end of step 5 -->
      
     
    </div>
   </form>
  </div>
  <!-- end of new code -->
  </div>
    </div>
    </div>
	
<?php include '../application/includes/footer.php'; ?>
</body>
</html>

<script>
$(document).ready(function(){
 
 $('#btn_step1_details').click(function(){

  

  {
   $('#list_step1_details').removeClass('active active_tab1');
   $('#list_step1_details').removeAttr('href data-toggle');
   $('#step1_details').removeClass('active');
   $('#list_step1_details').addClass('inactive_tab1');
   $('#list_step2_details').removeClass('inactive_tab1');
   $('#list_step2_details').addClass('active_tab1 active');
   $('#list_step2_details').attr('href', '#step2_details');
   $('#list_step2_details').attr('data-toggle', 'tab');
   $('#step2_details').addClass('active in');
  }
 });
 
 $('#previous_btn_step2_details').click(function(){
  $('#list_step2_details').removeClass('active active_tab1');
  $('#list_step2_details').removeAttr('href data-toggle');
  $('#step2_details').removeClass('active in');
  $('#list_step2_details').addClass('inactive_tab1');
  $('#list_step1_details').removeClass('inactive_tab1');
  $('#list_step1_details').addClass('active_tab1 active');
  $('#list_step1_details').attr('href', '#step1_details');
  $('#list_step1_details').attr('data-toggle', 'tab');
  $('#step1_details').addClass('active in');
 });
 
 $('#btn_step2_details').click(function(){
  
  {
   $('#list_step2_details').removeClass('active active_tab1');
   $('#list_step2_details').removeAttr('href data-toggle');
   $('#step2_details').removeClass('active');
   $('#list_step2_details').addClass('inactive_tab1');
   $('#list_step3_details').removeClass('inactive_tab1');
   $('#list_step3_details').addClass('active_tab1 active');
   $('#list_step3_details').attr('href', '#step3_details');
   $('#list_step3_details').attr('data-toggle', 'tab');
   $('#step3_details').addClass('active in');
  }
 });
 
 $('#previous_btn_step3_details').click(function(){
  $('#list_step3_details').removeClass('active active_tab1');
  $('#list_step3_details').removeAttr('href data-toggle');
  $('#step3_details').removeClass('active in');
  $('#list_step3_details').addClass('inactive_tab1');
  $('#list_step2_details').removeClass('inactive_tab1');
  $('#list_step2_details').addClass('active_tab1 active');
  $('#list_step2_details').attr('href', '#step2_details');
  $('#list_step2_details').attr('data-toggle', 'tab');
  $('#step2_details').addClass('active in');
 });
 
 $('#btn_step3_details').click(function(){
    {
   $('#list_step3_details').removeClass('active active_tab1');
   $('#list_step3_details').removeAttr('href data-toggle');
   $('#step3_details').removeClass('active');
   $('#list_step3_details').addClass('inactive_tab1');
   $('#list_step4_details').removeClass('inactive_tab1');
   $('#list_step4_details').addClass('active_tab1 active');
   $('#list_step4_details').attr('href', '#step4_details');
   $('#list_step4_details').attr('data-toggle', 'tab');
   $('#step4_details').addClass('active in');
  }
 });
 
 $('#previous_btn_step4_details').click(function(){
  $('#list_step4_details').removeClass('active active_tab1');
  $('#list_step4_details').removeAttr('href data-toggle');
  $('#step4_details').removeClass('active in');
  $('#list_step4_details').addClass('inactive_tab1');
  $('#list_step3_details').removeClass('inactive_tab1');
  $('#list_step3_details').addClass('active_tab1 active');
  $('#list_step3_details').attr('href', '#step3_details');
  $('#list_step3_details').attr('data-toggle', 'tab');
  $('#step3_details').addClass('active in');
 });
 
 $('#btn_step4_details').click(function(){
    {
   $('#list_step4_details').removeClass('active active_tab1');
   $('#list_step4_details').removeAttr('href data-toggle');
   $('#step4_details').removeClass('active');
   $('#list_step4_details').addClass('inactive_tab1');
   $('#list_step5_details').removeClass('inactive_tab1');
   $('#list_step5_details').addClass('active_tab1 active');
   $('#list_step5_details').attr('href', '#step5_details');
   $('#list_step5_details').attr('data-toggle', 'tab');
   $('#step5_details').addClass('active in');
  }
 });

 $('#previous_btn_step5_details').click(function(){
  $('#list_step5_details').removeClass('active active_tab1');
  $('#list_step5_details').removeAttr('href data-toggle');
  $('#step5_details').removeClass('active in');
  $('#list_step5_details').addClass('inactive_tab1');
  $('#list_step4_details').removeClass('inactive_tab1');
  $('#list_step4_details').addClass('active_tab1 active');
  $('#list_step4_details').attr('href', '#step4_details');
  $('#list_step4_details').attr('data-toggle', 'tab');
  $('#step4_details').addClass('active in');
 });
 
 $('#btn_step5_details').click(function(){
 
  {
   $('#btn_step5_details').attr("disabled", "disabled");
   $(document).css('cursor', 'prgress');
   $("#register_form").submit();
  }
  
 });
 
});
</script>

          
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
if(isset($_POST['btnSubmit'])){
  //personal details
  $_SESSION['name'] = clean(qoutess($_POST["name"]));
  $_SESSION['surname']= clean(qoutess($_POST["surname"]));
  $_SESSION['valunerability'] = clean(qoutess($_POST["status"]));
  $_SESSION['national_id']= clean(qoutess($_POST["national_id"]));
  $_SESSION['gender'] = clean(qoutess($_POST["gender"]));
  $_SESSION['dob']= clean(qoutess($_POST["dob"]));
  $_SESSION['province_id'] = clean(qoutess($_POST["province_id"]));
  $_SESSION['address']= clean(qoutess($_POST["address"]));
  $_SESSION['grade'] = clean(qoutess($_POST["level"]));
  $_SESSION['level_type']= "primary";
 


header("location:step_2.php");
}
?>
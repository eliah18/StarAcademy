<?php 
ob_start();
session_start();
error_reporting(0);
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
if(isset($_POST['btnSubmit'])){
  //personal details
  $_SESSION['FN'] = clean(qoutess($_POST["FN"]));
  $_SESSION['surname']= clean(qoutess($_POST["surname"]));
  $_SESSION['nat_id'] = $_POST["nat_id"];
  $_SESSION['MTN']= clean(qoutess($_POST["MTN"]));
  $_SESSION['gender'] = clean(qoutess($_POST["gender"]));
  $email= clean(qoutess($_POST["email"]));
  $_SESSION['SDR'] = clean(qoutess($_POST["SDR"]));
  $_SESSION['HA']= clean(qoutess($_POST["HA"]));
  $_SESSION['email']=$email;
 // email validation
if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
{echo "<script language = javascript> alert('lnvalid E-Mail address format'); </script>";}
else {header("location:step_5.php");}


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
                <form method="POST" action=""  class="form-horizontal" >
			<div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Personal Details</strong></h4></div>
        <div class="panel-body ">
  <!--first row of the form  -->
  <div class="container">
			<div class="col-md-4">
            <h5>Surname:</h5>
				<div class="form-group">
					<input type="text" name="surname" value="<?php echo $_SESSION['surname']; ?>" class="form-control" id="surname" placeholder="e.g Smith" pattern="[A-Za-z.' ]+" required>
				</div>
			</div>
      <div class="col-md-2"></div>
			<div class="col-md-4">
              <h5>First Name(s):<h5>
				<div class="form-group">
					<input type="text" name="FN" class="form-control" value="<?php echo $_SESSION['FN']; ?>" id="FN" placeholder="e.g John" pattern="[A-Za-z.' ]+" required>
				</div>
			</div>
			
		</div>
         <!--second row of the form  -->
                <div class="container">
			<div class="col-md-4">
            <h5>National ID:<h5>
				<div class="form-group">
					<input type="text" class="form-control" value="" name="nat_id" id="nat_id" placeholder="e.g63-2126128A12"  pattern="[0-9]{2}-[0-9]{6-7}[A-Z]{1}[0-9]{2}" required>
				</div>
			</div>
      <div class="col-md-2"></div>
			<div class="col-md-4">
              <h5>Gender:<h5>
				<div class="form-group">
					<select type="text" required="" name="gender" class="form-control" id="gender" >   
                    
          <option value="">Choose...</option>
          <option value="Male" >Male</option>
          <option value="Female">Female</option>
                       
      </select>
			</div>
			
		</div>
        </div>
        <!--third row of the form  -->
                <div class="container">
			<div class="col-md-4">
            <h5>Email Address:<h5>
				<div class="form-group">
					<input type="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" name="email" id="email" placeholder="e.g staracademy@gmail.com" required>
				</div>
			</div>
      <div class="col-md-2"></div>
      <div class="col-md-4">
              <h5>Mobile Number:</h5>
				<div class="form-group">
					<input type="text" name="MTN" class="form-control" value="<?php echo $_SESSION['MTN']; ?>" id="MTN" placeholder="0773326939" pattern="07\d{8}" required/>
				</div>
			</div>
			
		</div>
         <!--fourth row of the form  -->
            
			
	
        <div class="container">
        <div class="col-md-4">
              <h5>State any Dietary requirements</h5>
				<div class="form-group">
					<input type="text" name="SDR" class="form-control" value="<?php echo $_SESSION['SDR']; ?>" id="SDR" pattern="[A-Za-z.' ]+" placeholder="no pork" required=""> 
				</div>
			</div>
      <div class="col-md-2"></div>
			<div class="col-md-4">
         <!-- home address textbox-->
        <div class="form-group">
      <h5>Home Address</h5>
      <textarea class="form-control" value="<?php echo $_SESSION['HA']; ?>" name="HA" rows="1" id="HA" required="" ></textarea>
    </div>
    </div>
    <!-- end of personal details-->
  </div>
    <div class="col-md-8">
                <br>
                
                <button type="submit" name="btnSubmit" class="btn btn-info col-md-3">Next <i class="fa fa-arrow-circle-right bold"></i></button>
            </div>

            </form>

        </div>

        <div class="progress inner-progress-bar">
 <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:80%">80%      </div>
        </div>

    </div>
	</div>
    </div>
    </div>
	
<?php include 'includes/footer.php'; ?>
</body>
</html>

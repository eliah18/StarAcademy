<?php 
ob_start();
session_start();
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
        <div class="panel-heading"><h4><strong>Tell us about your self?</strong></h4></div>
        <div class="panel-body ">

            
   
        <div class="form-group">
        <div class="col-md-8">
      <h5>What do you want to be when you grow up and why?</h5>
      </div>
      <div class="col-md-8">
      <textarea class="form-control" name="what_qtn" pattern="[A-Za-z.' ]+" rows="3" id="comment" required="First Name is required"></textarea>
    </div>
    </div>
    
    <div class="form-group">
    <div class="col-md-8">
    <h5>Where do you see your self in 10 years?</h5>
    </div>
    <div class="col-md-8">
                <input name="where_qtn" type="text" pattern="[A-Za-z.' ]+" required class="form-control" id="where_qtn" placeholder="l see myself in ten years ..." >
             
              </div>
              </div>
      
   <div class="form-group">
   <div class="col-md-8">
      <h5>Who is your role model and why?</h5>
      </div>
      <div class="col-md-8">
      <textarea class="form-control" pattern="[A-Za-z.' ]+" required name="who_qtn" rows="3" id="who_qtn"></textarea>
    </div>
    </div>
     
    <div class="form-group">
    <div class="col-md-8">
      <h5>why do you want to be part of Star leadership bootcamp?</h5>
      </div>
      <div class="col-md-8">
      <textarea class="form-control" name="why_qtn" pattern="[A-Za-z.' ]+" required rows="3" id="why_qtn"></textarea>
    </div>
    </div>

          
    <div class="col-md-8">
                <br>
                
                <button type="submit" name="btnSubmit" class="btn btn-info col-md-3">Next <i class="fa fa-arrow-circle-right bold"></i></button>
            </div>

            </form>

        </div>

        <div class="progress inner-progress-bar">
 <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:20%">20%      </div>
        </div>

    </div>
	</div>
    </div>
    </div>
	
<?php include 'includes/footer.php'; ?>
</body>
</html>
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
  $_SESSION['what_qtn'] = clean(qoutess($_POST["what_qtn"]));
  $_SESSION['where_qtn']= clean(qoutess($_POST["where_qtn"]));
  $_SESSION['who_qtn'] = clean(qoutess($_POST["who_qtn"]));
  $_SESSION['why_qtn']= clean(qoutess($_POST["why_qtn"]));
  


header("location:step_2.php");
}
?>
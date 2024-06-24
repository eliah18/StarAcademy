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
        <div class="panel-heading"><h4><strong>Education background</strong></h4></div>
        <div class="panel-body ">

		
       <!--first row of the form  -->
       <div class="container">
			<div class="col-md-4">
            <h5>Name of school:</h5>
				<div class="form-group">
					<input type="text" name="xul_name"  required class="form-control" id="xul_name" placeholder="e.g St Dominics">
				</div>
			</div>
            <div class="col-md-2"></div>
			<div class="col-md-4">
              <h5>School Head:</h5>
				<div class="form-group">
					<input type="text" name="xul_head" pattern="[A-Za-z.' ]+" class="form-control" required id="xul_head" placeholder="e.g Mr Muda">
				</div>
			</div>
			
		</div>
        <!--second row of the form  -->
            <div class="container">
			<div class="col-md-4">
				<div class="form-group">
                 <h5>School area:</h5>
					<input type="text" name="xul_area" pattern="[A-Za-z.' ]+" class="form-control" required id="xul_area" placeholder="e.g Chishawasha">
				</div>
			</div>
            <div class="col-md-2"></div>
			<div class="col-md-4">
              <h5>School province:<h5>
				<div class="form-group">
                <select class="form-control select2" required="" id="xul_province" name="xul_province" aria-required="true"><option  value="">Select</option>
                <option value="Harare">Harare</option><option value="Mashonaland East">Mashonaland East</option><option value="Mashonaland West" >Mashonaland West</option>
                <option value="Masvingo">Masvingo</option><option value="Matebeleland North">Matebeleland North</option><option value="Matebeleland South">Matebeleland South</option>
                <option value="Midlands">Midlands</option><option value="Bulawayo">Bulawayo </option><option value="Mashonaland Central">Mashonaland Central</option>
                <option value="Manicaland">Manicaland </option>
           </select>
				</div>
			</div>
			
		</div>
    <div class="col-md-8">
                <br>
                
                <button type="submit" name="btnSubmit" class="btn btn-info col-md-3">Next <i class="fa fa-arrow-circle-right bold"></i></button>
            </div>

            </form>

        </div>

        <div class="progress inner-progress-bar">
 <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:40%">40%      </div>
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
  $_SESSION['xul_name'] = clean(qoutess($_POST["xul_name"]));
  $_SESSION['xul_head']= clean(qoutess($_POST["xul_head"]));
  $_SESSION['xul_area'] = clean(qoutess($_POST["xul_area"]));
  $_SESSION['xul_province']= clean(qoutess($_POST["xul_province"]));
 
 


header("location:step_3.php");
}
?>
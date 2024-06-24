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
                <form method="POST" action="" enctype="multipart/form-data"  class="form-horizontal" >
			<div class="panel panel-primary">
        <div class="panel-heading"><h4><strong>Education background</strong></h4></div>
        <div class="panel-body ">

        <h4>What subjects are you best at, at school? Choose 3 and tell us your grades:</h4>
             <!--first row of the form  -->
             <div class="container">
             
			<div class="col-md-4">
      <h5>Subject 1:</h5>
				<div class="form-group">
                
                <select type="text" required="" name="sub1" class="form-control" id="sub1"   > 
                    <option value="">choose.....</option>
                      
                       <option value="Geography">Geography</option>
                      <option value="Commerce">Commerce</option>
                      <option value="Shona">Shona</option>
                      <option value="English">English</option>
                      <option value="History">History</option>
                      <option value="Accounts">Accounts</option>
                      <option value="Biology">Biology</option>
                      <option value="Intergrated Science">Intergrated Science</option>
                      <option value="Physical Science">Physical Science</option>
                      <option value="Chemistry">Chemistry</option>
                      <option value="Mathematics">Mathematics</option>
                      </select>
				</div>
			</div>
      <div class="col-md-2"></div>
			<div class="col-md-4">
             	<div class="form-group">
                 <h5>Grade:</h5>
					<select type="text" required="" class="form-control" name="g1"  > 
                   <option value="">x</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
 
      </select>
				</div>
			</div>
			
		</div>
        <!--second row of the form  -->
                      <div class="container">
			<div class="col-md-4">
      <h5>Subject 2:</h5>
				<div class="form-group">
               
                <select type="text" required=""name="sub2" class="form-control"  id="sub2"  > 
                      <option value="">choose.....</option>
                      <option value="Mathematics">Mathematics</option>
                       <option value="Geography">Geography</option>
                      <option value="Commerce">Commerce</option>
                      <option value="Biology">Biology</option>
                      <option value="English">English</option>
                      <option value="Shona">Shona</option>
                      <option value="History">History</option>
                      <option value="Accounts">Accounts</option>
                      <option value="Intergrated Science">Intergrated Science</option>
                      <option value="Physical Science">Physical Science</option>
                      <option value="Chemistry">Chemistry</option>
                      </select>
				</div>
			</div>
      <div class="col-md-2"></div>
			<div class="col-md-4">
              
				<div class="form-group">
                <h5>Grade:</h5>
					<select type="text" class="form-control" required="" name="g2" > 
                       <option value="">x</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
 
      </select>
				</div>
			</div>
			
		</div>
        <!--third row of the form  -->
                  <div class="container">
			<div class="col-md-4">
            
				<div class="form-group">
                <h5>Subject 3:</h5>
                <select type="text" class="form-control" name="sub3" required="">
                     <option value="">choose.....</option>
                      <option value="Intergrated Science">Intergrated Science</option>
                       <option value="Geography">Geography</option>
                      <option value="Commerce">Commerce</option>
                      <option value="Shona">Shona</option>
                      <option value="Mathematics">Mathematics</option>
                      <option value="History">History</option>
                      <option value="Accounts">Accounts</option>
                      <option value="Biology">Biology</option>
                      <option value="Physical Science">Physical Science</option>
                      <option value="Chemistry">Chemistry</option>
                      <option value="English">English</option>
 
      </select>
				</div>
			</div>
      <div class="col-md-2"></div>
			<div class="col-md-4">
              
				<div class="form-group">
                <h5>Grade:</h5>
					<select type="text" class="form-control" name="g3" required="">
                       <option value="">x</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
 
      </select>
				</div>
			</div>
			
		</div>
        <!-- another section -->
        <h4>What grades did you get at these 3 subjects and number of subjects passed?</h4>
          <!--first row of the form  -->
       <div class="container">
			<div class="col-md-4">
            <h5>Passed Subjects</h5>
				<div class="form-group">
	<input type="number" class="form-control" required="" min="0" max="15" name="pass" id="pass"  placeholder="e.g 11" >
				</div>
			</div>
      <div class="col-md-2"></div>
			<div class="col-md-4">
            <h5>Number of As</h5>
				<div class="form-group">
	<input type="number" class="form-control" required="" min="0" max="15" name="As" id="As" placeholder="e.g 7"  >
				</div>
			</div>
	</div>
			
		
        <!--second row of the form  -->
             <div class="container">
             <div class="col-md-4">
            <h5>Mathematics</h5>
				<div class="form-group">
	<select type="text" name="grade4" required="" class="form-control" id="grade4" >  
                   
                      <option >x</option>
                      <option value="A" >A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
                      <option value="U">U</option>
 
      </select>
				</div>
			</div>
      <div class="col-md-2"></div>
			<div class="col-md-4">
            <h5> Science</h5>
		    <div class="form-group">
					<select type="text"  required="" name="grade5" class="form-control" id="grade5"  >      
                    <option value="">x</option>
                    <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
                      <option value="U">U</option>
 
      </select>
				</div>
			</div>
			
			</div>
			
		
        <!--third row of the form  -->
             <div class="container">
             
			<div class="col-md-4">
            <h5>English</h5>
		   <div class="form-group">
			<select type="text" name="grade6" required="" class="form-control" id="grade6" > 
                     <option value="">x</option>
                      <option value="A" >A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                      <option value="E">E</option>
                      <option value="U">U</option>
 
      </select>
			</div>
			</div>
      <div class="col-md-2"></div>
            <div class="col-md-4">
            <h5>Upload Results</h5>
		   <div class="form-group">
       <input class="form-control" name="results" type="file">

<span class="help-block" style="font-size: 12px"><em>PDF files only are allowed.</em></span>
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
 <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:60%">60%      </div>
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
 
    $file=$_FILES['results']['name'];
  $extension=strtolower(substr($file,strpos($file,'.') +1 ));
  $size=$_FILES['results']['size'];
  $max_size= 1000000;
  $type=$_FILES['results']['type'];
  
   $tmp_name=$_FILES['results']['tmp_name'];
  
  $errror=$_FILES['results']['error'];
  if(isset($file) && !empty($file))
  {
      if( $extension=='pdf'&& $type='image/' && $size<= $max_size)
      {
      $location='uploads/';
      if(move_uploaded_file($tmp_name,$location.$file))
      
      {
        $_SESSION['results']=$file;
       //personal details
  $_SESSION['sub1'] = clean(qoutess($_POST["sub1"]));
  $_SESSION['g1']= clean(qoutess($_POST["g1"]));
  $_SESSION['sub2'] = clean(qoutess($_POST["sub2"]));
  $_SESSION['g2']= clean(qoutess($_POST["g2"]));
  $_SESSION['sub3'] = clean(qoutess($_POST["sub3"]));
  $_SESSION['g3']= clean(qoutess($_POST["g3"]));
  $_SESSION['pass'] = clean(qoutess($_POST["pass"]));
  $_SESSION['As']= clean(qoutess($_POST["As"]));
  $_SESSION['grade4'] = clean(qoutess($_POST["grade4"]));
  $_SESSION['grade5']= clean(qoutess($_POST["grade5"]));
  $_SESSION['grade6'] = clean(qoutess($_POST["grade6"]));
  //$_SESSION['results']= clean(qoutess($_POST["results"]));
  
 
if($_SESSION['As']> $_SESSION['pass'] ){
  echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Number of Az cannot be greater than number of subjects passed ')
 
	</SCRIPT>");  
}
else{header("location:step_4.php");}
      }}
      else
      {echo "<script language = javascript> alert('Your scanned document should be in the format jpeg or jpg or png'); </script>";}
          }
  

}


?>
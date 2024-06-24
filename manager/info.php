<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/hlf (2).png" rel="icon" type="image">
  <title>Manager - Dashboard</title>
  <script src="../application/steps/jquery.min.js"></script>
  <script src="../application/steps/bootstrap.js" type="text/javascript"></script>
 
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-0">
        <img class="img-thumbnail rounded-circle" src="img/hlf (2).png" width:60, height:60>
        </div>
        <div class="sidebar-brand-text mx-3">Higherlife   </div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
       Manage
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-users"></i>
          <span>Applicants</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="All_app_list.php">All Applicants List</a> 
            <a class="collapse-item" href="accepted.php">Accepted Applicants List</a>
            <a class="collapse-item" href="rejected.php">Rejected Applicants List</a>
          </div>
        </div>
      </li>


      <!-- Nav Item - profile -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-user"></i>
          <span>Profile</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">My Profile:</h6>
            <a class="collapse-item" href="profile.php">Edit Profile</a>
            
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      Printables
      </div>

       <!-- Nav Item - Documents -->
  <li class="nav-item">
    <a class="nav-link" href="accepted.php">
      <i class="fas fa-fw fa-users"></i>
      <span>Accepted students</span></a>
  </li>


      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

    
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
         <!-- <h1 class="h3 mb-2 text-gray-800">Accepted Students List</h1>-->
       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">My Profile</h6>
            </div>
            <div class="card-body">
             <!-- start code -->
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
       <div class="tab">
       <div class="form-group">
      <h5>What do you want to be when you grow up and why?</h5>
      <textarea class="form-control" name="what_qtn" pattern="[A-Za-z.' ]+" rows="3" id="comment" required="First Name is required"></textarea>
    </div>
    
    <div class="form-group">
    <h5>Where do you see your self in 20 years?</h5>
                <input name="where_qtn" type="text" pattern="[A-Za-z.' ]+" required class="form-control" id="where_qtn" placeholder="l see myself..." maxlength="30">
              </div>
      
   <div class="form-group">
      <h5>Who is your role model and why?</h5>
      <textarea class="form-control" pattern="[A-Za-z.' ]+" required name="who_qtn" rows="3" id="who_qtn"></textarea>
    </div>
     
    <div class="form-group">
      <h5>why do you want to be part of Star leadership bootcamp?</h5>
      <textarea class="form-control" name="why_qtn" pattern="[A-Za-z.' ]+" required rows="3" id="why_qtn"></textarea>
    </div>
    </div>
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
       <div class="container">
			<div class="col-md-4">
            <h5>Name of school:</h5>
				<div class="form-group">
					<input type="text" name="xul_name" pattern="[A-Za-z.' ]+" required class="form-control" id="xul_name" placeholder="e.g St Dominics">
				</div>
			</div>
			<div class="col-md-3">
              <h5>School Head:</h5>
				<div class="form-group">
					<input type="text" name="xul_head" class="form-control" required id="xul_head" placeholder="e.g Mr Muda">
				</div>
			</div>
			
		</div>
        <!--second row of the form  -->
            <div class="container">
			<div class="col-md-4">
				<div class="form-group">
                 <h5>School area:</h5>
					<input type="text" name="xul_area" class="form-control" required id="xul_area" placeholder="e.g Chishawasha">
				</div>
      </div>
     
			<div class="col-md-3">
              <h5>School province:<h5>
				<div class="form-group">
					<input type="text" name="xul_province" class="form-control" required id="xul_province" placeholder="e.g Mash East">
				</div>
			</div>
			
		</div>  
            
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
             <div class="container">
			<div class="col-md-3">
            
				<div class="form-group">
                <h5>Subject 1:</h5>
                <select type="text" class="form-control" id="exampleInputEmail1"  required> 
                    <option>choose.....</option>
                      <option>Mathematics</option>
                      <option>English</option>
                      <option>Intergrated Science</option>
                       <option>Geography</option>
                      <option>Commerce</option>
                      <option>Shona</option>
                      <option>History</option>
                      <option>Accounts</option>
                      <option>Biology</option>
                      <option>Physical Science</option>
                      <option>Chemistry</option>
                      </select>
				</div>
			</div>
			<div class="col-md-3">
             	<div class="form-group">
                 <h5>Grade:</h5>
					<select type="text" class="form-control" id="exampleInputEmail1" required > 
                   <option>x</option>
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
 
      </select>
				</div>
			</div>
			
		</div>
        <!--second row of the form  -->
                      <div class="container">
			<div class="col-md-3">
            
				<div class="form-group">
                <h5>Subject 2:</h5>
                <select type="text" class="form-control" id="exampleInputEmail1" required > 
                     <option>choose.....</option>
                      <option>Mathematics</option>
                      <option>English</option>
                      <option>Intergrated Science</option>
                       <option>Geography</option>
                      <option>Commerce</option>
                      <option>Shona</option>
                      <option>History</option>
                      <option>Accounts</option>
                      <option>Biology</option>
                      <option>Physical Science</option>
                      <option>Chemistry</option>
                      </select>
				</div>
			</div>
			<div class="col-md-3">
              
				<div class="form-group">
                <h5>Grade:</h5>
					<select type="text" class="form-control" required > 
                    <option>x</option>
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
 
      </select>
				</div>
			</div>
			
		</div>
        <!--third row of the form  -->
                  <div class="container">
			<div class="col-md-3">
            
				<div class="form-group">
                <h5>Subject 3:</h5>
                <select type="text" class="form-control" id="exampleInputEmail1" required>
                    <option>choose.....</option>
                      <option>Mathematics</option>
                      <option>English</option>
                      <option>Intergrated Science</option>
                       <option>Geography</option>
                      <option>Commerce</option>
                      <option>Shona</option>
                      <option>History</option>
                      <option>Accounts</option>
                      <option>Biology</option>
                      <option>Physical Science</option>
                      <option>Chemistry</option>
 
      </select>
				</div>
			</div>
			<div class="col-md-3">
              
				<div class="form-group">
                <h5>Grade:</h5>
					<select type="text" class="form-control" id="exampleInputEmail1" required>
                    <option>x</option>
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
 
      </select>
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
	<input type="number" class="form-control" required="" min="0" max="15" name="pass" id="pass"  placeholder="e.g 11" >
				</div>
			</div>
			<div class="col-md-3">
            <h5>Number of As</h5>
				<div class="form-group">
	<input type="text" class="form-control" required name="As" id="As" placeholder="e.g 7" >
				</div>
			</div>
	</div>
			
		
        <!--second row of the form  -->
             <div class="container">
             <div class="col-md-3">
            <h5>Mathematics</h5>
				<div class="form-group">
	<select type="text" name="grade4" class="form-control" id="grade4">    
                    <option>x</option>
                     <option>A</option>
                      <option>B</option>
                      <option>C</option>
                      <option>D</option>
                      <option>E</option>
                      <option>U</option>
 
      </select>
				</div>
			</div>
			<div class="col-md-3">
            <h5> Science</h5>
		    <div class="form-group">
					<select type="text" name="grade5" class="form-control" id="grade5">      
                    <option>x</option>
                    <option>A</option>
                      <option>B</option>
                      <option>C</option>
                      <option>D</option>
                      <option>E</option>
                      <option>U</option>
 
      </select>
				</div>
			</div>
			
			</div>
			
		
        <!--third row of the form  -->
             <div class="container">
             
			<div class="col-md-3">
            <h5>English</h5>
		   <div class="form-group">
			<select type="text" name="grade6" class="form-control" id="grade6"> 
                     <option>x</option>
                     <option>A</option>
                      <option>B</option>
                      <option>C</option>
                      <option>D</option>
                      <option>E</option>
                      <option>U</option>
 
      </select>
			</div>
			</div>
            <div class="col-md-3">
            <h5>Upload Results</h5>
		   <div class="form-group">
           <input type="file" name="results" class="form-control" id="results">
           </div>
           </div>
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
        <div class="container">
			<div class="col-md-3">
            <h5>Surname:</h5>
				<div class="form-group">
					<input type="text" name="fam_name" class="form-control" id="fam_name" placeholder="e.g Smith">
				</div>
			</div>
			<div class="col-md-3">
              <h5>First Name(s):<h5>
				<div class="form-group">
					<input type="text" name="FN" class="form-control" id="FN" placeholder="e.g John">
				</div>
			</div>
			
		</div>
         <!--second row of the form  -->
                <div class="container">
			<div class="col-md-3">
            <h5>Date of Birth:<h5>
				<div class="form-group">
					<input type="text" class="form-control" name="DOB" id="DOB" placeholder="e.g 05/07/2001">
				</div>
			</div>
			<div class="col-md-3">
              <h5>Gender:<h5>
				<div class="form-group">
					<select type="text" name="gender" class="form-control" id="gender">   
                    
                      <option>Male</option>
                      <option>Female</option>
                       
      </select>
			</div>
			
		</div>
        </div>
        <!--third row of the form  -->
                <div class="container">
			<div class="col-md-3">
            <h5>Email Address:<h5>
				<div class="form-group">
					<input type="email" class="form-control" id="email" placeholder="e.g staracademy@gmail.com">
				</div>
			</div>
			<div class="col-md-3">
              <h5>Facebook Name:<h5>
				<div class="form-group">
					<input type="text" name="FB" class="form-control" id="FB" placeholder="e.g Kelly Kim">
				</div>
			</div>
			
		</div>
         <!--fourth row of the form  -->
                <div class="container">
			<div class="col-md-3">
            <h5>Home Tel Number:</h5>
				<div class="form-group">
					<input type="text" name="HTN" class="form-control" id="HTN" placeholder="0777222754">
				</div>
			</div>
			<div class="col-md-3">
              <h5>Mobile Tel Number:</h5>
				<div class="form-group">
					<input type="text" name="MTN" class="form-control" id="MTN" placeholder="0773326939">
				</div>
			</div>
			
		</div>
        <div class="container">
        <div class="col-md-3">
              <h5>State any Dietary requirements</h5>
				<div class="form-group">
					<input type="text" name="SDR" class="form-control" id="SDR" placeholder="no pork">
				</div>
			</div>
			<div class="col-md-3">
         <!-- home address textbox-->
        <div class="form-group">
      <h5>Home Address</h5>
      <textarea class="form-control" name="HA" rows="3" id="HA"></textarea>
    </div>
    </div>
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
         <div class="container">
			<div class="col-md-3">
            <h5>Name:</h5>
				<div class="form-group">
					<input type="text" name="G_NAME" class="form-control" id="G_NAME" placeholder="e.g Mike">
				</div>
			</div>
			<div class="col-md-3">
              <h5>Surname:</h5>
				<div class="form-group">
					<input type="text" name="G_SUR" class="form-control" id="G_SUR" placeholder="e.g Adams">
				</div>
			</div>
			
		</div>
         <!--second row of the form  -->
                <div class="container">
			<div class="col-md-3">
            <h5>Email:</h5>
				<div class="form-group">
					<input type="email" name="email" class="form-control" id="email" placeholder="star@staracademy.org">
				</div>
			</div>
			<div class="col-md-3">
              <h5>Phone number:</h5>
				<div class="form-group">
					<input type="text" name="FON_NUM" class="form-control" id="FON_NUM" placeholder="07772227548">
				</div>
			
		</div>
        </div>
        <br />
        <div align="center">
        <button type="button" name="previous_btn_step5_details" id="previous_btn_step5_details" class="btn btn-default col-md-3">Previous</button>
        <div class="col-md-2"></div>
        <button type="button" name="btn_step5_details" id="btn_step5_details" class="btn btn-success col-md-3">Register <i class="fa fa-arrow-circle-right bold"></i></button>
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
             <!-- end code -->
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;  2019 Higherlife Foundation. All Rights Reserved. </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

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

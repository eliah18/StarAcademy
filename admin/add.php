<?php
include("conn.php"); 
error_reporting(0);
ob_start();
session_start(); 
if(isset($_SESSION['access']) && $_SESSION['fullname'] &&  $_SESSION['access']=="Admin") {
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

if(isset($_POST["btnSubmit"])){
    //personal details
    $name = clean(qoutess($_POST["name"]));
    $surname = clean(qoutess($_POST["surname"]));
$email = clean(qoutess($_POST["email"]));
$Province = clean(qoutess($_POST["province_id"]));
$user_mobile = clean(qoutess($_POST["user_mobile"]));
$username= clean(qoutess($_POST["username"]));
$access = clean(qoutess($_POST["access"]));
$password= clean(qoutess($_POST["pass"]));
$c_pass = clean(qoutess($_POST["c_pass"]));

//check whether the username already exist
$query="SELECT * FROM users WHERE username ='$username'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)>0)

{echo"<script language = javascript> alert('The username ".$username." already exist.'); </script>"; }
	// email validation
else if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
	{echo "<script language = javascript> alert('lnvalid E-Mail address format'); </script>";}
//check whether your password matches your confirm password
else if($password!=$c_pass)
{echo "<script language = javascript> alert('Password do not match'); </script>";}
//security check for password length
else if(strlen($password)<8)
{echo"<script language = javascript> alert('Your password should be atleast 8 characters'); </script>";}
else
{
    $query="INSERT INTO `users`(`name`, `surname`, `email`, `sbu`, `cell_num`, `access_level`, `username`, `password`)
     VALUES ('$name','$surname','$email','$Province','$user_mobile','$access','$username','$password')";
    if($connection-> query($query)){echo "<script language = javascript> alert('user added successfully'); </script>"; }
    else {echo "Error: ".$query."<br>".mysqli_error($connection);}

}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/hlf (2).png" rel="icon" type="image">
  <title>Admin - Dashboard</title>

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
     <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Admin Dashboard</span></a>
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
          <span>Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="view.php">View Users</a> 
            <a class="collapse-item" href="add.php">Add Users</a>
           
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
        PRINTABLES
      </div>

     
  <!-- Nav Item - Documents -->
  <li class="nav-item">
    <a class="nav-link" href="audit.php">
      <i class="fas fa-fw fa-users"></i>
      <span>Audit Trail</span></a>
  </li>
  <!-- Nav Item - backup -->

  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
          <i class="fas fa-fw fa-cloud"></i>
          <span>Backup</span>
        </a>
        <div id="collapseData" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">My Database:</h6>
            <a class="collapse-item" href="backup.php">Database Backup</a>
            
          </div>
        </div>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'];?></span>
                <img class="img-profile rounded-circle" src="img/profile-image.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
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
              <h6 class="m-0 font-weight-bold text-primary">Add Users</h6>
            </div>
            <div class="card-body">
             <!-- start code -->
         
            <!-- row -->
        <div class="row tm-content-row tm-mt-big">
            
            <div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <form method="post" action="" >
            <div class="form-group">
                <label for="address" >Name:<span class="required" style="font-size: 15px; color: #FF0000;"> * </span></label>
               
                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Sam " class="form-control span12" pattern="[A-Za-z.' ]+" required="">
               
            </div>
            <div class="form-group">
                <label for="address" >Surname:<span class="required" style="font-size: 15px; color: #FF0000;"> * </span></label>
               
                <input type="text" name="surname" value="<?php echo $surname; ?>" placeholder=" Stanley" class="form-control span12" pattern="[A-Za-z.' ]+" required="">
               
            </div>
            <div class="form-group">
                <label for="address" >Email:<span class="required" style="font-size: 15px; color: #FF0000;"> * </span></label>
                
                <input type="text" name="email" value="<?php echo $email; ?>" placeholder="user@higherlifefoundation.org"  required="" class="form-control span12">
               
            </div>
            <div class="form-group">
                <label for="province_id" >SBU:<span class="required" style="font-size: 15px; color: #FF0000;"> * </span></label>
               
                    <select class="form-control select2" required="" id="province_id" name="province_id" aria-required="true"><option  value="">Select</option>
                <option value="Harare">Harare</option><option value="Mashonaland East">Mashonaland East</option><option value="Mashonaland West" >Mashonaland West</option>
                <option value="Masvingo">Masvingo</option><option value="Matebeleland North">Matebeleland North</option><option value="Matebeleland South">Matebeleland South</option>
                <option value="Midlands">Midlands</option><option value="Bulawayo">Bulawayo </option><option value="Mashonaland Central">Mashonaland Central</option>
                <option value="Manicaland">Manicaland </option>
           </select>
               
            </div>
            <div class="form-group">
                <label for="address">Mobile Number:<span class="required" style="font-size: 15px; color: #FF0000;"> * </span></label>
               
                <input class="form-control" required="" value="<?php echo $user_mobile; ?>" placeholder="0771234567 (format)" pattern="07\d{8}" name="user_mobile" type="text" value="" id="mobile">
              
            </div>
            <div class="form-group">
                <label for="address" >Access Level:<span class="required" style="font-size: 15px; color: #FF0000;"> * </span></label>
             
                <select name="access" required="" value="<?php echo $access; ?>" id="access" class="form-control">
                    <option value="#">select access level</option>
                    <option value="Admin">Admin</option>
                    <option value="Manager">Head Manager</option>
                    <option value="Senior"> Senior Manager</option>
                                    </select>
              
            </div>

            <div class="form-group">
                <label for="address" >Username:<span class="required" style="font-size: 15px; color: #FF0000;"> * </span></label>
               
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Stanley24" required="" class="form-control span12">
               
            </div>

            <div class="form-group">
                <label for="address" >Password:<span class="required" style="font-size: 15px; color: #FF0000;"> * </span></label>
              
                <input type="password" name="pass" required="" class="form-control span12" required="this field is required">
              
            </div>
            <div class="form-group">
                <label for="address">Confirm Password:<span class="required" style="font-size: 15px; color: #FF0000;"> * </span></label>
              
                <input type="password" name="c_pass" required="" class="form-control span12" required="this field is required">
              
            </div>
           
                               
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <button type="submit"name="btnSubmit" class="btn btn-primary">Add
                                        </button>
                                    </div>
                                   
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
           
        </div>
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
          <a class="btn btn-primary" href="../logout.php">Logout</a>
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
<?php }
else{header('location:../index.php');} ?>
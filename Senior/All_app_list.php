<?php
include("conn.php"); 
error_reporting(0);
ob_start();
session_start(); 
if(isset($_SESSION['access']) && $_SESSION['fullname'] &&  $_SESSION['access']=="Senior") {
      
      ?>
      <?php
$var1=$_GET['id'];
$cell=$_GET['cell'];
$name=$_GET['name'];
$mail=$_GET['mail'];
$surname=$_GET['surname'];
$var3=$_GET['button'];
$accepted_rejected=$_GET['ssn'];
$accept="Accepted";
$reject="Rejected";
date_default_timezone_set('Africa/Harare');
 $time=date("H:i:s");
 $date = date('Y-m-d');

if($var3=="Accept"){
  $query="UPDATE `personal_info` SET `status`='$accept' ,`date_added`='$date' ,`accepted_rejected`='$accepted_rejected',`time_added`='$time' WHERE nat_id ='$var1'";
  if($connection-> query($query)) 
  {
   ////////////////////////////////////////email starts here/////////////////////////
$subject="Star Academy Scholarship Acceptance notice";

// SMS Message to send
$message = "Congratulations,".$name." ".$surname." you have been awarded starAcademy scholarship with Higherlife Foundation ";

$mailto = $mail;
$mailSub = $subject;
$mailMsg = $message;
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail ->IsSmtp();
$mail ->SMTPDebug = 0;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure = 'ssl';
$mail ->Host = "smtp.gmail.com";
$mail ->Port = 465; // or 587
$mail ->IsHTML(true);
$mail ->Username = "eliahmudakureva@gmail.com";
$mail ->Password = "0773326939";
$mail ->SetFrom("eliahmudakureva@gmail.com");
$mail ->Subject = $mailSub;
$mail ->Body = $mailMsg;
$mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
    echo ("<script> alert('Mail Not Sent');</script>");
   }
   else
   {
       
  ////////////////////////////////////////sending the SMS///////////////////////////
   // suppress error message
   //error_reporting(0);

   // BulkSMS Webservice username for sending SMS.
   //Get it from User Configuration. Its case sensitive.
   $username = 'elly19';

   // Webservices token for above Webservice username
   $token = '08bdf853685c02b745ef95b61463a204';

   // BulkSMS Webservices URL
   $bulksms_ws = 'http://portal.bulksmsweb.com/index.php?app=ws';

   // destination numbers, comma seperated or use #groupcode for sending to group
   // $destinations = '#devteam,263071077072,26370229338';
   // $destinations = '26300123123123,26300456456456';  for multiple recipients
   $destinations = $cell;

   // SMS Message to send
   $message = "Congratulations,".$name." ".$surname." you have been awarded starAcademy scholarship with Higherlife Foundation ";
   
   // send via BulkSMS HTTP API

   $ws_str = $bulksms_ws . '&u=' . $username . '&h=' . $token . '&op=pv';
   $ws_str .= '&to=' . urlencode($destinations) . '&msg='.urlencode($message);
   $ws_response = @file_get_contents($ws_str);
 
   
   echo ("<script> alert('".$name." ".$surname." has been successfully Accepted');</script>");
////////////////////////////////////////sending ends here/////////////////////////
   }

  }
  else {echo "Error: ".$query."<br>".mysqli_error($connection);}
    
  
}

else if ($var3=="Reject"){
  $query="UPDATE `personal_details` SET `status`='$rejected' WHERE id ='$var1'";
  if($connection-> query($query)) {echo"<script language = javascript> alert('".$name." ".$surname." has been successfully Rejected'); </script>";}
  else {echo "Error: ".$query."<br>".mysqli_error($connection);}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/hlf (2).png" rel="icon" type="image">
  <title>Manager - Dashboard</title>

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
              <h6 class="m-0 font-weight-bold text-primary"><?php echo $_SESSION['sbu'];?> Applicants </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    
                      <th>Nat_ID</th>
                      <th>Name</th>
                      <th>Surname</th>
                      <th>School</th>
                      <th>Province</th>
                      <th>Az</th>
                      <th>View</th>
                      <th> Action</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Nat_ID</th>
                      <th>Name</th>
                      <th>Surname</th>
                      <th>School</th>
                      <th>Province</th>
                      <th>Az</th>
                      <th>View</th>
                      <th> Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                    $province= $_SESSION['sbu'];
                 $select=mysqli_query($connection,"SELECT * FROM `personal_info` WHERE `status`=''AND `Province`='$province' order by Az desc");
                 while ($row=mysqli_fetch_assoc($select)){
                    $id=$row['nat_id'];
                    $mail=$row['email'];
                    $mobile=$row['mobile'];
                    $name="Accept";
                    $reject="Reject";
                    $ssn_id=$_SESSION['fullname'];
                     
                     
            echo "
                        <tr>
                          
                          <td>".$row['nat_id']."</td>
                          <td>".$row['name']."</td>
                          <td>".$row['surname']."</td>
                          <td>".$row['xul_name']."</td>
                          <td>".$row['Province']."</td>
                          <td>".$row['Az']."</td>

                          <td>
                          <a href='more_info.php?id=".$row['nat_id']."  ' class='btn btn-info btn-sm btn-flat'>More info</a>
                          <a href='view_pdf.php?id=".$row['nat_id']."  ' class='btn btn-info btn-sm btn-flat'>view results</a>
                          
                          
                        </td>
                          <td>
                            
                          <a href='All_app_list.php?id=".$row['nat_id']."&ssn=".$ssn_id."&button=".$name."&name=".$row['name']."&surname=".$row['surname']."&cell=".$row['mobile']."&mail=".$mail."' class='btn btn-success btn-sm btn-flat'>Accept</a>
                          <a href='All_app_list.php?id=".$row['nat_id']."&ssn=".$ssn_id."&button=".$reject."&name=".$row['name']."&surname=".$row['surname']." 'class='btn btn-danger btn-sm btn-flat'>  Reject</a>
                          </td>
                        </tr>
                      ";
                    }
                  ?>
                  </tbody>
                </table>
              </div>
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
          <a class="btn btn-primary" href="logout.php">Logout</a>
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
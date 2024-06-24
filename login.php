<?php
session_start();
include 'conn.php';
$session = date('Y');

	 /* function clean($str) {
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
} */
if(isset($_POST['btnSubmit'])){
	$username = $_POST["username"];
	$password = $_POST["pass"];
	 if($username == '' OR $password == ''){
		echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Please enter the correct username or password')
	 javascript:history.go(-1)
		</SCRIPT>");  
	 
	 }
	
	$sql = "SELECT * FROM users WHERE username = '$username' And password='$password'";
			$query = $connection->query($sql);
	
			if($query->num_rows < 1){
				echo("<SCRIPT LANGUAGE='JavaScript'> window.alert('Cannot find account with the username')
				javascript:history.go(-1)
				 </SCRIPT>"); 
			
			}
			else{
				while($row = $query->fetch_assoc())
				{
				
					$access=$row['access_level'];
	$province=$row['sbu'];
	$username=$row['username'];
	$sessionid=$rows['id'];
	$email=$rows['email'];
	
	$q1=$row['name'];
	$q2=$row['surname'];
	$full=$q1." ".$q2;
	$_SESSION['fullname']=$q1." ".$q2;
	
	$_SESSION['id'] = $sessionid;
	if($access=="Admin")
	 { 
		$_SESSION['sbu'] = $province;
		$_SESSION['email']=$email;
		$_SESSION['fullname'] = $full;
		$_SESSION['access'] = $access;
		$_SESSION['username'] = $username;
		date_default_timezone_set('Africa/Harare');
		$time=date("H:i:s");
		$date = date('d-m-Y');
		$query="INSERT INTO `audit_tray`(`username`, `operation` , `date`, `time`) VALUES ('$full','Logged In','$date','$time')";
		if($connection-> query($query)) { header("location:admin/index.php");}
		else {echo "Error: ".$query."<br>".mysqli_error($connection);}
	 }
	 else if($access=="Manager")
	 {
		$_SESSION['sbu'] = $province;
		$_SESSION['email']=$email;
		$_SESSION['fullname'] = $full;
		$_SESSION['access'] = $access;
		$_SESSION['username'] = $username;
		date_default_timezone_set('Africa/Harare');
		$time=date("H:i:s");
		$date = date('d-m-Y');
		$query="INSERT INTO `audit_tray`(`username`, `operation` , `date`, `time`) VALUES ('$full','Logged In','$date','$time')";
		if($connection-> query($query)) { header("location:manager/index.php");}
		else {echo "Error: ".$query."<br>".mysqli_error($connection);}
		 
		
	
		 
	 }
	 else if($access=="Senior")
	 {
		$_SESSION['sbu'] = $province;
		$_SESSION['email']=$email;
		$_SESSION['fullname'] = $full;
		$_SESSION['access'] = $access;
		$_SESSION['username'] = $username;
		date_default_timezone_set('Africa/Harare');
		$time=date("H:i:s");
		$date = date('d-m-Y');
		$query="INSERT INTO `audit_tray`(`username`, `operation` , `date`, `time`) VALUES ('$full','Logged In','$date','$time')";
		if($connection-> query($query)) { header("location:Senior/index.php");}
		else {echo "Error: ".$query."<br>".mysqli_error($connection);}
		 
		
	
		 
	 }
				}
			
			}
			
		}
		
	
		
	?>
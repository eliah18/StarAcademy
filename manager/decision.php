<?php
	/////////////a student to be assigned a reg_num//////////////
		$reg=rand(1000,9999);
		$alphabetic= array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
		$rand=rand(0,25);
		$check=$alphabetic[$rand];
		$regno="R".date('y').$reg.$check;
		////////////////
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="">
	<table class="table table-bordered">
  		<tr>
			<td colspan="3" align="center"><h3>Add Users</h3></td>
		</tr>
		<tr>
			<td><span>Student Surname</span> <br /><input type="text" class="form-control" name="studentSurname" placeholder="Student surname..."/></td>
			<td><span>Student Forename(s)</span> <br /><input type="text" class="form-control" name="studentForename" placeholder="Student Forename..." required /></td>	
		</tr>
		<tr>
			<td><span>Student Registration</span> <br /><input type="text" class="form-control" name="studentReg" disabled="disabled" value="<?php echo $regno; ?>" /></td>
			<td>
				<span>Grade</span> <br/>
				<select name="grade">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
				</select>
			</td>	
		</tr>
		<tr>
		    <td><span>Guardian Surname</span> <br /><input type="text" class="form-control" name="parentSurname" placeholder="Parent Surname..." /></td>
			<td><span>Guardian Forename</span> <br /><input type="text" class="form-control" name="parentForename" placeholder="Parent Forename" required /></td>
		</tr>
		<tr>
		    <td><span>Guardian Mobile</span> <br /><input type="text" class="form-control" name="mobile" value="263"></td>
		</tr>
		<tr>
					

		<td colspan="3" align="center"><button type="submit" name="btn" class="btn btn-primary">Submit</button></td>
			
		</tr>
	</table>
</form>
</body>
</html>
<?php
include_once('../connections/db_con.php');
///form variables
@$studentSurname = ucfirst(mysqli_real_escape_string($con,$_POST['studentSurname']));
@$studentForename = ucfirst(mysqli_real_escape_string($con,$_POST['studentForename']));
$sFulName = $studentForename." ".$studentSurname;
@$grade = mysqli_real_escape_string($con,$_POST['grade']);
@$gSurname = ucfirst(mysqli_real_escape_string($con,$_POST['parentSurname']));
@$gForename = ucfirst(mysqli_real_escape_string($con,$_POST['parentForename']));
@$fulName = $gForename." ".$gSurname;
@$mobile = mysqli_real_escape_string($con,$_POST['mobile']);

if(isset($_POST['btn'])){
				if(substr($mobile,0,4) != "2637" || strlen($mobile)!= 12 || !is_numeric($mobile))
			      {
			            ?>
			    <script type="text/javascript">
			    
			    $(function(){
			      new PNotify({
			        title: 'Incorrect Mobile',
			        text: 'Incorrect Zimbabwean Mobile Number',
			      });
			    });
				</script>
				<?php
				     exit();
				        }
			   /////////////password Generator//////////////
		$reg=rand(1000,9999);
		$alphabetic= array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","W","X","Y","Z");
		$rand=rand(0,22);
		$alpha= array("!","@","#","$","%","&","?","*","+","=","-");
		$rando = rand(0,10);
		$checker = $alpha[$rando];
		$check=$alphabetic[$rand];
		$pwd = date('ymdi').$checker.$reg.$check;

		$regs=rand(1000,9999);
		$alphabetics= array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","W","X","Y","Z");
		$rands=rand(0,22);
		$alphas= array("!","@","#","$","%","&","?","*","+","=","-");
		$randos = rand(0,10);
		$checkers = $alphas[$randos];
		$checks=$alphabetics[$rands];
		$pwds = date('ymdi').$checkers.$regs.$checks;

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
mysqli_query($con,"INSERT INTO userss(regNum,surname,fname,mobile,grade,username,pwd,accessLevel) VALUES('$regno','$studentSurname','$studentForename','$mobile','$grade','$regno','$pwds','Student')")or die(mysqli_error());
$guardian = mysqli_query($con,"INSERT INTO userss(regNum,surname,fname,mobile,grade,username,pwd,accessLevel) VALUES('$regno','$gSurname','$gForename','$mobile','$grade','$regno','$pwd','Guardian')")or die(mysqli_error());
	if($guardian == True){
		////////////////////////////////////////sending the SMS///////////////////////////
					$receiver = $mobile;
					$message = "Dear $fulName, the TUTORING account for $sFulName has been opened. Your username is: $regno & password is: $pwd. Password for $sFulName is $pwds";
					//echo $message;
						$username = 'matiza';
						$token = '3bd71e52f38935d169b2004c587bb047';
						$bulksms_ws = 'http://portal.bulksmsweb.com/index.php?app=ws';
						$destinations = $receiver;
						$message = $message;
						$ws_str = $bulksms_ws . '&u=' . $username . '&h=' . $token . '&op=pv';
						$ws_str .= '&to=' . urlencode($destinations) . '&msg='.urlencode($message);
						$ws_response = @file_get_contents($ws_str);

			////////////////////////////////////////sending ends here/////////////////////////
							echo ("<script> alert('$studentForename $studentSurname Added');window.location='index.php?page=addUser.php';</script>");
	}

}
?>
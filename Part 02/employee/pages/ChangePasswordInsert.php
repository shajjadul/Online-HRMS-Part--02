<?php
	ob_start();
?>
    <?php include("../config/config.php");?>
    <?php
	$emp_id=$_SESSION['user'];
	//########### PERSONAL INFORMATION ###############
    $CurrentPassword=$_POST['CurrentPassword'];
    $NewPassword=$_POST['NewPassword'];
    $ConfirmNewPassword=$_POST['ConfirmNewPassword'];
	
	include '../../dbase/class.dbase.php';
	$conn=new dbase;
	$conn->connection();
	
	include '../../dbase/class.query.php';
	$query=new insert;
	
	
	//########### EDIT PASSWORD ###############
	
	$result01=mysql_query("SELECT * FROM  emp_login WHERE emp_id='$emp_id' and emp_password='$CurrentPassword'");
    $row01=mysql_num_rows($result01);
	if($row01==1)
	{
	$table_name01="emp_login";
	$update_field01="emp_password='$ConfirmNewPassword'";
	$identification01="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name01,$update_field01,$identification01);
	}
	else
	{
    $mess="message=Your current password was wrong.";
	exit(header("Location:ChangePassword.php?$mess"));
	}
    $mess="message=Congratulation! Password change is successfull.";
	exit(header("Location:ChangePassword.php?$mess"));
	
?>

<? ob_flush(); ?> 
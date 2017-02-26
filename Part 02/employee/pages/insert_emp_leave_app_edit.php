<?php
	ob_start();
?>
    <?php include("../config/config.php");?>
    <?php
	$emp_id=$_SESSION['user'];
	//########### LEAVE INFORMATION ###############
    $typeofleave=$_POST['typeofleave'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $TotalWorkingDays=$_POST['TotalWorkingDays'];
    $RejoiningDate=$_POST['RejoiningDate'];
    $PurposeOfLeave=$_POST['PurposeOfLeave'];
    $AdressDuringLeave=$_POST['AdressDuringLeave'];
    $resname=$_POST['resname'];
    $submittime=$_POST["submittime"];
    //$resdesignation=$_POST['resdesignation'];
    //$resdepartment=$_POST['resdepartment'];
	include '../../dbase/class.dbase.php';
	$conn=new dbase;
	$conn->connection();
	
	include '../../dbase/class.query.php';
	$query=new insert;
	
	//########### EDIT LEAVE INFORMATION ###############
	$table_name01="emp_leave_app";
	$update_field01="TypeOfLeave='$typeofleave', FromStart='$from', ToEnd='$to', TotalWorkingDays='$TotalWorkingDays', RejoiningDate='$RejoiningDate', PurposeOfLeave='$PurposeOfLeave', AdressDuringLeave='$AdressDuringLeave', ResName='$resname'";
	$identification01="EmpId='$emp_id' and SubmitTime='$submittime'";
	$query->DynamicUpdate($table_name01,$update_field01,$identification01);
	
	
    /*$mess="message=Congratulation! You successfully done the job.";
	header("Location:emp_resume_show.php?$mess");*/
    $mess="message=Congratulation! All of your informations updated successfully.";
	exit(header("Location:emp_leave_app_show.php?ac=leave&&$mess"));
	
?>


<? ob_flush(); ?> 
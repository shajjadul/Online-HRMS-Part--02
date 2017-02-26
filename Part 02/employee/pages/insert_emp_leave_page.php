<?php
	ob_start();
?>
    <?php include("../config/config.php");?>
    <?php
	$emp_id=$_SESSION['user'];
	//########### PERSONAL INFORMATION ###############
    $typeofleave=$_POST['typeofleave'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $TotalWorkingDays=$_POST['TotalWorkingDays'];
    $RejoiningDate=$_POST['RejoiningDate'];
    $PurposeOfLeave=$_POST['PurposeOfLeave'];
    $AdressDuringLeave=$_POST['AdressDuringLeave'];
    $resname=$_POST['resname'];
	
	$mktime=mktime()+6*3600;
	$today_date=gmdate("Y-m-d",$mktime);
	//$emp_atten_time=gmdate("H:i:s",$mktime);
	$moment=gmdate("YmdHis",$mktime);
    //$resdesignation=$_POST['resdesignation'];
    //$resdepartment=$_POST['resdepartment'];
	include '../../dbase/class.dbase.php';
	$conn=new dbase;
	$conn->connection();
	
	include '../../dbase/class.query.php';
	$query=new insert;
	
    include "../../library/class.SecurityCode.php";
    $code=new SecurityCode();
    $table_id=$code->Generator("10");
	
    $table_id01=$table_id;
	
	//########### INSERT INFORMATION ###############
	$table01="emp_leave_app";
	
	$array01=array("$table_id","$emp_id","$typeofleave","$from","$to","$TotalWorkingDays","$RejoiningDate","$PurposeOfLeave","$AdressDuringLeave","$resname","$today_date","$moment","0");
	
	$query->normal_insert($table01,$array01);
	
	
    /*$mess="message=Congratulation! You successfully done the job.";
	header("Location:emp_resume_show.php?$mess");*/
	exit(header("Location:emp_leave_app_show.php?ac=leave"));
	
?>




<? ob_flush(); ?> 
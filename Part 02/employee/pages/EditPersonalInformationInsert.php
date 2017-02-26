<?php
	ob_start();
?>
    <?php include("../config/config.php");?>
    <?php
	$emp_id=$_SESSION['user'];
	//########### PERSONAL INFORMATION ###############
    $name=$_POST['first_name'];
    $father_name=$_POST['father_name'];
    $mother_name=$_POST['mother_name'];
    $present_address=$_POST['present_address'];
    $permanent_address=$_POST['permanent_address'];
    $home_phone=$_POST['home_phone'];
    $email=$_POST['email'];
    $birth_date=$_POST['birth_date'];
    $nationality=$_POST['nationality'];
    $national_id_no=$_POST['national_id_no'];
    $religion=$_POST['religion'];
    $marital_status=$_POST['marital_status'];
    $gender=$_POST['gender'];
    $blood_group=$_POST['blood_group'];
	
	
	include '../../dbase/class.dbase.php';
	$conn=new dbase;
	$conn->connection();
	
	include '../../dbase/class.query.php';
	$query=new insert;
	
	
	
	//########### EDIT PERSONAL INFORMATION ###############
	$table_name01="emp_personal_info";
	$update_field01="emp_name='$name',emp_father_name='$father_name',emp_mother_name='$mother_name',emp_present_address='$present_address',emp_permanent_address='$permanent_address',emp_cell_no='$home_phone',emp_email='$email',emp_birth_date='$birth_date',emp_nationality='$nationality',emp_national_id_no='$national_id_no',emp_religion='$religion',emp_marital_status='$marital_status',emp_gender='$gender',blood_group='$blood_group'";
	$identification01="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name01,$update_field01,$identification01);
	
		
	
	
//########### EDIT ADD EMPLOYEE ###############
	$table_name02="add_employee";
	$update_field02="emp_name='$name',emp_email='$email'";
	$identification02="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name02,$update_field02,$identification02);
	
	
	//list($table_id,$name,$employeeid,$email,$joiningdate,$designation,$department,$message)=mysql_fetch_row($result);
	
	
	
    //$mess="message=Congratulation! All of your informations updated successfully.";
	exit(header("Location:masterview.php"));
?>




<? ob_flush(); ?> 
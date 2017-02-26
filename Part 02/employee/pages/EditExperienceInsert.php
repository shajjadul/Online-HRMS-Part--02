<?php
	ob_start();
?>
    <?php include("../config/config.php");?>
    <?php
	$emp_id=$_SESSION['user'];
//########### EXPERIENCE ###############
    $COMPANY1=$_POST['COMPANY1'];
    $EXP_TYPE1=$_POST['EXP_TYPE1'];
    $EXP_AREA1=$_POST['EXP_AREA1'];
    $EXP_POST1=$_POST['EXP_POST1'];
    $DEPT1=$_POST['DEPT1'];
    $UNIT1=$_POST['UNIT1'];
    $JOB_LOC1=$_POST['JOB_LOC1'];
    $SUPER_NAME1=$_POST['SUPER_NAME1'];
    $SUPER_PHONE1=$_POST['SUPER_PHONE1'];
    $SUPER_EMAIL1=$_POST['SUPER_EMAIL1'];
    $RESERVATION1=$_POST['RESERVATION1'];
    $EFROM_D1=$_POST['EFROM_D1'];
    $ETO_D1=$_POST['ETO_D1'];
    $DUTY1=$_POST['DUTY1'];
    $ACHIEVE1=$_POST['ACHIEVE1'];
    $CLOCATION1=$_POST['CLOCATION1'];
	
	
	include '../../dbase/class.dbase.php';
	$conn=new dbase;
	$conn->connection();
	
	include '../../dbase/class.query.php';
	$query=new insert;
	
	
	
//########### EDIT EXPERIENCE ###############
	$table_name04="emp_experience";
	$update_field04="emp_company='$COMPANY1',emp_exp_type='$EXP_TYPE1',emp_exp_area='$EXP_AREA1',emp_exp_post='$EXP_POST1',emp_department='$DEPT1',emp_unit='$UNIT1',emp_job_location='$JOB_LOC1',emp_super_name='$SUPER_NAME1',emp_super_phone='$SUPER_PHONE1',emp_super_email='$SUPER_EMAIL1',emp_reservation='$RESERVATION1',emp_serve_from='$EFROM_D1',emp__serve_to='$ETO_D1',emp_duty='$DUTY1',emp_achieve='$ACHIEVE1',emp_orga_address='$CLOCATION1'";
	$identification04="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name04,$update_field04,$identification04);
	

	
	
	
    //$mess="message=Congratulation! All of your informations updated successfully.";
	exit(header("Location:masterview.php"));
?>




<? ob_flush(); ?> 
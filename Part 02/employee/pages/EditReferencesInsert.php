<?php
	ob_start();
?>
    <?php include("../config/config.php");?>
    <?php
	$emp_id=$_SESSION['user'];
//########### REFERENCES ###############
    $R_NAME1=$_POST['R_NAME1'];
    $R_POS1=$_POST['R_POS1'];
    $R_COMP1=$_POST['R_COMP1'];
    $R_ADD1=$_POST['R_ADD1'];
    $R_PHONE1=$_POST['R_PHONE1'];
    $R_CELL1=$_POST['R_CELL1'];
    $R_EMAIL1=$_POST['R_EMAIL1'];
    $R_KNOW1=$_POST['R_KNOW1'];
	
	
    $R_NAME2=$_POST['R_NAME2'];
    $R_POS2=$_POST['R_POS2'];
    $R_COMP2=$_POST['R_COMP2'];
    $R_ADD2=$_POST['R_ADD2'];
    $R_PHONE2=$_POST['R_PHONE2'];
    $R_CELL2=$_POST['R_CELL2'];
    $R_EMAIL2=$_POST['R_EMAIL2'];
    $R_KNOW2=$_POST['R_KNOW2'];
	
	
	include '../../dbase/class.dbase.php';
	$conn=new dbase;
	$conn->connection();
	
	include '../../dbase/class.query.php';
	$query=new insert;
	
	
	
//###########EDIT REFERENCES ###############
	$table_name05="emp_references";
	$update_field0501="emp_ref_name='$R_NAME1',emp_ref_desig='$R_POS1',emp_ref_orga='$R_COMP1',emp_ref_address='$R_ADD1',emp_ref_phone_no='$R_PHONE1',emp_ref_cell_no='$R_CELL1',emp_ref_email='$R_EMAIL1',emp_ref_relation='$R_KNOW1'";
	$identification0501="emp_id='$emp_id' and position='1'";
	$query->DynamicUpdate($table_name05,$update_field0501,$identification0501);
	
	$update_field0502="emp_ref_name='$R_NAME2',emp_ref_desig='$R_POS2',emp_ref_orga='$R_COMP2',emp_ref_address='$R_ADD2',emp_ref_phone_no='$R_PHONE2',emp_ref_cell_no='$R_CELL2',emp_ref_email='$R_EMAIL2',emp_ref_relation='$R_KNOW2'";
	$identification0502="emp_id='$emp_id' and position='2'";
	$query->DynamicUpdate($table_name05,$update_field0502,$identification0502);
	
	
    //$mess="message=Congratulation! All of your informations updated successfully.";
	exit(header("Location:masterview.php"));
?>




<? ob_flush(); ?> 
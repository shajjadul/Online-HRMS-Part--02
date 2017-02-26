<?php
	ob_start();
?>
    <?php include("../config/config.php");?>
    <?php
	$emp_id=$_SESSION['user'];
//########### SCHOLASTIC STATUS ###############
    $noe_ssc=$_POST['noe_ssc'];
    $gs_ssc=$_POST['gs_ssc'];
    $res_ssc=$_POST['res_ssc'];
    $gpa_ssc=$_POST['gpa_ssc'];
    $gpa_outof_ssc=$_POST['gpa_outof_ssc'];
    $bu_ssc=$_POST['bu_ssc'];
    $pass_ssc=$_POST['pass_ssc'];
	
    $noe_hsc=$_POST['noe_hsc'];
    $gs_hsc=$_POST['gs_hsc'];
    $res_hsc=$_POST['res_hsc'];
    $gpa_hsc=$_POST['gpa_hsc'];
    $gpa_outof_hsc=$_POST['gpa_outof_hsc'];
    $bu_hsc=$_POST['bu_hsc'];
    $pass_hsc=$_POST['pass_hsc'];
	
    $noe_bsc=$_POST['noe_bsc'];
    $gs_bsc=$_POST['gs_bsc'];
    $res_bsc=$_POST['res_bsc'];
    $gpa_bsc=$_POST['gpa_bsc'];
    $gpa_outof_bsc=$_POST['gpa_outof_bsc'];
    $bu_bsc=$_POST['bu_bsc'];
    $pass_bsc=$_POST['pass_bsc'];
	
    $noe_msc=$_POST['noe_msc'];
    $gs_msc=$_POST['gs_msc'];
    $res_msc=$_POST['res_msc'];
    $gpa_msc=$_POST['gpa_msc'];
    $gpa_outof_msc=$_POST['gpa_outof_msc'];
    $bu_msc=$_POST['bu_msc'];
    $pass_msc=$_POST['pass_msc'];
	
	
	
    $extracurriculamactivities=$_POST['extracurriculamactivities'];
    $otherskills=$_POST['otherskills'];
	
	
	include '../../dbase/class.dbase.php';
	$conn=new dbase;
	$conn->connection();
	
	include '../../dbase/class.query.php';
	$query=new insert;
	
	
	
//########### EDIT SCHOLASTIC STATUS ###############

	$table_name02="emp_scholastic_status";
	$update_field0201="emp_name_of_exam='$noe_ssc',emp_group_sub='$gs_ssc',emp_result='$res_ssc',emp_marks_gpa='$gpa_ssc',emp_gpa_outof='$gpa_outof_ssc',emp_board_uni='$bu_ssc',emp_pass_year='$pass_ssc'";
	$identification0201="emp_id='$emp_id' and emp_position='1'";
	$query->DynamicUpdate($table_name02,$update_field0201,$identification0201);
		
		
	$update_field0202="emp_name_of_exam='$noe_hsc',emp_group_sub='$gs_hsc',emp_result='$res_hsc',emp_marks_gpa='$gpa_hsc',emp_gpa_outof='$gpa_outof_hsc',emp_board_uni='$bu_hsc',emp_pass_year='$pass_hsc'";
	$identification0202="emp_id='$emp_id' and emp_position='2'";
	$query->DynamicUpdate($table_name02,$update_field0202,$identification0202);


	$update_field0203="emp_name_of_exam='$noe_bsc',emp_group_sub='$gs_bsc',emp_result='$res_bsc',emp_marks_gpa='$gpa_bsc',emp_gpa_outof='$gpa_outof_bsc',emp_board_uni='$bu_bsc',emp_pass_year='$pass_bsc'";
	$identification0203="emp_id='$emp_id' and emp_position='3'";
	$query->DynamicUpdate($table_name02,$update_field0203,$identification0203);


	$update_field0204="emp_name_of_exam='$noe_msc',emp_group_sub='$gs_msc',emp_result='$res_msc',emp_marks_gpa='$gpa_msc',emp_gpa_outof='$gpa_outof_msc',emp_board_uni='$bu_msc',emp_pass_year='$pass_msc'";
	$identification0204="emp_id='$emp_id' and emp_position='4'";
	$query->DynamicUpdate($table_name02,$update_field0204,$identification0204);
	
	
	$table_name03="emp_extra_status";
	$update_field03="extracurriculamactivities='$extracurriculamactivities',otherskills='$otherskills'";
	$identification03="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name03,$update_field03,$identification03);
	

	
	
	
    //$mess="message=Congratulation! All of your informations updated successfully.";
	exit(header("Location:masterview.php"));
?>




<? ob_flush(); ?> 
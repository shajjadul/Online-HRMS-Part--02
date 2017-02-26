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
	
//########### PASSWORD ###############

    //$emp_id=$_POST['emp_id'];
    $emp_pass=$_POST['reemppass'];
	
//########### PHOTO ###############
$picture=$_FILES['image_file'];

if($picture['size']!=0)
{
	if($_FILES["image_file"]["size"] <= 30720)
	{
	$known_photo_types = array( 
							'image/pjpeg' => 'jpg',
							'image/jpeg' => 'jpg',
							'image/gif' => 'gif',
							'image/bmp' => 'bmp',
							'image/x-png' => 'png',
							'image/png' => 'png'
							   );
	$main_image_type=$picture['type'];
	$main_image_extension= $known_photo_types[$main_image_type];
	$picture_name=$emp_id.".".$main_image_extension;
	copy($picture['tmp_name'], "../../image"."/".$picture_name);	
	}
	
	else
	{
		$mess="message=Sorry! Image size should not exceed 30KB";
		exit(header("Location:emp_info_form.php?$mess"));
	}
}
else
{
	$picture_name="common.jpg";
}

	
	include '../../dbase/class.dbase.php';
	$conn=new dbase;
	$conn->connection();
	
	include '../../dbase/class.query.php';
	$query=new insert;
	
    include "../../library/class.SecurityCode.php";
    $code=new SecurityCode();
    $table_id=$code->Generator("10");
	
    $table_id01=$table_id.'1';
    $table_id02=$table_id.'2';	
    $table_id03=$table_id.'3';	
    $table_id04=$table_id.'4';	
	//$result=mysql_query("SELECT * FROM add_employee WHERE emp_id='$employeeid'");
   // $rows=mysql_num_rows($result);
	
	
	//########### PERSONAL INFORMATION ###############
	$table01="emp_personal_info";
	
	$array01=array("$table_id","$emp_id","$name","$father_name","$mother_name","$present_address","$permanent_address","$home_phone","$email","$birth_date","$nationality","$national_id_no","$religion","$marital_status","$gender","$blood_group");
	
	$query->normal_insert($table01,$array01);
	
		
//########### SCHOLASTIC STATUS ###############
	$table02="emp_scholastic_status";
	
	$array0201=array("$table_id01","$emp_id","$noe_ssc","$gs_ssc","$res_ssc","$gpa_ssc","$gpa_outof_ssc","$bu_ssc","$pass_ssc","1");
	$query->normal_insert($table02,$array0201);
	
	$array0202=array("$table_id02","$emp_id","$noe_hsc","$gs_hsc","$res_hsc","$gpa_hsc","$gpa_outof_hsc","$bu_hsc","$pass_hsc","2");
	$query->normal_insert($table02,$array0202);
	
	$array0203=array("$table_id03","$emp_id","$noe_bsc","$gs_bsc","$res_bsc","$gpa_bsc","$gpa_outof_bsc","$bu_bsc","$pass_bsc","3");
	$query->normal_insert($table02,$array0203);
	
	$array0204=array("$table_id04","$emp_id","$noe_msc","$gs_msc","$res_msc","$gpa_msc","$gpa_outof_msc","$bu_msc","$pass_msc","4");
	$query->normal_insert($table02,$array0204);
	
	
	
	$table03="emp_extra_status";
	
	$array03=array("$table_id","$emp_id","$extracurriculamactivities","$otherskills");
	
	$query->normal_insert($table03,$array03);
	

//########### EXPERIENCE ###############
	$table04="emp_experience";
	
	$array04=array("$table_id","$emp_id","$COMPANY1","$EXP_TYPE1","$EXP_AREA1","$EXP_POST1","$DEPT1","$UNIT1","$JOB_LOC1","$SUPER_NAME1","$SUPER_PHONE1","$SUPER_EMAIL1","$RESERVATION1","$EFROM_D1","$ETO_D1","$DUTY1","$ACHIEVE1","$CLOCATION1");
	
	$query->normal_insert($table04,$array04);
	

//########### REFERENCES ###############
	$table05="emp_references";
	
	$array0501=array("$table_id01","$emp_id","$R_NAME1","$R_POS1","$R_COMP1","$R_ADD1","$R_PHONE1","$R_CELL1","$R_EMAIL1","$R_KNOW1","1");
	$query->normal_insert($table05,$array0501);
	$array0502=array("$table_id02","$emp_id","$R_NAME2","$R_POS2","$R_COMP2","$R_ADD2","$R_PHONE2","$R_CELL2","$R_EMAIL2","$R_KNOW2","2");
	$query->normal_insert($table05,$array0502);
	

//########### PHOTO ###############
	$table06="emp_photo";
	
	$array06=array("$table_id","$emp_id","$picture_name");
	
	$query->normal_insert($table06,$array06);
	
//###########EDIT PASSWORD ###############
	$table_name="emp_login";
	$update_field="emp_password='$emp_pass'";
	$identification="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name,$update_field,$identification);
	
	
//########### EDIT ADD EMPLOYEE ###############
	$table_name02="add_employee";
	$update_field02="emp_name='$name',emp_email='$email'";
	$identification02="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name02,$update_field02,$identification02);
	
	
	
    /*$mess="message=Congratulation! You successfully done the job.";
	header("Location:emp_resume_show.php?$mess");*/
	exit(header("Location:emp_resume_show.php"));
	
?>




<? ob_flush(); ?> 
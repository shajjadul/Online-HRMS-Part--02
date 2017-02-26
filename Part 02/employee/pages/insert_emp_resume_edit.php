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
$old_image_name=$_POST['image_name'];
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
	    $picture_name=$old_image_name;
}
	
	include '../../dbase/class.dbase.php';
	$conn=new dbase;
	$conn->connection();
	
	include '../../dbase/class.query.php';
	$query=new insert;
	
	//$result=mysql_query("SELECT * FROM add_employee WHERE emp_id='$employeeid'");
   // $rows=mysql_num_rows($result);
	
	
	//########### EDIT PERSONAL INFORMATION ###############
	$table_name01="emp_personal_info";
	$update_field01="emp_name='$name',emp_father_name='$father_name',emp_mother_name='$mother_name',emp_present_address='$present_address',emp_permanent_address='$permanent_address',emp_cell_no='$home_phone',emp_email='$email',emp_birth_date='$birth_date',emp_nationality='$nationality',emp_national_id_no='$national_id_no',emp_religion='$religion',emp_marital_status='$marital_status',emp_gender='$gender',blood_group='$blood_group'";
	$identification01="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name01,$update_field01,$identification01);
	
		
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
	

//########### EDIT EXPERIENCE ###############
	$table_name04="emp_experience";
	$update_field04="emp_company='$COMPANY1',emp_exp_type='$EXP_TYPE1',emp_exp_area='$EXP_AREA1',emp_exp_post='$EXP_POST1',emp_department='$DEPT1',emp_unit='$UNIT1',emp_job_location='$JOB_LOC1',emp_super_name='$SUPER_NAME1',emp_super_phone='$SUPER_PHONE1',emp_super_email='$SUPER_EMAIL1',emp_reservation='$RESERVATION1',emp_serve_from='$EFROM_D1',emp__serve_to='$ETO_D1',emp_duty='$DUTY1',emp_achieve='$ACHIEVE1',emp_orga_address='$CLOCATION1'";
	$identification04="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name04,$update_field04,$identification04);
	

//###########EDIT REFERENCES ###############
	$table_name05="emp_references";
	$update_field0501="emp_ref_name='$R_NAME1',emp_ref_desig='$R_POS1',emp_ref_orga='$R_COMP1',emp_ref_address='$R_ADD1',emp_ref_phone_no='$R_PHONE1',emp_ref_cell_no='$R_CELL1',emp_ref_email='$R_EMAIL1',emp_ref_relation='$R_KNOW1'";
	$identification0501="emp_id='$emp_id' and position='1'";
	$query->DynamicUpdate($table_name05,$update_field0501,$identification0501);
	
	$update_field0502="emp_ref_name='$R_NAME2',emp_ref_desig='$R_POS2',emp_ref_orga='$R_COMP2',emp_ref_address='$R_ADD2',emp_ref_phone_no='$R_PHONE2',emp_ref_cell_no='$R_CELL2',emp_ref_email='$R_EMAIL2',emp_ref_relation='$R_KNOW2'";
	$identification0502="emp_id='$emp_id' and position='2'";
	$query->DynamicUpdate($table_name05,$update_field0502,$identification0502);
//########### PHOTO ###############

	$table_name06="emp_photo";
	$update_field06="image_name='$picture_name'";
	$identification06="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name06,$update_field06,$identification06);
		
//########### PASSWORD ###############
	$table_name="emp_login";
	$update_field="emp_password='$emp_pass'";
	$identification="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name,$update_field,$identification);
	
	
//########### EDIT ADD EMPLOYEE ###############
	$table_name02="add_employee";
	$update_field02="emp_name='$name',emp_email='$email'";
	$identification02="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name02,$update_field02,$identification02);
	
	
	//list($table_id,$name,$employeeid,$email,$joiningdate,$designation,$department,$message)=mysql_fetch_row($result);
	
	
	
    $mess="message=Congratulation! All of your informations updated successfully.";
	exit(header("Location:emp_resume_show.php?$mess"));
?>




<? ob_flush(); ?> 
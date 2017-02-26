<?php
	ob_start();
?>
    <?php include("../config/config.php");?>
    <?php
	$emp_id=$_SESSION['user'];
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
		exit(header("Location:EditImage.php?$mess"));
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
	
	
	
//########### PHOTO ###############

	$table_name06="emp_photo";
	$update_field06="image_name='$picture_name'";
	$identification06="emp_id='$emp_id'";
	$query->DynamicUpdate($table_name06,$update_field06,$identification06);
	
	
    //$mess="message=Congratulation! All of your informations updated successfully.";
	exit(header("Location:masterview.php"));
?>




<? ob_flush(); ?> 
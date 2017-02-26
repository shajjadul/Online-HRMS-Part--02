<? ob_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("../dbase/class.dbase.php");
	$conn=new dbase;
	$conn->connection();
	
	$user=$_POST['user_id'];
	$pass=$_POST['password'];
	
	
	$result1=mysql_query("SELECT * FROM add_employee WHERE emp_id='$user'");
	$row1=mysql_fetch_array($result1);
	
	$result2=mysql_query("SELECT * FROM emp_personal_info WHERE emp_id='$user'");
    $rows2=mysql_num_rows($result2);
	
	$query=mysql_query("select * from emp_login where emp_id='$user' and emp_password='$pass'");
	if($row1[8]==1)
	    {
		if(mysql_num_rows($query)==0)
			{
				exit(header("location:index.php?mess=Sorry! User Id and Password does't match."));
			}
		else if(mysql_num_rows($query)==1 and $rows2==1)
			{
			session_start();
			$_SESSION['user']=$user;
			exit(header("location:pages/index.php"));
			}
		else{
			session_start();
			$_SESSION['user']=$user;
			exit(header("location:pages/emp_info_form.php"));
			}
		}
	  else if($row1[8]==0)
	    {
		       exit(header("location:index.php?mess=Sorry! Your email varification is not completed."));
		}
	  else if($row1[8]==3)
	    {
		       exit(header("location:index.php?mess=Sorry! Your account is disabled by admin"));
		}
	  else
	    {
		       exit(header("location:index.php?mess=Sorry! This User ID is not exist"));
		}
?>
<? ob_flush(); ?> 
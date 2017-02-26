
<?php
    $value=$_GET['q'];
	include '../../dbase/class.dbase.php';
	$conn=new dbase;
	$conn->connection();
	
	$result01=mysql_query("SELECT * FROM add_employee WHERE emp_id='$value'");
    $rows01=mysql_fetch_array($result01);
    $row01=mysql_num_rows($result01);
	if($row01==1)
	{
    echo "<span style='color:#008000;'>$rows01[1]</span>";
	}
?>

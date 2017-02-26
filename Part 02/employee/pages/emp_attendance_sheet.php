<style type="text/css">
#vatued th
{
	background-color:#EBEBED; padding:5px; margin:1px; min-height:28px; text-align:center;
}
#vatued td
{
	background-color:#EBEBED; padding:5px; margin:1px; min-height:28px; text-align:center;
}
#vatued td:hover
{
	background-color:#C9C9C9; padding:5px; margin:1px; min-height:28px; text-align:center;
}

#vatued
{
/*border-collapse:collapse;*/
width:99%;
clear:both; margin:15px 0 0 0;
}
</style>
<?php
	
	$mktime=mktime()+6*3600;
	$today_date=gmdate("Y-m-d",$mktime);
	$current_month=gmdate("Y-m",$mktime);
	$current_time=gmdate("H:i:s",$mktime);
	$result01=mysql_query("select * from emp_attendance WHERE emp_atten_date LIKE '$current_month%' and emp_id='$emp_id' and status='1' ORDER BY emp_atten_date ASC");
?>
<div align="center" style="width:100%; min-height:385px;">
<table id="vatued">
    <tr>
        <th width="10%">Serial No.</th>
        <th width="15%">Enter Time</th>
        <th width="25%">Cause of Delay</th>
        <th width="15%">Exit Time</th>
        <th width="25%">Cause of Early Exit</th>
        <th width="10%">Date</th>
     </tr>
<?php
        $sl=0;
		while($row01=mysql_fetch_array($result01))
		{
		$sl=$sl+1;;
	   $result02=mysql_query("select * from emp_attendance WHERE emp_atten_date='$row01[2]' and emp_id='$row01[1]' and status='2'");
	   $row02=mysql_fetch_array($result02);
	   //$result03=mysql_query("SELECT * FROM emp_personal_info WHERE emp_id='$row01[1]'");
       //$row03=mysql_fetch_array($result03);
?>
   <tr>
        <td><?php echo $sl;?></td>
        <td>
		<?php
		if($row01[3]<="10:15:00")
		{
		 echo $row01[3]." "."AM";
		}
		else
		{
		  if($row01[3]<'12:00:00')
		  {
		   echo "<span style='color:red;'>$row01[3] AM</span>";
		  }
		  else
		  {
			  list($h,$m,$s)=explode(":",$row01[3]);
			  $pm_h=$h-12;
			  if(strlen($pm_h)==1)
			  {
			  $pm_time="0".$pm_h.":".$m.":".$s." "."PM";
		      echo "<span style='color:red;'>$pm_time</span>";
			  }
			  else
			  {
			  $pm_time=$pm_h.":".$m.":".$s." "."PM";
		      echo "<span style='color:red;'>$pm_time</span>";
			  }
		  }
		}
		 ?>
        </td>
        <td><?php echo $row01[5];?></td>
        <td><?php echo $row02[3];?></td>
        <td><?php echo $row02[5];?></td>
        <td><?php echo $row01[2];?></td>
   </tr>
<?php
		}
?>
</table>


</div>



<?php
   $startdate=$_GET['leave_from'];
   $enddate=$_GET['leave_to'];
   if($startdate!="" && $enddate!="" && $startdate<=$enddate)
   {
	   $timestamp_start = strtotime($startdate);
	
	   $timestamp_end = strtotime($enddate);
	
	   $difference = abs($timestamp_end - $timestamp_start);
	   
	   $days = floor($difference/(60*60*24))+1;
	   if($days>1)
	   {
	   echo "<span style='color:#F00;'>".$days." days</span>";
	   }
	   else
	   {
	   echo "<span style='color:#F00;'>".$days." day</span>";
	   }
   }
   else
   {
	   echo "<span style='color:;'>Select period of leave correctly</span>";
   }
?>

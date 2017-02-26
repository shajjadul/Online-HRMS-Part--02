<style type="text/css">
td
{
	font-family:Verdana, Geneva, sans-serif;
}
input[type="submit"],input[type="button"],#submit
{
   font-weight:700;
   width:100px;
   height:30px;
   padding-left:0px;
   cursor:pointer;  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}
</style>
<?php
	$result01=mysql_query("SELECT * FROM emp_leave_app WHERE EmpId='$emp_id' ORDER BY SubmitTime DESC LIMIT 1");
    $rows01=mysql_fetch_array($result01);
	
	$result02=mysql_query("SELECT * FROM add_employee WHERE emp_id='$rows01[9]'");
    $rows02=mysql_fetch_array($result02);
	
	$typeofleave_array=array("1"=>"Casual",
						   "2"=>"Earned",
						   "3"=>"Gateway Overseas Studies Ltd.",
						   "4"=>"Maternity",
						   "5"=>"Sick");
						   
	
	$month_array=array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");	
     list($from_y,$from_m,$from_d)=explode("-",$rows01[3]);
	 $from_month=$month_array[$from_m];
	 $from=$from_d." ".$from_month." ".$from_y;
	 
     list($to_y,$to_m,$to_d)=explode("-",$rows01[4]);
	 $to_month=$month_array[$to_m];
	 $to=$to_d." ".$to_month." ".$to_y;
	 
     list($rej_y,$rej_m,$rej_d)=explode("-",$rows01[6]);
	 $rej_month=$month_array[$rej_m];
	 $re_joining=$rej_d." ".$rej_month." ".$rej_y;
	 
	 
	   $timestamp_start = strtotime($rows01[3]);
	
	   $timestamp_end = strtotime($rows01[4]);
	
	   $difference = abs($timestamp_end - $timestamp_start);
	   
	   $days = floor($difference/(60*60*24))+1;
	   if($days>1)
	   {
	   $total_day="<span style='color:#F00;'>".$days." days</span>";
	   }
	   else
	   {
	   $total_day="<span style='color:#F00;'>".$days." day</span>";
	   }
	 
	 
	$department_array=array("1"=>"Evolution Group Ltd.",
						   "2"=>"Evolution Migration Ltd.",
						   "3"=>"Evolution Overseas Studies Ltd.",
						   "4"=>"Evolution IT Ltd.",
						   "5"=>"Evolution Tours &amp; Travels Ltd.",
						   "6"=>"Evolution Trading &amp; Consultency Ltd.");
?>

<div style="width:1000px; min-height:570px; background:#CEE7FF;"><!--Page Area -->
     <div style="width:990px; min-height:500px; padding:15px 5px 5px 5px;">
    <table><tbody>
    <tr>
      <td width="15%">
      Type of leave
      </td>
      <td>:</td>
      <td>
         <?php echo $typeofleave_array[$rows01[2]];?>
      </td>
    </tr>
    
    <tr>
      <td>
      Period of Leave
      </td>
      <td>:</td>
      
      <td>
        <table>
            <tr>
              <td>&nbsp;&nbsp;From</td><td>:</td><td style="color:#00F;"><?php echo $from;?></td>
              <td>&nbsp;To</td><td>:</td><td style="color:#00F;"><?php echo $to;?></td>
            </tr>
        </table>
      </td>
    </tr>
    
    <tr>
      <td>
      Total Days
      </td>
      
      <td>:</td>
      
      <td>
       <?php echo $total_day;?>
      </td>
    </tr>
    
    <tr>
      <td>
      Total working days
      </td>
      
      <td>:</td>
      
      <td>
       <?php echo $rows01[5];?>
      </td>
    </tr>
    
    
    <tr>
      <td>
      Re-joining date
      </td>
      
      <td>:</td>
      
      <td>
        <?php echo $re_joining;?>
       </td>
    </tr>
    
    
    <tr>
      <td align="justify">
      Purpose of leave
      </td>
      
      <td>:</td>
      
      <td>
         <?php echo $rows01[7];?>
      </td>
    </tr>
    
    <tr>
      <td align="justify">
      Address during leave
      </td>
      
      <td>:</td>
      
      <td>
         <?php echo $rows01[8];?>
      </td>
    </tr>
    
    
    <tr>
      <td colspan="3" height="50" style="color:#A60000;">
      During the leave job responsibility will be performed by (if applicable)
      </td>
    </tr>
    
    <tr>
      <td>
      Name
      </td>
      
      <td>:</td>
      
      <td>
        <?php echo $rows02[1];?>
      </td>
    </tr>
    
    <tr>
      <td>
      Designation
      </td>
      
      <td>:</td>
      
      <td>
         <?php echo $rows02[5];?>
      </td>
    </tr>
    
    <tr>
      <td>
      Department
      </td>
      
      <td>:</td>
      
      <td>
         <?php echo $department_array[$rows02[6]];?>
      </td>
    </tr>
    
    </tbody></table>
    
        <div style="margin:10px 0 10px 10px; width:980px; color:#F00;">
        NB: <?php echo @$_GET['message'];?> If you need any correction, please click on Edit button. Otherwise click on Confirm button.
        </div>
        <div align="center" style="margin:20px 0 10px 10px; width:980px;">
        <form method="post" action="emp_leave_app_edit.php?ac=leave">
        <input type="hidden" value="<?php echo $rows01[11];?>" name="submittime"/>
         <a style=" text-decoration:none;" href="index.php?ac=index"><input type="button" name="confirm" value="Confirm"></a>
         <input type="submit" name="edit" value="Edit" />
        </form> 
        </div>
     </div>
</div><!--Page Area -->
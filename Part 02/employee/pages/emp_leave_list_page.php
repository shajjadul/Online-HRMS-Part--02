<style type="text/css">
    .Table
    {
        display: table;
		width:996px;
		clear:both;
    }
    .Title
    {
        display: table-caption;
        text-align: center;
		background-color: #CEE7FF; 
		padding:3px 0 3px 0 ;
		margin:3px 0 2px 0; 
		font-family: Tahoma, Geneva, sans-serif;
		font-weight:800;
		font-size:18px;
    }
    .Heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row
    {
        display: table-row;
    }
    .Row0
    {
        display: table-row;
        position: relative;
    }
    .Row0:hover
	{
		cursor:pointer;
		border:1px solid #FF8282;
	}
    .cell
    {
	background-color:#EBEBED; padding:5px; margin:1px; color:#333333; float:left; min-height:25px; text-align:center;
    }
    .cell0
    {
	background-color:#EBEBED; padding:5px; margin:1px; color:#333333; float:left; min-height:25px; text-align:center;
    }
    .cell0:hover
    {
	background-color: #C9C9C9; padding:5px; margin:1px; color:#333333; float:left; min-height:25px; text-align:center;
    }
	p
	{
		color:#C00;
	}
	
	
.content {
padding: 2px 0 5px 0;
background-color:#fafafa;
}
</style>
<script src="js/jquery-1.10.2.js"></script>
<script>
jQuery(document).ready(function() {
    jQuery(".content").hide();
    jQuery(".Row0").click(function() {
        jQuery(this)
            .nextAll(".content:first").slideToggle(500)
            .siblings(".content").slideUp(500);
    });
});
</script>

<?php
	
	/*$mktime=mktime()+6*3600;
	$today_date=gmdate("Y-m-d",$mktime);
	$current_time=gmdate("H:i:s",$mktime);*/
	$department_array=array("1"=>"Gateway Group Ltd.",
						   "2"=>"Gateway Migration Ltd.",
						   "3"=>"Gateway Overseas Studies Ltd.",
						   "4"=>"Gateway IT Ltd.",
						   "5"=>"Gateway Tours &amp; Travels Ltd.",
						   "6"=>"Gateway Trading &amp; Consultency Ltd.");
						   
						   
	$typeofleave_array=array("1"=>"Casual",
						   "2"=>"Earned",
						   "3"=>"Gateway Overseas Studies Ltd.",
						   "4"=>"Maternity",
						   "5"=>"Sick");
						   						   
	$month_array=array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
?>
<div align="center" style="width:1000px; min-height:400px;">
    <div class="Table">
        <div class="Title">
            <b>Apply Leave Application List</b>
        </div>
    <div class="Heading">
       <div>    
            <div class="cell" style="width:70px;">
      			<p>Serial No.</p>
            </div>    
            <div class="cell" style="width:150px;">
      			<p>Apply Date</p>
            </div>    
            <div class="cell" style="width:400px;">
      			<p>Purpose of Leave</p>
            </div>    
            <div class="cell" style="width:90px;">
      			<p>Status</p>
            </div>  
            <div class="cell" style="width:226px;">
      			<p>Message</p>
            </div>  
            <div style="clear:both;"></div>
       </div> 
    </div>
    
<?php
	    $result01=mysql_query("select * from emp_leave_app where EmpId='$emp_id' ORDER BY SubmitTime DESC");
        $sl=0;
		while($rows01=mysql_fetch_array($result01))
		{
		$sl=$sl+1;
		list($applydate_y,$applydate_m,$applydate_d)=explode("-",$rows01[10]);
		$applydate_month=$month_array[$applydate_m];
		$applydate=$applydate_d." ".$applydate_month." ".$applydate_y;
		$purposeofleave=substr($rows01[7],0,50);
	    $status_array=array("0"=>"Pending","1"=>"Approved","2"=>"Rejected");
		if($rows01[12]!=0)
		{
	    $result02=mysql_query("select * from emp_leave_recom where LeaveAppId='$rows01[0]'");
		$rows02=mysql_fetch_array($result02);
		$message=substr($rows02[2],0,25). "...";
		}
	    else
	    {
		$message="";
		}
?>
        <div class="Row0">
            <div class="cell0" style="width:70px;">
                <span id="rowcontent"><?php echo $sl;?></span>
            </div>
            <div class="cell0" style="width:150px;">
                <span id="rowcontent"><?php echo $applydate;?></span>
            </div>
            <div class="cell0" style="width:400px;">
                <span id="rowcontent"><?php echo $purposeofleave. "...";?></span>
            </div>
            <div class="cell0" style="width:90px;">
                <span id="rowcontent"><?php echo $status_array[$rows01[12]];?></span>
            </div>
            <div class="cell0" style="width:226px;">
                <span id="rowcontent"><?php echo $message;?></span>
            </div>
            <div style="clear:both;"></div>
        </div>
        
 <?php
 
	   $result03=mysql_query("select * from emp_personal_info where emp_id='$emp_id'");
	   $row03=mysql_num_rows($result03);
	   $rows03=mysql_fetch_array($result03);
	   
	   $result04=mysql_query("select * from add_employee where emp_id='$emp_id'");
	   $rows04=mysql_fetch_array($result04);
	   
	   $result05=mysql_query("select * from add_employee where emp_id='$rows01[9]'");
	   $rows05=mysql_fetch_array($result05);
 
 
 
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
?>   
        
       <div class="content">
       
           <div style="width:966px; min-height:300px; padding:5px 10px 0 10px; margin:2px 5px 0 5px; background-color: #CEE7FF;"><!--Page Area -->
            <table width="100%"><tbody>
             <tr>
              <td width="15%">
              Apply Date
              </td>
              <td>:</td>
              <td>
                 <?php echo $applydate;?>
              </td>
            </tr>
        
            
            <tr>
              <td>
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
              <td>
              Purpose of leave
              </td>
              
              <td>:</td>
              
              <td align="justify">
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
                <?php echo $rows05[1];?>
              </td>
            </tr>
            
            <tr>
              <td>
              Designation
              </td>
              
              <td>:</td>
              
              <td>
                 <?php echo $rows05[5];?>
              </td>
            </tr>
            
            <tr>
              <td>
              Department
              </td>
              
              <td>:</td>
              
              <td>
                 <?php echo $department_array[$rows05[6]];?>
              </td>
            </tr>
            
            
            <tr style="color:#F00;">
              <td>
              <b>Admin message</b>
              </td>
              
              <td>:</td>
              
              <td>
                 <?php echo @$rows02[2];?>
              </td>
            </tr>
            
            
            
            </tbody></table>
            <br />

           </div>
       
        </div><!-- End of Content Div -->

		<?php
         }
        ?>
    
    
        
    </div>
</div>
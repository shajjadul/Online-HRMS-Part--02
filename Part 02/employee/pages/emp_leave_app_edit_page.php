<style type="text/css">
span.ValidationErrors {
    display: inline-block;
    font-size: 12px;
    color: #D00;
    padding-left: 12px;
    font-style: italic;
	font-family:Verdana, Geneva, sans-serif;
}

#typeofleave, #from, #to, #TotalWorkingDays, #RejoiningDate, #resname, #resdesignation, #resdepartment
{
  font-family : Arial, Verdana, sans-serif;
  font-size: 0.8em;
  line-height:140%;
  color : #000; 
  padding : 3px; 
  border : 1px solid #999;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px;

}

#typeofleave:focus, #from:focus, #to:focus, #TotalWorkingDays:focus, #RejoiningDate:focus, #resname:focus, #resdesignation:focus, #resdepartment:focus
{
  color : #009;
  border : 1px solid #990000;
  font-weight:bold;
}

#typeofleave, #resdepartment
{
  height:25px;
  width:250px;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}
#from, #to, #TotalWorkingDays, #RejoiningDate
{
  height:20px;
  width:150px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   

}
#PurposeOfLeave, #AdressDuringLeave
{
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
  border : 1px solid #ccc;   
}
#PurposeOfLeave:focus, #AdressDuringLeave:focus
{
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
   border : 1px solid #990000;
}
#resname, #resdesignation
{
  height:20px;
  width:200px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}
td
{
	font-family:Verdana, Geneva, sans-serif;
}
#contactus input[type="submit"],input[type="reset"],input[type="button"],#submit
{
   width:100px;
   height:30px;
   padding-left:0px;
   cursor:pointer;   
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}

</style>

<script type="text/javascript" src="js/front_jquery_validate.js" > </script>
<script type="text/javascript" src="js/jquery.validate.js" > </script>
<script type="text/javascript" src="js/jquery.validation.functions.js" ></script>

<script type="text/javascript" src="js/emp_leave.js" ></script>
<script type="text/javascript" src="js/emp_id_leave.js" ></script>


        <script type="text/javascript">
            /* <![CDATA[ */
           jQuery(function(){
                jQuery("#typeofleave").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your name"
                });
				
			   jQuery("#from").validate({
                    expression: "if (VAL.match(/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/)) return true; else return false;",
                    message: "Enter valid date format"
                });
				
			   jQuery("#to").validate({
                    expression: "if (VAL.match(/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/)) return true; else return false;",
                    message: "Enter valid date format"
                });
				
			   jQuery("#TotalWorkingDays").validate({
                    expression: "if (VAL.match(/^[1-9]{1,2}$/)) return true; else return false;",
                    message: "Enter integer value"
                });
				
			   jQuery("#RejoiningDate").validate({
                    expression: "if (VAL.match(/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/)) return true; else return false;",
                    message: "Enter valid date format"
                });
				
			   jQuery("#PurposeOfLeave").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Enter purpose of leave"
                });
				
			   jQuery("#AdressDuringLeave").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Enter address during leave"
                });
            });
            /* ]]> */
        </script>  
        
<script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
</script>

<?php
    $submittime=$_POST["submittime"];
	$result01=mysql_query("SELECT * FROM emp_leave_app WHERE EmpId='$emp_id' and SubmitTime='$submittime'");
    $rows01=mysql_fetch_array($result01);
	
	$result02=mysql_query("SELECT * FROM add_employee WHERE emp_id='$rows01[9]'");
    $rows02=mysql_fetch_array($result02);
	
	$typeofleave_array=array("1"=>"Casual",
						   "2"=>"Earned",
						   "3"=>"Gateway Overseas Studies Ltd.",
						   "4"=>"Maternity",
						   "5"=>"Sick");
						   
	
	$month_array=array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");	
	 
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
	 
		$pol=strlen($rows01[7]);
		$remain_pol=1000-$pol;
		$adl=strlen($rows01[8]);	
		$remain_adl=500-$adl;
	 
	/*$department_array=array("1"=>"Evolution Group Ltd.",
						   "2"=>"Evolution Migration Ltd.",
						   "3"=>"Evolution Overseas Studies Ltd.",
						   "4"=>"Evolution IT Ltd.",
						   "5"=>"Evolution Tours &amp; Travels Ltd.",
						   "6"=>"Evolution Trading &amp; Consultency Ltd.");*/
?>

<div style="width:1000px; min-height:570px; background:#CEE7FF;"><!--Page Area -->
    <div align="center" style="color: #F00;  font-family:Tahoma, Geneva, sans-serif; font-size:12px;"><?php echo @$_GET['message'];?></div>
     <div style="width:990px; min-height:500px; padding:15px 5px 5px 5px;">
    <form  name="leavapp" id='leavapp' action="insert_emp_leave_app_edit.php" method="post" enctype="multipart/form-data">
    <table><tbody>
    <tr>
      <td>
      Type of leave
      </td>
      <td>:</td>
      <td>
                    <select class="typeofleave" id="typeofleave" name="typeofleave">
                    
                        <option value="<?php echo $rows01[2];?>" selected="selected"><?php echo $typeofleave_array[$rows01[2]];?></option>
                        
                        <option value="">--Select Type--</option>
                        
                        <option value="1">Casual</option>
                        
                        <option value="2">Earned</option>
                        
                        <option value="4">Maternity</option>
                        
                        <option value="5">Sick</option>
                                           
                    </select>                 
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
              <td>&nbsp;&nbsp;From</td><td>:</td><td><input name="from" id="from" placeholder="yyyy-mm-dd" value="<?php echo $rows01[3];?>" type="date"></td>
              <td>&nbsp;To</td><td>:</td><td><input name="to" id="to" placeholder="yyyy-mm-dd" value="<?php echo $rows01[4];?>" type="date"  onBlur="showHint(this.value)"></td>
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
      <div id="2nd"><?php echo $total_day;?></div>
      </td>
    </tr>
    
    <tr>
      <td>
      Total working days
      </td>
      
      <td>:</td>
      
      <td>
       <input name="TotalWorkingDays" id="TotalWorkingDays" value="<?php echo $rows01[5];?>" type="text">
      </td>
    </tr>
    
    
    <tr>
      <td>
      Re-joining date
      </td>
      
      <td>:</td>
      
      <td>
        <input name="RejoiningDate" id="RejoiningDate" placeholder="yyyy-mm-dd" value="<?php echo $rows01[6];?>" type="date">      </td>
    </tr>
    
    
    <tr>
      <td>
      Purpose of leave
      </td>
      
      <td>:</td>
      
      <td>
        <textarea name="PurposeOfLeave" id="PurposeOfLeave" cols="70" rows="5" onKeyDown="limitText(this.form.PurposeOfLeave,this.form.countdown1,1000);" 
        onKeyUp="limitText(this.form.PurposeOfLeave,this.form.countdown1,1000);"><?php echo $rows01[7];?></textarea>
       <br>
        <font size="2">Maximum characters: <span style="color:#008000; font-weight:900;">1000</span>.&nbsp; &nbsp;
        You have <input readonly type="text" name="countdown1" size="3" value="<?php echo $remain_pol;?>" style=" color:#F00; outline:none; border:none; border-style: none; font-weight:900; background-color:transparent;">characters left.</font>
      </td>
    </tr>
    
    <tr>
      <td>
      Address during leave
      </td>
      
      <td>:</td>
      
      <td>
        <textarea name="AdressDuringLeave" id="AdressDuringLeave" cols="70" rows="3" onKeyDown="limitText(this.form.AdressDuringLeave,this.form.countdown2,500);" 
        onKeyUp="limitText(this.form.AdressDuringLeave,this.form.countdown2,500);"><?php echo $rows01[8];?></textarea>
       <br>
        <font size="2">Maximum characters: <span style="color:#008000; font-weight:900;">500</span>.&nbsp; &nbsp;
        You have <input readonly type="text" name="countdown2" size="3" value="<?php echo $remain_adl;?>" style=" color:#F00; outline:none; border:none; border-style: none; font-weight:900; background-color:transparent;">characters left.</font>
      </td>
    </tr>
    
    
    <tr>
      <td colspan="3" height="50" style="color:#A60000;">
      During the leave job responsibility will be performed by (if applicable)
      </td>
    </tr>
    
    <tr>
      <td>
      Employee ID
      </td>
      
      <td>:</td>
      
      <td>
       <input name="resname" id="resname" value="<?php echo $rows01[9];?>" type="text" onkeyup="show(this.value)"><span id="3nd"><?php echo $rows02[1];?></span>
      </td>
    </tr>
    </tbody></table>
    
         <div align="center" style="min-height:25px; padding-top:30px; padding-bottom:10px;">
          <input type="hidden" value="<?php echo $rows01[11];?>" name="submittime"/>
         <input type="reset" name="reset" value="Reset">
         <input type="submit" id="submit" name="submit" value="Update">
         </div>  
    </form>
     </div>
</div><!--Page Area -->
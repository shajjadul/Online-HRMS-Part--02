
<style type="text/css">

#cont_implementation1{background-color:#EBEBED; width:100px; float:left; padding:5px; margin:1px; color:#333333; height:20px; text-align:center;}
#cont_implementation1:hover{background-color:#c9c9c9; width:100px; float:left; padding:5px; margin:1px; height:20px;text-align:center;}
#cont_implementation2{background-color:#F4F4F4; width:650px; float:left; padding:5px; margin:1px; height:20px;}
#cont_implementation2:hover{background-color:#EBEBED; width:650px; float:left; padding:5px; margin:1px; height:20px;}
#cont_implementation3{background-color:#F4F4F4; width:204px; float:left; padding:5px; margin:1px; height:20px;}
#cont_implementation3:hover{background-color:#EBEBED; width:204px; float:left; padding:5px; margin:1px; height:20px;}

/***/
#click-here01 a{font-family:Verdana, Arial, Helvetica, sans-serif; color:#222;text-decoration:none;font-size:12px;}
#click-here01 a:hover{font-weight:bold; font-size:12px; color:#666;text-decoration:none;}

</style>

<?php
	
	//$mktime=mktime()+6*3600;
	//$current_year=gmdate("Y-m-d",$mktime);
						   
	$month_array=array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
		
	   $result01=mysql_query("select * from holiday ORDER BY HoliDayDate ASC");
	   //$row01=mysql_num_rows($result01);
	
?>


<div style="width:1000px; min-height:500px;">
  <div style="width:990px; padding:10px 5px 10px 5px;">
  
  <div style=" width:990px; height:30px; text-align:center; background-color: #CEE7FF; ">
    <div style="padding:3px 0 0 15px; font-family: Tahoma, Geneva, sans-serif; font-weight:800; font-size:18px;">
          Holiday List 
    </div>
   </div>
  
   <div align="center" style="color:#008000; font-family:Tahoma, Geneva, sans-serif; font-size:12px;"><?php echo @$_GET['message'];?></div>
    <div>
        <div id="cont_implementation1" align="center" style="color:#CC0000; font-weight:900;"> Serial No.</div>
        <div id="cont_implementation2" align="center"> <p style="margin:0 0 0 20px; color:#CC0000; font-weight:900;">Description</p></div>
        <div id="cont_implementation3" align="center"> <p style="margin:0 0 0 20px; color:#CC0000; font-weight:900;">Date</p></div>
        <div style="clear:both;"></div>
    </div>
    
<?php
        $sl=0;
		while($field01=mysql_fetch_array($result01))
		{
	   $sl=$sl+1;
	   
     list($holi_y,$holi_m,$holi_d)=explode("-",$field01[2]);
	 $holi_month=$month_array[$holi_m];
	 $holidate=$holi_d." ".$holi_month." ".$holi_y;
?>
      <div>
        <div id="cont_implementation1" align="center"><?php echo $sl;?></div>
        <div id="cont_implementation2" align="center"> <p style="margin:0 0 0 10px;"><?php echo $field01[1];?></p></div>
        <div id="cont_implementation3" align="center"> <p style="margin:0 0 0 20px;"><?php echo $holidate;?></p></div>
        <div style="clear:both;"></div>
    </div>

<?php
		}
?>

  
  </div>
</div>
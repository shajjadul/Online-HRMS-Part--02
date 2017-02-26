<style type="text/css">
input[type="button"],#button
{
   font-weight:700;
   width:100px;
   height:30px;
   padding-left:0px;
   text-decoration:none;
   background-color:#FFD5D5;
   cursor:pointer;   
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}

</style>
<div align="center" style="width:1000; min-height:350px;  padding-top:100px;">
<?php
$id=$_GET['g'];
//$id='jXEppJlprv';
$result1=mysql_query("SELECT status FROM add_employee WHERE table_id='$id'");
list($status)=mysql_fetch_row($result1);
if($status==0)
{
//########### EDIT ADD EMPLOYEE ###############
	$table_name02="add_employee";
	$update_field02="status='1'";
	$identification02="table_id='$id'";
	$query->DynamicUpdate($table_name02,$update_field02,$identification02);
?>
<div style=" font-size:36px; font-family:Verdana, Geneva, sans-serif; color:#800040; font-weight:800;">
Congratulation!
</div>
<div style=" font-size:20px; font-family:Verdana, Geneva, sans-serif; color:#000; font-weight:800;">
Your employee account is activated. <br />
Please click on the 'Login' button below to login.
</div>
<div style="padding-top:50px;">
         <a id="button" href="index.php"><input type="button" name="login" value="Login"></a>
</div>
<?php	
}
else if($status==1)
{
?>
<div style=" font-size:36px; font-family:Verdana, Geneva, sans-serif; color:#800040; font-weight:800;">
Already verified.
</div>
<div style=" font-size:20px; font-family:Verdana, Geneva, sans-serif; color:#000; font-weight:800;">
Please click on the 'Login' button below to login.
</div>
<div style="padding-top:50px;">
         <a id="button" href="index.php"><input type="button" name="login" value="Login"></a>
</div>

<?php	
}
else
{
?>
<div style=" font-size:20px; font-family:Verdana, Geneva, sans-serif; color:#000; font-weight:800;">
<span style="color:#FF0000;">Some problem is happened. Please contact:</span><br />
Afroja Begum<br />
HR &amp; Admin Manager<br /> 
Mobile:01766666673<br />
</div>
<?php
}
?>
</div>


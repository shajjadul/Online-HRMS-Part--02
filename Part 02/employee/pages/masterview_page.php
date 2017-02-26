<style type="text/css">
ul.left_list {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 15px;
font-style: normal;
line-height: 2em;
font-weight: 700;
font-variant: normal;
text-transform: none;
color: #fff;
text-decoration: none;
text-indent: -2px;
list-style-position: outside;
list-style-image: url(sqpurple.gif);
list-style-type: square;
padding-left:15px;
margin:2px 2px 2px 5px;
cursor:pointer;
}
li:hover
{
	color:#F00;
}
a
{
	color:#FFFFFF;
	text-decoration:none;
}
a:hover
{
	color: #D9D900;
	text-decoration:none;
}

</style>
<div>
</div>
<div style="width:1000px; min-height:400px; background-color:#CCC;  background-image:url(../icon/wrap_mid_bg.png);">
   <div style="width:200px; min-height:400px; float:left;">
     <div style="width:196px; min-height:400px; margin:2px 2px 2px 2px;">
        <div style="margin-left:22px;">
			<?php
                $result01=mysql_query("SELECT * FROM emp_photo WHERE emp_id='$emp_id'");
                $rows01=mysql_fetch_array($result01);
				$result02=mysql_query("SELECT * FROM emp_personal_info WHERE emp_id='$emp_id'");
				$rows02=mysql_fetch_array($result02);
				$result03=mysql_query("SELECT * FROM add_employee WHERE emp_id='$emp_id'");
				$rows03=mysql_fetch_array($result03);
				
            ?>
         <a href="EditImage.php"><img style="border:1px solid #FFF;" src="../../image/<?php echo $rows01[2];?>" height="150" width="150" title="Click to Edit Image"/></a>
        </div>
        <div style="text-align:center; font-size:11px; font-weight:800; color:#FFF;  margin-top:5px;">
        <?php echo strtoupper($rows02[2]);?>
        </div>  
        <div style="text-align:center; font-weight:800; color:#FFF; border-bottom:1px solid #FFF;">
        <?php echo $rows03[5];?><br />        
        </div>  
        
        <div style="margin:0 0 0 5px;">
        
         <ul class="left_list">
         
         
           <li>
             <a style="color:#D9D900;" href="masterview.php">View Resume</a>
           </li>
           
           <li>
             <a href="ChangePassword.php">Change Password</a>
           </li>
           
         </ul>
       
        </div>  
         
     </div>
   
   </div>
   
   <div style="width:800px; min-height:400px; float:left; background-color: #fff;">
     <div style="width:796px; min-height:400px; margin:2px 2px 2px 2px;">
	   <?php
        include("masterview_content.php");
       ?>
     </div>
   </div>
   
   <div style="clear:both;"></div>
   
</div>


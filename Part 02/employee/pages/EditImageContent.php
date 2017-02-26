<style>
/*########################## CSS for Image preview ################################*/
#preview {
   /* background-color:#fff;*/
	background-image:url(ajax-loader.gif)
    display:block;
    float:left;
    width:200px;
	margin-top:5px;
	margin-right:5px;
}
.clear_both {
    clear:both;
}
#image_file {
    width:400px;
	background-color:#FFFFFF;
    border-radius:10px;
    -moz-border-radius:10px;
    -ms-border-radius:10px;
    -o-border-radius:10px;
    -webkit-border-radius:10px;

    border:1px solid #999;
    font-size:14pt;
    padding:5px 10px;
}
#image_file:hover
{
  color : #009;
  border : 1px solid #990000;
  font-weight:bold;
	
}
#upload_response
{
    color: #FF7171;
    font-size:12pt;
    font-style:italic;
}
#fileinfo,#error,#error2,#abort,#warnsize,#imgdim {
    color: #666;
    display:none;
    font-size:10pt;
    font-style:italic;
    margin-top:10px;
}
#error,#error2,#abort,#warnsize,#imgdim {
    color: #FF7171;
    display:none;
    font-size:10pt;
    font-style:italic;
    margin-top:10px;
}

/*##########################End CSS for Image preview ################################*/

#contactus input[type="submit"],input[type="reset"]
{
   width:130px;
   height:30px;
   font-weight:800;
   padding-left:0px;
   cursor:pointer;   
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}
#contactus input[type="submit"]:hover,input[type="reset"]:hover
{
   width:130px;
   height:30px;
   font-weight:800;
   color:#fff;
   border:1px solid #A6FFA6;
   background-color:#333;
   padding-left:0px;
   cursor:pointer;   
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}

</style>

<script type="text/javascript" src="js/image_preview.js"></script>
<?php
	$result02=mysql_query("SELECT * FROM emp_photo WHERE emp_id='$emp_id'");
    $rows02=mysql_fetch_array($result02);

?>
<div><!--Page Area -->
    <div style="padding:3px 0 3px 15px; background-color: #CEE7FF;  font-family: Tahoma, Geneva, sans-serif; font-weight:800; font-size:18px;">
          Edit Reference Form
    </div>
    
    <div style="border:1px solid #9DFF9D; min-height:350px; margin-top:2px;">
    
      <div style="padding:10px 3px 15px 3px;">
      <div align="center" style="color: #F00;  font-family:Tahoma, Geneva, sans-serif; font-size:12px;"><?php echo @$_GET['message'];?></div>
      <form  name="empinfoform" id='contactus' action="EditImageInsert.php" method="post" enctype="multipart/form-data" onsubmit="return emp_info()">
       <div style="min-height:300px">
       <!--Code for image preview-->
       <input type="hidden" name="image_name" value="<?php echo $rows02[2];?>" />    
       <div><input type="file" name="image_file" id="image_file" onchange="fileSelected();" /></div>
        <div id="upload_response">
        Size should not exceed 30KB.Dimension prefarable 300 X 300 px<br />
        <img src="../../image/<?php echo $rows02[2];?>" height="200" width="200"  border="0"/></div>
        <img id="preview" />
        <div id="fileinfo">
            <div id="filename"></div>
            <div id="filesize"></div>
            <div id="filetype"></div>
            <div id="filedim"></div>
        </div>
        <div id="error">You should select valid image files only!</div>
        <div id="error2">An error occurred while uploading the file</div>
        <div id="abort">The upload has been canceled by the user or the browser dropped the connection</div>
        <div id="warnsize">Sorry! Your image size more than 30KB</div>
        <!--<div id="imgdim">Big</div>-->
        <div style="clear:both;"></div>
       <!--Code for image preview End-->
         </div>
         
         <div align="center" style="min-height:25px; padding-top:30px; padding-bottom:10px;">
         <input type="submit" id="submit" name="submit" value="Update Picture">
         </div>  
        </form>
      </div>
    
    </div>

 
</div>

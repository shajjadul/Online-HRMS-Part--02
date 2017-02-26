<style>
#first-side-style01{ float:left; min-height:1px; min-width:138px; margin:2px 10px 2px 0;}
#second-side-style01{ float:left; min-height:1px; min-width:1px; margin-top:5px;}
.errorind{ color:red;}
span.ValidationErrors {
    display: inline-block;
    font-size: 12px;
    color: #D00;
    padding-left: 12px;
    font-style: italic;
	font-family:Verdana, Geneva, sans-serif;
}

#contactus #R_NAME1,#R_NAME2,#R_POS1,#R_POS2,#R_COMP1,#R_COMP2,#R_ADD1,#R_ADD2,#R_PHONE1,#R_PHONE2,#R_CELL1,#R_CELL2,#R_EMAIL1,#R_EMAIL2,#R_KNOW1,#R_KNOW2

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


#contactus #R_NAME1:focus,#R_NAME2:focus,#R_POS1:focus,#R_POS2:focus,#R_COMP1:focus,#R_COMP2:focus,#R_ADD1:focus,#R_ADD2:focus,#R_PHONE1:focus,#R_PHONE2:focus,#R_CELL1:focus,#R_CELL2:focus,#R_EMAIL1:focus,#R_EMAIL2:focus,#R_KNOW1:focus,#R_KNOW2:focus
{
  color : #009;
  border : 1px solid #990000;
  font-weight:bold;
}


#R_NAME1,#R_NAME2,#R_POS1,#R_POS2,#R_COMP1,#R_COMP2,#R_ADD1,#R_ADD2,#R_PHONE1,#R_PHONE2,#R_CELL1,#R_CELL2,#R_EMAIL1,#R_EMAIL2,#R_KNOW1,#R_KNOW2
{
  height:20px;
  width:250px;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}


#contactus input[type="submit"],input[type="reset"]
{
   width:100px;
   height:30px;
   padding-left:0px;
   cursor:pointer;   
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}
#contactus input[type="submit"]:hover,input[type="reset"]:hover
{
   width:100px;
   height:30px;
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

<script type="text/javascript" src="js/front_jquery_validate.js" > </script>
<script type="text/javascript" src="js/jquery.validate.js" > </script>
<script type="text/javascript" src="js/jquery.validation.functions.js" ></script>
        <script type="text/javascript">
            /* <![CDATA[ */
           jQuery(function(){
				
				 jQuery("#R_NAME1").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Enter name"
                });
				 jQuery("#R_POS1").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Enter designation"
                });
				 jQuery("#R_COMP1").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Enter organization"
                });
				 jQuery("#R_ADD1").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Enter mailing address"
                });
				 jQuery("#R_CELL1").validate({
                    expression: "if (VAL.match(/^[0-9-()+]{8,15}$/)) return true; else return false;",
                    message: "Enter valid cell no."
                });
				 jQuery("#R_EMAIL1").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Enter valid email"
                });
				 jQuery("#R_KNOW1").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Enter relation"
                });
				 jQuery("#R_NAME2").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Enter name"
                });
				 jQuery("#R_POS2").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Enter designation"
                });
				 jQuery("#R_COMP2").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Enter organization"
                });
				 jQuery("#R_ADD2").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Enter mailing address"
                });
				 jQuery("#R_CELL2").validate({
                    expression: "if (VAL.match(/^[0-9-()+]{8,15}$/)) return true; else return false;",
					// expression: "if (VAL.match(/^(?:\+?88)?01[15-9]\d{8}$/)) return true; else return false;",
                    message: "Enter valid cell no."
                });
				 jQuery("#R_EMAIL2").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Enter valid email"
                });
				 jQuery("#R_KNOW2").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Enter relation"
                });
				 jQuery("#emppass").validate({
                    expression: "if (VAL.match(/^[^\S ]{6,12}$/)) return true; else return false;",
                   // expression: "if (VAL.match(/^\S{6,}$/)) return true; else return false;",
                    message: "Enter password"
                });
				 jQuery("#reemppass").validate({
                   expression: "if (VAL) return true; else return false;",
                   message: "Retype password"
                });
								
				
            });
            /* ]]> */
        </script>  


<?php
	$result0601=mysql_query("SELECT * FROM emp_references WHERE emp_id='$emp_id' and position=1");
    $rows0601=mysql_fetch_array($result0601);
	$result0602=mysql_query("SELECT * FROM emp_references WHERE emp_id='$emp_id' and position=2");
    $rows0602=mysql_fetch_array($result0602);

?>
<div><!--Page Area -->
    <div style="padding:3px 0 3px 15px; background-color: #CEE7FF;  font-family: Tahoma, Geneva, sans-serif; font-weight:800; font-size:18px;">
          Edit Reference Form
    </div>
    
    <div style="border:1px solid #9DFF9D; min-height:230px; margin-top:2px;">
    
      <div style="padding:10px 3px 15px 3px;">
      <div align="center" style="color: #F00;  font-family:Tahoma, Geneva, sans-serif; font-size:12px;"><?php echo @$_GET['message'];?></div>
      <form  name="empinfoform" id='contactus' action="EditReferencesInsert.php" method="post" enctype="multipart/form-data" onsubmit="return emp_info()">
      <div>
          <table width="100%"><tbody>
          
            <tr>
              <td width="18%"></td>
              <td width="41%" style="color:#BC3030; font-weight:800;">Reference-I</td>
              <td width="41%" style="color:#BC3030; font-weight:800;">Reference-II</td>
            </tr>
            
            <tr>
              <td>Name<span class="errorind">*</span></td>
              <td>
              <input name="R_NAME1" class="text" id="R_NAME1" value="<?php echo $rows0601[2];?>"  maxlength="100" type="text">
              </td>
              <td><input name="R_NAME2" class="text" id="R_NAME2" value="<?php echo $rows0602[2];?>"  maxlength="100" type="text">
                </td>
            </tr>
            <tr>
              <td>Designation<span class="errorind">*</span></td>
              <td><input name="R_POS1" class="text" id="R_POS1" value="<?php echo $rows0601[3];?>"  maxlength="100" type="text">
                </td>
              <td><input name="R_POS2" class="text" id="R_POS2" value="<?php echo $rows0602[3];?>"  maxlength="100" type="text">
                </td>
            </tr>
            <tr>
              <td>Organization<span class="errorind">*</span></td>
              <td><input name="R_COMP1" class="text" id="R_COMP1" value="<?php echo $rows0601[4];?>"  maxlength="100" type="text">
                </td>
              <td><input name="R_COMP2" class="text" id="R_COMP2" value="<?php echo $rows0602[4];?>" maxlength="100" type="text">
                </td>
            </tr>
            <tr>
              <td>Mailing Address<span class="errorind">*</span></td>
              <td><input name="R_ADD1" class="text" id="R_ADD1" value="<?php echo $rows0601[5];?>"  maxlength="255" type="text">
                </td>
              <td><input name="R_ADD2" class="text" id="R_ADD2" value="<?php echo $rows0602[5];?>"  maxlength="255" type="text">
                </td>
            </tr>
            <tr>
              <td>Phone Number</td>
              <td><input name="R_PHONE1" class="text" id="R_PHONE1" value="<?php echo $rows0601[6];?>"  maxlength="50" type="text">
                </td>
              <td>
              <input name="R_PHONE2" class="text" id="R_PHONE2" value="<?php echo $rows0602[6];?>"  maxlength="50" type="text">
                  </td>
            </tr>
            <tr>
              <td>Cell Number<span class="errorind">*</span></td>
              <td><input name="R_CELL1" class="text" id="R_CELL1" value="<?php echo $rows0601[7];?>"  maxlength="50" type="text">
                </td>
              <td>
              <input name="R_CELL2" class="text" id="R_CELL2" value="<?php echo $rows0602[7];?>"  maxlength="50" type="text">
                  </td>
            </tr>
            <tr>
              <td>Email Address<span class="errorind">*</span></td>
              <td><input name="R_EMAIL1" class="text" id="R_EMAIL1" value="<?php echo $rows0601[8];?>"  maxlength="50" type="text">
                </td>
              <td><input name="R_EMAIL2" class="text" id="R_EMAIL2" value="<?php echo $rows0602[8];?>"  maxlength="50" type="text">
                </td>
            </tr>
            <tr>
              <td>Relation<span class="errorind">*</span></td>
              <td><input name="R_KNOW1" class="text" id="R_KNOW1" value="<?php echo $rows0601[9];?>"  maxlength="100" type="text">
                </td>
              <td><input name="R_KNOW2" class="text" id="R_KNOW2" value="<?php echo $rows0602[9];?>"  maxlength="100" type="text">
                </td>
            </tr>
          </tbody></table>
    </div>
     <div align="center" style="min-height:25px; padding-top:20px; padding-bottom:10px;">
     <input type="reset" name="reset" value="Reset">
     <input type="submit" id="submit" name="submit" value="Update">
     </div>  
        </form>
      </div>
    
    </div>

 
</div>

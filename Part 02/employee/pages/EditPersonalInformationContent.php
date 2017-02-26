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

#contactus #first_name,#father_name,#mother_name,#present_address,#permanent_address,#home_phone,#email,#birth_date,#nationality,#national_id_no,#religion,#marital_status,#gender,#blood_group
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

#contactus #first_name,#father_name,#mother_name,#present_address,#permanent_address,#home_phone,#email,#birth_date,#nationality,#national_id_no,#religion,#marital_status,#gender,#blood_group
{
  height:20px;
  width:350px;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
  
}
#contactus #religion,#marital_status,#gender,#blood_group
{
  height:25px;
  width:360px;
  
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


#contactus #first_name:focus,#father_name:focus,#mother_name:focus,#present_address:focus,#permanent_address:focus,#home_phone:focus,#email:focus,#birth_date:focus,#nationality:focus,#national_id_no:focus,#religion:focus,#marital_status:focus,#gender:focus,#blood_group:focus,
textarea:focus
{
  color : #009;
  border : 1px solid #990000;
  font-weight:bold;
}
</style>
<script type="text/javascript" src="js/front_jquery_validate.js" > </script>
<script type="text/javascript" src="js/jquery.validate.js" > </script>
<script type="text/javascript" src="js/jquery.validation.functions.js" ></script>
        <script type="text/javascript">
            /* <![CDATA[ */
           jQuery(function(){
                jQuery("#first_name").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your name"
                });
				
                jQuery("#father_name").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your father name"
                });
				
				
                jQuery("#mother_name").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your mother name"
                });
				
				
                jQuery("#present_address").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your present address"
                });
				
                jQuery("#permanent_address").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your permanent address"
                });
				
				jQuery("#home_phone").validate({
                    expression: "if (VAL.match(/^[0-9-()+]{8,15}$/)) return true; else return false;",
                    message: "Should be a valid cell number"
                });
                jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Should be a valid Email id"
                });
			   jQuery("#birth_date").validate({
                    expression: "if (VAL.match(/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/)) return true; else return false;",
                    message: "Should be a valid date format"
                });
			   jQuery("#nationality").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter your nationality"
                });
				 jQuery("#religion").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Please select your religion"
                });
				 jQuery("#marital_status").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Please select your marital status"
                });
				 jQuery("#gender").validate({
                   expression: "if (VAL) return true; else return false;",
                    message: "Please select your gender"
                });
				
               /* jQuery("#ValidCheckbox3").validate({
                    expression: "if (isChecked(SelfID)) return true; else return false;",
                    message: "Please check atleast one checkbox"
                });*/
				
            });
            /* ]]> */
        </script>  

<?php

	$result=mysql_query("SELECT * FROM add_employee WHERE emp_id='$emp_id'");
    $rows=mysql_fetch_array($result);
	$result01=mysql_query("SELECT * FROM emp_personal_info WHERE emp_id='$emp_id'");
    $rows01=mysql_fetch_array($result01);
	$month_array=array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");	
     list($emp_y,$emp_m,$emp_d)=explode("-",$rows01[9]);
	 $emp_month=$month_array[$emp_m];
	 $emp_birth_day=$emp_d." ".$emp_month." ".$emp_y;
	$religio_array=array("","Islam","Hinduism","Christianity","Buddhism","Atheism","Bahaism","Chinese Universist","Chinese Universist","Confucianism","Ethno-religionist","Jainism","Neo-religionist","Secular/Nonreligious","Shinto","Sikhism","Spiritism","Taoism","Zoroastrianism","Other");
    $marital_array=array("","Unmarried","Married","Engaged","Separated","Divorced","Widower","Other");
	$gender_array=array("","Male","Female","Other");
    $blood_array=array("","A+","B+","O+","AB+","A-","B-","O-","AB-");

?>
<div><!--Page Area -->
    <div style="padding:3px 0 3px 15px; background-color: #CEE7FF;  font-family: Tahoma, Geneva, sans-serif; font-weight:800; font-size:18px;">
          Edit Personal Information Form
    </div>
    
    <div style="border:1px solid #9DFF9D; min-height:230px; margin-top:2px;">
    
      <div style="padding:15px 15px 15px 15px;">
      <div align="center" style="color: #F00;  font-family:Tahoma, Geneva, sans-serif; font-size:12px;"><?php echo @$_GET['message'];?></div>
      <form  name="empinfoform" id='contactus' action="EditPersonalInformationInsert.php" method="post" enctype="multipart/form-data" onsubmit="return emp_info()">
        <div style="margin:10px 0 10px 10px; width:960px; min-height:400px;">
        <ul class="form-list" style="list-style:none;">
                    <li>
                        <div>
                            <div id="first-side-style01">
                                Name:<span class="errorind">*</span>
                            </div>
                            <div id="second-side-style01">
                                <input name="first_name" id="first_name" value="<?php echo $rows[1];?>" type="text">
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </li>
                    
                    <li>
                        <div>
                            <div id="first-side-style01">
                                Father Name:<span class="errorind">*</span>
                            </div>
                            <div id="second-side-style01">
                                <input name="father_name" id="father_name" value="<?php echo $rows01[3];?>" type="text">
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </li>
                    
                    
                    <li>
                        <div>
                            <div id="first-side-style01">
                                Mother Name:<span class="errorind">*</span>
                            </div>
                            <div id="second-side-style01">
                                <input name="mother_name" id="mother_name" value="<?php echo $rows01[4];?>" type="text">
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                    </li>
                    
					<li>
                         	<div>
                                <div id="first-side-style01">
                                  Present Address:<span class="errorind">*</span>
                                </div>
                                <div id="second-side-style01">
                              		<input class="input-text valid" id="present_address" name="present_address" value="<?php echo $rows01[5];?>" type="text">
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
                    
					<li>
                         	<div>
                                <div id="first-side-style01">
                                  Permanent Address:<span class="errorind">*</span>
                                </div>
                                <div id="second-side-style01">
                              		<input class="input-text valid" id="permanent_address" name="permanent_address" value="<?php echo $rows01[6];?>" type="text">
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
                    
					<li>
                         	<div>
                                <div id="first-side-style01">
                                   Cell No.:<span class="errorind">*</span>
                                </div>
                                <div id="second-side-style01">
                              		<input novalidate="novalidate" name="home_phone" id="home_phone" value="<?php echo $rows01[7];?>" class="elegroup input-small valid" type="text">
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
					<li>
                         	<div>
                                <div id="first-side-style01">
                                    E-mail:<span class="errorind">*</span>
                                </div>
                                <div id="second-side-style01">
                              		<input name="email" id="email" value="<?php echo $rows[3];?>" class="input-text email required valid" type="text">
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
                    
					<li>
                         	<div>
                                <div id="first-side-style01">
                                    Date of Birth:<span class="errorind">*</span>
                                </div>
                                <div id="second-side-style01">
                              		 <input  name="birth_date" id="birth_date" placeholder="yyyy-mm-dd" value="<?php echo $rows01[9];?>" type="date">
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
                    <li>
                            <div>
                                <div id="first-side-style01">
                                   Nationality:<span class="errorind">*</span>
                                </div>
                                <div id="second-side-style01">
                                <input  name="nationality" id="nationality" value="<?php echo $rows01[10];?>" type="text">
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
                    <li>
                            <div>
                                <div id="first-side-style01">
                                   National ID No.:
                                </div>
                                <div id="second-side-style01">
                                 <input  name="national_id_no" id="national_id_no" value="<?php echo $rows01[11];?>" type="text">	
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
                    <li>
                            <div>
                                <div id="first-side-style01">
                                   Religion:<span class="errorind">*</span>
                                </div>
                                <div id="second-side-style01">
                               <select name="religion" class="religion" id="religion">
                                        <option value="<?php echo $rows01[12];?>"selected="selected"><?php echo $religio_array[$rows01[12]];?></option>
                                        <option value="1" >Islam</option>
                                        <option value="2" >Hinduism</option>
                                        <option value="3" >Christianity</option>
                                        <option value="4" >Buddhism</option>
                                        <option value="5" >Atheism</option>
                                        <option value="6" >Bahaism</option>
                                        <option value="7" >Chinese Universist</option>
                                        <option value="8" >Confucianism</option>
                                        <option value="9" >Ethno-religionist</option>
                                        <option value="10" >Jainism</option>
                                        <option value="11" >Jewish</option>
                                        <option value="12" >Neo-religionist</option>
                                        <option value="13" >Secular/Nonreligious</option>
                                        <option value="14" >Shinto</option>
                                        <option value="15" >Sikhism</option>
                                        <option value="16" >Spiritism</option>
                                        <option value="17" >Taoism</option>
                                        <option value="18" >Zoroastrianism</option>
                                        <option value="19" >Other</option>
                                </select>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
                    
                    <li>
                            <div>
                                <div id="first-side-style01">
                                   	Marital Status:<span class="errorind">*</span>
                                </div>
                                <div id="second-side-style01">
                                         <select name="marital_status" class="marital_status" id="marital_status">
                                                <option value="<?php echo $rows01[13];?>" selected="selected"><?php echo $marital_array[$rows01[13]];?></option>
                                                <option value="1" >Unmarried</option>
                                                <option value="2" >Married</option>
                                                <option value="3" >Engaged</option>                                              
                                                <option value="4" >Separated</option>      
                                                <option value="5" >Divorced</option>                                              
                                                <option value="6" >Widower </option> 
                                                <option value="7">Others</option>
                                         </select>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
                    
                    <li>
                            <div>
                                <div id="first-side-style01">
                                   	Gender:<span class="errorind">*</span>
                                </div>
                                <div id="second-side-style01">
                                         <select name="gender" class="gender" id="gender">
                                                <option value="<?php echo $rows01[14];?>" selected="selected"><?php echo $gender_array[$rows01[14]];?></option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Others</option>
                                         </select>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
                    
                    
                    <li>
                            <div>
                                <div id="first-side-style01">
                                   Blood Group:
                                </div>
                                <div id="second-side-style01">
                               <select name="blood_group" class="blood_group" id="blood_group">
                                        <option value="<?php echo $rows01[15];?>" selected="selected"><?php echo $blood_array[$rows01[15]];?></option>
                                        <option value="1">A+</option>
                                        <option value="2">B+</option>
                                        <option value="3">O+</option>
                                        <option value="4">AB+</option>
                                        <option value="5">A-</option>
                                        <option value="6">B-</option>
                                        <option value="7">O-</option>
                                        <option value="8">AB-</option>
                                </select>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
					</li>
        </ul>
        </div>
                             <div align="center" style="min-height:25px; padding-top:20px; padding-bottom:10px;">
                             <input type="reset" name="reset" value="Reset">
                             <input type="submit" id="submit" name="submit" value="Update">
                             </div>  
        </form>
      </div>
    
    </div>

 
</div>

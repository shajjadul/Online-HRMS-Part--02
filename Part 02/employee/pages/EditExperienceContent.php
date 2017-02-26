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

#contactus #COMPANY1,#EXP_TYPE1,#EXP_AREA1,#EXP_POST1,#DEPT1,#UNIT1,#JOB_LOC1,#SUPER_NAME1,#SUPER_PHONE1,#SUPER_EMAIL1,#RESERVATION1,#EFROM_D1,#ETO_D1,#DUTY1,#ACHIEVE1,#CLOCATION1

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


#contactus #COMPANY1:focus,#EXP_TYPE1:focus,#EXP_AREA1:focus,#EXP_POST1:focus,#DEPT1:focus,#UNIT1:focus,#JOB_LOC1:focus,#SUPER_NAME1:focus,#SUPER_PHONE1:focus,#SUPER_EMAIL1:focus,#RESERVATION1:focus,#EFROM_D1:focus,#ETO_D1:focus,#DUTY1:focus,#ACHIEVE1:focus,#CLOCATION1:focus,
textarea:focus
{
  color : #009;
  border : 1px solid #990000;
  font-weight:bold;
}

#vatued td, th
{
border:1px solid black;
height:28px;
}
#vatued
{
width:100%;
border-collapse:collapse;
}
#sub_td
{
	border:0px;
}

#COMPANY1,#EXP_POST1,#DEPT1,#UNIT1,#JOB_LOC1,#SUPER_NAME1,#SUPER_PHONE1,#SUPER_EMAIL1,#EFROM_D1,#ETO_D1
{
  height:20px;
  width:246px;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}
#EXP_TYPE1,#RESERVATION1,#EXP_AREA1
{
  height:25px;
  width:253px;
  
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
	$result05=mysql_query("SELECT * FROM emp_experience WHERE emp_id='$emp_id'");
    $rows05=mysql_fetch_array($result05);
    $emr=strlen($rows05[15]);
	$remain_emr=500-$emr;
    $eoa=strlen($rows05[17]);	
	$remain_eoa=500-$eoa;
    $eka=strlen($rows05[16]);
	$remain_eka=500-$eka;
	
	$emp_type_array=array("","Part Time","Permanent","Contractual");
	$orga_type_array=array("1"=>"Advertising Agency","2"=>"Agro based firms (incl. Agro Processing/Seed/GM)","3"=>"Airline/GSA","4"=>"Architecture/Interior Design Firm","5"=>"Audit Firms /Tax Consultant","6"=>"Automobile Companies","7"=>"Banks","8"=>"BPO","9"=>"Buying House (Garments)","10"=>"Call Center","11"=>"Cement Industry","12"=>"Chemical Industries","13"=>"Clearing &amp; Forwarding (C&amp;F) Companies","14"=>"Computer Hardware/Network Companies","15"=>"Consulting Firms","16"=>"Cosmetics/Personal Care","17"=>"Design/Printing/Publishing","18"=>"Development Agencies","19"=>"Direct Selling/Marketing Service Company","20"=>"Distribution Companies/Wholesale","21"=>"Education (School &amp; Colleges)","22"=>"Education (Universities)","23"=>"Electronic Equipment/Home Appliances","24"=>"Embassies/Foreign Consulate","25"=>"Engineering Firms","26"=>"Event Management","27"=>"Fisheries","28"=>"Food (Packaged)/Beverage","29"=>"Freight forwarding","30"=>"Furniture Manufacturer","31"=>"Garments (Woven/Apparel/Knitting)","32"=>"Garments Accessories","33"=>"Government Organizations","34"=>"Group of Companies","35"=>"Hospitals/Clinic/Diagnostic Centre","36"=>"Hotels/Resorts","37"=>"Immigration &amp; Education Consultancy Service","38"=>"Indenting Firm","39"=>"Insurance","40"=>"Investment/Merchant Banking","41"=>"ISP","42"=>"IT Enabled Service","43"=>"Jute Goods/ Jute Yarn","44"=>"Law Firm","45"=>"Leasing","46"=>"Logistic/Courier/Air Express Companies","47"=>"Manpower Recruitment","48"=>"Manufacturing (FMCG)","49"=>"Manufacturing (Light Engineering &amp; Heavy Industry)","50"=>"Market Research Firms","51"=>"Media/Public Relation Companies","52"=>"Medical Equipment","53"=>"Mobile Accessories","54"=>"Multinational Companies","55"=>"Newspaper/Magazine","56"=>"NGOs","57"=>"Overseas Companies","58"=>"Packaging Industry","59"=>"Pharmaceutical/Medicine Companies","60"=>"Plastic/ Polymer Industry","61"=>"Poultry/Dairy/Veterinary","62"=>"Power Equipment/Generator/CNG","63"=>"Real Estate/ Developer","64"=>"Research Organization","65"=>"Restaurants","66"=>"Retail/Shops","67"=>"Security Service Company","68"=>"Share Brokerage/ Securities House","69"=>"Shipping","70"=>"Shrimp/Hatchery","71"=>"Software Companies","72"=>"Sweater Industry","73"=>"Tannery/Footwear","74"=>"Tea Company","75"=>"Telecommunication","76"=>"Textile (Spinning, Weaving, Knitting, Dyeing/Finishing)","77"=>"Tobacco","78"=>"Trading or Export/Import","79"=>"Training Institutes","80"=>"Travel Agents/Tour Operators","81"=>"Others");
	
	$month_array=array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");	
	
    list($from_y,$from_m,$from_d)=explode("-",$rows05[13]);
	$from_month=$month_array[$from_m];
	$serve_from=$from_d." ".$from_month." ".$from_y;
	
    list($till_y,$till_m,$till_d)=explode("-",$rows05[14]);
	$till_month=$month_array[$till_m];
	$serve_till=$till_d." ".$till_month." ".$till_y;

?>
<div><!--Page Area -->
    <div style="padding:3px 0 3px 15px; background-color: #CEE7FF;  font-family: Tahoma, Geneva, sans-serif; font-weight:800; font-size:18px;">
          Edit Experience Form
    </div>
    
    <div style="border:1px solid #9DFF9D; min-height:230px; margin-top:2px;">
    
      <div style="padding:10px 3px 15px 3px;">
      <div align="center" style="color: #F00;  font-family:Tahoma, Geneva, sans-serif; font-size:12px;"><?php echo @$_GET['message'];?></div>
      <form  name="empinfoform" id='contactus' action="EditExperienceInsert.php" method="post" enctype="multipart/form-data" onsubmit="return emp_info()">
      <div>
      <table border="0" cellpadding="3" cellspacing="0" width="100%">
      <tbody>
      <tr>
      <td colspan="4" class="rightmenu" align="center"><table style="border:0px;" border="0" width="100%">
        <tbody>
        <tr>
          <td align="left">Organization Name</td>
          <td align="left"><input name="COMPANY1" class="text" id="COMPANY1" value="<?php echo $rows05[2];?>" maxlength="100" type="text"></td>
          <td align="left">Type of Employment</td>
          <td align="left"><select class="text" name="EXP_TYPE1" id="EXP_TYPE1">
            <option value="<?php echo $rows05[3];?>" selected="selected"><?php echo $emp_type_array[$rows05[3]];?></option>
            <option value="">Select</option>
            <option value="1">Part Time</option>
            <option value="2">Permanent</option>
            <option value="3">Contractual</option>
          </select></td>
        </tr>
        <tr>
          <td align="left">Organization Type</td>
          <td align="left"><select class="text" name="EXP_AREA1" id="EXP_AREA1">
                                <option value="<?php echo $rows05[4];?>" selected="selected"><?php echo $orga_type_array[$rows05[4]];?></option>
                                <option value="">- One Select -</option>                  
                                <option value="1">Advertising Agency</option>        
                                <option value="2">Agro based firms (incl. Agro Processing/Seed/GM)</option>         
                                <option value="3">Airline/GSA</option>         
                                <option value="4">Architecture/Interior Design Firm</option>        
                                <option value="5">Audit Firms /Tax Consultant</option>         
                                <option value="6">Automobile Companies</option>        
                                <option value="7">Banks</option>         
                                <option value="8">BPO</option>         
                                <option value="9">Buying House (Garments)</option>         
                                <option value="10">Call Center</option>         
                                <option value="11">Cement Industry</option>        
                                <option value="12">Chemical Industries</option>        
                                <option value="13">Clearing &amp; Forwarding (C&amp;F) Companies</option>         
                                <option value="14">Computer Hardware/Network Companies</option>        
                                <option value="15">Consulting Firms</option>         
                                <option value="16">Cosmetics/Personal Care</option>        
                                <option value="17">Design/Printing/Publishing</option>    
                                <option value="18">Development Agencies</option>        
                                <option value="19">Direct Selling/Marketing Service Company</option>         
                                <option value="20">Distribution Companies/Wholesale</option>        
                                <option value="21">Education (School &amp; Colleges)</option>        
                                <option value="22">Education (Universities)</option>         
                                <option value="23">Electronic Equipment/Home Appliances</option>         
                                <option value="24">Embassies/Foreign Consulate</option>        
                                <option value="25">Engineering Firms</option>   
                                <option value="26">Event Management</option>    
                                <option value="27">Fisheries</option>        
                                <option value="28">Food (Packaged)/Beverage</option>         
                                <option value="29">Freight forwarding</option>        
                                <option value="30">Furniture Manufacturer</option>      
                                <option value="31">Garments (Woven/Apparel/Knitting)</option>         
                                <option value="32">Garments Accessories</option>         
                                <option value="33">Government Organizations</option>       
                                <option value="34">Group of Companies</option>     
                                <option value="35">Hospitals/Clinic/Diagnostic Centre</option>       
                                <option value="36">Hotels/Resorts</option>         
                                <option value="37">Immigration &amp; Education Consultancy Service</option>        
                                <option value="38">Indenting Firm</option>        
                                <option value="39">Insurance</option>         
                                <option value="40">Investment/Merchant Banking</option>       
                                <option value="41">ISP</option>        
                                <option value="42">IT Enabled Service</option>        
                                <option value="43">Jute Goods/ Jute Yarn</option>      
                                <option value="44">Law Firm</option>   
                                <option value="45">Leasing</option>     
                                <option value="46">Logistic/Courier/Air Express Companies</option>       
                                <option value="47">Manpower Recruitment</option>         
                                <option value="48">Manufacturing (FMCG)</option>         
                                <option value="49">Manufacturing (Light Engineering &amp; Heavy Industry)</option>        
                                <option value="50">Market Research Firms</option>         
                                <option value="51">Media/Public Relation Companies</option>        
                                <option value="52">Medical Equipment</option>        
                                <option value="53">Mobile Accessories</option>         
                                <option value="54">Multinational Companies</option>        
                                <option value="55">Newspaper/Magazine</option>        
                                <option value="56">NGOs</option>        
                                <option value="57">Overseas Companies</option>         
                                <option value="58">Packaging Industry</option>        
                                <option value="59">Pharmaceutical/Medicine Companies</option>         
                                <option value="60">Plastic/ Polymer Industry</option>        
                                <option value="61">Poultry/Dairy/Veterinary</option>         
                                <option value="62">Power Equipment/Generator/CNG</option>         
                                <option value="63">Real Estate/ Developer</option>        
                                <option value="64">Research Organization</option>        
                                <option value="65">Restaurants</option>         
                                <option value="66">Retail/Shops</option>     
                                <option value="67">Security Service Company</option>      
                                <option value="68">Share Brokerage/ Securities House</option>     
                                <option value="69">Shipping</option>        
                                <option value="70">Shrimp/Hatchery</option>     
                                <option value="71">Software Companies</option>      
                                <option value="72">Sweater Industry</option>       
                                <option value="73">Tannery/Footwear</option>   
                                <option value="74">Tea Company</option>  
                                <option value="75">Telecommunication</option>    
                                <option value="76">Textile (Spinning, Weaving, Knitting, Dyeing/Finishing)</option>     
                                <option value="77">Tobacco</option>        
                                <option value="78">Trading or Export/Import</option>       
                                <option value="79">Training Institutes</option>     
                                <option value="80">Travel Agents/Tour Operators</option>     
                                <option value="81">Others</option>
          </select></td>
          <td align="left">Position Held</td>
          <td align="left"><input name="EXP_POST1" class="text" id="EXP_POST1" value="<?php echo $rows05[5];?>" maxlength="100" type="text"></td>
        </tr>
        <tr>
          <td align="left">Department</td>
          <td align="left"><input name="DEPT1" class="text" id="DEPT1" value="<?php echo $rows05[6];?>" maxlength="100" type="text"></td>
          <td align="left">Unit</td>
          <td align="left"><input name="UNIT1" class="text" id="UNIT1" value="<?php echo $rows05[7];?>" maxlength="100" type="text"></td>
        </tr>
        <tr>
          <td align="left">Major responsibilities</td>
          <td align="left">
          <!--<textarea class="text" name="DUTY1" cols="20" rows="2" id="DUTY1" style="width:246px;"></textarea>-->
          
         <div>
            <textarea name="DUTY1" id="DUTY1" cols="20" rows="2" style="width:246px;" onKeyDown="limitText(this.form.DUTY1,this.form.countdown3,500);" 
            onKeyUp="limitText(this.form.DUTY1,this.form.countdown3,500);"><?php echo $rows05[15];?></textarea>
         </div>
         <div style="margin-top:-2px;">
            <font size="1">
            You have <input readonly type="text" name="countdown3" size="2" value="<?php echo $remain_emr;?>" style=" color:#F00; outline:none; border:none; border-style: none; font-weight:300; font-size:10px; background-color:transparent;">characters left.</font>
          </div>
          
          </td>
          <td align="left">Organization Address</td>
          <td align="left">
          <!--<textarea class="text" name="CLOCATION1" cols="20" rows="2" id="CLOCATION1" style="width:246px;"></textarea>-->
          
         <div>
            <textarea name="CLOCATION1" id="CLOCATION1" cols="20" rows="2" style="width:246px;" onKeyDown="limitText(this.form.CLOCATION1,this.form.countdown4,500);" 
            onKeyUp="limitText(this.form.CLOCATION1,this.form.countdown4,500);"><?php echo $rows05[17];?></textarea>
         </div>
         <div style="margin-top:-2px;">
            <font size="1">
            You have <input readonly type="text" name="countdown4" size="2" value="<?php echo $remain_eoa;?>" style=" color:#F00; outline:none; border:none; border-style: none; font-weight:300; font-size:10px; background-color:transparent;">characters left.</font>
          </div>
          
          </td>
        </tr>
        <tr>
          <td align="left">Job Location</td>
          <td align="left"><input name="JOB_LOC1" class="text" id="JOB_LOC1" value="<?php echo $rows05[8];?>" maxlength="50" type="text"></td>
          <td align="left">Key Achievement</td>
          <td align="left">
         <!-- <textarea class="text" name="ACHIEVE1" cols="20" rows="1" id="ACHIEVE1" style="width:246px;"></textarea>-->
         <div>
            <textarea name="ACHIEVE1" id="ACHIEVE1" cols="20" rows="2" style="width:246px;" onKeyDown="limitText(this.form.ACHIEVE1,this.form.countdown5,500);" 
            onKeyUp="limitText(this.form.ACHIEVE1,this.form.countdown5,500);"><?php echo $rows05[16];?></textarea>
         </div>
         <div style="margin-top:-2px;">
            <font size="1">
            You have <input readonly type="text" name="countdown5" size="2" value="<?php echo $remain_eka;?>" style=" color:#F00; outline:none; border:none; border-style: none; font-weight:300; font-size:10px; background-color:transparent;">characters left.</font>
          </div>
          </td>
        </tr>
        <tr>
          <td align="left">Name of Supervisor</td>
          <td align="left"><input name="SUPER_NAME1" class="text" id="SUPER_NAME1" value="<?php echo $rows05[9];?>" maxlength="50" type="text"></td>
          <td align="left">Supervisor&prime;s Contact Number</td>
          <td align="left"><input name="SUPER_PHONE1" class="text" id="SUPER_PHONE1" value="<?php echo $rows05[10];?>" maxlength="50" type="text"></td>
        </tr>
        <tr>
          <td align="left">Supervisor&prime;s Email</td>
          <td align="left"><input name="SUPER_EMAIL1" class="text" id="SUPER_EMAIL1" value="<?php echo $rows05[11];?>"  maxlength="50" type="text"></td>
          <td align="left">Any reservation contacting your employer</td>
          <td align="left"><select class="text" name="RESERVATION1" id="RESERVATION1">
             <option value="<?php echo $rows05[12];?>" selected="selected"><?php echo $rows05[12];?></option>
            <option value="">Select</option>
            <option value="Yes">Yes</option>
            <option value="N0">No</option>
          </select></td>
        </tr>
        <tr>
          <td align="left">Served From</td>
          <td align="left">
            <input name="EFROM_D1" class="text" id="EFROM_D1" placeholder="yyyy-mm-dd" value="<?php echo $rows05[13];?>" type="date">           
            </td>
          <td align="left">
                Served Till                 
           </td>
          <td align="left">
            <input name="ETO_D1" class="text" id="ETO_D1" placeholder="yyyy-mm-dd" value="<?php echo $rows05[14];?>" type="date">           
           </td>
        </tr>
      </tbody></table></td>
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

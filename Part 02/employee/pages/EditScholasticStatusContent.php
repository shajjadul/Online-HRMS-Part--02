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

#contactus #noe_ssc,#noe_hsc,#noe_bsc,#noe_msc,#gs_ssc,#gs_hsc,#gs_bsc,#gs_msc,#res_ssc,#res_hsc,#res_bsc,#res_msc,#gpa_ssc,#gpa_hsc,#gpa_bsc,#gpa_msc,#gpa_outof_ssc,#gpa_outof_hsc,#gpa_outof_bsc,#gpa_outof_msc,
#bu_ssc,#bu_hsc,#bu_bsc,#bu_msc,#pass_ssc,#pass_hsc,#pass_bsc,#pass_msc
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



#contactus #noe_ssc:focus,#noe_hsc:focus,#noe_bsc:focus,#noe_msc:focus,#gs_ssc:focus,#gs_hsc:focus,#gs_bsc:focus,#gs_msc:focus,#res_ssc:focus,#res_hsc:focus,#res_bsc:focus,#res_msc:focus,#gpa_ssc:focus,#gpa_hsc:focus,#gpa_bsc:focus,#gpa_msc:focus,#bu_ssc:focus,#bu_hsc:focus,#bu_bsc:focus,#bu_msc:focus,#pass_ssc:focus,#pass_hsc:focus,#pass_bsc:focus,#pass_msc:focus,#gpa_outof_ssc:focus,#gpa_outof_hsc:focus,#gpa_outof_bsc:focus,#gpa_outof_msc:focus
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
#noe_ssc,#noe_hsc,#noe_bsc,#noe_msc
{
  height:25px;
  width:170px;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}
#gs_ssc,#gs_hsc,#gs_bsc,#gs_msc
{
  height:25px;
  width:130px;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}
#res_ssc,#res_hsc,#res_bsc,#res_msc
{
  height:25px;
  width:65px;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   

}

#gpa_ssc,#gpa_hsc,#gpa_bsc,#gpa_msc
{
  height:16px;
  width:61px;
  text-align: center;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   

}

#gpa_outof_ssc,#gpa_outof_hsc,#gpa_outof_bsc,#gpa_outof_msc
{
  height:16px;
  width:61px;
  text-align: center;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   

}

#bu_ssc,#bu_hsc,#bu_bsc,#bu_msc
{
  height:25px;
  width:150px;
  
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   

}
#pass_ssc,#pass_hsc,#pass_bsc,#pass_msc
{
  height:25px;
  width:110px;
  
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

	$result0301=mysql_query("SELECT * FROM emp_scholastic_status WHERE emp_id='$emp_id' and emp_position=1");
    $rows0301=mysql_fetch_array($result0301);
    $noe_ssc_array=array("","SSC","Dakhil","O Level","Vocational","Equivalent");
    $gs_ssc_array=array("","Science","Humanities","Commerce","Business Studies","Others");
    $res_ssc_array=array("","First","Second","Third","A+","A","A-","B+","B","B-","C+","C","C-","D+","D","D-","Appreared","On-going");
    $bu_ssc_array=array("","Barishal Board","Chittagong Board","Comilla Board","Dhaka Board","Jessore Board","Madrasah Board","Rajshahi Board","Rangpur Board","Sylhet Board","Technical Board","Foreign Institute","Others");
	
	
	$result0302=mysql_query("SELECT * FROM emp_scholastic_status WHERE emp_id='$emp_id' and emp_position=2");
    $rows0302=mysql_fetch_array($result0302);
    $noe_hsc_array=array("","HSC","Alim","A Level","Diploma","Equivalent");
    $gs_hsc_array=array("","Science","Humanities","Commerce","Business Studies","Others");
    $res_hsc_array=array("","First","Second","Third","A+","A","A-","B+","B","B-","C+","C","C-","D+","D","D-","Appreared","On-going");
    $bu_hsc_array=array("","Barishal Board","Chittagong Board","Comilla Board","Dhaka Board","Jessore Board","Madrasah Board","Rajshahi Board","Rangpur Board","Sylhet Board","Technical Board","Foreign Institute","Others");
	
	
	$result0303=mysql_query("SELECT * FROM emp_scholastic_status WHERE emp_id='$emp_id' and emp_position=3");
    $rows0303=mysql_fetch_array($result0303);
	$noe_bsc_array=array("","BCom(Hons)","BSS(Hons)","BA(Hons)","BSc(Hons)","BSc.Ag(Hons)","BBA(Hons)","BBS(Hons)","B.Pharm(Hons)","LLB(Hons)","MBBS","Others(Hons)","BCom(Pass)","BSS(Pass)","BA(Pass)","BSc(Pass)","LLB(Pass)","Others(Pass)");
	$gs_bsc_array=array("1"=>"Accounting",
						"2"=>"Administration",
						"3"=>"Advertising",
						"4"=>"African Studies",
						"5"=>"Agribusiness",
						"6"=>"Agricultural Economics",
						"7"=>"Agricultural Education",
						"8"=>"Agricultural Engineering",
						"9"=>"Agriculture",
						"10"=>"American Studies",
						"11"=>"Ancient Studies",
						"12"=>"Animal Sciences",
						"13"=>"Anthropology",
						"14"=>"Archaeology",
						"15"=>"Architecture",
						"16"=>"Art History",
						"17"=>"Art and Design",
						"18"=>"Arts",
						"19"=>"Asian Studies",
						"20"=>"Astronomy",
						"21"=>"Aviation",
						"22"=>"Behavioral Sciences",
						"23"=>"Biochemistry",
						"24"=>"Biological Sciences",
						"25"=>"Biotechnology",
						"26"=>"Botany",
						"27"=>"Broadcast Engineering",
						"28"=>"Broadcast Journalism",
						"29"=>"Business",
						"30"=>"Business Administration Management",
						"31"=>"Business Management",
						"32"=>"Cellular Biology",
						"33"=>"Chemical Engineering",
						"34"=>"Chemistry",
						"35"=>"Child Development",
						"36"=>"Chinese Studies",
						"37"=>"Civil Engineering",
						"38"=>"Classics",
						"39"=>"Commerce",
						"40"=>"Communication",
						"41"=>"Communication Media",
						"42"=>"Comparative Literature",
						"43"=>"Computer Engineering",
						"44"=>"Computer Science",
						"45"=>"Consulting",
						"46"=>"Consumer Sciences",
						"47"=>"Creative Arts",
						"48"=>"Criminal Justice",
						"49"=>"Culinary Arts",
						"50"=>"Cultural Studies",
						"51"=>"Dairy Science",
						"52"=>"Dance",
						"53"=>"Dentistry",
						"54"=>"Earth Sciences",
						"55"=>"Ecology",
						"56"=>"Economic studies",
						"57"=>"Economics",
						"58"=>"Education",
						"59"=>"Electrical and Electronics Engineering",
						"60"=>"Engineering",
						"61"=>"English",
						"62"=>"English Teacher Education",
						"63"=>"Entomology",
						"64"=>"Environmental Engineering",
						"65"=>"Environmental Health",
						"66"=>"Environmental Studies",
						"67"=>"Ethnic Studies",
						"68"=>"European Studies",
						"69"=>"Family and Consumer Sciences",
						"70"=>"Fashion Merchandising",
						"71"=>"Film and Television Studies",
						"72"=>"Finance",

						"73"=>"Finance Accounting",
						"74"=>"Finance and Banking",
						"75"=>"Fine Arts",
						"76"=>"Food Science",
						"77"=>"Forestry",
						"78"=>"French",
						"79"=>"Gender and Diversity",
						"80"=>"Genetics",
						"81"=>"Geography",
						"82"=>"Geology",
						"83"=>"German",
						"84"=>"Gerontology",
						"85"=>"Graphic Arts",
						"86"=>"Greek",
						"87"=>"Health Science",
						"88"=>"Health Teacher Education",
						"89"=>"History",
						"90"=>"Horticulture Studies",
						"91"=>"Hospitality",
						"92"=>"Human Resources",
						"93"=>"Human Sciences",
						"94"=>"Humanities",
						"95"=>"Indian studies",
						"96"=>"Information Technology",
						"97"=>"Interior Design",
						"98"=>"International Business",
						"99"=>"Islamic Studies",
						"100"=>"Italian",
						"101"=>"Japanese",
						"102"=>"Jewish Studies",
						"103"=>"Journalism",
						"104"=>"Landscape Architecture",
						"105"=>"Languages",
						"106"=>"Latin",
						"107"=>"Law",
						"108"=>"Leadership Studies",
						"109"=>"Liberal Arts Sciences",
						"110"=>"Library Studies",
						"111"=>"Linguistics",
						"112"=>"Literature",
						"113"=>"Logistics",
						"114"=>"MBA",
						"115"=>"Malaysian Studies",
						"116"=>"Management",
						"117"=>"Management Information Systems",
						"118"=>"Marketing",
						"119"=>"Marketing Education",
						"120"=>"Materials Science",
						"121"=>"Mathematics",
						"122"=>"Mathematics Education",
						"123"=>"Mechanical Engineering",
						"124"=>"Mechatronics",
						"125"=>"Medical Dietetics",
						"126"=>"Medical Sciences",
						"127"=>"Medieval Studies",
						"128"=>"Microbiology",
						"129"=>"Military Studies",
						"130"=>"Mining Engineering",
						"131"=>"Museum Studies",
						"132"=>"Music",
						"133"=>"Music Performance",
						"134"=>"Music Teacher Education",
						"135"=>"Music Theory",
						"136"=>"Music Therapy",
						"137"=>"Nautical Studies",
						"138"=>"Near Eastern Studies",
						"139"=>"Nursing",
						"140"=>"Oceanography",
						"141"=>"Oncology",
						"142"=>"Paramedical Studies",
						"143"=>"Peace Studies",
						"144"=>"Pharmacy",
						"145"=>"Philosophy",
						"146"=>"Physical Education",
						"147"=>"Physical Sciences",
						"148"=>"Physical Therapy",
						"149"=>"Physics",
						"150"=>"Policy Management",
						"151"=>"Political Science",
						"152"=>"Poultry Science",
						"153"=>"Preschool Education",
						"154"=>"Primary education",
						"155"=>"Psychology",
						"156"=>"Public Health Education",
						"157"=>"Public Relations",
						"158"=>"Real Estate",
						"159"=>"Religious Studies",
						"160"=>"Retail Studies",
						"161"=>"Rhetorical Studies",
						"162"=>"Risk Management",
						"163"=>"Romance Languages",
						"164"=>"Russian Studies",
						"165"=>"Science",
						"166"=>"Science Teacher Education",
						"167"=>"Social Sciences",
						"168"=>"Social Studies",
						"169"=>"Sociology",
						"170"=>"Spanish",
						"171"=>"Special Education",
						"172"=>"Sport Administration",
						"173"=>"Sports",
						"174"=>"Statistics",
						"175"=>"Strategic Management",
						"176"=>"Studio Arts",
						"177"=>"Teacher Education",
						"178"=>"Theater Arts",
						"179"=>"Theology",
						"180"=>"Tourism",
						"181"=>"Training",
						"182"=>"Turf Management",
						"183"=>"Wilderness Management",
						"184"=>"Women's Studies",
						"185"=>"Writing",
						"186"=>"Zoology",
						"187"=>"Others Bachelors");
    $res_bsc_array=array("","First","Second","Third","A+","A","A-","B+","B","B-","C+","C","C-","D+","D","D-","Appreared","On-going");
    $bu_bsc_array=array("1"=>"Ahsanullah University of Science and Technology",
                        
                     "2"=>"America Bangladesh University",
                        
                     "3"=>"American International University Bangladesh",
                        
                     "4"=>"ASA University Bangladesh",
                        
                     "5"=>"Asian University for Women",
                        
                     "6"=>"Asian University of Bangladesh",
                        
                     "7"=>"Atish Dipankar University of Science &amp; Technology",
                        
                     "8"=>"Bangabandhu Sheikh Mujib Medical University",
                        
                     "9"=>"Bangabandhu Sheikh Mujibur Rahaman Science &amp; Technology University",
                        
                     "10"=>"Bangabandhu Sheikh Mujibur Rahman Agricultural University",
                        
                     "11"=>"Bangladesh Agricultural University, Mymensingh",
                        
                     "12"=>"Bangladesh Islami University",
                        
                     "13"=>"Bangladesh Open University",
                        
                     "14"=>"Bangladesh Textile University",
                        
                     "15"=>"Bangladesh University",
                        
                     "16"=>"Bangladesh University of Business &amp; Technology (BUBT)",
                        
                     "17"=>"Bangladesh University of Engineering &amp; Technology",
                        
                     "18"=>"Bangladesh University of Professionals",
                        
                     "19"=>"Barisal University",
                        
                     "20"=>"Begum Rokeya University",
                        
                     "21"=>"BGC Trust University Bangladesh, Chittagong",
                        
                     "22"=>"BRAC University",
                        
                     "23"=>"Central Women`s University",
                        
                     "24"=>"Chittagong University of Engineering &amp; Technology",
                        
                     "25"=>"Chittagong Veterinary and Animal Sciences University",
                        
                     "26"=>"City University",
                        
                     "27"=>"Comilla University",
                        
                     "28"=>"Daffodil International University",
                        
                     "29"=>"Darul Ihsan University",
                        
                     "30"=>"Dhaka International University",
                        
                     "31"=>"Dhaka University",
                        
                     "32"=>"Dhaka University of Engineering &amp; Technology",
                        
                     "33"=>"East Delta University, Chittagong",
                        
                     "34"=>"East West University",
                        
                     "35"=>"Eastern University",
                        
                     "36"=>"Gono Bishwabidyalay",
                        
                     "37"=>"Green University of Bangladesh",
                        
                     "38"=>"Hajee Mohammad Danesh Science &amp; Technology University",
                        
                     "39"=>"IBA, Dhaka University",
                        
                     "40"=>"IBAIS University",
                        
                     "41"=>"Independent University, Bangladesh",
                        
                     "42"=>"International Islamic University, Chittagong",
                        
                     "43"=>"International University of Business Agriculture &amp; Technology",
                        
                     "44"=>"Ishakha International University",
                        
                     "45"=>"Islamic University",
                        
                     "46"=>"Islamic University of Technology",
                        
                     "47"=>"Jagannath University",
                        
                     "48"=>"Jahangirnagar University",
                        
                     "49"=>"Jatiya Kabi Kazi Nazrul Islam University",
                        
                     "50"=>"Jessore Science &amp; Technology University",
                        
                     "51"=>"Khulna University",
                        
                     "52"=>"Khulna University of Engineering and Technology",
                        
                     "53"=>"Leading University, Sylhet",
                        
                     "54"=>"Manarat International University",
                        
                     "55"=>"Mawlana Bhashani Science &amp; Technology University",
                        
                     "56"=>"Metropolitan University, Sylhet",
                        
                     "57"=>"National University",
                        
                     "58"=>"Noakhali Science &amp; Technology University",
                        
                     "59"=>"Bangladesh Institute of Bank Management",
                        
                     "60"=>"North East University Bangladesh",
                        
                     "61"=>"North South University",
                        
                     "62"=>"Northern University Bangladesh",
                        
                     "63"=>"Pabna University of Science and Technology",
                        
                     "64"=>"Patuakhali Science And Technology University",
                        
                     "65"=>"Premier University, Chittagong",
                        
                     "66"=>"Presidency University",
                        
                     "67"=>"Prime University",
                        
                     "68"=>"Primeasia University",
                        
                     "69"=>"Queens University",
                        
                     "70"=>"Rajshahi University",
                        
                     "71"=>"Rajshahi University of Engineering &amp; Technology",
                        
                     "72"=>"Royal University of Dhaka",
                        
                     "73"=>"Shahjalal University of Science &amp; Technology",
                        
                     "74"=>"Shanto Mariam University of Creative Technology",
                        
                     "75"=>"Sher-e-Bangla Agricultural University",
                        
                     "76"=>"South Asian University	",
                        
                     "77"=>"Southeast University",
                        
                     "78"=>"Southern University of Bangladesh, Chittagong",
                        
                     "79"=>"Stamford University, Bangladesh",
                        
                     "80"=>"State University Of Bangladesh",
                        
                     "81"=>"Sylhet Agricultural University",
                        
                     "82"=>"Sylhet International University, Sylhet",
                        
                     "83"=>"The Millenium University",
                        
                     "84"=>"The Peoples University of Bangladesh",
                        
                     "85"=>"The University of Asia Pacific",
                        
                     "86"=>"United International University",
                        
                     "87"=>"University of Chittagong",
                        
                     "88"=>"University of Development Alternative",
                        
                     "89"=>"University of Information Technology &amp; Sciences",
                        
                     "90"=>"University of Liberal Arts Bangladesh",
                        
                     "91"=>"University of Science &amp; Technology, Chittagong",
                        
                     "92"=>"University of South Asia",
                        
                     "93"=>"Uttara University",
                        
                     "94"=>"Varendra University",
                        
                     "95"=>"Victoria University of Bangladesh",
                        
                     "96"=>"World University of Bangladesh",
                                    
                     "97"=>"Foreign Institute/University",
                     
                     "98"=>"Others");
					 
	$result0304=mysql_query("SELECT * FROM emp_scholastic_status WHERE emp_id='$emp_id' and emp_position=4");
    $rows0304=mysql_fetch_array($result0304);
    $noe_msc_array=array("","MBA","MBM","MBS","MCom","M.Pharm","MSc","MSc.Ag","MSS","MA","MS","LLM","Others");
	
	
	$result04=mysql_query("SELECT * FROM emp_extra_status WHERE emp_id='$emp_id'");
    $rows04=mysql_fetch_array($result04);
    $eca=strlen($rows04[2]);
	$remain_eca=1000-$eca;
    $osi=strlen($rows04[3]);	
	$remain_osi=1000-$osi;
	
	$result05=mysql_query("SELECT * FROM emp_experience WHERE emp_id='$emp_id'");
    $rows05=mysql_fetch_array($result05);
    $emr=strlen($rows05[15]);
	$remain_emr=500-$emr;
    $eoa=strlen($rows05[17]);	
	$remain_eoa=500-$eoa;
    $eka=strlen($rows05[16]);
	$remain_eka=500-$eka;

?>
<div><!--Page Area -->
    <div style="padding:3px 0 3px 15px; background-color: #CEE7FF;  font-family: Tahoma, Geneva, sans-serif; font-weight:800; font-size:18px;">
          Edit Scholastic Status Form
    </div>
    
    <div style="border:1px solid #9DFF9D; min-height:230px; margin-top:2px;">
    
      <div style="padding:10px 3px 15px 3px;">
      <div align="center" style="color: #F00;  font-family:Tahoma, Geneva, sans-serif; font-size:12px;"><?php echo @$_GET['message'];?></div>
      <form  name="empinfoform" id='contactus' action="EditScholasticStatusInsert.php" method="post" enctype="multipart/form-data" onsubmit="return emp_info()">
        <div>
        
          <div style="width:760px; min-height:150px;">
          
            <table id="vatued">
               <tr>
                 <th width="18%">Name of examination</th>
                 <th width="19%">Group/Subject</th>
                 <th width="11%">Result</th>
                 <th width="16%">Marks/<span style="font-size:11px;">GPA</span>&nbsp; - &nbsp;&nbsp;Out of</th>
                 <th width="24%">Board/University</th>
                 <th>Year of Passing</th>
               </tr>
               
               <tr>
                 <td>
                    <select style="visibility: visible;" name="noe_ssc" id="noe_ssc" class="noe_ssc">
                        <option selected="selected" value="<?php echo $rows0301[2];?>"><?php echo $noe_ssc_array[$rows0301[2]];?></option>
                        <option value="">Select SSC/Equivalent</option>
                        <option value="1">SSC</option>
                        <option value="2">Dakhil</option>
                        <option value="3">O Level</option>
                        <option value="4">Vocational</option>
                        <option value="4">Equivalent</option>
                    </select>	
                 </td>
                 <td>
                    <select class="gs_ssc" id="gs_ssc" name="gs_ssc">
                    
                        <option selected="selected" value="<?php echo $rows0301[3];?>"><?php echo $gs_ssc_array[$rows0301[3]];?></option>
                    
                        <option value="">--Select Group--</option>
                        
                        <option value="1">Science</option>
                        
                        <option value="2">Humanities</option>
                        
                        <option value="4">Commerce</option>
                        
                        <option value="5">Business Studies</option>
                                           
                        <option value="6">Others</option> 
                    
                    </select>                 
                 </td>
                 <td>
                    <select class="res_ssc" id="res_ssc" name="res_ssc">
                        <option selected="selected" value="<?php echo $rows0301[4];?>"><?php echo $res_ssc_array[$rows0301[4]];?></option>
                        <option value="">Select Result</option>
                    <optgroup label="Division/Class">
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                    </optgroup>
                        <optgroup label="Grade">
                        <option value="4">A+</option>
                        <option value="5">A</option>
                        <option value="6">A-</option>
                        <option value="7">B+</option>
                        <option value="8">B</option>
                        <option value="9-">B-</option>
                        <option value="10">C+</option
                        ><option value="11">C</option>
                        <option value="12">C-</option>
                        <option value="13">D+</option>
                        <option value="14">D</option>
                        <option value="15">D-</option>  
                    </optgroup>
                     <optgroup label="Others">
                        <option value="16">Appreared</option>
                        <option value="17">On-going</option>
                    </optgroup>
                    
                    </select>
                 
                 </td>
                 <td>
                 <table style="border:0px;"><tbody>
                 <tr>
                  <td style="border:0px;"><input name="gpa_ssc" id="gpa_ssc" value="<?php echo $rows0301[5];?>" type="text"></td>
                  <td style="border:0px;">-</td>
                  <td style="border:0px;"><input name="gpa_outof_ssc" id="gpa_outof_ssc" value="<?php echo $rows0301[6];?>" type="text"></td>
                 </tr>
                 </tbody></table>
                 </td>
                 <td>
                    <select class="bu_ssc" id="bu_ssc" name="bu_ssc">
                    
                        <option selected="selected" value="<?php echo $rows0301[7];?>"><?php echo $bu_ssc_array[$rows0301[7]];?></option>
                    
                        <option value="">-Select Board-</option>	
                        <option value="1">Barishal Board</option>
                        <option value="2">Chittagong Board</option>
                        <option value="3">Comilla Board</option>
                        <option value="4">Dhaka Board</option>
                        <option value="5">Jessore Board</option>
                        <option value="6">Madrasah Board</option>
                        <option value="7">Rajshahi Board</option>
                        <option value="8">Rangpur Board</option>
                        <option value="9">Sylhet Board</option>
                        <option value="10">Technical Board</option>
                        <option value="11">Foreign Institute</option>
                        <option value="12">Others</option>
                    
                    </select>                 
                  </td>
                 <td>
                    <select class="pass_ssc" id="pass_ssc" name="pass_ssc">
                    
                        <option selected="selected" value="<?php echo $rows0301[8];?>"><?php echo $rows0301[8];?></option>
                    
                        <option value="">-Select Year-</option>	
                         <?php
                         $year=date("Y");
                         for ($x=1970; $x<=$year; $x++)
                         {
                         print "<option value='$x'>$x</option>";
                         }
                        ?>
                    
                    </select>                 
                </td>
               </tr>
               
               
               <tr>
                 <td>
                    <select style="visibility: visible;" name="noe_hsc" id="noe_hsc" class="noe_hsc">
                        <option selected="selected" value="<?php echo $rows0302[2];?>"><?php echo $noe_hsc_array[$rows0302[2]];?></option>
                        <option value="">Select HSC/Equivalen</option>
                        <option value="1">HSC</option>
                        <option value="2">Alim</option>
                        <option value="3">A Level</option>
                        <option value="4">Diploma</option>
                        <option value="5">Equivalent</option>
                    </select>                 
                 </td>
                 <td>
                 
                    <select class="gs_hsc" id="gs_hsc" name="gs_hsc">
                    
                        <option selected="selected" value="<?php echo $rows0302[3];?>"><?php echo $gs_hsc_array[$rows0302[3]];?></option>
                    
                        <option value="">--Select Group--</option>
                        
                        <option value="1">Science</option>
                        
                        <option value="2">Humanities</option>
                        
                        <option value="4">Commerce</option>
                        
                        <option value="5">Business Studies</option>
                                           
                        <option value="6">Others</option> 
                    
                    </select>                 
                 
                 </td>
                 <td>
                 
                    <select class="res_hsc" id="res_hsc" name="res_hsc">
                    <option selected="selected" value="<?php echo $rows0302[4];?>"><?php echo $res_hsc_array[$rows0302[4]];?></option>
                    <option value="">Select Result</option>
                    <optgroup label="Division/Class">
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                    </optgroup>
                        <optgroup label="Grade">
                        <option value="4">A+</option>
                        <option value="5">A</option>
                        <option value="6">A-</option>
                        <option value="7">B+</option>
                        <option value="8">B</option>
                        <option value="9-">B-</option>
                        <option value="10">C+</option
                        ><option value="11">C</option>
                        <option value="12">C-</option>
                        <option value="13">D+</option>
                        <option value="14">D</option>
                        <option value="15">D-</option>  
                    </optgroup>
                     <optgroup label="Others">
                        <option value="4">Appreared</option>
                        <option value="5">On-going</option>
                    </optgroup>
                    
                    </select>
                 
                 </td>
                 <td>
                 <table style="border:0px;"><tbody>
                 <tr>
                  <td style="border:0px;"><input name="gpa_hsc" id="gpa_hsc" value="<?php echo $rows0302[5];?>" type="text"></td>
                  <td style="border:0px;">-</td>
                  <td style="border:0px;"><input name="gpa_outof_hsc" id="gpa_outof_hsc" value="<?php echo $rows0302[6];?>" type="text"></td>
                 </tr>
                 </tbody></table>
                 </td>
                 <td>
                    <select class="bu_hsc" id="bu_hsc" name="bu_hsc">
                        <option selected="selected" value="<?php echo $rows0302[7];?>"><?php echo $bu_hsc_array[$rows0302[7]];?></option>
                        <option value="">-Select Board-</option>	
                        <option value="1">Barishal Board</option>
                        <option value="2">Chittagong Board</option>
                        <option value="3">Comilla Board</option>
                        <option value="4">Dhaka Board</option>
                        <option value="5">Jessore Board</option>
                        <option value="6">Madrasah Board</option>
                        <option value="7">Rajshahi Board</option>
                        <option value="8">Rangpur Board</option>
                        <option value="9">Sylhet Board</option>
                        <option value="10">Technical Board</option>
                        <option value="11">Foreign Institute</option>
                        <option value="12">Others</option>
                    
                    </select>                 
                 </td>
                 <td>
                    <select class="pass_hsc" id="pass_hsc" name="pass_hsc">
                        <option selected="selected" value="<?php echo $rows0302[8];?>"><?php echo $rows0302[8];?></option>
                        <option value="">-Select Year-</option>	
                         <?php
                         $year=date("Y");
                         for ($x=1970; $x<=$year; $x++)
                         {
                         print "<option value='$x'>$x</option>";
                         }
                        ?>
                    
                    </select>                 
                </td>
               </tr>
               
               
               <tr>
                 <td>
                    <select name="noe_bsc" class="noe_bsc" id="noe_hsc">
                        <option selected="selected" value="<?php echo $rows0303[2];?>"><?php echo $noe_bsc_array[$rows0303[2]];?></option>
                        <option value="">Select Graduation</option>
                        <optgroup label="Bachelor(Hons)">
                            <option value="1">BCom</option>
                            <option value="2">BSS</option>
                            <option value="3">BA</option>
                            <option value="4">BSc</option>
                            <option value="5">BSc.Ag</option>
                            <option value="6">BBA</option>
                            <option value="7">BBS</option>
                            <option value="8">B.Pharm</option>
                            <option value="9">LLB</option>
                            <option value="10">MBBS</option>
                            <option value="11">Others</option>  
                          </optgroup>
                        <optgroup label="Bachelor(Pass)">
                            <option value="12">BCom</option>
                            <option value="13">BSS</option>
                            <option value="14">BA</option>
                            <option value="15">BSc</option>
                            <option value="16">LLB</option>
                            <option value="17">Others</option>  
                        </optgroup>
                                                                
                    </select>                
                 </td>
                 <td>
              <select class="gs_bsc" id="gs_bsc" name="gs_bsc">
                <option selected="selected" value="<?php echo $rows0303[3];?>"><?php echo $gs_bsc_array[$rows0303[3]];?></option>
                <option value="">--Select Subject--</option>              
                <option value="1">Accounting</option>
                <option value="2">Administration</option>
                <option value="3">Advertising</option>
                <option value="4">African Studies</option>
                <option value="5">Agribusiness</option>
                <option value="6">Agricultural Economics</option>
                <option value="7">Agricultural Education</option>
                <option value="8">Agricultural Engineering</option>
                <option value="9">Agriculture</option>
                <option value="10">American Studies</option>
                <option value="11">Ancient Studies</option>
                <option value="12">Animal Sciences</option>
                <option value="13">Anthropology</option>
                <option value="14">Archaeology</option>
                <option value="15">Architecture</option>
                <option value="16">Art History</option>
                <option value="17">Art and Design</option>
                <option value="18">Arts</option>
                <option value="19">Asian Studies</option>
                <option value="20">Astronomy</option>
                <option value="21">Aviation</option>
                <option value="22">Behavioral Sciences</option>
                <option value="23">Biochemistry</option>
                <option value="24">Biological Sciences</option>
                <option value="25">Biotechnology</option>
                <option value="26">Botany</option>
                <option value="27">Broadcast Engineering</option>
                <option value="28">Broadcast Journalism</option>
                <option value="29">Business</option>
                <option value="30">Business Administration Management</option>
                <option value="31">Business Management</option>
                <option value="32">Cellular Biology</option>
                <option value="33">Chemical Engineering</option>
                <option value="34">Chemistry</option>
                <option value="35">Child Development</option>
                <option value="36">Chinese Studies</option>
                <option value="37">Civil Engineering</option>
                <option value="38">Classics</option>
                <option value="39">Commerce</option>
                <option value="40">Communication</option>
                <option value="41">Communication Media</option>
                <option value="42">Comparative Literature</option>
                <option value="43">Computer Engineering</option>
                <option value="44">Computer Science</option>
                <option value="45">Consulting</option>
                <option value="46">Consumer Sciences</option>
                <option value="47">Creative Arts</option>
                <option value="48">Criminal Justice</option>
                <option value="49">Culinary Arts</option>
                <option value="50">Cultural Studies</option>
                <option value="51">Dairy Science</option>
                <option value="52">Dance</option>
                <option value="53">Dentistry</option>
                <option value="54">Earth Sciences</option>
                <option value="55">Ecology</option>
                <option value="56">Economic studies</option>
                <option value="57">Economics</option>
                <option value="58">Education</option>
                <option value="59">Electrical and Electronics Engineering</option>
                <option value="60">Engineering</option>
                <option value="61">English</option>
                <option value="62">English Teacher Education</option>


                <option value="63">Entomology</option>
                <option value="64">Environmental Engineering</option>
                <option value="65">Environmental Health</option>
                <option value="66">Environmental Studies</option>
                <option value="67">Ethnic Studies</option>
                <option value="68">European Studies</option>
                <option value="69">Family and Consumer Sciences</option>
                <option value="70">Fashion Merchandising</option>
                <option value="71">Film and Television Studies</option>
                <option value="72">Finance</option>
                <option value="73">Finance Accounting</option>
                <option value="74">Finance and Banking</option>
                <option value="75">Fine Arts</option>
                <option value="76">Food Science</option>
                <option value="77">Forestry</option>
                <option value="78">French</option>
                <option value="79">Gender and Diversity</option>
                <option value="80">Genetics</option>
                <option value="81">Geography</option>
                <option value="82">Geology</option>
                <option value="83">German</option>
                <option value="84">Gerontology</option>
                <option value="85">Graphic Arts</option>
                <option value="86">Greek</option>
                <option value="87">Health Science</option>
                <option value="88">Health Teacher Education</option>
                <option value="89">History</option>
                <option value="90">Horticulture Studies</option>
                <option value="91">Hospitality</option>
                <option value="92">Human Resources</option>
                <option value="93">Human Sciences</option>
                <option value="94">Humanities</option>
                <option value="95">Indian studies</option>
                <option value="96">Information Technology</option>
                <option value="97">Interior Design</option>
                <option value="98">International Business</option>
                <option value="99">Islamic Studies</option>
                <option value="100">Italian</option>
                <option value="101">Japanese</option>
                <option value="102">Jewish Studies</option>
                <option value="103">Journalism</option>
                <option value="104">Landscape Architecture</option>

                <option value="105">Languages</option>
                <option value="106">Latin</option>
                <option value="107">Law</option>
                <option value="108">Leadership Studies</option>
                <option value="109">Liberal Arts Sciences</option>
                <option value="110">Library Studies</option>
                <option value="111">Linguistics</option>
                <option value="112">Literature</option>
                <option value="113">Logistics</option>
                <option value="114">MBA</option>
                <option value="115">Malaysian Studies</option>
                <option value="116">Management</option>
                <option value="117">Management Information Systems</option>
                <option value="118">Marketing</option>
                <option value="119">Marketing Education</option>
                <option value="120">Materials Science</option>
                <option value="121">Mathematics</option>
                <option value="122">Mathematics Education</option>
                <option value="123">Mechanical Engineering</option>
                <option value="124">Mechatronics</option>
                <option value="125">Medical Dietetics</option>
                <option value="126">Medical Sciences</option>
                <option value="127">Medieval Studies</option>
                <option value="128">Microbiology</option>
                <option value="129">Military Studies</option>
                <option value="130">Mining Engineering</option>
                <option value="131">Museum Studies</option>
                <option value="132">Music</option>
                <option value="133">Music Performance</option>
                <option value="134">Music Teacher Education</option>
                <option value="135">Music Theory</option>
                <option value="136">Music Therapy</option>
                <option value="137">Nautical Studies</option>
                <option value="138">Near Eastern Studies</option>
                <option value="139">Nursing</option>
                <option value="140">Oceanography</option>
                <option value="141">Oncology</option>
                <option value="142">Paramedical Studies</option>
                <option value="143">Peace Studies</option>
                <option value="144">Pharmacy</option>
                <option value="145">Philosophy</option>
                <option value="146">Physical Education</option>
                <option value="147">Physical Sciences</option>
                <option value="148">Physical Therapy</option>
                <option value="149">Physics</option>
                <option value="150">Policy Management</option>
                <option value="151">Political Science</option>
                <option value="152">Poultry Science</option>
                <option value="153">Preschool Education</option>
                <option value="154">Primary education</option>
                <option value="155">Psychology</option>
                <option value="156">Public Health Education</option>
                <option value="157">Public Relations</option>
                <option value="158">Real Estate</option>
                <option value="159">Religious Studies</option>
                <option value="160">Retail Studies</option>
                <option value="161">Rhetorical Studies</option>
                <option value="162">Risk Management</option>
                <option value="163">Romance Languages</option>
                <option value="164">Russian Studies</option>
                <option value="165">Science</option>
                <option value="166">Science Teacher Education</option>
                <option value="167">Social Sciences</option>
                <option value="168">Social Studies</option>
                <option value="169">Sociology</option>
                <option value="170">Spanish</option>
                <option value="171">Special Education</option>
                <option value="172">Sport Administration</option>
                <option value="173">Sports</option>
                <option value="174">Statistics</option>
                <option value="175">Strategic Management</option>
                <option value="176">Studio Arts</option>
                <option value="177">Teacher Education</option>
                <option value="178">Theater Arts</option>
                <option value="179">Theology</option>
                <option value="180">Tourism</option>
                <option value="181">Training</option>
                <option value="182">Turf Management</option>
                <option value="183">Wilderness Management</option>
                <option value="184">Women's Studies</option>
                <option value="185">Writing</option>
                <option value="186">Zoology</option>
                <option value="187">Others Bachelors</option>
              </select>                 
                 </td>
                 <td>
                 
                    <select class="res_bsc" id="res_bsc" name="res_bsc">
                    <option selected="selected" value="<?php echo $rows0303[4];?>"><?php echo $res_bsc_array[$rows0303[4]];?></option>
                        <option value="">Select Result</option>
                    <optgroup label="Division/Class">
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                    </optgroup>
                        <optgroup label="Grade">
                        <option value="4">A+</option>
                        <option value="5">A</option>
                        <option value="6">A-</option>
                        <option value="7">B+</option>
                        <option value="8">B</option>
                        <option value="9-">B-</option>
                        <option value="10">C+</option
                        ><option value="11">C</option>
                        <option value="12">C-</option>
                        <option value="13">D+</option>
                        <option value="14">D</option>
                        <option value="15">D-</option>  
                    </optgroup>
                     <optgroup label="Others">
                        <option value="4">Appreared</option>
                        <option value="5">On-going</option>
                    </optgroup>
                    
                    </select>
                 
                 </td>
                 <td>
                 <table style="border:0px;"><tbody>
                 <tr>
                  <td style="border:0px;"><input name="gpa_bsc" id="gpa_bsc" value="<?php echo $rows0303[5];?>" type="text"></td>
                  <td style="border:0px;">-</td>
                  <td style="border:0px;"><input name="gpa_outof_bsc" id="gpa_outof_bsc" value="<?php echo $rows0303[6];?>" type="text"></td>
                 </tr>
                 </tbody></table>
                 </td>
                 <td>
                 <select class="bu_bsc" id="bu_bsc" name="bu_bsc">
                 
                    <option selected="selected" value="<?php echo $rows0303[7];?>"><?php echo $bu_bsc_array[$rows0303[7]];?></option>
                     
                    <option value="">-Select University-</option>								
                                
                     <option value="1">Ahsanullah University of Science and Technology</option>
                        
                     <option value="2">America Bangladesh University</option>
                        
                     <option value="3">American International University Bangladesh</option>
                        
                     <option value="4">ASA University Bangladesh</option>
                        
                     <option value="5">Asian University for Women</option>
                        
                     <option value="6">Asian University of Bangladesh</option>
                        
                     <option value="7">Atish Dipankar University of Science &amp; Technology</option>
                        
                     <option value="8">Bangabandhu Sheikh Mujib Medical University</option>
                        
                     <option value="9">Bangabandhu Sheikh Mujibur Rahaman Science &amp; Technology University</option>
                        
                     <option value="10">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option>
                        
                     <option value="11">Bangladesh Agricultural University, Mymensingh</option>
                        
                     <option value="12">Bangladesh Islami University</option>
                        
                     <option value="13">Bangladesh Open University</option>
                        
                     <option value="14">Bangladesh Textile University</option>
                        
                     <option value="15">Bangladesh University</option>
                        
                     <option value="16">Bangladesh University of Business &amp; Technology (BUBT)</option>
                        
                     <option value="17">Bangladesh University of Engineering &amp; Technology</option>
                        
                     <option value="18">Bangladesh University of Professionals</option>
                        
                     <option value="19">Barisal University</option>
                        
                     <option value="20">Begum Rokeya University</option>
                        
                     <option value="21">BGC Trust University Bangladesh, Chittagong</option>
                        
                     <option value="22">BRAC University</option>
                        
                     <option value="23">Central Women`s University</option>
                        
                     <option value="24">Chittagong University of Engineering &amp; Technology</option>
                        
                     <option value="25">Chittagong Veterinary and Animal Sciences University</option>
                        
                     <option value="26">City University</option>
                        
                     <option value="27">Comilla University</option>
                        
                     <option value="28">Daffodil International University</option>
                        
                     <option value="29">Darul Ihsan University</option>
                        
                     <option value="30">Dhaka International University</option>
                        
                     <option value="31">Dhaka University</option>
                        
                     <option value="32">Dhaka University of Engineering &amp; Technology</option>
                        
                     <option value="33">East Delta University, Chittagong</option>
                        
                     <option value="34">East West University</option>
                        
                     <option value="35">Eastern University</option>
                        
                     <option value="36">Gono Bishwabidyalay</option>
                        
                     <option value="37">Green University of Bangladesh</option>
                        
                     <option value="38">Hajee Mohammad Danesh Science &amp; Technology University</option>
                        
                     <option value="39">IBA, Dhaka University</option>
                        
                     <option value="40">IBAIS University</option>
                        
                     <option value="41">Independent University, Bangladesh</option>
                        
                     <option value="42">International Islamic University, Chittagong</option>
                        
                     <option value="43">International University of Business Agriculture &amp; Technology</option>
                        
                     <option value="44">Ishakha International University</option>
                        
                     <option value="45">Islamic University</option>
                        
                     <option value="46">Islamic University of Technology</option>
                        
                     <option value="47">Jagannath University</option>
                        
                     <option value="48">Jahangirnagar University</option>
                        
                     <option value="49">Jatiya Kabi Kazi Nazrul Islam University</option>
                        
                     <option value="50">Jessore Science &amp; Technology University</option>
                        
                     <option value="51">Khulna University</option>
                        
                     <option value="52">Khulna University of Engineering and Technology</option>
                        
                     <option value="53">Leading University, Sylhet</option>
                        
                     <option value="54">Manarat International University</option>
                        
                     <option value="55">Mawlana Bhashani Science &amp; Technology University</option>
                        
                     <option value="56">Metropolitan University, Sylhet</option>
                        
                     <option value="57">National University</option>
                        
                     <option value="58">Noakhali Science &amp; Technology University</option>
                        
                     <option value="59">Bangladesh Institute of Bank Management</option>
                        
                     <option value="60">North East University Bangladesh</option>
                        
                     <option value="61">North South University</option>
                        
                     <option value="62">Northern University Bangladesh</option>
                        
                     <option value="63">Pabna University of Science and Technology</option>
                        
                     <option value="64">Patuakhali Science And Technology University</option>
                        
                     <option value="65">Premier University, Chittagong</option>
                        
                     <option value="66">Presidency University</option>
                        
                     <option value="67">Prime University</option>
                        
                     <option value="68">Primeasia University</option>
                        
                     <option value="69">Queens University</option>
                        
                     <option value="70">Rajshahi University</option>
                        
                     <option value="71">Rajshahi University of Engineering &amp; Technology</option>
                        
                     <option value="72">Royal University of Dhaka</option>
                        
                     <option value="73">Shahjalal University of Science &amp; Technology</option>
                        
                     <option value="74">Shanto Mariam University of Creative Technology</option>
                        
                     <option value="75">Sher-e-Bangla Agricultural University</option>
                        
                     <option value="76">South Asian University	</option>
                        
                     <option value="77">Southeast University</option>
                        
                     <option value="78">Southern University of Bangladesh, Chittagong</option>
                        
                     <option value="79">Stamford University, Bangladesh</option>
                        
                     <option value="80">State University Of Bangladesh</option>
                        
                     <option value="81">Sylhet Agricultural University</option>
                        
                     <option value="82">Sylhet International University, Sylhet</option>
                        
                     <option value="83">The Millenium University</option>
                        
                     <option value="84">The Peoples University of Bangladesh</option>
                        
                     <option value="85">The University of Asia Pacific</option>
                        
                     <option value="86">United International University</option>
                        
                     <option value="87">University of Chittagong</option>
                        
                     <option value="88">University of Development Alternative</option>
                        
                     <option value="89">University of Information Technology &amp; Sciences</option>
                        
                     <option value="90">University of Liberal Arts Bangladesh</option>
                        
                     <option value="91">University of Science &amp; Technology, Chittagong</option>
                        
                     <option value="92">University of South Asia</option>
                        
                     <option value="93">Uttara University</option>
                        
                     <option value="94">Varendra University</option>
                        
                     <option value="95">Victoria University of Bangladesh</option>
                        
                     <option value="96">World University of Bangladesh</option>
                                    
                     <option value="97">Foreign Institute/University</option>
                     
                     <option value="98">Others</option>
                
                 </select>                  
                 
                 </td>
                 <td>
                    <select class="pass_bsc" id="pass_bsc" name="pass_bsc">
                    <option selected="selected" value="<?php echo $rows0303[8];?>"><?php echo $rows0303[8];?></option>
                        <option value="">-Select Year-</option>	
                         <?php
                         $year=date("Y");
                         for ($x=1970; $x<=$year; $x++)
                         {
                         print "<option value='$x'>$x</option>";
                         }
                        ?>
                    
                    </select>                 
                </td>
               </tr>
               
               
               <tr>
                 <td>
                    <select name="noe_msc" class="noe_msc" id="noe_msc">
                        <option selected="selected" value="<?php echo $rows0304[2];?>"><?php echo $noe_msc_array[$rows0304[2]];?></option>
                         <option value="">Select Post Graduation</option>
                         <option value="1">MBA</option>
                         <option value="2">MBM</option>
                         <option value="3">MBS</option>
                         <option value="4">MCom</option>
                         <option value="5">M.Pharm</option>
                         <option value="6">MSc</option>
                         <option value="7">MSc.Ag</option>
                         <option value="8">MSS</option>
                         <option value="9">MA</option>
                         <option value="10">MS</option>
                         <option value="11">LLM</option>
                         <option value="12">Others</option> 
                                                                
                    </select>                 
                 </td>
                 <td>
              <select class="gs_msc" id="gs_msc" name="gs_msc">
                <option selected="selected" value="<?php echo $rows0304[3];?>"><?php echo $gs_bsc_array[$rows0304[3]];?></option>
                <option value="">--Select Subject--</option>              
                <option value="1">Accounting</option>
                <option value="2">Administration</option>
                <option value="3">Advertising</option>
                <option value="4">African Studies</option>
                <option value="5">Agribusiness</option>
                <option value="6">Agricultural Economics</option>
                <option value="7">Agricultural Education</option>
                <option value="8">Agricultural Engineering</option>
                <option value="9">Agriculture</option>
                <option value="10">American Studies</option>
                <option value="11">Ancient Studies</option>
                <option value="12">Animal Sciences</option>
                <option value="13">Anthropology</option>
                <option value="14">Archaeology</option>
                <option value="15">Architecture</option>
                <option value="16">Art History</option>
                <option value="17">Art and Design</option>
                <option value="18">Arts</option>
                <option value="19">Asian Studies</option>
                <option value="20">Astronomy</option>
                <option value="21">Aviation</option>
                <option value="22">Behavioral Sciences</option>
                <option value="23">Biochemistry</option>
                <option value="24">Biological Sciences</option>
                <option value="25">Biotechnology</option>
                <option value="26">Botany</option>
                <option value="27">Broadcast Engineering</option>
                <option value="28">Broadcast Journalism</option>
                <option value="29">Business</option>
                <option value="30">Business Administration Management</option>
                <option value="31">Business Management</option>
                <option value="32">Cellular Biology</option>
                <option value="33">Chemical Engineering</option>
                <option value="34">Chemistry</option>
                <option value="35">Child Development</option>
                <option value="36">Chinese Studies</option>
                <option value="37">Civil Engineering</option>
                <option value="38">Classics</option>
                <option value="39">Commerce</option>
                <option value="40">Communication</option>
                <option value="41">Communication Media</option>
                <option value="42">Comparative Literature</option>
                <option value="43">Computer Engineering</option>
                <option value="44">Computer Science</option>
                <option value="45">Consulting</option>
                <option value="46">Consumer Sciences</option>
                <option value="47">Creative Arts</option>
                <option value="48">Criminal Justice</option>
                <option value="49">Culinary Arts</option>
                <option value="50">Cultural Studies</option>
                <option value="51">Dairy Science</option>
                <option value="52">Dance</option>
                <option value="53">Dentistry</option>
                <option value="54">Earth Sciences</option>
                <option value="55">Ecology</option>
                <option value="56">Economic studies</option>
                <option value="57">Economics</option>
                <option value="58">Education</option>
                <option value="59">Electrical and Electronics Engineering</option>
                <option value="60">Engineering</option>
                <option value="61">English</option>
                <option value="62">English Teacher Education</option>
                <option value="63">Entomology</option>
                <option value="64">Environmental Engineering</option>
                <option value="65">Environmental Health</option>
                <option value="66">Environmental Studies</option>
                <option value="67">Ethnic Studies</option>
                <option value="68">European Studies</option>
                <option value="69">Family and Consumer Sciences</option>
                <option value="70">Fashion Merchandising</option>
                <option value="71">Film and Television Studies</option>
                <option value="72">Finance</option>
                <option value="73">Finance Accounting</option>
                <option value="74">Finance and Banking</option>
                <option value="75">Fine Arts</option>
                <option value="76">Food Science</option>
                <option value="77">Forestry</option>
                <option value="78">French</option>
                <option value="79">Gender and Diversity</option>
                <option value="80">Genetics</option>
                <option value="81">Geography</option>
                <option value="82">Geology</option>
                <option value="83">German</option>
                <option value="84">Gerontology</option>
                <option value="85">Graphic Arts</option>
                <option value="86">Greek</option>
                <option value="87">Health Science</option>
                <option value="88">Health Teacher Education</option>
                <option value="89">History</option>
                <option value="90">Horticulture Studies</option>
                <option value="91">Hospitality</option>
                <option value="92">Human Resources</option>
                <option value="93">Human Sciences</option>
                <option value="94">Humanities</option>
                <option value="95">Indian studies</option>
                <option value="96">Information Technology</option>
                <option value="97">Interior Design</option>
                <option value="98">International Business</option>
                <option value="99">Islamic Studies</option>
                <option value="100">Italian</option>
                <option value="101">Japanese</option>
                <option value="102">Jewish Studies</option>
                <option value="103">Journalism</option>
                <option value="104">Landscape Architecture</option>
                <option value="105">Languages</option>
                <option value="106">Latin</option>
                <option value="107">Law</option>
                <option value="108">Leadership Studies</option>
                <option value="109">Liberal Arts Sciences</option>
                <option value="110">Library Studies</option>
                <option value="111">Linguistics</option>
                <option value="112">Literature</option>
                <option value="113">Logistics</option>
                <option value="114">MBA</option>
                <option value="115">Malaysian Studies</option>
                <option value="116">Management</option>
                <option value="117">Management Information Systems</option>
                <option value="118">Marketing</option>
                <option value="119">Marketing Education</option>
                <option value="120">Materials Science</option>
                <option value="121">Mathematics</option>
                <option value="122">Mathematics Education</option>
                <option value="123">Mechanical Engineering</option>
                <option value="124">Mechatronics</option>
                <option value="125">Medical Dietetics</option>
                <option value="126">Medical Sciences</option>
                <option value="127">Medieval Studies</option>
                <option value="128">Microbiology</option>
                <option value="129">Military Studies</option>
                <option value="130">Mining Engineering</option>
                <option value="131">Museum Studies</option>
                <option value="132">Music</option>
                <option value="133">Music Performance</option>
                <option value="134">Music Teacher Education</option>
                <option value="135">Music Theory</option>
                <option value="136">Music Therapy</option>
                <option value="137">Nautical Studies</option>
                <option value="138">Near Eastern Studies</option>
                <option value="139">Nursing</option>
                <option value="140">Oceanography</option>
                <option value="141">Oncology</option>
                <option value="142">Paramedical Studies</option>
                <option value="143">Peace Studies</option>
                <option value="144">Pharmacy</option>
                <option value="145">Philosophy</option>
                <option value="146">Physical Education</option>
                <option value="147">Physical Sciences</option>
                <option value="148">Physical Therapy</option>
                <option value="149">Physics</option>
                <option value="150">Policy Management</option>
                <option value="151">Political Science</option>
                <option value="152">Poultry Science</option>
                <option value="153">Preschool Education</option>
                <option value="154">Primary education</option>
                <option value="155">Psychology</option>
                <option value="156">Public Health Education</option>
                <option value="157">Public Relations</option>
                <option value="158">Real Estate</option>
                <option value="159">Religious Studies</option>
                <option value="160">Retail Studies</option>
                <option value="161">Rhetorical Studies</option>
                <option value="162">Risk Management</option>
                <option value="163">Romance Languages</option>
                <option value="164">Russian Studies</option>
                <option value="165">Science</option>
                <option value="166">Science Teacher Education</option>
                <option value="167">Social Sciences</option>
                <option value="168">Social Studies</option>
                <option value="169">Sociology</option>
                <option value="170">Spanish</option>
                <option value="171">Special Education</option>
                <option value="172">Sport Administration</option>
                <option value="173">Sports</option>
                <option value="174">Statistics</option>
                <option value="175">Strategic Management</option>
                <option value="176">Studio Arts</option>
                <option value="177">Teacher Education</option>
                <option value="178">Theater Arts</option>
                <option value="179">Theology</option>
                <option value="180">Tourism</option>
                <option value="181">Training</option>
                <option value="182">Turf Management</option>
                <option value="183">Wilderness Management</option>
                <option value="184">Women's Studies</option>
                <option value="185">Writing</option>
                <option value="186">Zoology</option>
                <option value="187">Others Bachelors</option>
              </select>                 
                 </td>
                 <td>
                    <select class="res_msc" id="res_msc" name="res_msc">
                        <option selected="selected" value="<?php echo $rows0304[4];?>"><?php echo $res_bsc_array[$rows0304[4]];?></option>
                        <option value="">Select Result</option>
                    <optgroup label="Division/Class">
                        <option value="1">First</option>
                        <option value="2">Second</option>
                        <option value="3">Third</option>
                    </optgroup>
                        <optgroup label="Grade">
                        <option value="4">A+</option>
                        <option value="5">A</option>
                        <option value="6">A-</option>
                        <option value="7">B+</option>
                        <option value="8">B</option>
                        <option value="9-">B-</option>
                        <option value="10">C+</option
                        ><option value="11">C</option>
                        <option value="12">C-</option>
                        <option value="13">D+</option>
                        <option value="14">D</option>
                        <option value="15">D-</option>  
                    </optgroup>
                     <optgroup label="Others">
                        <option value="4">Appreared</option>
                        <option value="5">On-going</option>
                    </optgroup>
                    
                    </select>
                 </td>
                 <td>
                 <table style="border:0px;"><tbody>
                 <tr>
                  <td style="border:0px;"><input name="gpa_msc" id="gpa_msc" value="<?php echo $rows0304[5];?>" type="text"></td>
                  <td style="border:0px;">-</td>
                  <td style="border:0px;"><input name="gpa_outof_msc" id="gpa_outof_msc" value="<?php echo $rows0304[6];?>" type="text"></td>
                 </tr>
                 </tbody></table>
                 </td>
                 <td>
                 <select class="bu_msc" id="bu_msc" name="bu_msc">
                 
                    <option selected="selected" value="<?php echo $rows0304[7];?>"><?php echo $bu_bsc_array[$rows0304[7]];?></option>
                     
                    <option value="">-Select University-</option>								
                                
                     <option value="1">Ahsanullah University of Science and Technology</option>
                        
                     <option value="2">America Bangladesh University</option>
                        
                     <option value="3">American International University Bangladesh</option>
                        
                     <option value="4">ASA University Bangladesh</option>
                        
                     <option value="5">Asian University for Women</option>
                        
                     <option value="6">Asian University of Bangladesh</option>
                        
                     <option value="7">Atish Dipankar University of Science &amp; Technology</option>
                        
                     <option value="8">Bangabandhu Sheikh Mujib Medical University</option>
                        
                     <option value="9">Bangabandhu Sheikh Mujibur Rahaman Science &amp; Technology University</option>
                        
                     <option value="10">Bangabandhu Sheikh Mujibur Rahman Agricultural University</option>
                        
                     <option value="11">Bangladesh Agricultural University, Mymensingh</option>
                        
                     <option value="12">Bangladesh Islami University</option>
                        
                     <option value="13">Bangladesh Open University</option>
                        
                     <option value="14">Bangladesh Textile University</option>
                        
                     <option value="15">Bangladesh University</option>
                        
                     <option value="16">Bangladesh University of Business &amp; Technology (BUBT)</option>
                        
                     <option value="17">Bangladesh University of Engineering &amp; Technology</option>
                        
                     <option value="18">Bangladesh University of Professionals</option>
                        
                     <option value="19">Barisal University</option>
                        
                     <option value="20">Begum Rokeya University</option>
                        
                     <option value="21">BGC Trust University Bangladesh, Chittagong</option>
                        
                     <option value="22">BRAC University</option>
                        
                     <option value="23">Central Women`s University</option>
                        
                     <option value="24">Chittagong University of Engineering &amp; Technology</option>
                        
                     <option value="25">Chittagong Veterinary and Animal Sciences University</option>
                        
                     <option value="26">City University</option>
                        
                     <option value="27">Comilla University</option>
                        
                     <option value="28">Daffodil International University</option>
                        
                     <option value="29">Darul Ihsan University</option>
                        
                     <option value="30">Dhaka International University</option>
                        
                     <option value="31">Dhaka University</option>
                        
                     <option value="32">Dhaka University of Engineering &amp; Technology</option>
                        
                     <option value="33">East Delta University, Chittagong</option>
                        
                     <option value="34">East West University</option>
                        
                     <option value="35">Eastern University</option>
                        
                     <option value="36">Gono Bishwabidyalay</option>
                        
                     <option value="37">Green University of Bangladesh</option>
                        
                     <option value="38">Hajee Mohammad Danesh Science &amp; Technology University</option>
                        
                     <option value="39">IBA, Dhaka University</option>
                        
                     <option value="40">IBAIS University</option>
                        
                     <option value="41">Independent University, Bangladesh</option>
                        
                     <option value="42">International Islamic University, Chittagong</option>
                        
                     <option value="43">International University of Business Agriculture &amp; Technology</option>
                        
                     <option value="44">Ishakha International University</option>
                        
                     <option value="45">Islamic University</option>
                        
                     <option value="46">Islamic University of Technology</option>
                        
                     <option value="47">Jagannath University</option>
                        
                     <option value="48">Jahangirnagar University</option>
                        
                     <option value="49">Jatiya Kabi Kazi Nazrul Islam University</option>
                        
                     <option value="50">Jessore Science &amp; Technology University</option>
                        
                     <option value="51">Khulna University</option>
                        
                     <option value="52">Khulna University of Engineering and Technology</option>
                        
                     <option value="53">Leading University, Sylhet</option>
                        
                     <option value="54">Manarat International University</option>
                        
                     <option value="55">Mawlana Bhashani Science &amp; Technology University</option>
                        
                     <option value="56">Metropolitan University, Sylhet</option>
                        
                     <option value="57">National University</option>
                        
                     <option value="58">Noakhali Science &amp; Technology University</option>
                        
                     <option value="59">Bangladesh Institute of Bank Management</option>
                        
                     <option value="60">North East University Bangladesh</option>
                        
                     <option value="61">North South University</option>
                        
                     <option value="62">Northern University Bangladesh</option>
                        
                     <option value="63">Pabna University of Science and Technology</option>
                        
                     <option value="64">Patuakhali Science And Technology University</option>
                        
                     <option value="65">Premier University, Chittagong</option>
                        
                     <option value="66">Presidency University</option>
                        
                     <option value="67">Prime University</option>
                        
                     <option value="68">Primeasia University</option>
                        
                     <option value="69">Queens University</option>
                        
                     <option value="70">Rajshahi University</option>
                        
                     <option value="71">Rajshahi University of Engineering &amp; Technology</option>
                        
                     <option value="72">Royal University of Dhaka</option>
                        
                     <option value="73">Shahjalal University of Science &amp; Technology</option>
                        
                     <option value="74">Shanto Mariam University of Creative Technology</option>
                        
                     <option value="75">Sher-e-Bangla Agricultural University</option>
                        
                     <option value="76">South Asian University	</option>
                        
                     <option value="77">Southeast University</option>
                        
                     <option value="78">Southern University of Bangladesh, Chittagong</option>
                        
                     <option value="79">Stamford University, Bangladesh</option>
                        
                     <option value="80">State University Of Bangladesh</option>
                        
                     <option value="81">Sylhet Agricultural University</option>
                        
                     <option value="82">Sylhet International University, Sylhet</option>
                        
                     <option value="83">The Millenium University</option>
                        
                     <option value="84">The Peoples University of Bangladesh</option>
                        
                     <option value="85">The University of Asia Pacific</option>
                        
                     <option value="86">United International University</option>
                        
                     <option value="87">University of Chittagong</option>
                        
                     <option value="88">University of Development Alternative</option>
                        
                     <option value="89">University of Information Technology &amp; Sciences</option>
                        
                     <option value="90">University of Liberal Arts Bangladesh</option>
                        
                     <option value="91">University of Science &amp; Technology, Chittagong</option>
                        
                     <option value="92">University of South Asia</option>
                        
                     <option value="93">Uttara University</option>
                        
                     <option value="94">Varendra University</option>
                        
                     <option value="95">Victoria University of Bangladesh</option>
                        
                     <option value="96">World University of Bangladesh</option>
                                    
                     <option value="97">Foreign Institute/University</option>
                     
                     <option value="98">Others</option>
                
                 </select>                  
                 
                 </td>
                 <td>
                    <select class="pass_msc" id="pass_msc" name="pass_msc">
                    
                    <option selected="selected" value="<?php echo $rows0304[8];?>"><?php echo $rows0304[8];?></option>
                    
                        <option value="">-Select Year-</option>	
                         <?php
                         $year=date("Y");
                         for ($x=1970; $x<=$year; $x++)
                         {
                         print "<option value='$x'>$x</option>";
                         }
                        ?>
                    
                    </select>                 
                </td>
               </tr>
               
               
            </table>
                
         </div> 
         
         <div style="width:960px; min-height:130px; margin-top:25px; margin-bottom:10px;">
         
         <div style="float:left; width:400px; min-height:100px;">
          <div style="color: #9F0000;">EXTRA CURRICULAM ACTIVITIES</div>
          <div>
          
            <textarea name="extracurriculamactivities" cols="45" rows="8" onKeyDown="limitText(this.form.extracurriculamactivities,this.form.countdown1,1000);" 
            onKeyUp="limitText(this.form.extracurriculamactivities,this.form.countdown1,1000);"><?php echo $rows04[2];?></textarea>
           <br>
            <font size="2">Maximum characters: <span style="color:#008000; font-weight:900;">1000</span>.&nbsp; &nbsp;
            You have <input readonly type="text" name="countdown1" size="3" value="<?php echo $remain_eca;?>" style=" color:#F00; outline:none; border:none; border-style: none; font-weight:900; background-color:transparent;">characters left.</font>
          
          </div> 
          </div> 
          
         <div style="float:left; width:400px; min-height:100px;">
          <div style="color: #9F0000;">OTHER SKILLS &amp; INFORMATION</div>
          <div>
          
            <textarea name="otherskills" cols="45" rows="8" onKeyDown="limitText(this.form.otherskills,this.form.countdown2,1000);" 
            onKeyUp="limitText(this.form.otherskills,this.form.countdown2,1000);"><?php echo $rows04[3];?></textarea>
           <br>
            <font size="2">Maximum characters: <span style="color:#008000; font-weight:900;">1000</span>.&nbsp; &nbsp;
            You have <input readonly type="text" name="countdown2" size="3" value="<?php echo $remain_osi;?>" style=" color:#F00; outline:none; border:none; border-style: none; font-weight:900; background-color:transparent;">characters left.</font>
            
          </div> 
         </div>
         <div style="clear:both;"></div>
               
         </div>
</div>
     <div align="center" style="min-height:25px; padding-top:20px; padding-bottom:10px;">
     <input type="reset" name="reset" value="Reset">
     <input type="submit" id="submit" name="submit" value="Update">
     </div>  
        </form>
      </div>
    
    </div>

 
</div>

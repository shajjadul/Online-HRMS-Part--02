<style>
td
{
	font-family:Verdana, Geneva, sans-serif;
}
input[type="password"]
{
  height:20px;
  width:200px;
  font-family : Arial, Verdana, sans-serif;
  font-size: 0.8em;
  line-height:140%;
  color : #000; 
  padding : 3px; 
  border : 1px solid #999;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}
input[type="password"]:focus
{
  color : #009;
  border : 1px solid #990000;
  font-weight:bold;
}
input[type="submit"],#submit
{
   width:208px;
   height:30px;
   font-weight:700;
   padding-left:0px;
   cursor:pointer;   
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
   border-radius: 5px;   
}
input[type="submit"]:hover,#submit:hover
{
   width:208px;
   height:30px;
   font-weight:700;
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
<script type='text/javascript'>
	function ChangePass()
	{
		var s1=document.forms['PasswordForm']['CurrentPassword'].value
		var s2=document.forms['PasswordForm']['NewPassword'].value
		var s3=document.forms['PasswordForm']['ConfirmNewPassword'].value
		if (s1=='')
		{
		alert('Enter current password');
		
		document.forms['PasswordForm']['CurrentPassword'].style.background = 'Yellow';
		
		return false;
		}
		
		if (s2.length<6 || s2.length>15)
		{
		alert(' Password must be 6 to 15 characters long');
		
		document.forms['PasswordForm']['NewPassword'].style.background = 'Yellow';
		
		return false;
		}
		
		
		if (s3=='')
		{
		alert('Retype New Password');
		
		document.forms['PasswordForm']['ConfirmNewPassword'].style.background = 'Yellow';
		
		return false;
		}
		
		
		if (s2!='' && s2!=s3)
		{
		alert('Sorry! Password and Retype New Password do not match');
		
		document.forms['PasswordForm']['ConfirmNewPassword'].style.background = 'Yellow';
		
		return false;
		}
	
	
	}
</script>

<div><!--Page Area -->
    <div style="padding:3px 0 3px 15px; background-color: #CEE7FF;  font-family: Tahoma, Geneva, sans-serif; font-weight:800; font-size:18px;">
          Change Password
    </div>
    
    <div style="border:1px solid #9DFF9D; min-height:230px; margin-top:2px;">
    
      <div style="padding:15px 15px 15px 15px;">
      <div align="center" style="color: #F00;  font-family:Tahoma, Geneva, sans-serif; font-size:12px;"><?php echo @$_GET['message'];?></div>
      <form name="PasswordForm" method="post" action="ChangePasswordInsert.php" onsubmit="return ChangePass()">
        <table cellspacing="10"> 
          <tr>
            <td>Current Password</td> <td width="5%">:</td> <td><input name="CurrentPassword" type="password" maxlength="15"></td>
          </tr>
          <tr>
            <td>New Password</td> <td>:</td> <td><input name="NewPassword" type="password" maxlength="15"></td>
          </tr>
          <tr>
            <td>Retype New Password</td> <td>:</td> <td><input name="ConfirmNewPassword" type="password" maxlength="15"></td>
          </tr>
          <tr>
            <td></td> <td></td> <td><input type="submit" id="submit" name="submit" value="Update Password"></td>
          </tr>
        </table>
        </form>
      </div>
    
    </div>

 
</div>

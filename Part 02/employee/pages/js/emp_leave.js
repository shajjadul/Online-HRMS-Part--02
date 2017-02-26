
var xmlhttp
var id
function showHint(id)
{
	//var student_id=document.forms[0].name_hall.value;
	var leave_from=document.forms["leavapp"]["from"].value
//document.write(id);
xmlhttp=GetXmlHttpObject();
if (xmlhttp==null)
  {
  alert ("Your browser does not support XMLHTTP!");
  return;
  }

var url="js_emp_leave.php";
var data_send=url+"?leave_to="+id+"&leave_from="+leave_from;
xmlhttp.onreadystatechange=stateChanged;
xmlhttp.open("GET",data_send,true);
xmlhttp.send(data_send);

}

function stateChanged()
{
if (xmlhttp.readyState==4)
  {
    
  var value=xmlhttp.responseText;
	
  //document.getElementById("item_name").value=value[0];
  document.getElementById("2nd").innerHTML=value;
  //document.write(value[0]);
   }
}

function GetXmlHttpObject()
{
if (window.XMLHttpRequest)
  {
  // code for IE7+, Firefox, Chrome, Opera, Safari
  return new XMLHttpRequest();
  }
if (window.ActiveXObject)
  {
  // code for IE6, IE5
  return new ActiveXObject("Microsoft.XMLHTTP");
  }
return null;
} // JavaScript Document

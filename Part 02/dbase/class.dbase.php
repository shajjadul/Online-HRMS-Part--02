<?php
class dbase
{
function connection()
{
	/*mysql_connect('localhost', 'gatewayg_hrmuser', '$gateway_g@#$');
    mysql_select_db("gatewayg_hrm");*/
	
	mysql_connect('localhost', 'root', '');
    mysql_select_db("e_hrm");

}
}
?>

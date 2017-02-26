<?php

class TableMaker
{

function Message($sql,$table,$info)
{

mysql_query($sql) or die("three is some error");
echo"<center>$table has been created properly</center>";
}




function Parmanent()
{
$info=1;   //this 2 convey another message which will be define later.

$sql="create table user_info(
user_id varchar(256) primary key,
password varchar(256)
)";
$this->Message($sql,"user_info Table",$info);


$sql="create table login_control(
user_id varchar(50) primary key,
password varchar(100),
securitycode varchar(50),
link_access varchar(100)
)";
$this->Message($sql,"Login_control Table",$info);


}//ene function Message

}//end class

?>

<?php
include 'class.dbase.php';
$database=new dbase();
// if exists database
$database_check=mysql_select_db("$database->dbasenam");
if($database_check == 1)
{
	$TableMaker=new TableMaker();
	$TableMaker->Parmanent();
}
else
{
echo "There is a problem in table creation";
}

?>





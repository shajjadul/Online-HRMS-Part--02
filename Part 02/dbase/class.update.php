<?php
include 'class.dbase.php';
class update extends dbase
{

//This function concern for updating values into Individual Result Table(DynamicUpdate).
function DynamicUpdate($table,$update_value,$identification)
{
$dyn="update $table set
$update_value
where 
$identification
";
mysql_query($dyn);

}




}
?>

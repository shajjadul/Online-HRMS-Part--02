<?php
//class.actualit.php page contain class.dbase.php
//class.delete.php page contain class.actualit.php
// class.update.php page contain class.delete.php
// class.retrieve.php page contain class.update.php
include("class.retrieve.php");

	class insert extends retrieve
	{
	
	function __construct()
	{
		
	}
	
	
	public function array_breaker($array)
	{
		$value="";
		foreach($array as $sql)
		{
			
			$value=$value."'$sql',";
		}
		$val=substr($value,0,-1);
		return $val;
	}
	
	
		function normal_insert($table,$array2)
		{
			// here call dbase class for connect to database
			new dbase();
		
			$k=$this->array_breaker($array2);
			$query="insert into $table values($k)";
			$result=mysql_query($query);
			return $result;
		}
	}
?>


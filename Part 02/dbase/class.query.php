<?php
	class insert
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
		$k=$this->array_breaker($array2);
		$query="insert into $table values($k)";
		$result=mysql_query($query);
		return $result;
	}
	
	function DynamicUpdate($table_name,$update_field,$identification)
	{
	$dyn="update $table_name set
	$update_field
	where 
	$identification
	";
	$result=mysql_query($dyn);
    return $result;
	}
	
	
	}
?>


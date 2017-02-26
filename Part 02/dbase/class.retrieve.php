<?php
//class.actualit.php page contain class.dbase.php
//class.delete.php page contain class.actualit.php
// class.update.php page contain class.delete.php

include("class.update.php");

class retrieve extends update 
{
	
	function __construct()
	{
		
	}
	
	// Function for normal retrieve
	function normal_retrieve($table_name)
	{
	// here call dbase class for connect to database
	new dbase();
	
		$query=mysql_query("select * from $table_name");
		//$result = mysql_fetch_array($query);
		return $query;
		
	}
	
	// Function for complex retrieve 
	// value 1 means this function retrieve data from database using and
	// value 2 means this function retrieve data from database using or
	function complex_retrieve($table_name,$conditional_array,$x)
	{
	// here call dbase class for connect to database
	new dbase();

		switch($x)
		{
		case 1:
		$k=$this->array_breaker_by_and($conditional_array);
		$query="select * from $table_name where $k ";
		$result=mysql_query($query);
		return $result;
		break;
		
		case 2:
		$k=$this->array_breaker_by_or($conditional_array);
		$query="select * from $table_name where $k ";
		$result=mysql_query($query);
		return $result;
		break;
		}
	}
	
	// Function for normal retrieve
	function single_retrieve($field,$table_name,$conditional_array,$x)
	{
	// here call dbase class for connect to database
	new dbase();

		switch($x)
		{
		case 1:
		$k=$this->array_breaker_by_and($conditional_array);
		$query="select $field from $table_name where $k ";
		$result=mysql_query($query);
		return $result;
		break;
		
		case 2:
		$k=$this->array_breaker_by_or($conditional_array);
		$query="select $field from $table_name where $k ";
		$result=mysql_query($query);
		return $result;
		break;
		}
		
	}
	
	function transaction_id($table_name)
	{
		new dbase();
				
		$query="select * from id_storage";
		$result=mysql_query("$query");
		
		$row_number=mysql_num_rows($result);
		$id=$row_number+1;
		$ID="00$id";
		
		$sql=mysql_query("insert into id_storage values('$ID','$table_name')");
		return($ID);
	}
	
	function normal_retrieve_distinct($field,$table_name)
	{
	// here call dbase class for connect to database
	new dbase();
	
		$query=mysql_query("SELECT DISTINCT $field FROM $table_name");
		//$result = mysql_fetch_array($query);
		return $query;
		
	}
	
	//Condition distinct rettrieve
	function condition_retrieve_distinct($field_name,$table_name,$confield,$inputfield)
	{
	// here call dbase class for connect to database
	new dbase();
		$query=mysql_query("SELECT DISTINCT $field_name FROM $table_name where $confield='$inputfield'");
		//$result = mysql_fetch_array($query);
		return $query;
		
	}
	/*function complex_retrieve_distinct($field_name,$table_name,$confield,$inputfield,$orderfield)
	{
	// here call dbase class for connect to database
	new dbase();
		$query=mysql_query("SELECT DISTINCT $field_name FROM $table_name where $confield like '$inputfield' ORDER BY $others ASC");
		//$result = mysql_fetch_array($query);
		return $query;
		
	}*/


}
?>
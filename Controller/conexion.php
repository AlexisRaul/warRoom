<?php
	include ("../ADOdb/adodb.inc.php");


	$conn = ADONewConnection ('mssql');
	//define connection string, specify database driver
	$conn->Connect('localhost:1400', 'XMZ9812\Equipo', '', 'alexis');
	//declare the SQL statement that will query the database
	$query = "SELECT * FROM registro";
	$rs = $conn->execute($query);

	//execute the SQL statement and return records
	$arr = $rs->GetArray();
	
	print_r($arr);

	if(!$resultado){
		echo"no";
	}
	else{
		echo"si";
	}


?>




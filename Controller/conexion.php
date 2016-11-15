<?php
// El servidor con el formato: <computer>\<instance name> o 
// <server>,<port> cuando se use un número de puerto diferente del de defecto
$server = 'XMZ9812\SQLEXPRESS';

// Connect to MSSQL
$link = mssql_connect($server, 'admin', '5t6y7u8i');
		mssql_select_db("alexis",$link);
if (!$link) {
    die('Algo fue mal mientras se conectaba a MSSQL');
}
else{

	$result=mssql_query("SELECT * FROM registro",$link);
	// Verifica si hay registros
	if (!mssql_num_rows($result)) {
    	echo 'No se encontraron registros';
	} else {
    	for ($i = 0; $i < mssql_num_rows($result); ++$i) {
        	echo mssql_result($result, $i, 'no_folio'), PHP_EOL;
        	echo mssql_result($result, $i, 'pais'), PHP_EOL;
    	} 
    	/*
    	while ($row = mssql_fetch_array($result)) {
        echo $row['no_folio'], PHP_EOL;
        echo $row['pais'], PHP_EOL;
        echo $row['descripcion'], PHP_EOL;
        echo $row['servicio_afectado'], PHP_EOL;
	}*/
}
}
?>
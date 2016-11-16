<?php
// El servidor con el formato: <computer>\<instance name> o 
// <server>,<port> cuando se use un número de puerto diferente del de defecto
$server = 'XMZ9812\SQLEXPRESS';
$username = "admin";
$password = "5t6y7u8i";
$dbname = "alexis";


/**
* 
*/
class conexion{
    
    function __construct(argument)
    {
        $link = mssql_connect($server, $username, $password);
        mssql_select_db($dbname,$link);
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
            echo "<br>";
        } 
        /*
    }
}
// Connect to MSSQL
$link = mssql_connect($server, $username, $password);
		mssql_select_db($dbname,$link);
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
            echo "<br>";
    	} 
    	/*
    	while ($row = mssql_fetch_array($result)) {
        echo $row['no_folio'], PHP_EOL;
        echo $row['pais'], PHP_EOL;
        echo $row['descripcion'], PHP_EOL;
        echo $row['servicio_afectado'], PHP_EOL;
	}*/
        
        /*$sql =mssql_query("DELETE from registro WHERE no_folio = 'S-12314'");*/

        /*if (mssql_num_rows($result)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $result . "<br>" . $conn->error;
        }*/

        mssql_close();
    }
    class insertarRegistro($folio,$pais,$des,$servicio,prioridad,$alertamiento,$notificaciones) /*extends AnotherClass*/
    {
        
        function __construct(argument)
        {
            $sql =mssql_query("INSERT INTO registro (no_folio,pais,descripcion,servicio_afectado,prioridad,t_alertamiento,t_notificaciones)
            VALUES "($folio,$pais,$des,$servicio,$prioridad,$alertamiento,$notificaciones),$link);
        }
    }
    /**
    * 
    */
    class selectRegsitros($query)
    {
        
        function __construct(argument)
        {
            $result=mssql_query("SELECT * FROM registro",$link);
    // Verifica si hay registros
    if (!mssql_num_rows($result)) {
        echo 'No se encontraron registros';
    } else {
        
        for ($i = 0; $i < mssql_num_rows($result); ++$i) {
            echo mssql_result($result, $i, 'no_folio'), PHP_EOL;
            echo mssql_result($result, $i, 'pais'), PHP_EOL;
            echo "<br>";
        } 
        }
    }
}
$
?>
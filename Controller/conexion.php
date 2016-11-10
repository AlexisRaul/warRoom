<?php
// El servidor con el formato: <computer>\<instance name> o 
// <server>,<port> cuando se use un número de puerto diferente del de defecto
$server = 'XMZ9812\SQLEXPRESS';

// Connect to MSSQL
$link = mssql_connect($server, 'admin', '5t6y7u8i');

if (!$link) {
    die('Algo fue mal mientras se conectaba a MSSQL');
}
?>
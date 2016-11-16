<?php
// El servidor con el formato: <computer>\<instance name> o 
// <server>,<port> cuando se use un número de puerto diferente del de defecto
    

class conexion{
     
        function conectar(){
            $server = 'XMZ9812\SQLEXPRESS';
            $username = "admin";
            $password = "5t6y7u8i";
            $dbname = "alexis";
            $link = mssql_connect($server, $username, $password);
            mssql_select_db($dbname,$link);
            if (!$link) {
                die('Algo fue mal mientras se conectaba a MSSQL');
            }
            else{
                echo "se conecto";
                /*$result=mssql_query("SELECT * FROM registro",$link);
                // Verifica si hay registros
                if (!mssql_num_rows($result)) {
                    echo 'No se encontraron registros';
                } 
                else {
                    
                    /*for ($i = 0; $i < mssql_num_rows($result); ++$i) {
                        echo mssql_result($result, $i, 'no_folio'), PHP_EOL;
                        echo mssql_result($result, $i, 'pais'), PHP_EOL;
                        echo "<br>";
                    }*/
                }
            }


    
    function insertarRegistro($query){ /*extends AnotherClass*/
            $this->conectar();
            echo $query;
            if($query){
            $sql =mssql_query($query);
            }
            else{
                echo "el query viene vacio ";
            }

    }
    /**
    * 
    */
    function selectRegsitros($query){
            $this->conectar();
            $result=mssql_query($query);
            // Verifica si hay registros
            if (!mssql_num_rows($result)) {
                echo 'No se encontraron registros';
            } 
            else {
                
                for ($i = 0; $i < mssql_num_rows($result); ++$i) {
                    echo mssql_result($result, $i, 'no_folio'), PHP_EOL;
                    echo mssql_result($result, $i, 'pais'), PHP_EOL;
                    echo "<br>";
                } 
            }
    }
}
/*
$folio="S-123456789";
$pais="Mexico";
$des="laksdjflkdsajflsdkjaf";
$servicio="ATAE";
$prioridad="NORMAL";
$alertamiento="20 minutos";
$notificaciones="20 minutos";
$query="SELECT * FROM registro";
#$query="INSERT INTO registro (no_folio,pais,descripcion,servicio_afectado,prioridad,t_alertamiento,t_notificaciones) 
#VALUES ('".$folio."','".$pais."','".$des."','".$servicio."','".$prioridad."','".$alertamiento."','".$notificaciones."')";
$obj_conexion = new conexion();
#$obj_conexion->insertarRegistro($query);
$obj_conexion->selectRegsitros($query);
*/
?>
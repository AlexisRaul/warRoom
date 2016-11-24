<?php

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
                #echo "conexion exitosa";
                }
        }


        /*
        function insertarRegistro($query){
                $this->conectar();
                if($query){
                $sql =mssql_query($query);
                }
                else{
                    die(mssql_close());
                    echo "el query viene vacio ";
                }
        }*/

        #Funcion que realiza el Select
        /*function selectRegsitros($query){
            $this->conectar();
                $result=mssql_query($query);
                // Verifica si hay registros
                if (!mssql_num_rows($result)) {
                    echo 'No se encontraron registros';
                } 
                else {
                    return ($result);
                    #$row = mssql_fetch_assoc($result);
                    #foreach ($row as $datos) {
                    #}
                    #$this->mostrarDatos($row);
                }
        }*/
    }
#parametro que se pasa a la funcion 
#$folio="CRQ0012341234";
/*
$pais="Mexico";
$des="laksdjflkdsajflsdkjaf";
$servicio="ATAE";
$prioridad="NORMAL";
$alertamiento="20 minutos";
$notificaciones="20 minutos";*/
#$query="SELECT * FROM registro WHERE no_folio = '".$folio."'";
#$query="INSERT INTO registro (no_folio,pais,descripcion,servicio_afectado,prioridad,t_alertamiento,t_notificaciones) 
#VALUES ('".$folio."','".$pais."','".$des."','".$servicio."','".$prioridad."','".$alertamiento."','".$notificaciones."')";
#$obj_conexion = new conexion();
#$obj_conexion->insertarRegistro($query);
#$obj_conexion->selectRegsitros($query);

?>
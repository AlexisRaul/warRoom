<? 
	require_once('..\View\Participantes.html');
	require_once('..\Controller\conexion.php');


	/**
	* 
	*/
	class participantesController{

	    function insertarRegistro($query){ /*extends AnotherClass*/
	    	$ParticipantesObjeto = new conexion();
            $ParticipantesObjeto->conectar();
            if($query){
            $sql =mssql_query($query);
            }
            else{
                die(mssql_close());
                echo "el query viene vacio ";
            }

    	}
	}

?>
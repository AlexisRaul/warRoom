 <? 
	require_once('..\Controller\conexion.php');
	require_once('..\Controller\mesa1Controller.php');


	class mesa1Controller extends conexion{

	    function selectRegsitrosMesa1($query){
	        $conectar = new conexion();
	        $conectar->conectar();
	        $datos = array();
	            $result=mssql_query($query);
	            #echo $result;
	            // Verifica si hay registros
	            if (!mssql_num_rows($result)) {
	                echo 'No se encontraron registros';
	            } 
	            else {
	            	$obtener=mssql_fetch_assoc($result);
	            	/*
	            	foreach ($obtener as $resultado) {
					   	echo $resultado;
	                	echo "<br>";
	                }*/
	            	echo 'OK'; 
	            }
	            	$datos = $obtener;
	                return $datos;
	        }
	}
/*
$query="SELECT * FROM registro WHERE no_folio = 'CRQ0012341234'";
$obj_conectar= new conexion();
$obj_Mesa = new mesa1Controller();
$obj_Mesa->selectRegsitrosMesa1($query);*/
?>
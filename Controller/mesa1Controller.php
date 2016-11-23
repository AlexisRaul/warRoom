<?php
	require_once('../View/mesa1.php');
	require_once('../Model/Mesa1Model.php');
	/**
	 * 
	 */
	class mesa1 extends mesa1Controller{

	 	function consulta_folio($n_folio){
	 		if (!$_POST['Folio']) {
	 			echo "no se puede buscar un valor vacio";	
	 		}
	 		else{
		 		$n_folio = $_POST['Folio'];
				$query="SELECT  * FROM registro WHERE no_folio = '".$n_folio."'";
				#echo $query;
				$obj_Mesa = new mesa1Controller();
				$consluta=$obj_Mesa->selectRegsitrosMesa1($query);
				$resutlado = mssql_fetch_array($consluta);
				#echo $resutlado['no_folio'];
				#echo $resutlado['pais'];
				$contador = 0;
				for ($i=$contador; $i < count($resutlado); $i++) { 
					
					while ($datos_obtenidos = $resutlado) {
	            	 	echo $datos_obtenidos[$i];
	            	 	echo "<br>";
	            	 }#end while
	            	 $contador +1;
	            }#end for 
		    }#Fin else
		}#Fin funcion
	}#Fin clase	
$obj_folio = new mesa1();
$obj_folio->consulta_folio($folio);
	
 ?>
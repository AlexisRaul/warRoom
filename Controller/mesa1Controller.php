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
				$obj_Mesa->selectRegsitrosMesa1($query);
				if (is_array($datos)) {
					foreach ($datos as $resultado) {
					   	echo $resultado;
		               	echo "<br>";
		            }#Fin foreach
				}#Fin if
				else{
					echo "no es un array";
				}#Fin else
		    }#Fin else
		}#Fin funcion
	}#Fin clase	
$obj_folio = new mesa1();
$obj_folio->consulta_folio($folio);
	
 ?>
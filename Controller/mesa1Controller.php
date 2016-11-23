<?php
	
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
				$query="SELECT DISTINCT * FROM registro WHERE no_folio = '".$n_folio."'";
				#echo $query;
				$obj_Mesa = new mesa1Controller();
				$consluta=$obj_Mesa->selectRegsitrosMesa1($query);
				/*$resutlado = mssql_fetch_array($consluta);
				#echo $resutlado['no_folio'];
				#echo $resutlado['pais'];*/
				$titulos = array('no_folio','pais','descripcion','servicio_afectado','prioridad','t_alertamiento','t_notificaciones');
				$resutlado = mssql_fetch_assoc($consluta);
				require_once('../View/mesa1.php');
				#print_r($resutlado);
				/*
				for ($i=0; $i < count($resutlado); $i++) { 
						echo $resutlado[$titulos[$i]];
	            	 	echo "<br>";
	            }#end for 
	            if ($resutlado = mssql_fetch_array($consluta)) {
	            	do{
	            		for ($i=0; $i < count($resutlado) ; $i++) { 
	            			echo $resutlado[$titulos[$i]];
	            			echo "<br>";	
	            		}
	            		

	            	}
	            	while ($row = mssql_fetch_array($consluta));
	            }
	            else { 
					echo "¡ No se ha encontrado ningún registro !"; 
				} */
		    }#Fin else
		    
		}#Fin funcion
	}#Fin clase	
$obj_folio = new mesa1();
$obj_folio->consulta_folio($folio);
	
 ?>
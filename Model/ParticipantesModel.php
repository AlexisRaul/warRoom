<?php
	require_once('../View/ParticipantesController.php');
	require_once('../Controller/conexion.php');
	/**
	 * 
	 */
	 class participantes{
	 	
	 	function consulta_folio($n_folio,$pais,$descripción){	

	 		$n_folio = $$GET $_POST['Folio'];
			$pais=$GET $_POST['pais'];
			$descripción=$GET $_POST['descripción'];
			$servicio=$GET $_POST['servicio'];
			$prioridad=$GET $_POST['prioridad'];
			$Alertamiento=$GET $_POST['Alertamiento'];
			$notificaciones=$GET $_POST['notificaciones'];

			$obj_participantes = new conexion();
	 	}
	 } 
	
 ?>
<? 
	require_once('..\View\Participantes.php');
	require_once('..\Model\ParticipantesModel.php');
	/**
	* 
	*/
class participantes{

	 	function inserta_folio($n_folio,$pais,$descripción,$servicio,$prioridad,$Alertamiento,$notificaciones){
	 		if (!$_POST['Folio']) {
	 			echo "No se puede insertar un registro vaico";
	 		}
	 		else{
		 		$n_folio = $_POST['Folio'];
				$pais=$_POST['pais'];
				$descripción=$_POST['descripción'];
				$servicio=$_POST['servicio'];
				$prioridad=$_POST['prioridad'];
				$Alertamiento=$_POST['Alertamiento'];
				$notificaciones=$_POST['notificaciones'];
				$query="INSERT INTO registro (no_folio,pais,descripcion,servicio_afectado,prioridad,t_alertamiento,t_notificaciones) 
				VALUES ('".$n_folio."','".$pais."','".$descripción."','".$servicio."','".$prioridad."','".$Alertamiento."','".$notificaciones."')";
				#echo $query;
				$obj_conexion = new participantesController();
				$obj_conexion->insertarRegistro($query);
			}
			
	 	}
	 }
$obj_participantes = new participantes();
$obj_participantes->inserta_folio($n_folio,$pais,$descripción,$servicio,$prioridad,$Alertamiento,$notificaciones);

?>
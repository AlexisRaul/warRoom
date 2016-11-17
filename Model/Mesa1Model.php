<?php
	require_once('../Controller/mesa1sController.php');
	require_once('../Controller/conexion.php');
	/**
	 * 
	 */
	 class mesa1{

	 	function consulta_folio($n_folio){

	 		$n_folio = $_POST['Folio'];/*
			$pais=$_POST['pais'];
			$descripción=$_POST['descripción'];
			$servicio=$_POST['servicio'];
			$prioridad=$_POST['prioridad'];
			$Alertamiento=$_POST['Alertamiento'];
			$notificaciones=$_POST['notificaciones'];*/
			$query="SELECT * FROM registro WHERE no_folio = '".$n_folio."'";
			#echo $query;
			$obj_conexion = new conexion();
			$obj_conexion->selectRegsitros($query);
			
	 	}
	 	 
	 }
			$obj_mesa1 = new mesa1();
			$obj_mesa1->consulta_folio($n_folio);
 ?>
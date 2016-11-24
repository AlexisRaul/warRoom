<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="/WARRoom/css/bootstrap.min.css">
	<link rel="stylesheet" href="/WARRoom/css/bootstrap.css">
	<link rel="stylesheet" href="/WARRoom/css/estylos.css">
	<script src="/WARRoom/js/scirpt.js"></script>
	<title>Configuración Tienda</title>
	
</head>
<body>
<!--inicio de contenedor-->
<div class="container">
	<!-- Inicio head-->	
	<header>
		<div class="row">
			<div class="form-group">
				<a href="\WARRoom\Controller\inicioController.php">
					<img src="\WARRoom\images\BBVALogo.png" class="thumbnail col-xs-12 col-sm-3" alt="BBVA Bancomer">
				</a>
					
			</div>
		</div>
	</header>
	<!--Fin head-->	
<section>
		<article class="col-xs-12 col-sm-12">
			<div class="page-header">
				<h1 id="titulo">Registro y Administración</h1>
			</div>
			<form method="post" action="\WARRoom\Controller\mesa1Controller.php" class="form-horizontal col-md-12 col-md-offset-1">
			<?php foreach ($resutlado as $key => $value) {
				
			?>
			<!-- Folio input-->
			    <div class="form-group col-md-12 ">
			      	<label class="control-label col-md-3" for="Folio">Folio Incident Remedy</label>
			      	<input type="text" class="form-control col-md-7" id="Folio" name="Folio" placeholder="Folio Incident Remedy" value= <?php echo $value; } ?>>
			    	<button class="btn btn-primary" type="submit" name="submit" id="btn-enviar-folio">Ir</button>
			    </div>
			    <!--<span class="help-block"></span>-->
			<!-- Pais input -->
			    <div class="form-group col-md-12 ">
			      	<label class="control-label col-md-3" for="pais">País:</label>
			      	<input type="text" class="form-control col-md-5" disabled="disabled" id="pais" name="pais" placeholder="País">
			    </div>
			<!-- Descripcion input -->
			    <div class="form-group col-md-12 ">
				      <label class="control-label col-md-3" for="descripción">Descripción:</label>
				      <textarea class="form-control col-md-5" disabled="disabled" maxlength="180" minlength="30" rows="3" id="descripción" name="descripción" placeholder="Descripción"></textarea>
			    </div>
			<!-- Servicio input -->
			    <div class="form-group col-md-12 ">
				      <label class="control-label col-md-3" for="servicio">Servicio Afectado:</label>
				      <input type="text" class="form-control col-md-5" disabled="disabled" id="servicio" name="servicio" placeholder="Servicio Afectado">
			    </div>
			<!-- Prioridad input -->
			    <div class="form-group col-md-12 ">
				      <label class="control-label col-md-3" for="prioridad">Prioridad:</label>
				      <input type="text" class="form-control col-md-5" disabled="disabled" id="prioridad" name="prioridad" placeholder="Prioridad">
			    </div>
			<!-- Alertameitno input -->
			    <div class="form-group col-md-12 ">
				      <label class="control-label col-md-3" for="alertamiento">Tiempo de Alertamiento:</label>
				      <input type="text" pattern="[0-9]" class="form-control col-md-10" disabled="disabled" maxlength="2" id="alertamiento" name="alertamiento" onkeypress="return justNumbers(event);" placeholder="Alertamiento">
			    </div>
			<!-- Notificaciones input -->
			    <div class="form-group col-md-12 ">
				      <label class="control-label col-md-3" for="notificaciones">Tiempo para notificaciones:</label>
				      <input type="text" pattern="[0-9]" class="form-control col-md-5" disabled="disabled" maxlength="2" id="notificaciones"  name="notificaciones" onkeypress="return justNumbers(event);" placeholder="Notificaciones">
			    </div>
			 <button type="" class="btn btn-primary col-md-1 col-md-offset-5">Enviar</button>
			</form>
		</article>
	</section>
</div>
<!--Fin de contenedor-->
	<!-- JQuery-->
	<script src="/WARRoom/js/jquery.js"></script>
	<script src="/WARRoom/js/bootstrap.min.js"></script>
</body>
</html>
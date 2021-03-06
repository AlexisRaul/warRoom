<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="/WARRoom/css/bootstrap.min.css">
	<link rel="stylesheet" href="/WARRoom/css/bootstrap.css">
	<link rel="stylesheet" href="/WARRoom/css/estylos.css">
	<title>Configuración Tienda</title>
</head>
<body>
<div class="container">
	<header>
		<div class="row">
		<div class="btn-group btn-group-justified">
			<div class="form-group">
				<a href="/WARRoom/Controller/inicioController.php">
					<img src="\WARRoom\images\BBVALogo.png" class="thumbnail col-xs-12 col-sm-3" alt="BBVA Bancomer">
				</a>
					<div class="dropdown col-xs-12 col-sm-2" id="btn-nav">
					  <button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Registro & Admon
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
					  	<li class="dropdown-header">Elige una mesa</li>
					    <li role="presentation"><a role="menuitem" href="/WARRoom/Controller/mesa1Controller.php">Mesa 1</a></li>
					    <li role="presentation"><a role="menuitem" href="/WARRoom/Controller/mesa2Controller.php">Mesa 2</a></li>
					    <li role="presentation"><a role="menuitem" href="/WARRoom/Controller/mesa3Controller.php">Mesa 3</a></li>
					    <li role="presentation" class="divider"></li>
					    <li class="dropdown-header">Opciones Adicionales</li>
					    <li role="presentation"><a role="menuitem" href="/WARRoom/Controller/AgregarMesaController.php">Agregar Nueva Mesa</a></li>
					  </ul>
					</div>
					<a href="\WARRoom\Controller\ParticipantesController.php" class="btn btn-primary col-xs-12 col-sm-2" id="btn-nav-participante">Participantes</a>
					<div class="dropdown col-xs-12 col-sm-2" id="btn-nav">
					  <button class="btn btn-primary dropdown-toggle" type="button" id="btn-nav-manager" data-toggle="dropdown">Incident Manager
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
					  	<li class="dropdown-header">Elige una mesa</li>
					    <li role="presentation"><a role="menuitem" href="/WARRoom/Controller/mesa1Controller.php">Mesa 1</a></li>
					    <li role="presentation"><a role="menuitem" href="/WARRoom/Controller/mesa2Controller.php">Mesa 2</a></li>
					    <li role="presentation"><a role="menuitem" href="/WARRoom/Controller/mesa3Controller.php">Mesa 3</a></li>
					    <li role="presentation" class="divider"></li>
					    <li class="dropdown-header">Opciones Adicionales</li>
					    <li role="presentation"><a role="menuitem" href="/WARRoom/Controller/AgregarMesaController.php">Agregar Nueva Mesa</a></li>
					  </ul>
					</div>
			</div>
		</div>
		</div>
	</header>	
<section>
		<article class="col-xs-12 col-sm-12">
			<div class="page-header">
			<h1 id="titulo">Bienvenido a los Participantes</h1>
			</div>
			<form method="POST" action="/WARRoom/Controller/ParticipantesController.php" class="form-horizontal col-md-12 col-md-offset-1">
			<!-- Folio input-->
			    <div class="form-group col-md-12 ">
			      	<label class="control-label col-md-3" for="Folio">Folio Incident Remedy</label>
			      	<input type="text" class="form-control col-md-7" id="Folio" name="Folio" placeholder="Folio Incident Remedy">
			    	<button class="btn btn-primary" type="submit" id="btn-enviar-folio">Ir</button>
			    </div>
			    <!--<span class="help-block"></span>-->
			<!-- Pais input -->
			    <div class="form-group col-md-12 ">
			      	<label class="control-label col-md-3" for="pais">País:</label>
			      	<input type="text" class="form-control col-md-5" id="pais" name="pais" placeholder="País">
			    </div>
			<!-- Descripcion input -->
			    <div class="form-group col-md-12 ">
				      <label class="control-label col-md-3" for="descripción">Descripción:</label>
				      <textarea class="form-control col-md-5" maxlength="180" minlength="30" rows="3" id="descripción" name="descripción" placeholder="Descripción"></textarea>
			    </div>
			<!-- Servicio input -->
			    <div class="form-group col-md-12 ">
				      <label class="control-label col-md-3" for="servicio">Servicio Afectado:</label>
				      <input type="text" class="form-control col-md-5" id="servicio" name="servicio" placeholder="Servicio Afectado">
			    </div>
			<!-- Prioridad input -->
			    <div class="form-group col-md-12 ">
				      <label class="control-label col-md-3" for="prioridad">Prioridad:</label>
				      <input type="text" class="form-control col-md-5" id="prioridad" name="prioridad" placeholder="Prioridad">
			    </div>
			<!-- Alertameitno input -->
			    <div class="form-group col-md-12 ">
				      <label class="control-label col-md-3" for="alertamiento">Tiempo de Alertamiento:</label>
				      <input type="text" pattern="[0-9]" class="form-control col-md-10" maxlength="2" id="alertamiento" name="alertamiento"  onkeypress="return justNumbers(event);" placeholder="Alertamiento">
			    </div>
			<!-- Notificaciones input -->
			    <div class="form-group col-md-12 ">
				      <label class="control-label col-md-3" for="notificaciones">Tiempo para notificaciones:</label>
				      <input type="text" pattern="[0-9]" class="form-control col-md-5" maxlength="2" id="notificaciones" name="notificaciones"  onkeypress="return justNumbers(event);" placeholder="Notificaciones">
			    </div>
			    
			 	 <button type="submit" class="btn btn-primary col-md-1 col-md-offset-5">Enviar</button>
			 </form>
		</article>
	</section>
</div>
	<!-- JQuery-->
	<script src="/WARRoom/js/jquery.js"></script>
	<script src="/WARRoom/js/bootstrap.min.js"></script>
</body>
</html>
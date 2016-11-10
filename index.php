<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href=" /WARRoom/css/bootstrap.min.css">
  <link rel="stylesheet" href="/WARRoom/css/bootstrap.css">
  <link rel="stylesheet" href="/WARRoom/css/estylos.css">
  <title>Login Mesa de Cisis</title>
</head>
<body id="body-login">
<header class="col-xs-offset-0 col-sm-12 col-md-offset-4">
<div class="container col-xs-12 col-sm12 col-md-4" id="formulario">
<form action="/WARRoom/View/inicio.html" method="POST" class="form-horizontal col-xs-12 col-md-12" id="formulario-registro">
    <div class="page-header">
      <h1 id="titulo"><kbd>Login</kbd></h1>
    </div>
  <!-- Nombre -->
    <div class="form-group">
      <label for="#Nombre" class="sr-only">Nombre de Usuario</label>
      <input class="form-control" type="text" id="Nombre" placeholder="Nombre de Usuario">
    </div>
  <!-- Contraseña -->
    <div class="form-group">
      <label for="#APaterno" class="sr-only">Contraseña</label>
      <input class="form-control" type="password" id="APaterno" placeholder="Contraseña">
    </div>
  <!--DropDown-->
    <div class="col-xs-12 col-sm-8" id="select-mesa">
     <p>Selecciona la mesa de Crisis</p>
      <select class="selectpicker">
        <optgroup label="Elige una mesa">
          <option>Mesa 1</option>
          <option>Mesa 2</option>
          <option>Mesa 3</option>
        </optgroup>
      </select>
  <!-- check -->  
    <div class="row radio inline-block">
  <!--PHP-->

  <!--Fin PHP-->
      <label><input type="radio" value="" class="">Recordame en este equipo</label>
      <button type="submit" id="btn-login" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Entrar</button>
    </div>
  <!-- Botones -->
  </form> 
</div>
</header>
  <!-- JQuery-->
  <script src="/WARRoom/js/jquery.js"></script>
  <script src="/WARRoom/js/bootstrap.min.js"></script>
</body>
</html>
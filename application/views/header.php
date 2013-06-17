<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo ?> | Red de Concesionarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le Estilos -->
	<link rel="stylesheet"  href="<?php echo base_url()?>css/bootstrap.css"/>
	<link rel="stylesheet"  href="<?php echo base_url()?>css/estilos.css"/>
	<style type="text/css">
		body { padding-top: 60px; padding-bottom: 40px; }
	</style>
	<link rel="stylesheet"  href="<?php echo base_url()?>css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Le HTML Shiv y los trucos para los codigos en HTML5 -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le Favicon e iconos para dispositivos retina -->
	<link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/images/apple-touch-icon-114x114.png">
		
</head>
<body>
	<!-- Aqui va todo el contenido que se quiera poner -->

	<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
 
      <!-- Nombre del Proyecto -->
      <a class="brand" href="#"><img src="<?php echo base_url()?>imagenes/logo.png"/></a>
 		
      <!-- Aqui va lo que se oculta despues de los 940px-->
  <ul class="nav">
  <li><a href="#">Ver Concesionarios</a></li>
  <li><a href="#">Agregar un Concesionario</a></li>
  <li><a href="#">Agregar Auto</a></li>
  <li><a href="#">Busqueda</a></li>
  </ul>
     <div class="nav-collapse collapse">
      </div>
  <!-- .nav, .navbar-search, .navbar-form, etc -->
    </div>
  </div>
</div>
<!-- /fin del header.php -->
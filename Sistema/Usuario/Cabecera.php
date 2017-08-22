<?php session_start(); ?>
<?php
if(!isset($_SESSION["BANCO"])) { ?>
<script type="text/javascript">window.location="../Index.php";</script> 
<?php
exit(); }
else { 
if($_SESSION["TIPOBANCO"]=="ADMINISTRADOR") { ?>
<script type="text/javascript">window.location="../Administrador/RegistroDatosDonantes.php";</script> 
<?php }
if($_SESSION["TIPOBANCO"]=="VISTA") { ?>
<script type="text/javascript">window.location="../Vista/PlanillaABuscar.php";</script> 
<?php } }
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="iso-8859-1"><title>Sistema Banco De Sangre</title></head>
<body>
<table id="btnimprimir" width="100%" style="border-bottom:groove;" bgcolor="#FFFFFF"><tr><td align="left"><a href="http://www.hospitalrazettibarinas.gob.ve/site/categoria/2.html" target="_new"><img src="../Imagenes/fb.jpg"><font color="#000000"><?php echo "Noticias Hospital Dr. Luiz Razetti" ;?></a></font></td>
<td align="right"><font color="#000000"><?php echo "Usuario Activo <b>( ".$_SESSION["BANCO"];?> ) <b><input type="button" value="Cerrar Sesion" onClick="location.href='../desconectar.php'"></font></td></tr></table>
<img src="../Imagenes/Logo.jpg" width="100%" height="80px">
<br>
<!-- <img src="../Imagenes/img.gif" style="position:absolute;" height="100"> -->
<body background="../Imagenes/prueba02.jpeg">
<link rel="stylesheet" href="../styles.css">
<center><table align="center" width="80%"><tr><td>
<table  id="btnimprimir" align="center" width="100%">
<tr><td>
<div id='cssmenu'>
<ul>
   <li class='active has-sub'><a href='#'><span>Registro De Donantes</span></a>
      <ul>
         <li class='has-sub'><a href='RegistroDatosDonantes.php'><span>Registrar</span></a></li>
         <li class='has-sub'><a href='BuscarDonante1.php'><span>Modificar</span></a></li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Registrar Serologia</span></a>
      <ul>
         <li class='has-sub'><a href='RegistrarSerologia.php'><span>Registrar</span></a></li>
         <li class='has-sub'><a href='BuscarDonante.php'><span>Modificar</span></a></li>
      </ul>
   </li>
   <li class='active has-sub'><a href='#'><span>Reportes de Serologías</span></a>
      <ul>
         <li class='has-sub'><a href='PlanillaABuscar.php'><span>Última Serología</span></a></li>
         <li class='has-sub'><a href='HistorialABuscar.php'><span>Historial de Serologías</span></a></li>
      </ul>
   </li>         
</ul>
</div>
</td></tr></table></td></tr>
<br>
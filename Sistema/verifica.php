<?php session_start(); ?>
<?php
if(isset($_SESSION["BANCO"]) && ($_SESSION["TIPOBANCO"]=="ADMINISTRADOR")) { ?>
<script type="text/javascript">window.location="Administrador/RegistroDatosDonantes.php";</script> 
<?php }
if(isset($_SESSION["BANCO"]) && ($_SESSION["TIPOBANCO"]=="USUARIO")) { ?>
<script type="text/javascript">window.location="Usuario/RegistroDatosDonantes.php";</script>
<?php }
if(isset($_SESSION["BANCO"]) && ($_SESSION["TIPOBANCO"]=="VISTA")) { ?>
<script type="text/javascript">window.location="Vista/PlanillaABuscar.php";</script>
<?php }
include("conexion.php");
$conec=Conectarse();
$usuario=$_POST["txtusuario"];
$clave=$_POST["txtclave"];
$pass_encriptada1 = md5 ($clave); //Encriptacion nivel 1
$pass_encriptada2 = crc32($pass_encriptada1); //Encriptacion nivel 1
$pass_encriptada3 = crypt($pass_encriptada2, "xtemp"); //Encriptacion nivel 2
$pass_encriptada4 = sha1("xtemp".$pass_encriptada3); //Encriptacion nivel 3
$clave=$pass_encriptada4;
$consulta=mysql_query("select usuario,clave,tipo from tusuario where usuario='$usuario' and clave='$clave'",$conec);
$dato=mysql_fetch_array($consulta);
$nfila=mysql_num_rows($consulta);
if($nfila<1) { ?>
 <script type="text/javascript">alert("Clave o Usuario Incorrecto");window.location="index.php";</script>
 <?php exit; }
$_SESSION["BANCO"]=$usuario;
$_SESSION["TIPOBANCO"]=$dato["tipo"];
if($_SESSION["TIPOBANCO"]=="ADMINISTRADOR") { ?>
<script type="text/javascript">window.location="Administrador/RegistroDatosDonantes.php";</script> 
<?php }
if($_SESSION["TIPOBANCO"]=="USUARIO") { ?>
<script type="text/javascript">window.location="Usuario/RegistroDatosDonantes.php";</script> 
<?php }
if($_SESSION["TIPOBANCO"]=="VISTA") { ?>
<script type="text/javascript">window.location="Vista/PlanillaABuscar.php";</script> 
<?php }
exit();
?>
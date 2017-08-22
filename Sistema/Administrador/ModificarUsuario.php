<?php include("Cabecera.php");
include("../conexion.php");
$conec=Conectarse();
if(!$conec) { ?>
<script type="text/javascript">alert("No Se Conecto");window.location.href="BuscarUsuario.php";</script>
<?php exit();}
$usuario=$_POST["txtusuario"];
$clave=$_POST["txtclave"];
$pass_encriptada1 = md5 ($clave); //Encriptacion nivel 1
$pass_encriptada2 = crc32($pass_encriptada1); //Encriptacion nivel 1
$pass_encriptada3 = crypt($pass_encriptada2, "xtemp"); //Encriptacion nivel 2
$pass_encriptada4 = sha1("xtemp".$pass_encriptada3); //Encriptacion nivel 3
$clave=$pass_encriptada4;
$tipo=$_POST["rbusuario"];
$correo=$_POST["txtcorreo"];
if(!ctype_alnum($usuario)) { ?>
<script type="text/javascript">alert("Usuario Invalido");window.location="BuscarUsuario.php";</script> <?php exit(); }
if(!ctype_alnum($clave)) { ?>
<script type="text/javascript">alert("Clave Invalida");window.location="BuscarUsuario.php";</script> <?php exit(); }
if(filter_var($correo,FILTER_VALIDATE_EMAIL) === FALSE){ ?>
<script type="text/javascript">alert("Correo Invalido");window.location="BuscarUsuario.php";</script> <?php exit(); }
mysql_query("update tusuario set clave='$clave',tipo='$tipo',correo='$correo' where usuario='$usuario'",$conec);
$my_error = mysql_error($conec);		
if(!empty($my_error)) { ?>
<script type="text/javascript">alert("No Se Actualizó Usuario");window.location.href="BuscarUsuario.php";</script>
<?php exit(); }
else
{ ?>
<script type="text/javascript">alert("Usuario Actualizado");window.location.href="BuscarUsuario.php";</script>
<?php exit(); }
?>

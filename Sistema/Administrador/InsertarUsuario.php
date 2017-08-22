<?php include("Cabecera.php");
include("../conexion.php");
$conec=Conectarse();
if(!$conec) { ?>
<script type="text/javascript">alert("Error al conectar");window.location="RegistroUsuarios.php";</script>
<?php exit(); }
$usuario=$_POST["txtusuario"];
$clave=$_POST["txtclave"];
$pass_encriptada1 = md5 ($clave); //Encriptacion nivel 1
$pass_encriptada2 = crc32($pass_encriptada1); //Encriptacion nivel 1
$pass_encriptada3 = crypt($pass_encriptada2, "xtemp"); //Encriptacion nivel 2
$pass_encriptada4 = sha1("xtemp".$pass_encriptada3); //Encriptacion nivel 3
$clave=$pass_encriptada4;
$correo=$_POST["txtcorreo"];
$tipo=$_POST["rbusuario"];
if(!ctype_alnum($usuario)) { ?>
<script type="text/javascript">alert("Usuario Invalido");window.location="RegistroUsuarios.php";</script> <?php exit(); }
if(!ctype_alnum($clave)) { ?>
<script type="text/javascript">alert("Clave Invalida");window.location="RegistroUsuarios.php";</script> <?php exit(); }
if(filter_var($correo,FILTER_VALIDATE_EMAIL) === FALSE){ ?>
<script type="text/javascript">alert("Correo Invalido");window.location="RegistroUsuarios.php";</script> <?php exit(); }
$sql=mysql_query("select usuario from tusuario where usuario='$usuario'",$conec);
$nfila=mysql_num_rows($sql);
if($nfila>0) { ?>
<script type="text/javascript">alert("Usuario Ya Registrado");window.location="RegistroUsuarios.php";</script>
<?php
exit(); }
mysql_query("insert into tusuario values ('$usuario','$clave','$tipo','$correo')",$conec);
$sqlerror=mysql_error($conec);
if(!empty($sqlerror)) { ?>
<script type="text/javascript">alert("NO se registró el Usuario");window.location="RegistroUsuarios.php";</script>
<?php }
else { ?>
<script type="text/javascript">alert("Usuario Registrado");window.location="RegistroUsuarios.php";</script>
<?php
}
?>
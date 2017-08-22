<?php 
include("Cabecera.php");
include("../conexion.php");
$conec=Conectarse();
if(!$conec) { ?>
<script type="text/javascript">alert("No Se Conecto");window.location.href="BuscarUsuario.php";</script>
<?php exit();} 
$usuario=$_POST["txtusuario"];
if(!ctype_alnum($usuario)) { ?>
<script type="text/javascript">alert("Usuario Solo Letras y Números");window.location="BuscarUsuario.php";</script> <?php exit(); }
$sql=mysql_query("select usuario,tipo,correo,clave from tusuario where usuario='$usuario'",$conec);
$dato=mysql_fetch_array($sql);
$nfila=mysql_num_rows($sql);
if($nfila<1) { ?>
<script type="text/javascript">alert("Usuario No Registrado");window.location="BuscarUsuario.php";</script>
<?php
exit(); }
?>
<style type="text/css">
.actualizar
{background-image: url(../Imagenes/actualizar.jpg); background-repeat:no-repeat width: 40px; height: 40px; border-width: 0}
.limpiar
{background-image: url(../Imagenes/limpiar.png); background-repeat:no-repeat width: 40px; height: 40px; border-width: 0}
</style>
<tr><td>
<form action="ModificarUsuario.php" method="post">
<table style="border:groove" style="border-bottom:groove" align="center" width="100%" bgcolor="#333333">
<tr style="background: #070707;background: -moz-linear-gradient(top, #262626 0%, #070707 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);background: -o-linear-gradient(top, #262626 0%, #070707 100%);background: -ms-linear-gradient(top, #262626 0%, #070707 100%);background: linear-gradient(to bottom, #262626 0%, #070707 100%);"><td colspan="3" style="border-bottom:groove"><font size="6" color="#FFF"><center>Edición de Usuario</td></tr>
<tr height="60">
<td style="border-bottom:groove"><font color="#FFFFFF"><center> USUARIO </font><br><input type="text" name="txtusuario" readonly="readonly" required="required" value="<?php echo $dato["usuario"]; ?>"></td>
<td style="border-bottom:groove"><font color="#FFFFFF"><center> CLAVE </font><br><input type="text" name="txtclave" required></td>
<td style="border-bottom:groove"><font color="#FFFFFF"><center> CORREO </font><br><input type="text" name="txtcorreo" required value="<?php echo $dato["correo"]; ?>"></td>
<tr height="60"><td style="border-bottom:groove" colspan="3"><center><font color="#FFFFFF"><center> TIPO <br><input type="radio" name="rbusuario" value="ADMINISTRADOR" required <?php if($dato["tipo"]=="ADMINISTRADOR") echo "checked"; ?> >ADMINISTRADOR / <input type="radio" name="rbusuario" value="USUARIO" required <?php if($dato["tipo"]=="USUARIO") echo "checked"; ?>> USUARIO / 
<input type="radio" name="rbusuario" value="VISTA" required <?php if($dato["tipo"]=="VISTA") echo "checked"; ?>> VISTA </td> </tr>
<tr height="45"><td style="border-bottom:groove;alignment-baseline:middle" colspan="3"><center><input class="actualizar" type="submit" width="40px" value="       " >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="limpiar" type="reset" value="       "></td></tr></table>
</form>
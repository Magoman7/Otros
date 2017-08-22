<?php
include("Cabecera.php");
?>
<style type="text/css">
.guardar
{background-image: url(../Imagenes/guarda.jpg); background-repeat:no-repeat width: 40px; height: 40px; border-width: 0}
.limpiar
{background-image: url(../Imagenes/limpiar.png); background-repeat:no-repeat width: 40px; height: 40px; border-width: 0}
</style>
<tr><td>
<form action="InsertarUsuario.php" method="post">
<table style="border:groove" style="border-bottom:groove" align="center" width="100%" bgcolor="#333333">
<tr style="background: #070707;background: -moz-linear-gradient(top, #262626 0%, #070707 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);background: -o-linear-gradient(top, #262626 0%, #070707 100%);background: -ms-linear-gradient(top, #262626 0%, #070707 100%);background: linear-gradient(to bottom, #262626 0%, #070707 100%);"><td colspan="3" style="border-bottom:groove"><font size="6" color="#FFF"><center>Registro de Usuarios<br /></font></td></tr>
<tr><td style="border-bottom:groove"><font color="#FFFFFF"><center> USUARIO </font><br><input type="text" name="txtusuario" required></td>
<td height="50" style="border-bottom:groove"><font color="#FFFFFF"><center> CLAVE </font><br><input type="text" name="txtclave" required></td>
<td style="border-bottom:groove"><font color="#FFFFFF"><center> CORREO </font><br><input type="text" name="txtcorreo" required></td>
<tr><td height="45" colspan="3" style="border-bottom:groove"><center><font color="#FFFFFF"><center> TIPO <br><input type="radio" name="rbusuario" value="ADMINISTRADOR" required>ADMINISTRADOR / <input type="radio" name="rbusuario" value="USUARIO" required> USUARIO / 
<input type="radio" name="rbusuario" value="VISTA" required> VISTA </td> </tr>
<tr height="45"><td style="border-bottom:groove;alignment-baseline:middle" colspan="3"><center><input class="guardar" type="submit" width="40px" value="       " >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="limpiar" type="reset" value="       "></td></tr></table>
</form>
</td></tr></table>
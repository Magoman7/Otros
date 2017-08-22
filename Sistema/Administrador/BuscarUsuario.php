<?php
include("Cabecera.php");
?>
<style type="text/css">
.buscar
{background-image: url(../Imagenes/buscar.png); background-repeat:no-repeat width: 40px; height: 40px; border-width: 0}
.limpiar
{background-image: url(../Imagenes/limpiar.png); background-repeat:no-repeat width: 40px; height: 40px; border-width: 0}
</style>
<tr><td>
<form action="ActualizarUsuario.php" method="post">
<table style="border:groove" style="border-bottom:groove" align="center" width="100%" bgcolor="#333333">
<tr style="background: #070707;background: -moz-linear-gradient(top, #262626 0%, #070707 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);background: -o-linear-gradient(top, #262626 0%, #070707 100%);background: -ms-linear-gradient(top, #262626 0%, #070707 100%);background: linear-gradient(to bottom, #262626 0%, #070707 100%);"><td style="border-bottom:groove"><font size="6" color="#FFF"><center>Buscar Usuario a Modificar</td></tr>
<tr height="55"><td style="border-bottom:groove;alignment-baseline:middle"><font color="#FFFFFF"><center>Usuario</font><br><input type="text" name="txtusuario" required><br></td></tr>
<tr height="45"><td style="border-bottom:groove;alignment-baseline:middle"><center><input class="buscar" type="submit" width="40px" value="       " >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="limpiar" type="reset" value="       "></td></tr></table>
</form>
</body>
</html>
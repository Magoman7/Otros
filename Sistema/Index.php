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
<?php } ?>
<center> <img src="Imagenes/Logo.jpg" width="100%" height="80px">

<body background="Imagenes/prueba02.jpeg">
<style type="text/css">
clasee {
	font-family: Tahoma, Geneva, sans-serif;
}
#form1 table tr td #enviar {
	font-family: Tahoma, Geneva, sans-serif;
	font-weight: bold;
}
</style>
<br><CENTER> <font size="5" color="#FFF"><br> 
SISTEMA DE INFORMACION PARA EL CONTROL <br>DE EXAMENES MEDICOS EN EL BANCO DE SANGRE <br>DEL HOSPITAL LUIS RAZZETI BARINAS </font>
        <form id="form1" name="form1" method="post" action="verifica.php">
          <br><table width="431" height="138" border="0" align="center">
            <tr>
              <td width="132" align="right" style="font-family: Tahoma, Geneva, sans-serif; font-size: 11pt; font-weight: bold;"><font color="#FFF"> Usuario </td>
              <td width="276" style="font-size: 9px" height="40"><input type="text" name="txtusuario" required maxlength="20"><span class="textfieldRequiredMsg"><font size='3' color="#FFF"> **</font></span></span></td>
              </tr>
            <tr>
              <td align="right" style="font-family: Tahoma, Geneva, sans-serif; font-size: 11pt;
font-weight: bold;"><font color="#FFF"> Clave</td>
              <td style="font-size: 11pt"><input type="password" name="txtclave" required maxlength="20"><span class="textfieldRequiredMsg"><font size='3' color="#FFF"> **</span></span></td>
            </tr>
            <tr>            
                  <td align="center" colspan="3"><br>
<input type="submit" name="enviar" id="enviar" style="font-size:17px" value="Enviar" />
<input type="reset" name="limpiar" id="limpiar" style="font-size:17px" value="Limpiar"/>
</tr>
</table>
</form><CENTER> <font size="3" color="#FFF" style="animation-play-state:running"> LOS DATOS MARCADOS CON * SON OBLIGATORIOS
</body>
</html>
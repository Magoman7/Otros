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
<form name="RegistroDatosDonate" method="post" action="InsertarDonante.php"> 
<table style="border:groove" style="border-bottom:groove" align="center" width="100%" bgcolor="#333333">
<tr style="background: #070707;background: -moz-linear-gradient(top, #262626 0%, #070707 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);background: -o-linear-gradient(top, #262626 0%, #070707 100%);background: -ms-linear-gradient(top, #262626 0%, #070707 100%);background: linear-gradient(to bottom, #262626 0%, #070707 100%);"><td style="border-bottom:groove" colspan="4"><font size="6" color="#FFF"><center>Registro de Donantes</td></tr>
<tr><td style="border-bottom:groove"><font size="4" color="#FFF"><center>Cedula<br><input type="text" name="txtcedula" required maxlength="20" autofocus style="font-size:15px"></td>
    <td style="border-bottom:groove"><font size="4" color="#FFF"><center>Nombre<br><input type="text" name="txtnombre" required maxlength="20" style="font-size:15px"></td>
    <td style="border-bottom:groove"><font size="4" color="#FFF"><center>Apellido<br><input type="text" name="txtapellido" required maxlength="20" style="font-size:15px"></td>
    <td style="border-bottom:groove"><font size="4" color="#FFF"><center>Direccion<br><input type="text" name="txtdireccion" required maxlength="40" style="font-size:15px"></td></tr>
<tr><td style="border-bottom:groove"><font size="4" color="#FFF"><center>Fecha De Nacimiento<br><input type="text" name="txtfecha" required maxlength="10" placeholder="DD-MM-AAAA" style="font-size:15px"></td>
    <td style="border-bottom:groove"><font size="4" color="#FFF"><center>Lugar De Nacimiento<br><input type="text" name="txtlugardenacimiento" required maxlength="20" style="font-size:15px"></td>
    <td style="border-bottom:groove"><font size="4" color="#FFF"><center>Telefono<br><input type="text" name="txttelefono" required maxlength="20" style="font-size:15px"></td>
<td style="border-bottom:groove;"><font size="3" color="#FFF"><center>Sexo<br>
                    <input type="radio" name="rbsexo" value="Masculino" required>Masculino
                    <input type="radio" name="rbsexo" value="Femenino">Femenino</td></tr>
<tr><td style="border-bottom:groove"><font size="4" color="#FFF"><center>Profesion<br><input type="text" name="txtprofesion" required maxlength="20" style="font-size:15px"></td>
    <td style="border-bottom:groove;"><font size="4" color="#FFF"><center>Ocupacion Actual<br><input type="text" name="txtocupacion" required maxlength="20" style="font-size:15px"></td>
    <td style="border-bottom:groove;alignment-baseline:middle" colspan="2"><center>
    <input class="guardar" type="submit" width="40px" value="       " >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="limpiar" type="reset" value="       "></td></tr>
</table>
</form>
</td></tr></table>
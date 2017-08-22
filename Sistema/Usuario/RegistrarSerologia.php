<?php include("Cabecera.php"); ?>
<?php include("../conexion.php");
date_default_timezone_set('UTC');
?>
<style type="text/css">
.guardar
{background-image: url(../Imagenes/guarda.jpg); background-repeat:no-repeat width: 40px; height: 40px; border-width: 0}
.limpiar
{background-image: url(../Imagenes/limpiar.png); background-repeat:no-repeat width: 40px; height: 40px; border-width: 0}
</style>
<tr><td>
<form action="InsertarSerologia.php" method="post">
<table style="border:groove" style="border-bottom:groove" align="center" width="100%" bgcolor="#333333">
<tr style="background: #070707;background: -moz-linear-gradient(top, #262626 0%, #070707 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);background: -o-linear-gradient(top, #262626 0%, #070707 100%);background: -ms-linear-gradient(top, #262626 0%, #070707 100%);background: linear-gradient(to bottom, #262626 0%, #070707 100%);"><td colspan="3" style="border-bottom:groove"><font size="6" color="#FFF"><center>Registro de Serología</td></tr>
<tr><td style="border-bottom:groove"><font size="4" color="#FFF"><center>Cedula<br><input type="text" name="txtcedula" required maxlength="20" autofocus></td>
<td style="border-bottom:groove"><font size="4" color="#FFF"><center>Tipo De Sangre<br><input type="text" name="txttiposangre" required maxlength="30" style="width:220px"></td>
<td style="border-bottom:groove"><font size="4" color="#FFF"><center>Tipo de Donación:<br />Voluntario <input type="radio" name="rbdonacion" value="Voluntaria" required>
/ Paciente <input type="radio" name="rbdonacion" value="Obligado"></td></tr>
<tr><td style="border-bottom:groove"><font size="4" color="#FFF"><center>Fecha Examen<br><input type="text" name="txtfecha" value="<?php echo date("d-m-Y",time()-16200); ?>" required maxlength="10" style="width:120px"></td>
<td style="border-bottom:groove"><font size="4" color="#FFF"><center>Lugar<br><input type="text" name="txtdestino" required maxlength="30" style="width:220px"></td>
<td style="border-bottom:groove"><font size="4" color="#FFF"><center>Paciente<br><input type="text" name="txtpaciente" required maxlength="30" style="width:220px"></td>
</tr>
<tr>
<td height="35" colspan="4" style="border-bottom:groove"><font size="4" color="#FFF"><center><input type="checkbox" name="chbhiv" value="Hiv">HIV
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbhtiv111" value="Htiv1/11">HTIV 1/11
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbsifilis" value="Sifilis">SIFILIS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbhbsag" value="HbsAg">HBSAG
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbdepranocitos" value="Depranocitos">DEPRANOCITOS</td></tr>
<tr><td height="35" colspan="5" style="border-bottom:groove"><font size="4" color="#FFF"><center>
<input type="checkbox" name="chbantihbcab" value="AntihbcAb">ANTI HBCAB	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbvdrl" value="Vdrl">VDRL
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbchagas" value="Chagas">CHAGAS
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbhcv" value="Hcv">HCV</td>
</tr>
<tr><td style="border-bottom:groove;alignment-baseline:middle" colspan="5"><center><input class="guardar" type="submit" width="40px" value="       " >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="limpiar" type="reset" value="       "></td></tr>
</table> 
</form>
</td></tr></table>
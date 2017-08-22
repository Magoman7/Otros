<?php include("Cabecera.php");
include("../conexion.php");
$conec=Conectarse();
if(!$conec) { ?>
<script type="text/javascript">alert("No Se Conecto");window.location="BuscarDonante.php";</script>
<?php exit();}
$cedula=$_POST["txtcedula"];
if(!is_numeric($cedula)) { ?>
<script type="text/javascript">alert("Cedula Invalida");window.location="BuscarDonante.php";</script> <?php exit(); }
$sql=mysql_query("select id, cedula, tipodedonacion, fecha, hiv, htiv, sifilis, vdrl, chagas, hcv, hbsag, antihbcab, depranocitos, paciente, destino from tserologia where cedula='$cedula' order by fecha desc",$conec);
$dato=mysql_fetch_array($sql);
$nfila=mysql_num_rows($sql);
$sql2=mysql_query("select tipo_sangre from tdonantes where cedula='$cedula'",$conec);
$dato2=mysql_fetch_array($sql2);
$nfila2=mysql_num_rows($sql2);
if($nfila<1) { ?>
<script type="text/javascript">alert("No se consiguio Donante");window.location="BuscarDonante.php";</script>
<?php exit(); }
?>
<style type="text/css">
.actualizar
{background-image: url(../Imagenes/actualizar.jpg); background-repeat:no-repeat width: 40px; height: 40px; border-width: 0}
.limpiar
{background-image: url(../Imagenes/limpiar.png); background-repeat:no-repeat width: 40px; height: 40px; border-width: 0}
</style>
<tr><td>
<form action="ModificarSerologia.php" method="post">
<table style="border:groove" style="border-bottom:groove" align="center" width="100%" bgcolor="#333333">
<tr style="background: #070707;background: -moz-linear-gradient(top, #262626 0%, #070707 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);background: -o-linear-gradient(top, #262626 0%, #070707 100%);background: -ms-linear-gradient(top, #262626 0%, #070707 100%);background: linear-gradient(to bottom, #262626 0%, #070707 100%);"><td colspan="3" style="border-bottom:groove"><font size="6" color="#FFF"><center>Edición de Serología</td></tr>
<tr><td style="border-bottom:groove"><font size="4" color="#FFF"><center>Cedula<br><input type="text" name="txtcedula" value="<?php echo $dato["cedula"] ?>" required maxlength="20" autofocus></td>
<td style="border-bottom:groove"><font size="4" color="#FFF"><center>Tipo De Sangre<br><input type="text" name="txttiposangre" value="<?php echo $dato2["tipo_sangre"] ?>" required maxlength="30" style="width:220px"></td>
<td style="border-bottom:groove"><font size="4" color="#FFF"><center>Tipo de Donación:<br />Voluntario <input type="radio" name="rbdonacion" <?php if($dato["tipodedonacion"]=="Voluntaria") echo "checked"; ?> value="Voluntaria" required>
/ Paciente <input type="radio" name="rbdonacion" <?php if($dato["tipodedonacion"]=="Obligado") echo "checked"; ?> value="Obligado"></td></tr>
<tr><td style="border-bottom:groove"><font size="4" color="#FFF"><center>Fecha Examen<br><input type="text" name="txtfecha" value="<?php echo date("d-m-Y",time($dato["fecha"])); ?>" required maxlength="10" style="width:120px"></td>
<td style="border-bottom:groove"><font size="4" color="#FFF"><center>Lugar<br><input type="text" name="txtdestino" value="<?php echo $dato["destino"]; ?>" required maxlength="30" style="width:220px"></td>
<td style="border-bottom:groove"><font size="4" color="#FFF"><center>Paciente<br><input type="text" name="txtpaciente" value="<?php echo $dato["paciente"]; ?>" required maxlength="30" style="width:220px"></td>
</tr>
<tr>
<td height="35" colspan="4" style="border-bottom:groove"><font size="4" color="#FFF"><center><input type="checkbox" name="chbhiv" value="Hiv" <?php if($dato["hiv"]=="Si") echo "checked"; ?>>HIV
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbhtiv111" value="htiv111" <?php if($dato["hiv"]=="Si") echo "checked"; ?> >HTIV 1/11
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbsifilis" <?php if($dato["sifilis"]=="Si") echo "checked"; ?> value="Sifilis">SIFILIS &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbhbsag" <?php if($dato["hbsag"]=="Si") echo "checked"; ?>  value="HbsAg">HBSAG
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbdepranocitos" <?php if($dato["depranocitos"]=="Si") echo "checked"; ?>  value="Depranocitos">DEPRANOCITOS</td></tr>
<tr><td height="35" colspan="5" style="border-bottom:groove"><font size="4" color="#FFF"><center>
<input type="checkbox" name="chbantihbcab" <?php if($dato["antihbcab"]=="Si") echo "checked"; ?>  value="AntihbcAb">ANTI HBCAB	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbvdrl" <?php if($dato["vdrl"]=="Si") echo "checked"; ?>  value="Vdrl">VDRL
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbchagas" <?php if($dato["chagas"]=="Si") echo "checked"; ?>  value="Chagas">CHAGAS
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="chbhcv" <?php if($dato["hcv"]=="Si") echo "checked"; ?>  value="Hcv">HCV</td>
</tr>
<tr><td style="border-bottom:groove;alignment-baseline:middle" colspan="5"><center><input class="actualizar" type="submit" width="40px" value="       " >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="limpiar" type="reset" value="       "></td></tr>
</table> 
<input type="hidden" name="id" value="<?php echo $dato["id"]; ?>">
</form>
</td></tr></table>
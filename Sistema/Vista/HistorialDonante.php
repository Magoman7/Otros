<?php 
include("Cabecera.php");
include("../conexion.php");
$conec=Conectarse();
if(!$conec) { ?>
<script type="text/javascript">alert("No Se Conecto");window.location.href="PlanillaABuscar.php";</script>
<?php exit();} 
?>
<?php
$cedula=$_POST["txtcedula"];
if(!is_numeric($cedula)) { ?>
<script type="text/javascript">alert("Cedula Invalida");window.location="PlanillaABuscar.php";</script> <?php exit(); }
$sql=mysql_query("select cedula,nombre,apellido,direccion,fechadenacimiento,lugardenacimiento,telefono,profesion,ocupacion,sexo,tipo_sangre from tdonantes where cedula='$cedula'",$conec);
$dato=mysql_fetch_array($sql);
$nfila=mysql_num_rows($sql);
if($nfila<1) { ?>
<script type="text/javascript">alert("Cédula No Registrada");window.location="PlanillaABuscar.php";</script>
<?php
exit(); }
$sql2=mysql_query("select tipodedonacion,fecha,destino,paciente,hiv,htiv,sifilis,vdrl,chagas,hcv,hbsag,antihbcab,depranocitos from tserologia where cedula='$cedula' order by fecha desc",$conec);
$dato2=mysql_fetch_array($sql2);
?>
<style media='print' type="text/css">
#btnimprimir {
visibility:hidden
}
</style>
<style type="text/css">
.imprimir
{background-image: url(../Imagenes/imprimir.png); background-repeat:no-repeat width: 64px; height: 64px; border-width: 0}
.regresar
{background-image: url(../Imagenes/regresar.png); background-repeat:no-repeat width: 64px; height: 64px; border-width: 0}
</style>
<tr><td>
<table style="border:groove" style="border-bottom:groove" align="center" width="100%" bgcolor="#333333">
<tr style="background: #070707;background: -moz-linear-gradient(top, #262626 0%, #070707 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);background: -o-linear-gradient(top, #262626 0%, #070707 100%);background: -ms-linear-gradient(top, #262626 0%, #070707 100%);background: linear-gradient(to bottom, #262626 0%, #070707 100%);" height="40"><td colspan="4" style="border-bottom:groove"><font size="5" color="#FFF"><center>Historial Serología del Paciente</td></tr>
<tr>
<td><font size="4" color="#FFFFFF">Cedula -&nbsp;<?php echo $dato['cedula']; ?></td>
<td><font size="4" color="#FFFFFF">Nombre -&nbsp;<?php echo $dato['nombre']; ?></td>
<td><font size="4" color="#FFFFFF">Apellido -&nbsp;<?php echo $dato['apellido']; ?></td>
<td><font size="4" color="#FFFFFF">Apellido -&nbsp;<?php echo $dato['tipo_sangre']; ?></td>
</tr>
<tr>
<td><font size="4" color="#FFFFFF">Telefono -&nbsp;<?php echo $dato['telefono']; ?></td>
<td><font size="4" color="#FFFFFF">Nacimiento -&nbsp;<?php echo date("d/m/Y",strtotime($dato['fechadenacimiento'])); ?></td>
<td><font size="4" color="#FFFFFF">Lugar De Nac. -&nbsp;<?php echo $dato['lugardenacimiento']; ?></td>
<td><font size="4" color="#FFFFFF">Sexo -&nbsp;<?php echo $dato['sexo']; ?></td> </tr>
<tr>
<td><font size="4" color="#FFFFFF">Profesion - &nbsp;<?php echo $dato['profesion']; ?></td>
<td><font size="4" color="#FFFFFF">Ocupacion - &nbsp;<?php echo $dato['ocupacion']; ?> </td>
<td><font size="4" color="#FFFFFF">Direccion - &nbsp;<?php echo $dato['direccion']; ?> </td>
</tr>
</table> 
<br />
<?php do { ?>
<table style="border:groove" style="border-bottom:groove" align="center" width="100%" bgcolor="#333333">
<tr>
<td><font size="4" color="#FFFFFF">Tipo de Donación -&nbsp;<?php echo $dato2['tipodedonacion']; ?></td>
<td><font size="4" color="#FFFFFF">Fecha -&nbsp;<?php echo date("d/m/Y",strtotime($dato2['fecha'])); ?></td></tr>
<tr><td><font size="4" color="#FFFFFF">Lugar -&nbsp;<?php echo $dato2['destino']; ?></td>
<td><font size="4" color="#FFFFFF">Paciente -&nbsp;<?php echo $dato2['paciente']; ?></td>
</tr>
<tr>
<td colspan="2"><font size="4" color="#FFFFFF">HIV -&nbsp;<?php echo $dato2['hiv']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
HTIV 1/11 -&nbsp;<?php echo $dato2['htiv']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Sifilis -&nbsp;<?php echo $dato2['sifilis']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
HBSAG -&nbsp;<?php echo $dato2['vdrl']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
HCV - &nbsp;<?php echo $dato2['hcv']; ?></td> </tr>
<tr><td colspan="2"> 
<font size="4" color="#FFFFFF">Depranocitos - &nbsp;<?php echo $dato2['depranocitos']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Anti HBCAB - &nbsp;<?php echo $dato2['antihbcab']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
VDRL - &nbsp;<?php echo $dato2['vdrl']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Chagas - &nbsp;<?php echo $dato2['chagas']; ?></td></tr>
</table>
<?php  } while($dato2=mysql_fetch_array($sql2)); ?>
<center><br />
<input type="button" name="btnimprimir" value="             " class="imprimir"  id="btnimprimir" onClick="javascript:window.print()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" name="btnregresar" value="             " class="regresar" id="btnimprimir" onClick="location.href='HistorialABuscar.php'"> 
</td></tr></table> 
<?php 
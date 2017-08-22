<?php 
include("Cabecera.php");
include("../conexion.php");
$conec=Conectarse();
if(!$conec) { ?>
<script type="text/javascript">alert("No Se Conecto");window.location.href="BuscarDonante1.php";</script>
<?php exit();} 
$cedula=$_POST["txtcedula"];
if(!is_numeric($cedula)) { ?>
<script type="text/javascript">alert("Cedula Invalida");window.location="BuscarDonante1.php";</script> <?php exit(); }
$sql=mysql_query("select cedula,nombre,apellido,direccion,fechadenacimiento,lugardenacimiento,telefono,profesion,ocupacion,sexo from tdonantes where cedula='$cedula'",$conec);
$dato=mysql_fetch_array($sql);
$nfila=mysql_num_rows($sql);
if($nfila<1) { ?>
<script type="text/javascript">alert("Cédula No Registrado");window.location="BuscarDonante1.php";</script>
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
<form action="ModificarDonante.php" method="post">
<table style="border:groove" style="border-bottom:groove" align="center" width="100%" bgcolor="#333333">
<tr style="background: #070707;background: -moz-linear-gradient(top, #262626 0%, #070707 100%);background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #262626), color-stop(100%, #070707));background: -webkit-linear-gradient(top, #262626 0%, #070707 100%);background: -o-linear-gradient(top, #262626 0%, #070707 100%);background: -ms-linear-gradient(top, #262626 0%, #070707 100%);background: linear-gradient(to bottom, #262626 0%, #070707 100%);"><td style="border-bottom:groove" colspan="4"><font size="6" color="#FFF"><center>Edición de Donantes</td></tr>
<tr><td style="border-bottom:groove"><font size="4" color="#FFF"><center>Cedula<br><input type="text" name="txtcedula" value="<?php echo $dato["cedula"]; ?>" required="required" maxlength="20" autofocus readonly="readonly" style="font-size:15px"></td>
    <td style="border-bottom:groove"><font size="4" color="#FFF"><center>Nombre<br><input type="text" name="txtnombre" value="<?php echo $dato["nombre"]; ?>" required="required" maxlength="20" style="font-size:15px"></td>
    <td style="border-bottom:groove"><font size="4" color="#FFF"><center>Apellido<br><input type="text" name="txtapellido" value="<?php echo $dato["apellido"]; ?>" required="required" maxlength="20" style="font-size:15px"></td>
    <td style="border-bottom:groove"><font size="4" color="#FFF"><center>Direccion<br><input type="text" name="txtdireccion" value="<?php echo $dato["direccion"]; ?>" required="required" maxlength="20" style="font-size:15px"></td></tr>
<tr><td style="border-bottom:groove"><font size="4" color="#FFF"><center>Fecha De Nacimiento<br><input type="text" name="txtfechadenacimiento" value="<?php echo date("d-m-Y",strtotime($dato["fechadenacimiento"])); ?>" required="required" maxlength="10" placeholder="DD-MM-AAAA" style="font-size:15px"></td> 
    <td style="border-bottom:groove"><font size="4" color="#FFF"><center>Lugar De Nacimiento<br><input type="text" name="txtlugardenacimiento" value="<?php echo $dato["lugardenacimiento"]; ?>" required="required" maxlength="20" style="font-size:15px"></td>
    <td style="border-bottom:groove"><font size="4" color="#FFF"><center>Telefono<br><input type="text" name="txttelefono" value="<?php echo $dato["telefono"]; ?>" required="required" maxlength="20" style="font-size:15px"></td>
<td style="border-bottom:groove;"><font size="3" color="#FFF"><center>Sexo<br>
                    <input type="radio" name="rbsexo" value="Masculino" required="required" <?php if($dato["sexo"]=="Masculino") echo "checked" ?> >Masculino
                    <input type="radio" name="rbsexo" value="Femenino" <?php if($dato["sexo"]=="Femenino") echo "checked" ?>>Femenino</td></tr>
<tr><td style="border-bottom:groove"><font size="4" color="#FFF"><center>Profesion<br><input type="text" name="txtprofesion" value="<?php echo $dato["profesion"]; ?>" required="required" maxlength="20" style="font-size:15px"></td>
    <td style="border-bottom:groove;"><font size="4" color="#FFF"><center>Ocupacion Actual<br><input type="text" name="txtocupacion" value="<?php echo $dato["ocupacion"]; ?>" required="required" maxlength="20" style="font-size:15px"></td>
<td style="border-bottom:groove;alignment-baseline:middle" colspan="2"><center><input class="actualizar" type="submit" width="40px" value="       " >
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="limpiar" type="reset" value="       "></td></tr>
</table>
</td></tr></table>
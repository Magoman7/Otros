<?php include("Cabecera.php");
include("../conexion.php");
$conec=Conectarse();
if(!$conec) { ?>
<script type="text/javascript">alert("No Se Conecto");window.location.href="BuscarDonante1.php";</script>
<?php exit();}
$cedula=$_POST["txtcedula"];
$nombre=$_POST["txtnombre"];
$apellido=$_POST["txtapellido"];
$direccion=$_POST["txtdireccion"];
$fechadenacimiento=$_POST["txtfechadenacimiento"];
$fechadenacimiento=date("Y-m-d",strtotime($fechadenacimiento));
$lugardenacimiento=$_POST["txtlugardenacimiento"];
$telefono=$_POST["txttelefono"];
$profesion=$_POST["txtprofesion"];
$ocupacion=$_POST["txtocupacion"];
$sexo=$_POST["rbsexo"];
if(!is_numeric($cedula)) { ?>
<script type="text/javascript">alert("Cedula Invalida");window.location="BuscarDonante1.php";</script> <?php exit(); }
if(!ctype_alpha($nombre)) { ?>
<script type="text/javascript">alert("Nombre Invalido");window.location="BuscarDonante1.php";</script> <?php exit(); }
if(!ctype_alpha($apellido)) { ?>
<script type="text/javascript">alert("Apellido Invalido");window.location="BuscarDonante1.php";</script> <?php exit(); }
if(!ctype_alnum($direccion)) { ?>
<script type="text/javascript">alert("Dirección Invalido");window.location="BuscarDonante1.php";</script> <?php exit(); }
if(!ctype_alnum($lugardenacimiento)) { ?>
<script type="text/javascript">alert("Lugar de Nacimiento Invalido");window.location="BuscarDonante1.php";</script> <?php exit(); }
if(!is_numeric($telefono)) { ?>
<script type="text/javascript">alert("Telefono Invalido");window.location="BuscarDonante1.php";</script> <?php exit(); }
if(!ctype_alpha($profesion)) { ?>
<script type="text/javascript">alert("Profesión Invalida");window.location="BuscarDonante1.php";</script> <?php exit(); }
if(!ctype_alpha($ocupacion)) { ?>
<script type="text/javascript">alert("Ocupación Invalida");window.location="BuscarDonante1.php";</script> <?php exit(); }
mysql_query("update tdonantes set cedula='$cedula',nombre='$nombre',apellido='$apellido',direccion='$direccion', fechadenacimiento='$fechadenacimiento', lugardenacimiento='$lugardenacimiento', telefono='$telefono', profesion='$profesion', ocupacion='$ocupacion', sexo='$sexo' where cedula='$cedula'",$conec);
$my_error = mysql_error($conec);		
if(!empty($my_error)) { ?>
<script type="text/javascript">alert("No se actualizó el Donante");window.location.href="BuscarDonante1.php";</script>
<?php exit(); }
else { ?>
<script type="text/javascript">alert("Donante Actualizado");window.location.href="BuscarDonante1.php";</script>
<?php
}
?>
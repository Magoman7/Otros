<?php include("Cabecera.php");
include("../conexion.php");
$conec=Conectarse();
if(!$conec) { ?>
<script type="text/javascript">alert("Error al conectar");window.location="RegistroDatosDonantes.php";</script>
<?php exit(); }
if (!is_numeric($_POST["txtcedula"])) {
?>
<script type="text/javascript">alert("La Cédula debe ser númerica");window.location="RegistroDatosDonantes.php";</script>
<?php exit(); }
$cedula=$_POST["txtcedula"];
$nombre=$_POST["txtnombre"];
$apellido=$_POST["txtapellido"];
$direccion=$_POST["txtdireccion"];
$fechadenacimiento=$_POST["txtfecha"];
$fechadenacimiento=date("Y-m-d",strtotime($fechadenacimiento));
$lugardenacimiento=$_POST["txtlugardenacimiento"];
$telefono=$_POST["txttelefono"];
$profesion=$_POST["txtprofesion"];
$ocupacion=$_POST["txtocupacion"];
$sexo=$_POST["rbsexo"];
if(!is_numeric($cedula)) { ?>
<script type="text/javascript">alert("Cedula Invalida");window.location="RegistroDatosDonantes.php";</script> <?php exit(); }
if(!ctype_alpha($nombre)) { ?>
<script type="text/javascript">alert("Nombre Invalido");window.location="RegistroDatosDonantes.php";</script> <?php exit(); }
if(!ctype_alpha($apellido)) { ?>
<script type="text/javascript">alert("Apellido Invalido");window.location="RegistroDatosDonantes.php";</script> <?php exit(); }
if(!ctype_alnum($direccion)) { ?>
<script type="text/javascript">alert("Dirección Invalido");window.location="RegistroDatosDonantes.php";</script> <?php exit(); }
if(!ctype_alnum($lugardenacimiento)) { ?>
<script type="text/javascript">alert("Lugar de Nacimiento Invalido");window.location="RegistroDatosDonantes.php";</script> <?php exit(); }
if(!is_numeric($telefono)) { ?>
<script type="text/javascript">alert("Telefono Invalido");window.location="RegistroDatosDonantes.php";</script> <?php exit(); }
if(!ctype_alpha($profesion)) { ?>
<script type="text/javascript">alert("Profesión Invalida");window.location="RegistroDatosDonantes.php";</script> <?php exit(); }
if(!ctype_alpha($ocupacion)) { ?>
<script type="text/javascript">alert("Ocupación Invalida");window.location="RegistroDatosDonantes.php";</script> <?php exit(); }
$sql=mysql_query("select cedula from tdonantes where cedula='$cedula'",$conec);
$nfila=mysql_num_rows($sql);
if($nfila>0) { ?>
<script type="text/javascript">alert("Cedula ya registrada");window.location="RegistroDatosDonantes.php";</script>
<?php
exit(); }
mysql_query("insert into tdonantes values ('id','$cedula','$nombre','$apellido', '$direccion', '$fechadenacimiento', '$lugardenacimiento', '$telefono', '$profesion', '$ocupacion', '$sexo','')",$conec);
$sqlerror=mysql_error($conec);
if(!empty($sqlerror)) { ?>
<script type="text/javascript">alert("No se registro");window.location="RegistroDatosDonantes.php";</script>
<?php }
else { ?>
<script type="text/javascript">alert("Donante Registrado");window.location="RegistroDatosDonantes.php";</script>
<?php
}
?>
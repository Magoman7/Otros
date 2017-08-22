<?php include("Cabecera.php");
include("../conexion.php");
$conec=Conectarse();
if(!$conec) { ?>
<script type="text/javascript">alert("Error al conectar");window.location="RegistrarSerologia.php";</script>
<?php exit(); }
if (!is_numeric($_POST["txtcedula"])) {
?>
<script type="text/javascript">alert("La Cédula debe ser Númerica");window.location="RegistrarSerologia.php";</script>
<?php exit(); }
$cedula=$_POST["txtcedula"];
if(!is_numeric($cedula)) { ?>
<script type="text/javascript">alert("Cedula Invalida");window.location="RegistrarSerologia.php";</script> <?php exit(); }
$sql=mysql_query("select cedula from tdonantes where cedula='$cedula'",$conec);
$nfila=mysql_num_rows($sql);
if($nfila<1) { ?>
<script type="text/javascript">alert("Cedula NO Registrada");window.location="RegistrarSerologia.php";</script>
<?php
exit(); }
$donacion=$_POST["rbdonacion"];
$fecha=date("Y-m-d",strtotime($_POST["txtfecha"]));
$tiposangre=$_POST["txttiposangre"];
$destino=$_POST["txtdestino"];
$paciente=$_POST["txtpaciente"];
if(!ctype_alnum($destino)) { ?>
<script type="text/javascript">alert("Lugar Invalido");window.location="RegistrarSerologia.php";</script> <?php exit(); }
if(!ctype_alnum($paciente)) { ?>
<script type="text/javascript">alert("Destino Invalido");window.location="RegistrarSerologia.php";</script> <?php exit(); }
if(isset($_POST["chbhiv"])) 
$hiv="Si";
else
$hiv="No";
if(isset($_POST["chbhtiv111"])) 
$htiv="Si";
else
$htiv="No";
if(isset($_POST["chbsifilis"])) 
$sifilis="Si";
else
$sifilis="No";
if(isset($_POST["chbhbsag"])) 
$hbsag="Si";
else
$hbsag="No";
if(isset($_POST["chbdepranocitos"])) 
$depranocitos="Si";
else
$depranocitos="No";
if(isset($_POST["chbvdrl"])) 
$vdrl="Si";
else
$vdrl="No";
if(isset($_POST["chbchagas"])) 
$chagas="Si";
else
$chagas="No";
if(isset($_POST["chbhcv"])) 
$hcv="Si";
else
$hcv="No";
if(isset($_POST["chbantihbcab"])) 
$antihbcab="Si";
else
$antihbcab="No";
mysql_query("insert into tserologia values ('id','$cedula','$donacion','$fecha','$destino', '$paciente', '$hiv', '$htiv', '$sifilis', '$vdrl', '$chagas', '$hcv', '$hbsag', '$antihbcab', '$depranocitos')",$conec);
mysql_query("update tdonantes set tipo_sangre='$tiposangre' where cedula='$cedula'",$conec);
$sqlerror=mysql_error($conec);
if(!empty($sqlerror)) { ?>
<script type="text/javascript">alert("No se registro la Serología");window.location="RegistrarSerologia.php";</script>
<?php }
else { ?>
<script type="text/javascript">alert("Serología Registrado");window.location="RegistrarSerologia.php";</script>
<?php
}
?>
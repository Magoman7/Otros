<?php include("Cabecera.php");
include("../conexion.php");
$conec=Conectarse();
if(!$conec) { ?>
<script type="text/javascript">alert("No Se Conecto");window.location.href="BuscarDonante.php";</script>
<?php exit();}
$id=$_POST["id"];
$cedula=$_POST["txtcedula"];
$donacion=$_POST["rbdonacion"];
$fecha=date("Y-m-d",strtotime($_POST["txtfecha"]));
$tiposangre=$_POST["txttiposangre"];
$destino=$_POST["txtdestino"];
$paciente=$_POST["txtpaciente"];
if(!is_numeric($cedula)) { ?>
<script type="text/javascript">alert("Cedula Invalida");window.location="BuscarDonante.php";</script> <?php exit(); }
if(!ctype_alnum($destino)) { ?>
<script type="text/javascript">alert("Lugar Invalido");window.location="BuscarDonante.php";</script> <?php exit(); }
if(!ctype_alnum($paciente)) { ?>
<script type="text/javascript">alert("Destino Invalido");window.location="BuscarDonante.php";</script> <?php exit(); }
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
mysql_query("update tserologia set destino='$destino',paciente='$paciente',tipodedonacion='$donacion',fecha='$fecha', hiv='$hiv', htiv='$htiv', sifilis='$sifilis', vdrl='$vdrl', chagas='$chagas', hcv='$hcv', hbsag='$hbsag', antihbcab='$antihbcab',depranocitos='$depranocitos' where id='$id'",$conec);
mysql_query("update tdonantes set tipo_sangre='$tiposangre' where cedula='$cedula'",$conec);
$my_error = mysql_error($conec);		
if(!empty($my_error)) { ?>
<script type="text/javascript">alert("No se actualizó la Serología");window.location.href="BuscarDonante.php";</script>
<?php exit(); }
else { ?>
<script type="text/javascript">alert("Serología Actualizada");window.location.href="BuscarDonante.php";</script>
<?php
}
?>
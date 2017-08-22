<?php
function Conectarse()
{
if(!(@$conec=mysql_connect("localhost","root","emilio21262043"))) {
    echo"<center><font size='5'>No se conecto al servidor<br><a href='index.php'>Pagina principal</a>";
    exit();
}
if(!mysql_select_db("bdbancodesangre",$conec)) {
    echo"<center><font size='5'>No conecto a la base de datos<br><a href='index.php'>Pagina principal</a>";
    exit(); 
}
  return $conec;    
}
?>

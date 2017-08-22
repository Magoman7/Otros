<?php session_start(); ?>
<?php
unset($_SESSION["BANCO"]);
unset($_SESSION["TIPOBANCO"]);
session_destroy(); ?>
<script type="text/javascript">alert("sesion cerrada");window.location="index.php";</script>
<?php exit(); ?>

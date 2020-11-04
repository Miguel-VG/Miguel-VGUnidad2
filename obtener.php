<?php
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$nocontrol = $_POST['nocontrol'];
$rfc = $_POST['rfc'];
$curp = $_POST['curp'];
$correo = $_POST['correo'];
$especialidad = $_POST['especialidad'];
$grado = $_POST['grado'];
$grupo = $_POST['grupo'];
$domicilio = $_POST['domicilio'];
$colonia = $_POST['colonia'];
$codigopostal = $_POST['codigopostal'];



echo 'Tu nombre es: '. $nombre . '<br>';
echo 'Tu apellido paterno es: '. $paterno. '<br>';
echo 'Tu apellido materno es: '. $paterno. '<br>';
echo 'Tu numero de control es  : '. $nocontrol. '<br>';
echo 'Tu RFC es  : '. $rfc. '<br>';
echo 'Tu CURP es: '. $curp. '<br>';
echo 'Tu correo es: '. $correo. '<br>';
echo 'Tu especialidad es  : '. $especialidad. '<br>';
echo 'Tu grado es : '. $grado. '<br>';
echo 'Tu grupo es  : '. $grupo. '<br>';
echo 'Tu domicilio es : '. $domicilio. '<br>';
echo 'Tu colonia es : '. $colonia. '<br>';
echo 'Tu codigo postal es : '. $codigopostal. '<br>';
?>
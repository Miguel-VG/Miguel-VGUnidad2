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

echo '<br>';

//Acceder a los radios


if ($_REQUEST['radio1']== "opcion1") {
   echo 'Seleccionaste el mes de enero'. '<br>'; 
}
else if ($_REQUEST['radio1']== "opcion2"){
    echo'Seleccionaste el mes de febrero'. '<br>';
}
else if ($_REQUEST['radio1']== "opcion3"){
    echo'Seleccionaste el mes de marzo'. '<br>';
}
else if ($_REQUEST['radio1']== "opcion4"){
    echo'Seleccionaste el mes de abril'. '<br>';
}
else if ($_REQUEST['radio1']== "opcion5"){
    echo'Seleccionaste el mes de mayo'. '<br>';
}
else if ($_REQUEST['radio1']== "opcion6"){
    echo'Seleccionaste el mes de junio'. '<br>';
}
else if ($_REQUEST['radio1']== "opcion7"){
    echo'Seleccionaste el mes de julio'. '<br>';
}
else if ($_REQUEST['radio1']== "opcion8"){
    echo'Seleccionaste el mes de agosto'. '<br>';
}
else if ($_REQUEST['radio1']== "opcion9"){
    echo'Seleccionaste el mes de septiembre'. '<br>';
}
else if ($_REQUEST['radio1']== "opcion10"){
    echo'Seleccionaste el mes de octubre'. '<br>';
}
else if ($_REQUEST['radio1']== "opcion11"){
    echo'Seleccionaste el mes de noviembre'. '<br>';
}
else if ($_REQUEST['radio1']== "opcion12"){
    echo'Seleccionaste el mes de diciembre'. '<br>';
}

//Acceder a los checkbox

if (isset($_REQUEST['check1'])) {
echo 'Seleccionaste enereo' . '<br>';    
}
if (isset($_REQUEST['check2'])) {
echo 'Seleccionaste febrero' . '<br>';
}
if (isset($_REQUEST['check3'])) {
echo 'Seleccionaste Marzo' . '<br>';
}
if (isset($_REQUEST['check4'])) {
echo 'Seleccionaste Abril' . '<br>';
}
if (isset($_REQUEST['check5'])) {
echo 'Seleccionaste Mayo' . '<br>';
}
if (isset($_REQUEST['check6'])) {
echo 'Seleccionaste Junio' . '<br>';
}
if (isset($_REQUEST['check7'])) {
    echo 'Seleccionaste Julio' . '<br>';
    }
 if (isset($_REQUEST['check8'])) {
echo 'Seleccionaste agosto' . '<br>';
}
if (isset($_REQUEST['check9'])) {
echo 'Seleccionaste septiembre' . '<br>';
}
if (isset($_REQUEST['check10'])) {
echo 'Seleccionaste octubre' . '<br>';
}
if (isset($_REQUEST['check11'])) {
    echo 'Seleccionaste noviembre' . '<br>';
    }
 if (isset($_REQUEST['check12'])) {
        echo 'Seleccionaste diciembre' . '<br>';
        }



//accerder a los select

if($_REQUEST['seleccion']=="ninguna"){
  echo 'No seleccionaste ninguna opcion' . '<br>';  
}
else if ($_REQUEST['seleccion']== "seleccion1"){
    echo 'Tu opcion es enero'. '<br>';
}
else if ($_REQUEST['seleccion']== "seleccion2") {
 echo 'Tu opcion es febrero' . '<br>';   
}
else if ($_REQUEST['seleccion']== "seleccion3") {
    echo 'Tu opcion es marzo' . '<br>';   
   }
   else if ($_REQUEST['seleccion']== "seleccion4") {
 echo 'Tu opcion es abril' . '<br>' ;  
}
else if ($_REQUEST['seleccion']== "seleccion5") {
 echo 'Tu opcion es mayo' . '<br>';   
}
else if ($_REQUEST['seleccion']== "seleccion6") {
 echo 'Tu opcion es junio' . '<br>';   
}
else if ($_REQUEST['seleccion']== "seleccion7") {
 echo 'Tu opcion es julio' . '<br>';   
}
else if ($_REQUEST['seleccion']== "seleccion8") {
 echo 'Tu opcion es agosto' . '<br>' ;  
}
else if ($_REQUEST['seleccion']== "seleccion9") {
    echo 'Tu opcion es septiembre' . '<br>' ;  
   }
   else if ($_REQUEST['seleccion']== "seleccion10") {
    echo 'Tu opcion es octubre' . '<br>';   
   }
   else if ($_REQUEST['seleccion']== "seleccion11") {
    echo 'Tu opcion es noviembre' . '<br>' ;  
   }
   else if ($_REQUEST['seleccion']== "seleccion12") {
    echo 'Tu opcion es diciembre' . '<br>';   
   } 

?>


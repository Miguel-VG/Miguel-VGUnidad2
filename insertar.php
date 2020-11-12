<?php
//Realizar la conexion a la base de datos
//mysqli_connect (servidor, usuario, password, base de datos)
//die() mata la conexcion


$conectar = mysqli_connect("localhost","root","","alumnos") or die ("No se pudo conectar a la base de datos");


//Recuperar los datos

//datos(Tipo text)
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];


//dias(radios)

$dias = $_POST['dias'];
if($dias == "lunes"){
    $dia = "Lunes";
}
else if ($dias == "martes"){
    $dia = "Martes"; 
 }
else if ($dias == "miercoles"){
   $dia = "Miercoles"; 
}
else if ($dias == "jueves"){
    $dia = "Jueves"; 
 }
 else if ($dias == "viernes"){
    $dia = "Viernes"; 
 }
 else if ($dias == "sabado"){
    $dia = "Sabado"; 
 }
 else if ($dias == "domingo"){
    $dia = "Domingo"; 
 }


//meses(checkbox)

if(isset($_POST['enero'])){
    $mes = "Enero";
}
if(isset($_POST['febrero'])){
    $mes = "Febrero";
}
if(isset($_POST['marzo'])){
    $mes = "Marzo";
}
if(isset($_POST['abril'])){
    $mes = "Abril";
}
if(isset($_POST['mayo'])){
    $mes = "Mayo";
}
if(isset($_POST['junio'])){
    $mes = "Junio";
}
if(isset($_POST['julio'])){
    $mes = "Julio";
}
if(isset($_POST['agosto'])){
    $mes = "Agosto";
}
if(isset($_POST['septiembre'])){
    $mes = "Septiembre";
}
if(isset($_POST['octubre'])){
    $mes = "Octubre";
}
if(isset($_POST['noviembre'])){
    $mes = "Noviembre";
}
if(isset($_POST['diciembre'])){
    $mes = "Diciembre";
}



//horoscopos(Select)

if($_POST['horoscopos'] == "aries"){
    $horoscopo = "Aries";
}
else if($_POST['horoscopos'] == "tauro"){
    $horoscopo = "Tauro";
}
else if($_POST['horoscopos'] == "geminis"){
    $horoscopo = "Geminis";
}
else if($_POST['horoscopos'] == "cancer"){
    $horoscopo = "Cancer";
}
else if($_POST['horoscopos'] == "leo"){
    $horoscopo = "Leo";
}
else if($_POST['horoscopos'] == "virgo"){
    $horoscopo = "Virgo";
}
else if($_POST['horoscopos'] == "libra"){
    $horoscopo = "Libra";
}
else if($_POST['horoscopos'] == "escorpio"){
    $horoscopo = "Escorpio";
}
else if($_POST['horoscopos'] == "sagitario"){
    $horoscopo = "Sagitario";
}
else if($_POST['horoscopos'] == "capricornio"){
    $horoscopo = "Capricornio";
}
else if($_POST['horoscopos'] == "acuario"){
    $horoscopo = "Acuario";
}
else if($_POST['horoscopos'] == "piscis"){
    $horoscopo = "Piscis";
}

//vamos hacer el insert
//mysqli_query(conexion, query (insert))

mysqli_query($conectar,"insert into usuarios (id, nombre, usuario, password, dia, mes, horoscopo)
values
('null', '$nombre','$usuario','$password','$dia','$mes','$horoscopo')")
 or die("Problemas para hacer el INSERT" . mysqli_error($conectar));

//Cerramos conexion a la base de datos
mysqli_close($conectar);

//mensaje
echo "Se registro un nuevo usuario";




?>

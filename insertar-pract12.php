<?php


$conectar = mysqli_connect("localhost","root","","alumnos") or die ("No se pudo conectar a la base de datos");

//Recuperar los primeros datos 
$numcontrol = $_POST['numcontrol'];
$nombre = $_POST['nombre'];
$apellidopat = $_POST['apellidopat'];
$apellidomat = $_POST['apellidomat'];
$direccion = $_POST['direccion'];
$colonia = $_POST['colonia'];
$codigopost = $_POST['codigopost'];
$telefono = $_POST['telefono'];
$curp = $_POST['curp'];
$correo = $_POST['correo'];

//select grados

if($_POST['grados'] == "ninguna"){
    $grado = "No selecciono opcion";
}
else if($_POST['grados'] == "primero"){
    $grado = "Primero";
}
else if($_POST['grados'] == "segundo"){
    $grado = "Segundo";
}
else if($_POST['grados'] == "tercero"){
    $grado = "Tercero";
}
else if($_POST['grados'] == "cuarto"){
    $grado = "Cuarto";
}
else if($_POST['grados'] == "quinto"){
    $grado = "Quinto";
}
else if($_POST['grados'] == "sexto"){
    $grado = "Sexto";
}

//select especialidad
if($_POST['especialidades'] == "ninguna"){
    $especialidad = "No selecciono opcion";
}
else if($_POST['especialidades'] == "programacion"){
    $especialidad = "Programacion";
}
else if($_POST['especialidades'] == "soporte"){
    $especialidad = "Soporte";
}
else if($_POST['especialidades'] == "administracion"){
    $especialidad = "Adminstracion";
}
else if($_POST['especialidades'] == "contabilidad"){
    $especialidad = "Contabilidad";
}
else if($_POST['especialidades'] == "electronica"){
    $especialidad = "Electronica";
}

//select grupo

if($_POST['grupos'] == "ninguna"){
    $grado = "No selecciono opcion";
}
else if($_POST['grupos'] == "grupoa"){
    $grupo = "Grupo A";
}
else if($_POST['grupos'] == "grupob"){
    $grupo = "Grupo B";
}
else if($_POST['grupos'] == "grupoc"){
    $grupo = "Grupo C";
}
else if($_POST['grupos'] == "grupod"){
    $grupo = "Grupo D";
}
else if($_POST['grupos'] == "grupoe"){
    $grupo = "Grupo E";
}
else if($_POST['grupos'] == "grupof"){
    $grupo = "Grupo F";
}

$password = $_POST['password'];

mysqli_query($conectar,"insert into registro (id, no_control, nombre, paterno, materno, direccion, colonia, cp, telefono, curp, correo, especialidad, grado, grupo, password)
values
('null', '$numcontrol','$nombre','$apellidopat','$apellidomat','$direccion','$colonia','$codigopost', '$telefono', '$curp', '$correo', '$especialidad', '$grado', '$grupo', '$password' )")
 or die("Problemas para hacer el INSERT" . mysqli_error($conectar));

//Cerramos conexion a la base de datos
mysqli_close($conectar);

//mensaje
echo "Se registro un nuevo usuario";
?>
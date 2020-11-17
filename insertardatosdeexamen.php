<?php
$conectar = mysqli_connect("localhost","root","","miguel-vg") or die ("No se pudo conectar a la base de datos");

//Recuperar los primeros datos 
$clavemaestro = $_POST['clavemaestro'];
$nombre = $_POST['nombre'];
$apellidopat = $_POST['apellidopat'];
$apellidomat = $_POST['apellidomat'];
$domicilio = $_POST['domicilio'];
$colonia = $_POST['colonia'];
$codigopost = $_POST['codigopost'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$curp = $_POST['curp'];

//select profesion

if($_POST['profesiones'] == "ninguna"){
    $profesion = "No selecciono opcion";
}
else if($_POST['profesiones'] == "ingeniero"){
    $profesion = "Ingeniero";
}
else if($_POST['profesiones'] == "licenciado"){
    $profesion = "Licenciado";
}
else if($_POST['profesiones'] == "quimico"){
    $profesion = "Quimico";
}
else if($_POST['profesiones'] == "matematico"){
    $profesion = "Matematico";
}
else if($_POST['profesiones'] == "abogado"){
    $profesion = "Abogado";
}

//select materias

if($_POST['materias'] == "ninguna"){
    $materia = "No selecciono opcion";
}
else if($_POST['materias'] == "fisica"){
    $materia = "Fisica";
}
else if($_POST['materias'] == "quimica"){
    $materia = "Quimica";
}
else if($_POST['materias'] == "ecologia"){
    $materia = "Ecologia";
}
else if($_POST['materias'] == "programacion"){
    $materia = "Programacion";
}
else if($_POST['materias'] == "base-de-datos"){
    $materia = "Base de datos";
}

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

//select horas

if($_POST['horas'] == "ninguna"){
    $hora = "No selecciono opcion";
}
else if($_POST['horas'] == "10-11"){
    $hora = "10:00 - 11:00";
}
else if($_POST['horas'] == "11-12"){
    $hora = "11:00 - 12:00";
}
else if($_POST['horas'] == "12-13"){
    $hora = "12:00 - 13:00";
}
else if($_POST['horas'] == "13-14"){
    $hora = "13:00 - 14:00";
}
else if($_POST['horas'] == "14-15"){
    $hora = "14:00 - 15:00";
}

mysqli_query($conectar,"insert into miguel (clavedelmaestro, nombre, apellidopat, apellidomat, domicilio, colonia, codigopostal, telefono, correo, curp, profesion,  materia, grado, grupo, horaclase)
values
('null', '$nombre','$apellidopat','$apellidomat','$domicilio','$colonia','$codigopost', '$telefono', '$correo', '$curp', '$profesion', '$materia', '$grado', '$grupo', '$hora' )")
 or die("Problemas para hacer el INSERT" . mysqli_error($conectar));

//Cerramos conexion a la base de datos
mysqli_close($conectar);

//mensaje
echo "Se registro un nuevo usuario";
?>
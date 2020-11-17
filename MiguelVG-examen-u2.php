<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiguelVG-Examen-U2</title>
</head>
<body>
    <h1>Examen Unidad 2</h1> <br>
    <h1>Registro de maestros</h1>
<h1>Datos personales</h1>
    <form action= "insertardatosdeexamen.php" method="post">

    <input type="text" name="clavemaestro" placeholder="Clave del maestro"> 
    <input type="text" name="nombre" placeholder="Nombre"> 
    <input type="text" name="apellidopat" placeholder="Apellido Paterno"> 
    <input type="text" name="apellidomat" placeholder="Apellido materno"> 
    <input type="text" name="domicilio" placeholder="Domicilio"> 
    <input type="text" name="colonia" placeholder="colonia"> 
    <input type="text" name="codigopost" placeholder="Codigo postal"> 
    <input type="text" name="telefono" placeholder="Telefono"> 
    <input type="text" name="correo" placeholder="Correo electronico"> 
    <input type="text" name="curp" placeholder="CURP">
    
    <select name="profesiones">
    <option value="ninguna">Profesion del maestro:</option>
    <option value="ingeniero">Ingeniero</option>
    <option value="licenciado">Licenciado</option>
    <option value="quimico">Quimico</option>
    <option value="matematico">Matematico</option>
    <option value="abogado">Abogado</option>
    </select>

    <h1>Datos escolares</h1>

    <select name="materias">
    <option value="ninguna">Selecciona una materia</option>
    <option value="fisica">Fisica</option>
    <option value="quimica">Quimica</option>
    <option value="ecologia">Ecologia</option>
    <option value="programacion">Programacion</option>
    <option value="base-de-datos">Base de datos.</option>
    </select>

    <select name="grados">
    <option value="ninguna">Selecciona un grado</option>
    <option value="primero">Primero</option>
    <option value="segundo">Segundo</option>
    <option value="tercero">Tercero</option>
    <option value="cuarto">Cuarto</option>
    <option value="quinto">Quinto</option>
    <option value="sexto">Sexto</option>
    </select>
    <select name="grupos">
    <option value="ninguna">Selecciona un grupo</option>
    <option value="grupoa">Grupo A</option>
    <option value="grupob">Grupo B</option>
    <option value="grupoc">Grupo C</option>
    <option value="grupod">Grupo D</option>
    <option value="grupoe">Grupo E</option>
    <option value="grupof">Grupo F</option>
    </select>
    <select name="horas">
    <option value="ninguna">Hora de clase</option>
    <option value="10-11">10:00-11:00</option>
    <option value="11-12">11:00-12:00</option>
    <option value="12-13">12:00-13:00</option>
    <option value="13-14">13:00-14:00</option>
    <option value="14-15">14:00-15:00</option>
    </select>
     <br>
    <input class="boton" type="submit" value="Registrar">
    </form>
</body>
</html>
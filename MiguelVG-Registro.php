<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 12</title>
</head>
<body>

<section>
        <h1>Registro de usuarios</h1>
        <article>
        <h1>Formulario de registro de usuarios</h1>
            <div>
<h1>Datos personales</h1>
    <form action= "insertar-pract12.php" method="post">

    <input type="text" name="numcontrol" placeholder="No. de control"> 
    <input type="text" name="nombre" placeholder="Nombre"> 
    <input type="text" name="apellidopat" placeholder="Apellido Paterno"> 
    <input type="text" name="apellidomat" placeholder="Apellido materno"> 
    <input type="text" name="direccion" placeholder="Direccion"> 
    <input type="text" name="colonia" placeholder="colonia"> 
    <input type="text" name="codigopost" placeholder="Codigo postal"> 
    <input type="text" name="telefono" placeholder="Telefono"> 
    <input type="text" name="curp" placeholder="CURP">
    
    <h1>Datos escolares</h1>
    <input type="text" name="correo" placeholder="Correo electronico"> 

    <select name="grados">
    <option value="ninguna">Selecciona tu grado</option>
    <option value="primero">Primero</option>
    <option value="segundo">Segundo</option>
    <option value="tercero">Tercero</option>
    <option value="cuarto">Cuarto</option>
    <option value="quinto">Quinto</option>
    <option value="sexto">Sexto</option>
    </select>
    <select name="especialidades">
    <option value="ninguna">Selecciona tu especialidad</option>
    <option value="programacion">Programacion</option>
    <option value="soporte">Soporte</option>
    <option value="administracion">Administracion</option>
    <option value="contabilidad">Contabilidad</option>
    <option value="electronica">Electronica</option>
    </select>
    <select name="grupos">
    <option value="ninguna">Selecciona tu grupo</option>
    <option value="grupoa">Grupo A</option>
    <option value="grupob">Grupo B</option>
    <option value="grupoc">Grupo C</option>
    <option value="grupod">Grupo D</option>
    <option value="grupoe">Grupo E</option>
    <option value="grupof">Grupo F</option>
    </select>
    <input  type="password" name="password" placeholder="Contraseña"> <br>
    <input class="boton" type="submit" value="Registrar">
    </form>
            </div>
        </article>
    </section>
</body>
</html>
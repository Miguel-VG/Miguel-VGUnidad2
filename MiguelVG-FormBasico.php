<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action= "obtener.php" method="post">

        <input type="text" name="nombre" placeholder="Escribe tu nombre">
            <input type="text" name="paterno" placeholder="Escribe tu apellido paterno">
            <input type="text" name="materno" placeholder="Escribe tu apellido materno">
            <input type="text" name="nocontrol" placeholder="Escribe tu NO. de control">
            <input type="text" name="rfc" placeholder="Escribe tu RFC">
            <input type="text" name="curp" placeholder="Escribe tu CURP">
            <input type="text" name="correo" placeholder="Escribe tu correo">
            <input type="text" name="especialidad" placeholder="Escribe tu especialidad">
            <input type="text" name="grado" placeholder="grado">
            <input type="text" name="grupo" placeholder="Escribe tu grupo">
            <input type="text" name="domicilio" placeholder="Escribe tu domicilio">
            <input type="text" name="colonia" placeholder="Escribe tu colonia">
            <input type="text" name="codigopostal" placeholder="Escribe tu codigo postal">
            <br>

            <!-- Controles radio-->
            <h1>Selecciona un mes - Radios </h1>
            <input type="radio" name="radio1" value="opcion1"> Enero 
            <br>
            <input type="radio" name="radio1" value="opcion2"> Febrero
            <br>
            <input type="radio" name="radio1" value="opcion3"> 
            Marzo
            <br>
            <input type="radio" name="radio1" value="opcion4"> 
            Abril
            <br>
            <input type="radio" name="radio1" value="opcion5">
             Mayo
            <br>
            <input type="radio" name="radio1" value="opcion6"> 
            Junio
            <br>
            <input type="radio" name="radio1" value="opcion7">
             Julio
            <br>
             <input type="radio" name="radio1" value="opcion8"> Agosto
            <br>
            <input type="radio" name="radio1" value="opcion9"> Septiembre
            <br>
            <input type="radio" name="radio1" value="opcion10"> Octubre
            <br>
            <input type="radio" name="radio1" value="opcion11"> Noviembre
            <br>
            <input type="radio" name="radio1" value="opcion12"> Diciembre
            <br>
         

            <!-- Controles de tipo chekbox-->
            <h1>Selecciona un mes - chekbox </h1>
            <input type="checkbox" name="check1"> Enero
            <br>
            <input type="checkbox" name="check2"> Febrero
            <br>
            <input type="checkbox" name="check3"> Marzo
            <br>
            <input type="checkbox" name="check4"> Abril
            <br>
            <input type="checkbox" name="check5"> Mayo
            <br>
            <input type="checkbox" name="check6"> Junio
            <br>
            <input type="checkbox" name="check7"> Julio
            <br>
            <input type="checkbox" name="check8"> Agosto
            <br>
            <input type="checkbox" name="check9"> Septiembre
            <br>
            <input type="checkbox" name="check10"> Octubre
            <br>
            <input type="checkbox" name="check11"> Noviembre
            <br>
            <input type="checkbox" name="check12"> Diciembre
            <br>

            <!-- Controles Select-->
            <h1>Selecciona un mes - select </h1>
            <select name="seleccion">
            <option value="ninguna">Seleccione una opcion</option>
            <option value="seleccion1">Enero</option>
            <option value="seleccion2">Febrero</option>
            <option value="seleccion3">Marzo</option>
            <option value="seleccion4">Abril</option>
            <option value="seleccion5">Mayo</option>
            <option value="seleccion6">Junio</option>
            <option value="seleccion7">Julio</option>
            <option value="seleccion8">Agosto</option>
            <option value="seleccion9">Septimebre</option>
            <option value="seleccion10">Octubre</option>
            <option value="seleccion11">Noviembre</option>
            <option value="seleccion12">Dieicembre</option>
            </select>


            <input type="submit" name="boton" value="Enviar">

        </form>
</body>
</html>
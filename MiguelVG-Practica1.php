<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Estructura basica de PHP-->
<?php
    // Este es un comentario de una linea en php
    /*
    Este igual es un comentario
    pero de varias lineas,
    estos comentarios sirven para identificar partes del codigo
    comentariar lineas de codigo que en cierto momento no utilizaremos,
    */

    /* Miguel Angel Valenzuela Gomez
    */

    /*Mensajes en pantalla
    Vamos a utilizar la instruccion echo seguido de comillas
    dentro de estas el mensaje que deseamos mostrar
    y termina en punto y coma.
    */
    echo "Hola mundo"; 
    echo "<br>";
    echo "Esta sera la segunda linea en la pagina";

    echo "<p>Esto sera un parrafo y no necesita salto de linea</p>";
    echo "<h1>Esta es una etiqueta H1 para los encabezados o titulos</h1>";


    //Declaracion de variables - tipos de datos
    //tipo de dato - nombre varible - inicializar con un valor
    //int numero = 11; esto era en java, en php es diferente, aqui el como se hace:

    $cadena = "Miguel Angel Valenzuela Gomez"; //esta variable es de tipo string
    $numero = 95; //esta varialbe es de tipo entero - integer o int
    $promedio = 95.5; //Esta es una variable de tipo decimal - doble - float
    $condicion = true; //Esta variable es de tipo boleano


    //$arreglo = array('1','2','3','4','true','"cadena'); //Este es un arreglo
    
    //Concatenar variables en mensajes usamos el (.)
    echo "Esta variable es de tipo: " . $cadena;
    echo "<br>";
    echo "Esta es una variable de tipo entero: " . $numero;
    echo "<br>";
    echo "Esta es una de tipo doble " . $promedio;
    echo "<br>";
    echo "Esta es del tipo boleano " . $condicion;
    ?>

    
</body>
</html>
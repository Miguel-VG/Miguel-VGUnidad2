<?php
#Los arreglos sun variables donde podemos guardar
#multiples valores

#arreglos basicos y arreglos asociativos 
#tambien los conocemos como ARRAYS, MATRICES O VECTORES 
//Formabasica o tradicional 
$arreglo = array('Lunes', 'Martes', 'Miercoles','Jueves','viernes');
$meses = ['Enero', 'Febrero', 'Marzo', 'Abril '];
#arreglos indexados cada elemento tiene un indice
#indice inicia en 0
#numero de elementos 

#AGREGAR ELEMENTOS A UN ARREGLO
$arreglo[5] = 'Sabado';
$arreglo[6] = 'Domingo';

$meses[4] = "Mayo";
$meses[5] = "Junio";
$meses[6] = "Julio";
$meses[7] = "Agosto";
$meses[8] = "Septiembre";
$meses[9] = "Octubre";
$meses[10] = "Noviembre";
$meses[11] = "Diciembre";

#Modificar elemento
$arreglo[0] = 'Nintendo';

#Funcion print_r() = Sirve para er el contenido de una variable y la funcion count() = Contar los elementos

echo print_r($arreglo);
echo "<br>";
echo print_r($meses);

#Arreglos asociativos - elementos asociados a un objeto

$alumnos = array('no_control' => '18308052691234', 'nombre(s)' => 'Miguel Angel', 'Apellido paterno' => 'Valenzuela', 'Apellido materno' => 'Gomez', 'Grado' => '5', 'Grupo' => 'F', 'Especialidad' => 'Programacion', );
echo"<br>";
echo print_r($alumnos) . '<br>';
echo $arreglo[0] . '<br>';
echo $arreglo[1] . '<br>';
echo $arreglo[2] . '<br>';
echo $arreglo[3] . '<br>';
echo $arreglo[4] . '<br>';
echo $arreglo[5] . '<br>';
echo $arreglo[6] . '<br>'.'<br>';
echo "Dias: " . count($arreglo) . '<br>'.'<br>';



echo $meses[0] . '<br>';
echo $meses[1] . '<br>';
echo $meses[2] . '<br>';
echo $meses[3] . '<br>';
echo $meses[4] . '<br>';
echo $meses[5] . '<br>';
echo $meses[6] . '<br>';
echo $meses[7] . '<br>';
echo $meses[8] . '<br>';
echo $meses[9] . '<br>';
echo $meses[10] . '<br>';
echo $meses[11] . '<br>'.'<br>';
echo "Meses: " . count($meses) .'<br>'.'<br>';

#Funcion count()

$horoscopo = ['Aries', 'Tauro', 'Géminis', 'Cáncer', 'Leo', 'Virgo', 'Libra', 'Escorpion'];
$horoscopo  [8] = 'Sagitario';
$horoscopo  [9] = 'Capricornio';
$horoscopo  [10] = 'Acuario';
$horoscopo  [11] = 'Picis';

echo $horoscopo [0] . '<br>';
echo $horoscopo [1] . '<br>';
echo $horoscopo [2] . '<br>';
echo $horoscopo [3] . '<br>';
echo $horoscopo [4] . '<br>';
echo $horoscopo [5] . '<br>';
echo $horoscopo [6] . '<br>';
echo $horoscopo [7] . '<br>';
echo $horoscopo [8] . '<br>';
echo $horoscopo [9] . '<br>';
echo $horoscopo [10] . '<br>';
echo $horoscopo [11] . '<br>'.'<br>';

echo "Horoscopos: " . count($horoscopo) . '<br>'.'<br>';

echo $alumnos ["no_control"] . '<br>';
echo $alumnos ["nombre(s)"] . '<br>';
echo $alumnos ["Apellido paterno"] . '<br>';
echo $alumnos ["Apellido materno"] . '<br>';
echo $alumnos ["Grado"] . '<br>';
echo $alumnos ["Grupo"] . '<br>';
echo $alumnos ["Especialidad"] . '<br>';
echo "Datos: " . count($alumnos) . '<br>'.'<br>';


/**
 * Completar los meses del año
 * agregando elementos no directamente en el arreglo
 * 
 * Van hacer otro arreglo -- los horoscopos
 * 
 * acceder a cada elemento del arreglo
 * 
 * imprimir el contenido de cada arreglo print_r() 
 * y contar cuantos elementos tiene cada uno count()
 * 
 * Arreglo asociativo con sus datos
 * 
 */
?>




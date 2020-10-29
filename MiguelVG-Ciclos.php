<?php 

echo 'Miguel Angel Valenzuela Gomez' . '<br>';
echo 'Programacion' . '<br>';
echo 'Grado: 5' . '<br>';
echo 'Grupo: F' . '<br>';
echo 'a.18308052690041@cbtis269.edu.mx' . '<br>';

echo 'Las estrucutras de control se dividen en 2 '. '<br>';
echo 'Estrucuturas de decision y estrucuturas de repeticion' . '<br>';
echo 'Repeticion - Ciclos - For -While - Do while - Foreach';


echo 'Ciclo FOR' . '<br>';
echo 'Sintaxis = for ( Inicializar una variable );
 condicion; Incremento/Decremento de la variab;e){
    ejecutan las instrucciones
    Todo lo que este dentro del ciclo SE VA A REPETIR
  } ' . '<br>';


  for($i = 1; $i <12; $i++){
      echo "valor de i:" . $i . '<br>';
  }

  echo 'Ciclo While' . '<br>';
  echo 'Sintaxis' . '<br>';
  echo 'Inicializar una variable' . '<br>';
  echo 'while (Condicion) {Intrucciones, este adentro de va a repetir}' . '<br>';


  $i = 1;
  while( $i <=10 ){
     echo 'Imprimir el valor de i; ' . $i . '<br>';
     $i++;

  }


echo 'Vamos a recorrer un arreglo mediante un ciclo' . '<br>';
$dias = array ('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado ','Domingo');

echo $dias[0] . '<br>';
echo $dias[1] . '<br>';
echo $dias[2] . '<br>';
echo $dias[3] . '<br>';
echo $dias[4] . '<br>';
echo $dias[5] . '<br>';
echo $dias[6] . '<br>';

#funcion COUNT
echo 'Cuente los elementos del arreglo dias: ' . count($dias) . '<br>'; 
for($i =0 ; $i < count($dias); $i++ ){
    echo 'El mes: ' .$i. ' es: ' . $dias[$i] . '<br>';
}

echo '<br>';
echo '<br>';

echo 'Vamos a recorrer un arreglo mediante un WHILE' . '<br>';

$i = 0;
while($i <count($dias)){
   echo 'El dia: ' . $i . ' es: ' . $dias[$i] . '<br>';
   $i++;

}

echo '<br>';
echo '<br>';
echo 'Vamos a reocrrer un arfreglo mediante un FOREACH' . '<br>';

echo 'Sintaxis' . '<br>';
echo 'foreach ( Arreglo as elemento) {Instrucciones - repetir}';
echo'<br>';
 foreach( $dias as $dia ){
    echo 'El dia es: ' .$dia . '<br>';  
 }

echo '<br>';
/* Meses*/
echo 'Meses recorridos con los ciclos FOR, WHILE, FOREACH ' . '<br>' ; 
$meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');

echo 'Recorrer areglo con la condicion FOR ' . '<br>';
for($i = 0; $i < count($meses); $i++){
    echo 'El mes es: ' . $meses[$i]  . '<br>';
}
echo '<br>';
echo '<br>';

echo 'Recorrer areglo con la condicion WHILE ' . '<br>';
$i=0;
while($i <count($meses)){
     echo 'El mes es: ' . $meses[$i]  . '<br>';
     $i++;
}
echo '<br>';
echo '<br>';

echo 'Recorrer areglo con la condicion FOREACH  ' . '<br>';
foreach($meses as $mes){
    echo 'El mes es: ' . $mes  . '<br>';
}
echo '<br>';
echo '<br>';
/* Horoscopos */
echo 'Horoscopos recorridos con los ciclos FOR, WHILE, FOREACH ' . '<br>';
$horoscopo = ['Aries', 'Tauro', 'Géminis', 'Cáncer', 'Leo', 'Virgo', 'Libra', 'Escorpio', 'Sagitario', 'Capricornio','Acuario','Piscis'];

echo 'Recorrer areglo con la condicion FOR ' . '<br>';
for($i = 0; $i <count($horoscopo); $i++){
    echo 'El horoscopo es: ' . $horoscopo[$i] . '<br>'; 
}
echo '<br>';
echo '<br>';

echo 'Recorrer areglo con la condicion WHILE ' . '<br>';
$i=0;
while($i <count($horoscopo)){
    echo 'El horoscopo es: ' . $horoscopo[$i]  . '<br>';
    $i++;
}
echo '<br>';
echo '<br>';

echo 'Recorrer areglo con la condicion FOREACH ' . '<br>';
foreach($horoscopo as $horosco){
    echo 'El horoscopo es: ' . $horosco  . '<br>';
}
echo '<br>';
echo '<br>';


?>
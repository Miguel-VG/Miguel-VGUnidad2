<?php


$boleto = 125;
$edad = 17;
$genero = 'Mujer' ;
$DescuentoMujer = $boleto - 18.75;
$DescuentoHombre = $boleto - 15;




if( $edad <=18 ){
    echo 'Felicidades, has obtenido un descuento del 10% por ser menor de edad ';
    if ($genero == 'Mujer')
     {
    echo 'Felicidades has obtenido otro descuento del 5% por ser mujer tu nuevo total a pagar es:'. $DescuentoMujer;

         
    }
    else{
        echo 'Felicidades has obtenido ptro descuento del 2% tu nuevo toal a pagar es:' . $DescuentoHombre;
    }
}
else
echo'Tu total a pagar es de ' . $boleto;




?>
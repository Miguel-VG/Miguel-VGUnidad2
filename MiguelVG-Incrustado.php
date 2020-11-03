<?php
$meses = array(
'1er mes' => 'Enero',
'2do mes' => 'Febrero',
'3er mes' => 'Marzo',
'4to mes' => 'Abril',
'5to mes' => 'Mayo',
'6to mes' => 'Junio',
'7mo mes' => 'Julio',
'8vo mes' => 'Agosto',
'9no mes' => 'Septimebre',
'10mo mes' => 'Octubre',
'11vo mes' => 'Noviembre',
'12vo mes' => 'Diciembre');

$Horoscopos = array(
    'ARIES' => '21 MAR - 20 ABR',
    'TAURO' => '21 ABR - 20 MAY',
    'GEMINIS' => '21 MAY - 20 JUN',
    'CANCER' => '21 JUN - 20 JUL',
    'LEO' => '21 JUL- 21 AGO',
    'VIRGO' => '22 AGO - 22 SEPT',
    'LIBRA' => '23 SEPT - 22 OCT',
    'ESCORPIO' => '23 DE OCT - 22 NOV',
    'SAGITARIO' => '23 DE NOV - 20 DE DIC',
    'CAPRICORNIO' => '21 DIC - 19 ENE',
    'ACUARIO' => '20 ENE - 18 FEB',
    'PISCIS' => '19 FEB - 20 MAR');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Actividad</h1>
<?php
$meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
$horoscopo = ['Aries', 'Tauro', 'Géminis', 'Cáncer', 'Leo', 'Virgo', 'Libra', 'Escorpio', 'Sagitario', 'Capricornio','Acuario','Piscis'];
?>
<h2>Meses en una tabla</h2>
<table border>
        <tr>
        <?php 
            for ($i =0; $i < count($meses); $i++){
                echo '<td>' . $meses[$i] . '</td>';
            }
        ?>
        </tr>
    </table>

<h2>Horoscopos en una tabla</h2>
<table border>
        <tr>
        <?php 
            for ($i =0; $i < count($horoscopo); $i++){
                echo '<td>' . $horoscopo[$i] . '</td>';
            }
        ?>
        </tr>
    </table>
    
<h1>Los meses con Foreach</h1>

<table border = "1px solid black";>
<tr>
<?php 
foreach ($meses as $dato => $valor){
   echo '<td>' .$dato . '</td>'; 
}
?>
</tr>

<tr>
<?php 
foreach ($meses as $dato => $valor){
   echo '<td>' .$valor . '</td>'; 
}
?>
</tr>
</table>

<br>
<h1>Los horoscopos con Foreach</h1>

<table border = "1px solid black";>
<tr>
<?php 
foreach ($Horoscopos as $dato => $valor){
   echo '<td>' .$dato . '</td>'; 
}
?>
</tr>

<tr>
<?php 
foreach ($Horoscopos as $dato => $valor){
   echo '<td>' .$valor . '</td>'; 
}
?>
</tr>
</table>

</body>
</html>


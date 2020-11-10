<?php
//recuperar numeros
$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];

//recuperar la seleccion del usuario con radio
$operador = $_POST['operador'];

if($operador == "sumar"){
    $resultado = $num1 + $num2;
    echo "El resultado de la suma de: " .$num1 . " + " . $num2 . " = " . $resultado . '<br>';
}

if($operador == "restar"){
    $resultado = $num1 - $num2;
    echo "El resultado de la resta de: " .$num1 . " - " . $num2 . " = " . $resultado . '<br>';
}

if($operador == "multiplicar"){
    $resultado = $num1 * $num2;
    echo "El resultado de la multiplicacion de: " .$num1 . " * " . $num2 . " = " . $resultado .'<br>';
}

if($operador == "dividir"){
    $resultado = $num1 / $num2;
    echo "El resultado de la Division de: " .$num1 . " / " . $num2 . " = " . $resultado .'<br>';
}

//recuperar la seleccion del usuario con chekbox

if (isset($_REQUEST['suma'])) {
    $resultado = $num1 + $num2;
    echo "El resultado de la suma de: " .$num1 . " + " . $num2 . " = " . $resultado.'<br>';    
    }
    if (isset($_REQUEST['resta'])) {
        $resultado = $num1 - $num2;
        echo "El resultado de la resta de: " .$num1 . " - " . $num2 . " = " . $resultado.'<br>';
    }
    if (isset($_REQUEST['multiplicacion'])) {
        $resultado = $num1 * $num2;
    echo "El resultado de la multiplicacion de: " .$num1 . " * " . $num2 . " = " . $resultado.'<br>';
    }
    if (isset($_REQUEST['division'])) {
        $resultado = $num1 / $num2;
        echo "El resultado de la Division de: " .$num1 . " / " . $num2 . " = " . $resultado.'<br>';
    }

    //recuperar la seleccion del usuario con select
    if($_REQUEST['seleccion']=="ninguna"){
        echo 'No seleccionaste ninguna opcion por lo tanto no podemos calcular nada' . '<br>';  
      }
      else if ($_REQUEST['seleccion']== "sum"){
        $resultado = $num1 + $num2;
        echo "El resultado de la suma de: " .$num1 . " + " . $num2 . " = " . $resultado.'<br>';   
      }
      else if ($_REQUEST['seleccion']== "rest") {
        $resultado = $num1 - $num2;
        echo "El resultado de la resta de: " .$num1 . " - " . $num2 . " = " . $resultado.'<br>';
      }
      else if ($_REQUEST['seleccion']== "mult") {
        $resultado = $num1 * $num2;
        echo "El resultado de la multiplicacion de: " .$num1 . " * " . $num2 . " = " . $resultado.'<br>';  
       }
       else if ($_REQUEST['seleccion']== "div") {
        $resultado = $num1 / $num2;
        echo "El resultado de la Division de: " .$num1 . " / " . $num2 . " = " . $resultado.'<br>';
       }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miguel VG Operacuines aritmeticas basicas</title>
</head>
<body>
    <h1>Operaciones aritmeticas basicas</h1>

    <form action="operaciones.php" method="post">
    <input type= "text" name= "numero1" id="Esribe el primer numero:">
    <br>
    <input type= "text" name= "numero2" id="Escribe el segundo numero">
    <br>
    <input type= "radio" name= "operador" value="sumar"> Sumar
    <br>
    <input type= "radio" name= "operador" value="restar"> Restar
    <br>
    <input type= "radio" name= "operador" value="multiplicar"> Multiplicar
    <br>
    <input type= "radio" name= "operador" value="dividir"> Dividir    <br>




    <h1>Chekbox</h1>
     <input type="checkbox" name="suma"> Sumar
    <br>
    <input type="checkbox" name="resta"> Restar
    <br>
    <input type="checkbox" name="division"> Dividir
    <br>
    <input type="checkbox" name="multiplicacion"> Multiplicar
    <br>

    <h1>Select</h1>
    <br>
    <select name="seleccion"> 
            <option value="ninguna">Seleccione una opcion</option> 
            <option value="sum">Suma</option>
            <option value="rest">Resta</option>
            <option value="mult">Multiplicacion</option>
            <option value="div">Division</option>
            </select>
            <br>
    <input type= "Submit" value="Calcular">
    <br>
    </form>

</body>
</html>
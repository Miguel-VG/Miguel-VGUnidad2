<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiguelVG -- Insertar registros</title>
</head>
<body>
    <p>Ingresa us datos</p>
    <form action= "insertar.php" method="post">

    <input type="text" name="nombre" placeholder="Ingresa tu nombre"> <br>
    <input type="text" name="usuario" placeholder="Ingresa tu usuario"> <br>
    <input type="text" name="password" placeholder="Ingresa tu password"> <br>

    <p>Selecciona un dia</p>

    <input type="radio" name="dias" value="lunes">Lunes <br>
    <input type="radio" name="dias" value="martes">Martes <br>
    <input type="radio" name="dias" value="miercoles">Miercoles<br>
    <input type="radio" name="dias" value="jueves">Jueves<br>
    <input type="radio" name="dias" value="viernes">Vienres<br>
    <input type="radio" name="dias" value="sabado">Sabado<br>
    <input type="radio" name="dias" value="domingo">Domingo<br>

    <p>Selecciona un mes</p>

    <input type="checkbox" name="enero">Enero <br>
    <input type="checkbox" name="febrero">Febrero <br>
    <input type="checkbox" name="marzo">Marzo <br>
    <input type="checkbox" name="abril">Abril <br>
    <input type="checkbox" name="mayo">Mayo<br>
    <input type="checkbox" name="junio">Junio <br>
    <input type="checkbox" name="julio">Julio <br>
    <input type="checkbox" name="agosto">Agosto <br>
    <input type="checkbox" name="septiembre">Septiembre <br>
    <input type="checkbox" name="octubre">Octubre <br>
    <input type="checkbox" name="noviembre">Noviembre <br>
    <input type="checkbox" name="diciembre">Diciembre <br>

    <p>Selecciona tu horoscopo</p>


    <select name="horoscopos">
    <option value="aries">Aries</option>
    <option value="tauro">Tauro</option>
    <option value="geminis">Geminis</option>
    <option value="cancer">Cancer</option>
    <option value="leo">Leo</option>
    <option value="virgo">Virgo</option>
    <option value="libra">Libra</option>
    <option value="escorpio">Escorpio</option>
    <option value="sagitario">Sagitario</option>
    <option value="capricornio">Capricornio</option>
    <option value="acuario">Acuario</option>
    <option value="piscis">Pscis</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Insertar">



    </form>
</body>
</html>
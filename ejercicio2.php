<?php
$temp = 0;
$mensaje = "";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $tipo1 = (string)$_POST["tipo1"];
    $tipo2 = (string)$_POST["tipo2"];

    if($tipo1== ""|| $tipo2== ""){
        $mensaje = "No hay tipos seleccionados";
    }elseif($tipo1== ""|| $tipo2== ""){

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <div>
        <p><?php echo $mensaje?></p>
        <form action="" method="POST">
                <input type="number" step="0.1" name="temp" id="temp" placeholder="Ingrese la temperatura"><br>
                <input type="radio" name="tipo1" id="tipo" value="Celcius">Celsius <br>
                <input type="radio" name="tipo1" id="tipo" value="Fahrenheit">Fahrenheit <br> 
                <p>a</p>
                <input type="radio" name="tipo2" id="tipo" value="Celcius">Celsius <br>
                <input type="radio" name="tipo2" id="tipo" value="Fahrenheit">Fahrenheit <br> 
                <button type="submit">Calcular</button>
        </form>
        <p><?php echo $temp?></p>
    </div>
    
</body>
</html>
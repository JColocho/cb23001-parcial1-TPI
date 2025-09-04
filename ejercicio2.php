<?php
$resultado = 0;
$mensaje = "";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $temp = (float)$_POST["temp"];
    $tipo1 = $_POST["tipo1"];
    $tipo2 = $_POST["tipo2"];

    if($tipo1== ""|| $tipo2== ""){

    }elseif($tipo1== "Celsius"&& $tipo2== "Fahrenheit"){
        $resultado = $temp*(9/5) + 32; 
        $mensaje = "Celsius a Fahrenheit";
    }elseif($tipo1== "Fahrenheit"&& $tipo2== "Celsius"){
        $resultado = $temp-32 * (5/9); 
        $mensaje = "Fahrenheit a Celsius";
    }else{
        $mensaje = "No hay tipos seleccionados";
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
        <p><?php echo $resultado?></p>
    </div>
    
</body>
</html>
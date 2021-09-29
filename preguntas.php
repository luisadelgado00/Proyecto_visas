
<?php

    $pregunta1 = $_POST['pregunta1'];
    $pregunta2 = $_POST['pregunta2'];
    $pregunta3 = $_POST['pregunta3'];
    $pregunta4 = $_POST['pregunta4'];
    $pregunta5 = $_POST['pregunta5'];

    $mensaje = "";
    $porcentaje = 0;
    $puntos = 0;

    if ($pregunta1 == "f") 
    {
        $puntos = $puntos + 1; 
    }

if ($pregunta2 == "v") 
{
    $puntos = $puntos + 1; 
}

if ($pregunta3 == "v") 
{
    $puntos = $puntos + 1; 
}

if ($pregunta4 == "v") 
{
    $puntos = $puntos + 1; 
}

if ($pregunta5 == "v") {
    $puntos = $puntos + 1; 
}

if (($puntos == 0) || ($puntos == 1) || ($puntos == 2)) {
    $mensaje = "Tu probabilidad de obtener una visa es muy baja";
}elseif (($puntos == 3) || ($puntos == 4)) {
    $mensaje = "Tu probabilidad de obtener una visa es alta";
}elseif (($puntos == 5)) {
    $mensaje = "Tu probabilidad de obtener una visa es muy alta";
}
$porcentaje = ($puntos / 5)  * 100;
/*echo '<script language="javascript">alert("Probabilidad de visa: '.$porcentaje.' % "+"'.$mensaje.'");</script>';*/
/*echo "Resultado prueba prediagnóstica: $porcentaje % de probabilidad. <br> $mensaje <br>"*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/preguntas.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>VISAS CONTINENTAL</title>
</head>
<body>
    
    <h2 class="titulo">RESULTADOS:</h2>
    <div class="wrap">

    <form action="preguntas.php" class="fomrulario" method="POST">
    <div class="pregu">
    <h4>Los resultados de su prediagnóstico son: </h4>
    <div class="resultado">
 <?php
 echo "$porcentaje % de probabilidad. <br> $mensaje <br>"
 ?>
 <br><a href="generarpdf.php?porcentaje=<?php echo $porcentaje ?>
              &mensaje=<?php echo $mensaje ?>"class ="boton"> Guardar resultados</a> <br>
 
 </div>
</div>
</div>
</body>
</html>

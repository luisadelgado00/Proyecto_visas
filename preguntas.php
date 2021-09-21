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

if ($pregunta5 == "f") {
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
echo "Resultado prueba prediagnóstica: $porcentaje % de probabilidad. <br> $mensaje <br>"

?>
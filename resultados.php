<?php


$porcentaje=($_GET['porcentaje']);
$mensaje=($_GET['mensaje']);


?>


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
    
    <h2>RESULTADOS:</h2>
    <h4>Los resultados de su prediagnóstico son: </h4>
 <?php
echo "$mensaje <br> $porcentaje % de probabilidad. <br>"
 ?>

</div>
</body>
</html>
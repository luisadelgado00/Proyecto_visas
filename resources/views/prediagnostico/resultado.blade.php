

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="<?php echo asset('css/preguntas.css')?>" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>VISAS CONTINENTAL</title>
</head>
<body>
    
    <h2 class="titulo">Formulario Prediagnóstico para la aprobación para la visa estadounidense:</h2>
    <div class="wrap">

    <form method="POST" action="{{url('prediagnostico')}}" class="fomrulario" >
        @csrf

    <div class="pregu">
    <h4>Los resultados de su prediagnóstico son: </h4>
    <div class="resultado">
<?php
 echo "$porcentaje % de probabilidad. <br> $mensaje <br>"
 
 ?>
 </div>
   <!--  
 <div class="resultado2">

        <label  class="label" for="nombreU">Nombre: </label><br>
        <input type="text" class="nombre" name="nombreU"><br>
        <label  class="label"  for="apellidoU">Apellido: </label><br>
        <input type="text" class="apellido" name="apellidoU"><br>
        <label  class="label" for="telefonoU">Telefono: </label><br>
        <input type="text" class="telefono" name="telefonoU"><br>
        <label  class="label" class="label" for="correoU">Correo: </label><br>
        <input type="email" class="correo" name="correoU"><br>
        <label  class="label"  for="visa">Tipo de visa: </label><br>
        <select class="visas" name="visa">
    <option>Visa estudiantil</option>
    <option>Visa de turismo</option>
  </select></br>
        <label  class="label" for="probabilidad">probabilidad: </label><br>
        <input type="text" name="probabilidad" class="prob" value="<?php echo $porcentaje." % de probabilidad."?>" readonly> <br>
        <br><input type="submit"  class ="boton" value="GUARDAR DATOS ">
           <a href= "{{url ('prediagnostico/pdf')}}" class="boton" >PDF</a> 
        
       </div>-->
       <a href= "{{url ('login')}}" class="boton" >INICIO</a>
 </div>
</div>
</div>
</body>
</html>


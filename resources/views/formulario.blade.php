

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
@if($errors->any())
Hay campos vacios
@endif
    <form method="POST" action="{{route('formulario')}}" class="fomrulario" >
        @csrf
        
    <div class="pregu">
    <h4>1. ¿Desea quedarse permanentemente en estados Unidos? </h4>
    <input class="form-check-input" type="radio" name="pregunta1" value="v">
    <label class="label" for="pregunta1">Verdadero</label><br>
    <input class="form-check-input" type="radio" name="pregunta1" value="f">
    <label class="label" for="pregunta1">Falso</label>
   
    <h4>2. ¿Tiene familia en el pais? </h4>
    <input class="form-check-input" type="radio" name="pregunta2" value="v" >
    <label class="label" for="pregunta2">Si</label><br>
    <input class="form-check-input" type="radio" name="pregunta2" value="f">
    <label class="label" for="pregunta2">No</label>

    <h4>3. ¿Tiene sitio donde hospedarse al llegar? </h4>
    <input class="form-check-input" type="radio" name="pregunta3" value="v">
    <label class="label" for="pregunta3">Si</label><br>
    <input class="form-check-input" type="radio" name="pregunta3" value="f">
    <label class="label" for="pregunta3">No</label>

    <h4>4. ¿Es la primera vez que solicita la visa? </h4>
    <input class="form-check-input" type="radio" name="pregunta4" value="v">
    <label class="label" for="pregunta4">Si</label><br>
    <input class="form-check-input" type="radio" name="pregunta4" value="f">
    <label class="label" for="pregunta4">No</label>

    <h4>5. ¿Cuanto tiempo planea quedarse? </h4>
    <input class="form-check-input" type="radio" name="pregunta5" value="v">
    <label class="label" for="pregunta5">Menos de 3 meses</label><br>
    <input class="form-check-input" type="radio" name="pregunta5" value="f">
    <label class="label" for="pregunta5">Mas de 3 meses</label>
    <br><input type="submit" class ="boton" value="ENVIAR"> <a href= "{{url ('login')}}" class="boton" >INICIO</a>

  


              
 
 </div>
</div>
</div>
</body>
</html>

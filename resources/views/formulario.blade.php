@include('header')
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
    <h4>{!! trans('messages.form7') !!} </h4>
    <input class="form-check-input" type="radio" name="pregunta1" value="v">
    <label class="men" for="pregunta1">{!! trans('messages.form12') !!}</label><br>
    <input class="form-check-input" type="radio" name="pregunta1" value="f">
    <label class="men" for="pregunta1">{!! trans('messages.form13') !!}</label>
   
    <h4>{!! trans('messages.form8') !!}</h4>
    <input class="form-check-input" type="radio" name="pregunta2" value="v" >
    <label class="men" for="pregunta2">{!! trans('messages.form14') !!}</label><br>
    <input class="form-check-input" type="radio" name="pregunta2" value="f">
    <label class="men" for="pregunta2">{!! trans('messages.form15') !!}</label>

    <h4>{!! trans('messages.form9') !!} </h4>
    <input class="form-check-input" type="radio" name="pregunta3" value="v">
    <label class="men" for="pregunta3">{!! trans('messages.form14') !!}</label><br>
    <input class="form-check-input" type="radio" name="pregunta3" value="f">
    <label class="men" for="pregunta3">{!! trans('messages.form15') !!}</label>

    <h4>{!! trans('messages.form10') !!} </h4>
    <input class="form-check-input" type="radio" name="pregunta4" value="v">
    <label class="men" for="pregunta4">{!! trans('messages.form14') !!}</label><br>
    <input class="form-check-input" type="radio" name="pregunta4" value="f">
    <label class="men" for="pregunta4">{!! trans('messages.form15') !!}</label>

    <h4>{!! trans('messages.form11') !!}</h4>
    <input class="form-check-input" type="radio" name="pregunta5" value="v">
    <label class="men" for="pregunta5">{!! trans('messages.form16') !!}</label><br>
    <input class="form-check-input" type="radio" name="pregunta5" value="f">
    <label class="men" for="pregunta5">{!! trans('messages.form17') !!}</label>
    <br><input type="submit" class ="boton" value="{!! trans('messages.form18') !!}"> 
    

  


              
 
 </div>
</div>
</div>
</body>
</html>

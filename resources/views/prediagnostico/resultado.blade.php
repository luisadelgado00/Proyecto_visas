

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
    
    
    
 <div  class ="resultado2" style="font-family: 'Open Sans Condensed', sans-serif;
    position: relative;
    margin-top: 15px;
    font-size: 20px;
    color: rgb(1, 7, 26);
  /*text-shadow: 3px 3px 10px rgb(3, 89, 146);*/
  text-align: justify;
  margin-bottom: 20px;
  margin-left: 50px;">

<h2 class=" text-center" style="color:#001e6c;">{!! trans('messages.form1') !!}</h2>
 <!-- pasos con visas continental -->
 <a name="vContinental"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                            
    
                                <form method="POST" action="{{url('prediagnostico')}}" class="fomrulario" >
                                    @csrf

                                
                                
                             <div class=" text-center" style="color:#001e6c;">  
                             <h3 >{!! trans('messages.form2') !!} <?php
                            echo "$porcentaje %  <br>"         
                            ?></h3>
                            
                            </div>
                            <div class=" text-center" style="color:#001e6c;"> 
                            <label  class="text-dark text-center" for="nombreU">{!! trans('messages.nombre') !!} </label><br>
        <input type="text"  name="nombreU"><br>
        <label  class="text-dark text-left" for="apellidoU">{!! trans('messages.apellido') !!} </label><br>
        <input type="text"  name="apellidoU"><br>
        <label  class="text-dark text-center" class="level" for="correoU">{!! trans('messages.email') !!} </label><br>
        <input type="email"  name="correoU"><br>
        <label  class="text-dark text-center" for="probabilidad">{!! trans('messages.probabilidad') !!} </label><br>
        <input type="text"  name="probabilidad" value="<?php echo $porcentaje." % "?>" readonly> <br>
        <br><input type="submit"  class ="boton2" value="{!! trans('messages.upP6') !!}">
</div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
        
        <!--<a href= "{{url ('prediagnostico/pdf')}}" class="boton" >PDF</a>-->
        
       
    
 


</body>
</html>


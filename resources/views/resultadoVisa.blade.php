@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="<?php echo asset('css/requisitos.css')?>" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>VISAS CONTINENTAL</title>
</head>
<body>
    
    
    <div class="wrap">
    @if($errors->any())
      Hay campos vacios
      @endif
    <form method="POST" action="{{url('prediagnostico')}}" >
        @csrf

             <!-- Generalidades -->
  <a name="visaB"></a>
              <section class="bg-mix py-3 ">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                            <h2 class="text-dark">Su tipo de visa recomendado: </h2>

                            <p class="lead text-dark"> <?php
                                echo $mensaje;
                                
                             ?> </p>
                                        
    
                            </div>
                        </div>
                    </div>
                </div>
              </section>
   
   
 </div>
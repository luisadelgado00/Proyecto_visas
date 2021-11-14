<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="<?php echo asset('css/headerStyle.css')?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">

<!-- Ionic icons -->
<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">


    </head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #0B2C80; font-color: black">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
      
        <div class="w-100 text-left">
        <a class="navbar-brand" href="{{route ('welcome')}}">
        <img src="{!! asset('images/logo.png') !!}"style="width: 100px; height: 40px;">
    </a>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a href="{{route ('contacto')}}" class="nav-link">{!! trans('messages.head1') !!}</a>
            </li>
            <li class="nav-item">
                <a href="{{route ('tiposVisa')}}" class="nav-link">{!! trans('messages.head2') !!}</a>
            </li>
            <li class="nav-item">
                <a href="{{route ('requisitosVista')}}" class="nav-link">{!! trans('messages.requis') !!}</a>
            </li>
        </ul>
    </div>
</nav>


          
        </div>
    </div>
</div>


    
    </header>
    
    
    <section class =" main container" ></section>
  
    <footer></footer>

</body>
</html>


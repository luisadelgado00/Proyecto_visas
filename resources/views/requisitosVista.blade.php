
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="<?php echo asset('css/requisitos.css')?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
<div class="wrapper">
        <!-- Sidebar  -->
       
        <div id="sidebar" >
        <div class="sidebar-header">
                <h3>{!! trans('messages.requis3') !!}</h3>
            </div>
        <div class="menu">
            <ul class="list-group">
           
          
                <li>
                <a href="#generalidades" style ="text-decoration: none">
                {!! trans('messages.requis2') !!}</a>
                </li>
                <li>
                <a href="#docGeneral" style ="text-decoration: none">
                {!! trans('messages.requis3') !!} </a>
                </li>
                <li>
                <a href="#docVisaT"  style ="text-decoration: none" >
                {!! trans('messages.requis4') !!}</a>
                </li>
                <li>
                <a href="#docVisaE"  style ="text-decoration: none"> 
               {!! trans('messages.requis5') !!}</a>
                </li>
                <li>
                <a href="#costos"  style ="text-decoration: none;">
            {!! trans('messages.requis6') !!}</a>
                </li>
                <li>
                <a href="#vContinental"  style ="text-decoration: none">
            {!! trans('messages.requis7') !!}</a>
                </li>
                <li>
                <a href="#tiempo"  style ="text-decoration: none">
                {!! trans('messages.requis8') !!}</a>
            </div>
                </li>
            </ul>

            </div>        
</div>

        <!-- navar menu arriba  -->
        <div id="content">
        <a name="inicio"></a>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>MENU</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="navbar-brand" href="{{route ('welcome')}}">
                        <img src="{!! asset('images/logo.png') !!}"style="width: 100px; height: 40px;">
                        </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route ('contacto')}}" class="nav-link">{!! trans('messages.head1') !!}</a>
                            </li>
                            <li class="nav-item">
                            <a href="{{route ('tiposVisa')}}" class="nav-link">{!! trans('messages.head2') !!}</a>
                            </li>
                            <li class="nav-item ">
                            <a href="{{route ('requisitosVista')}}" class="nav-link">{!! trans('messages.requis') !!}</a>
                            </li>  
                        </ul>
                    </div>
                </div>
            </nav>

             <!-- Generalidades -->
             <a href="#inicio" style ="text-decoration: none">
            <button type="button"  class="btn-flotante" style="font-size: 16px; /* Cambiar el tamaño de la tipografia */
	text-transform: uppercase; /* Texto en mayusculas */
	font-weight: bold; /* Fuente en negrita o bold */
	color: #ffffff; /* Color del texto */
	border-radius: 5px; /* Borde del boton */
	letter-spacing: 2px; /* Espacio entre letras */
	background-color: #2eb8d6; /* Color de fondo */
    border-color: #2eb8d6;
	padding: 18px 30px; /* Relleno del boton */
	position: fixed;
	bottom: 40px;
	right: 40px;
	transition: all 300ms ease 0ms;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
	z-index: 99;">
            <i class="fas fa-angle-double-up" ></i>
                        
                    </button> </a>
  <a name="generalidades"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                          
                                        <h2 class="text-dark"> {!! trans('messages.requis2') !!}</h2>
                                        <p class="lead text-dark"> {!! trans('messages.requis9') !!}
                                            
                                                 </p>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
<!-- Fin generalidades -->
<!-- Documentacion -->
<a name="docGeneral"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                
                                        <h2 class="text-dark">{!! trans('messages.requis3') !!}</h2>
                                        <p class="lead text-dark"> {!! trans('messages.requis10') !!}
                                        </p>
                            </div>
                        </div>
                    </div>
                </div>
              </section>

              <!-- doc turista -->
              <a name="docVisaT"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                
                                        <h2 class="text-dark"> {!! trans('messages.requis11') !!} </h2>
                                        <p class="lead text-dark"> {!! trans('messages.requis12') !!}  </p>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              <!-- doc estudiante -->
              <a name="docVisaE"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                
                                        <h2 class="text-dark">{!! trans('messages.requis13') !!} </h2>
                                        <p class="lead text-dark">
                                        {!! trans('messages.requis14') !!}
                                        </p>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              <!-- costo visa -->
              <a name="costos"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                
                                        <h2 class="text-dark">{!! trans('messages.requis6') !!}</h2>
                                        
                                        <h2 class="text-dark">{!! trans('messages.requis15') !!}</h2>
                                        <p class="lead text-dark" >{!! trans('messages.requis16') !!}
                                                </p>
                                    
                                        <h2 class="text-dark">{!! trans('messages.requis17') !!}</h2>
                                        <table class="table table-bordered ">
                                             <thead >
                                             <tr >
                                            <td  class="text-center">$160 USD</td> 
                                            <td class="text-center" >$190 USD</td>
                                            <td  class="text-center">$205 USD</td>
                                            <td  class="text-center">$265 USD</td>
                                             </thead>
                                             <tbody>
                                                <tr>
               
                                                <td class="text-justify">{!! trans('messages.requis18') !!}</td> 
                                                <td class="text-justify">{!! trans('messages.requis19') !!}</td> 
                                                <td class="text-justify">{!! trans('messages.requis20') !!}</td>  
                                                <td class="text-justify">{!! trans('messages.requis21') !!}</td> 
               
               
              

                                                 </tr>

                                             </tbody>

                                        </table>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
               <!-- pasos con visas continental -->
               <a name="vContinental"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                
                                        <h2 class="text-dark">{!! trans('messages.requis7') !!} </h2>
                                        <p class="lead text-dark"> {!! trans('messages.requis22') !!}
                                        </p>
                            </div>
                        </div>
                    </div>
                </div>
              </section>
               <!-- Tiempo y sucursales -->
               <a name="tiempo"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                
                                        <h2 class="text-dark">{!! trans('messages.requis8') !!} </h2>
                                        <p class="lead text-dark"> {!! trans('messages.requis23') !!}
                                        </p>

                            </div>
                        </div>
                    </div>
                </div>
              </section>
           
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

</body>
</html>


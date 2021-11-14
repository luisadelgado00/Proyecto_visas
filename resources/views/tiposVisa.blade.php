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
                <h3>{!! trans('messages.tipoV1') !!}</h3>
            </div>
        <div class="menu">
            <ul class="list-group">
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
                <li>
                <a href="#ayudaVisa" style ="text-decoration: none">
                {!! trans('messages.tipoV2') !!}</a>
                </li>
            <li>
                <a href="#visaB" style ="text-decoration: none" >
                {!! trans('messages.tipoV3') !!}</a>
                </li>
                <li>
                <a href="#visaC" style ="text-decoration: none">
                 {!! trans('messages.tipoV4') !!}</a>
                </li>
                <li>
                <a href="#visaF" style ="text-decoration: none">
                 {!! trans('messages.tipoV5') !!}</a>
                </li>
                <li> 
                <li>
                <a href="#visaJ"  style ="text-decoration: none"> 
                  {!! trans('messages.tipoV6') !!}</a>
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
             <!-- seleccionador de visas -->
             <a name="ayudaVisa"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                            @if($errors->any())
                            Hay campos vacios
                            @endif
                            <form method="POST" action="{{route('tiposVisa')}}" >
                                        @csrf
                                        <h2 class="text-dark">{!! trans('messages.tipoV7') !!}</h2>
                                        <p class="lead text-dark"> {!! trans('messages.tipoV8') !!}</p>
                                        <div class="row">
            
                                        <input  type="radio" name="opcionVisa" value="turismoVisita">
                                        <label class="men" for="opcionVisa">{!! trans('messages.tipoV9') !!}</label><br>  

                                        <input  type="radio" name="opcionVisa" value="empleo">
                                        <label class="men" for="opcionVisa">{!! trans('messages.tipoV10') !!}</label><br>  

                                        <input  type="radio" name="opcionVisa" value="estudio">
                                        <label class="men" for="opcionVisa">{!! trans('messages.tipoV11') !!}</label><br>  

                                        <input  type="radio" name="opcionVisa" value="viajar">
                                        <label class="men" for="opcionVisa">{!! trans('messages.tipoV12') !!}</label><br>  
                                        
                                       
                                       
                                    </br></br></br>
                                        
                                    </br></br><input type="submit" class ="btn btn-primary btn-sm " value="{!! trans('messages.form18') !!}"> 
                                    </div>
                                    <?php
                                       //echo $mensaje;
                                        
                                        ?>
                                </div>
                        </div>
                    </div>
                </div>
              </section>
<!-- Fin seleccionador de visas -->

             <!-- visa tipo b -->
  <a name="visaB"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                          
                                        <h2 class="text-dark">{!! trans('messages.tipoV3') !!}</h2>
                                        <p class="lead text-dark text-justify">  {!! trans('messages.tipoV13') !!} </p>
                                        <h3 class="text-dark text-justify"> {!! trans('messages.tipoV14') !!}</h3>
                                        <p class="lead text-dark text-justify"> {!! trans('messages.tipoV15') !!}</p>
                                        <h3 class="text-dark text-justify">{!! trans('messages.tipoV16') !!}</h3>
                                        <p class="lead text-dark text-justify"> {!! trans('messages.tipoV17') !!}</p>

                                             <h3 class="text-dark text-justify"> {!! trans('messages.tipoV18') !!}</h3>
                                            <p class="lead text-dark text-justify">{!! trans('messages.tipoV19') !!} </p>

                            </div>
                        </div>
                    </div>
                </div>
              </section>
<!-- Fin visa tipo b -->
<!-- visa tipo C -->
<a name="visaC"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                
                                        <h2 class="text-dark text-justify" >{!! trans('messages.tipoV4') !!} </h2>
                                        <p class="lead text-dark text-justify"> {!! trans('messages.tipoV20') !!}
                                        </p>
                                        <h3 class="text-dark text-justify" >{!! trans('messages.tipoV21') !!} </h3>
                                        <p class="lead text-dark text-justify"> {!! trans('messages.tipoV22') !!}
                                        </p>
                                        <h3 class="text-dark text-justify" >{!! trans('messages.tipoV18') !!}</h3>
                                        <p class="lead text-dark text-justify">{!! trans('messages.tipoV23') !!}
                                        </p>
                                        
                            </div>
                        </div>
                    </div>
                </div>
              </section>

              <!-- visa f -->
              <a name="visaF"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                
                                        <h2 class="text-dark"> {!! trans('messages.tipoV5') !!}  </h2>
                                        <p class="lead text-dark text-justify">{!! trans('messages.tipoV24') !!}
                                        </p>
                                        <table class="table table-bordered ">
                                             <thead >
                                             <tr >
                                            <td  class="text-center">F</td> 
                                            <td class="text-center" >M</td>
                                            
                                             </thead>
                                             <tbody>
                                                <tr>
               
                                                <td class="text-justify">
                                                {!! trans('messages.tipoV25') !!}
        
                                                <td class="text-justify">{!! trans('messages.tipoV26') !!}<br>
                                                 </tr>
                                             </tbody>

                                        </table>
                                        
                            </div>
                        </div>
                    </div>
                </div>
              </section>
              
                        
           <!-- visa j -->
           <a name="visaJ"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                                
                                        <h2 class="text-dark">{!! trans('messages.tipoV6') !!}  </h2>
                                        <p class="lead text-dark text-justify">{!! trans('messages.tipoV27') !!}
                                        </p>
                                        <h2 class="text-dark">{!! trans('messages.tipoV28') !!}  </h2>
                                        <p class="lead text-dark text-justify">
                                        <a href="https://j1visa.state.gov/programs/au-pair/" >https://j1visa.state.gov/programs/au-pair/</a> <br>
                                       <a href= "https://j1visa.state.gov/programs/camp-counselor/">https://j1visa.state.gov/programs/camp-counselor/</a><BR>
                                        <a href="https://j1visa.state.gov/programs/government-visitor/" >https://j1visa.state.gov/programs/government-visitor/</a><br>
                                        <a href="https://j1visa.state.gov/programs/intern/" >https://j1visa.state.gov/programs/intern/</a><br>
                                        <a href="https://j1visa.state.gov/programs/international-visitor/" >https://j1visa.state.gov/programs/international-visitor/</a><br>
                                        <a href="https://j1visa.state.gov/programs/physician/" >https://j1visa.state.gov/programs/physician/</a><br>
                                        <a href="https://j1visa.state.gov/programs/professor" >https://j1visa.state.gov/programs/professor</a><br>
                                        <a href="https://j1visa.state.gov/programs/short-term-scholar/" >https://j1visa.state.gov/programs/short-term-scholar/</a><br>
                                        <a href="https://j1visa.state.gov/programs/specialist/" >https://j1visa.state.gov/programs/specialist/</a><br>
                                        <a href="https://j1visa.state.gov/programs/college-and-university-student/" >https://j1visa.state.gov/programs/college-and-university-student/</a><br>
                                        <a href="https://j1visa.state.gov/programs/secondary-school-student/" >https://j1visa.state.gov/programs/secondary-school-student/</a><br>
                                        <a href="https://j1visa.state.gov/programs/summer-work-travel/" >https://j1visa.state.gov/programs/summer-work-travel/</a><br>
                                        <a href="https://j1visa.state.gov/programs/teacher" >https://j1visa.state.gov/programs/teacher</a><br>
                                        <a href="https://j1visa.state.gov/programs/trainee/" >https://j1visa.state.gov/programs/trainee/</a><br>
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


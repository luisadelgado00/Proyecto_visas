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
                <h3>Clasificación visas no inmigrante</h3>
            </div>
        <div class="menu">
            <ul class="list-group">
            
            <a href="#inicio" style ="text-decoration: none">
            <button type="button"  class="btn-flotante" >
            <i class="fas fa-angle-double-up"></i>
                        
                    </button> </a>
           
                
                <li>
                <a href="#ayudaVisa" style ="text-decoration: none">
                    Identificador visas</a>
                </li>
            <li>
                <a href="#visaB" style ="text-decoration: none" >
                (B) Visitante</a>
                </li>
                <li>
                <a href="#visaC" style ="text-decoration: none">
                (C) Tránsito en los EE. UU</a>
                </li>
                <li>
                <a href="#visaF" style ="text-decoration: none">
                (F) Estudiante académico / (M) Estudiante no académico/técnico</a>
                </li>
                <li> 
                <li>
                <a href="#visaJ"  style ="text-decoration: none"> 
                (J) Visitante de intercambio</a>
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
                                <a href="{{route ('contacto')}}" class="nav-link">UBICACIÓN</a>
                            </li>
                            <li class="nav-item">
                            <a href="{{route ('tiposVisa')}}" class="nav-link">TIPOS DE VISA</a>
                            </li>
                            <li class="nav-item ">
                            <a href="{{route ('requisitosVista')}}" class="nav-link">REQUISITOS NO INMIGRANTE</a>
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
                                        <h2 class="text-dark">Ayuda para identificar tipo de visa:</h2>
                                        <p class="lead text-dark"> Si tiene alguna duda sobre que tipo de visa le conviene más, le ayudamos a identificarla por usted: <br>
                                        Por favor seleccione su motivo de viaje: </p>
                                        <div class="row">
            
                                        <input  type="radio" name="opcionVisa" value="turismoVisita">
                                        <label class="men" for="opcionVisa">Turismo o Visita</label><br>  

                                        <input  type="radio" name="opcionVisa" value="empleo">
                                        <label class="men" for="opcionVisa">Negocios o Empleo</label><br>  

                                        <input  type="radio" name="opcionVisa" value="estudio">
                                        <label class="men" for="opcionVisa">Estudio o Intercambio</label><br>  

                                        <input  type="radio" name="opcionVisa" value="viajar">
                                        <label class="men" for="opcionVisa">Viajar a través de los Estados Unidos</label><br>  
                                        
                                       
                                       
                                    </br></br></br>
                                        
                                    </br></br><input type="submit" class ="btn btn-primary btn-sm " value="ENVIAR"> 
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
                          
                                        <h2 class="text-dark">(B) Visitante:</h2>
                                        <p class="lead text-dark text-justify"> Las visas de visitante son visas de no inmigrante para personas que desean ingresar a los Estados Unidos temporalmente por negocios (categoría de visa B-1), para turismo (categoría de visa B-2) o para una combinación de ambos propósitos (B-1 / B-2). </p>
                                        <h3 class="text-dark text-justify">Negocios (B-1):</h3>
                                        <p class="lead text-dark text-justify"> Consultar con socios comerciales 
                                        <br> Asistir a una convención o conferencia científica, educativa, profesional o de negocios
                                        <br> Liquidar un patrimonio
                                        <br> Negociar un contrato </p>
                                        <h3 class="text-dark text-justify">Turismo (B-2):</h3>
                                        <p class="lead text-dark text-justify"> Turismo
                                            <br>Vacaciones (vacaciones)
                                            <br>Visita con amigos o familiares
                                            <br>Tratamiento médico
                                            <br>Participación en eventos sociales organizados por organizaciones fraternales,
                                             sociales o de servicio
                                             <br>Participación de aficionados en eventos o concursos musicales,
                                             deportivos o similares, si no se les paga por participar
                                             <br>Inscripción en un curso corto de estudio recreativo, 
                                             no para obtener créditos para obtener un título 
                                             (por ejemplo, una clase de cocina de dos días mientras está de vacaciones)</p>

                                             <h3 class="text-dark text-justify">Propósitos de viaje que no aplican:</h3>
                                            <p class="lead text-dark text-justify"> Estudiar
                                            <br>Empleo
                                            <br>Actuaciones pagadas, o cualquier actuación profesional ante un público de pago
                                            <br>Llegada como miembro de la tripulación en un barco o aeronave
                                            <br>Trabajar como prensa extranjera, en radio, cine, periodismo 
                                            impreso u otros medios de información
                                             <br>Residencia permanente en los Estados Unidos</p>

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
                                
                                        <h2 class="text-dark text-justify" >(C) Tránsito en los EE. UU: </h2>
                                        <p class="lead text-dark text-justify"> Las visas de tránsito (C) son visas de no inmigrante para personas que viajan en tránsito inmediato y
                                             continuo a través de los Estados Unidos en ruta a otro país, con pocas excepciones.<br>
                                        </p>
                                        <h3 class="text-dark text-justify" >Propósitos de viaje que aplican: </h3>
                                        <p class="lead text-dark text-justify"> - Un ciudadano extranjero que viaja a otro país que tendrá una breve escala en los Estados Unidos 
                                            cuando la única razón para ingresar a los Estados Unidos es para transitar.
                                            <br>- Un pasajero que embarca desde un puerto extranjero en un crucero u otro buque que se dirige a otro país, que no sea los Estados Unidos, pero durante el curso del viaje, 
                                            el buque hace puerto en los Estados Unidos sin intención de aterrizar en los Estados Unidos.
                                            <br>- Un miembro de la tripulación que viaja a los Estados Unidos como pasajero para unirse a
                                             un barco o avión en el que trabajará, proporcionando servicios para la operación. También necesitará 
                                            una visa D de miembro de la tripulación, emitida con mayor frecuencia como una visa combinada C-1 / D. 
                                            <br>- Un ciudadano extranjero que proceda en tránsito inmediato y continuo a través de los Estados Unidos hacia o desde el Distrito de la Sede de las Naciones Unidas, de conformidad con las disposiciones del acuerdo de la Sede con las Naciones Unidas, requiere una visa de tránsito diplomático (C-2).
                                             Los viajes dentro de los Estados Unidos se limitarán a las inmediaciones de la ciudad de Nueva York.
                                        </p>
                                        <h3 class="text-dark text-justify" >Propósitos de viaje que no aplican: </h3>
                                        <p class="lead text-dark text-justify"> - Un ciudadano extranjero cuya escala en los Estados Unidos es para un propósito principal que no sea el tránsito, por ejemplo,
                                             para visitar amigos o hacer turismo, requiere una visa de visitante (B).
                                            <br>- Un oficial de costas que busca ingresar a los Estados Unidos generalmente requiere una visa de
                                             visitante (B). Los oficiales costeros son empleados temporalmente cuando a un oficial de un barco 
                                             extranjero se le concede permiso de regreso a casa mientras el buque se encuentra en puertos de los
                                            Estados Unidos, siempre que el buque no permanezca en aguas de los Estados Unidos por más de 29 días. 
                                            El oficial de costas puede entonces repetir el proceso con otro buque de la misma línea extranjera.
                                            <br>- Un miembro de la tripulación en un yate privado que navega desde un puerto extranjero que
                                             navegará en aguas de los Estados Unidos durante más de 29 días generalmente debe tener una visa de visitante (B).
                                            <br>- Un funcionario o empleado de una organización internacional designada asignada a los Estados Unidos 
                                            puede pasar en tránsito inmediato y continuo a través de los Estados Unidos con una visa de la Organización Internacional (G-4).
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
                                
                                        <h2 class="text-dark"> (F) Estudiante académico / (M) Estudiante no académico/técnico:  </h2>
                                        <p class="lead text-dark text-justify">Debe tener una visa de estudiante para estudiar en los Estados Unidos. Su curso de estudio y el tipo de
                                             escuela a la que planea asistir determinan si necesita una visa F o una visa M.<br>
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
                                                Universidad o college<br>
                                                Escuela secundaria<br>
                                                Escuela primaria privada<br>
                                                Seminario<br>
                                                Conservatorio<br>
                                                Otra institución académica, incluyendo un programa de formación lingüística<br>
        
                                                <td class="text-justify">Institución vocacional u otra institución no académica reconocida, que no sea un programa de capacitación lingüística<br>
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
                                
                                        <h2 class="text-dark">(J) Visitante de intercambio:  </h2>
                                        <p class="lead text-dark text-justify">Las visas de visitante de intercambio (J) son visas de no inmigrante para personas aprobadas para participar en programas de visitantes de intercambio en los Estados Unidos.<br>
                                        </p>
                                        <h2 class="text-dark">Las categorías de visitantes de intercambio incluyen:  </h2>
                                        <p class="lead text-dark text-justify">
                                        <a href="https://j1visa.state.gov/programs/au-pair/" >Au pair y EduCare</a><br>
                                       <a href= "https://j1visa.state.gov/programs/camp-counselor/">Consejero de Campamento</a><BR>
                                        <a href="https://j1visa.state.gov/programs/government-visitor/" >Visitante del Gobierno</a><br>
                                        <a href="https://j1visa.state.gov/programs/intern/" >Interno</a><br>
                                        <a href="https://j1visa.state.gov/programs/international-visitor/" >Visitante Internacional (Departamento de Uso del Estado)</a><br>
                                        <a href="https://j1visa.state.gov/programs/physician/" >Médico</a><br>
                                        <a href="https://j1visa.state.gov/programs/professor" >Profesor e Investigador Académico</a><br>
                                        <a href="https://j1visa.state.gov/programs/short-term-scholar/" >Becario a corto plazo</a><br>
                                        <a href="https://j1visa.state.gov/programs/specialist/" >Especialista</a><br>
                                        <a href="https://j1visa.state.gov/programs/college-and-university-student/" >Estudiante, college/ universidad</a><br>
                                        <a href="https://j1visa.state.gov/programs/secondary-school-student/" >Estudiante, secundaria</a><br>
                                        <a href="https://j1visa.state.gov/programs/summer-work-travel/" >Viajes de trabajo de verano</a><br>
                                        <a href="https://j1visa.state.gov/programs/teacher" >Maestro</a><br>
                                        <a href="https://j1visa.state.gov/programs/trainee/" >Aprendiz</a><br>
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


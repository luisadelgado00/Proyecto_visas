
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
                <h3>Información a tener en cuenta</h3>
            </div>
        <div class="menu">
            <ul class="list-group">
           
            <a href="#inicio" style ="text-decoration: none">
            <button type="button"  class="btn-flotante">
            <i class="fas fa-angle-double-up"></i>
                        
                    </button> </a>
          
                <li>
                <a href="#generalidades" style ="text-decoration: none">
                    Generalidades</a>
                </li>
                <li>
                <a href="#docGeneral" style ="text-decoration: none">
                Documentación general </a>
                </li>
                <li>
                <a href="#docVisaT"  style ="text-decoration: none" >
                Documentación visa de turista</a>
                </li>
                <li>
                <a href="#docVisaE"  style ="text-decoration: none"> 
               Documentación visa estudiantil</a>
                </li>
                <li>
                <a href="#costos"  style ="text-decoration: none">
            Costos de la visa</a>
                </li>
                <li>
                <a href="#vContinental"  style ="text-decoration: none">
            Proceso con visas continental</a>
                </li>
                <li>
                <a href="#tiempo"  style ="text-decoration: none">
            Tiempo de espera</a>
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

             <!-- Generalidades -->
  <a name="generalidades"></a>
              <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                          
                                        <h2 class="text-dark">Generalidades:</h2>
                                        <p class="lead text-dark"> En general, un ciudadano de un país extranjero que pretenda entrar en los Estados Unidos debe obtener 
                                            primero una visa estadounidense, que se coloca en el pasaporte del viajero; hay varios tipos de visa dependientdo si es de inmigrante o 
                                            no inmigrante. <br>Ciertos viajeros internacionales pueden ingresar al país sin visa, pero deben cumplir los requisitos del Programa de Exención de Visa de los EE. UU, el cual permite que, con un pasaporte electrónico válido, los viajeros ingresen a los Estados Unidos sin una visa, hasta por 90 días por razones de negocios o placer. 
                                            Puede leer los requisitos del Programa de Exención de Visa en <a href="https://travel.state.gov/content/travel/en/us-visas/tourism-visit/visa-waiver-program.html">https://travel.state.gov/content/travel/en/us-visas/tourism-visit/visa-waiver-program.html</a>. Cualquier persona que viaje a los Estados Unidos por motivos que no sean negocios o placer requiere una visa.
                                            <br>En visas continental ofrecemos asesoramiento completo en el proceso para el trámite de visa de tipo turista y estudiantil. </p>
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
                                
                                        <h2 class="text-dark">Documentación general:</h2>
                                        <p class="lead text-dark"> Estos documentos son obligatorios para todos los tipos de visa: <br>
                                        1. Pasaporte válido para viajar a los Estados Unidos. 
                                        La validez del pasaporte debe superar al menos en seis 
                                        meses el período de estadía en los Estados Unidos. <br>
                                        2. El pasaporte que contiene la visa emitida a los Estados 
                                        Unidos más reciente (si aplica el caso).<br>
                                        3. Solicitud de visa para no inmigrantes, página de confirmación del formulario DS-160.<br>
                                        4. Página de Impresión de Confirmación e Instrucciones desde esta página Web.<br>
                                        5. Una fotografía color de 5 x 5 cm (2 x 2 pulgadas) tomada dentro de los 6 meses anteriores. <br>
                                        6. Los miembros acompañantes de la familia, a menos de que entren a los Estados Unidos por otro propósito, 
                                        deberán presentar un certificado de matrimonio (esposa/o)
                                         y/o certificado de nacimiento (para hijos solteros menores de 21 años) según sea aplicable.<br><br>
                                         Si asiste en persona debe llevar todos los documentos originales.
                                        
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
                                
                                        <h2 class="text-dark">Documentación específica visa 
                                            (B) Visitante: Negocios, Turismo, Tratamiento médico: </h2>
                                        <p class="lead text-dark"> No se exigen documentos adicionales a menos que se pretenda 
                                            recibir tratamiento médico en los Estados Unidos. <br> 
                                            Usted puede aplicar para una visa de visitante B-1 para trabajar temporalmente en los E. U. 
                                            como empleado domestica en ciertas situaciones. Usted y su empleador se les solicitara que 
                                            comprueben que la relación de empleo cumpla con las condiciones salariales y de trabajo vigentes en los E.U. </p>
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
                                
                                        <h2 class="text-dark">Documentación específica visa estudiantil: </h2>
                                        <p class="lead text-dark">
                                            - Formulario I-20, Certificado de idoneidad para condición de estudiante no académico, de idiomas o técnico no inmigrante (F-1 o M-1). 
                                            El solicitante deberá presentar un formulario I-20 generado mediante SEVIS, que le será proporcionado al 
                                            solicitante por su institución educativa. El formulario I-20 debe llevar la firma del estudiante y del 
                                            representante de la institución educativa. <br>
                                            - El recibo de pago para el Sistema de Información de Visas de 
                                            Estudiante e Intercambio (SEVIS por sus siglas en Ingles) I-901. Para información adicional acerca de quién requiere pagar esta tarifa. 
                                            Por favor visite la sección de SEVP localizado en la siguiente página: <br>
                                        


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
                                
                                        <h2 class="text-dark">Costos de la visa:</h2>
                                        
                                        <h2 class="text-dark">Aranceles adicionales para solicitantes de visas: </h2>
                                        <p class="lead text-dark"> Además del arancel de solicitud de visa (MRV) podrían exigirse otros aranceles para poder obtener una visa de no inmigrante. 
                                            Los tipos de aranceles adicionales que podrían regir para su solicitud de visa son: <br><br>
                                                - Arancel SEVIS : Los estudiantes (F o M) y visitantes de intercambio (J) 
                                                deben pagar un arancel SEVIS (Sistema de Información de Estudiantes y Visitantes de Intercambio) por separado.
                                                 Se exigirá la constancia de pago antes de emitirse una visa de estudiante o visitante de intercambio.
                                                 Para más información ingrese aqui <a href ="http://www.ice.gov/sevis" >http://www.ice.gov/sevis</a><br><br>
                                                - Arancel de reciprocidad: Dependiendo del país de ciudadania del solicitante y el tipo de visa, podria
                                                tener que pagar un costo adicional. 
                                                Para más información ingrese aqui <a href="https://travel.state.gov/content/travel/en/us-visas/Visa-Reciprocity-and-Civil-Documents-by-Country.html">
                                                    https://travel.state.gov/content/travel/en/us-visas/Visa-Reciprocity-and-Civil-Documents-by-Country.html</a><br>
                                                </p>
                                    
                                        <h2 class="text-dark">Detalle de aranceles de visas (MRV) estadounidenses: </h2>
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
               
                                                <td class="text-justify">(B) Visitante: Negocios, Turismo, Tratamiento médico<br>
                                                (C) Tránsito en los EE. UU.<br>
                                                (D) Miembro de tripulación<br>
                                                (F) Estudiante académico<br>
                                                (M) Estudiante no académico/técnico<br>
                                                (I) Medios o periodistas<br>
                                                (J) Visitante de intercambio<br>
                                                (TD/TN) Profesional del TLCAN<br>
                                                (T) Víctima de trata de personas<br>
                                                (U) Víctima de actividad delictiva</td> 
                                                <td class="text-justify">(H) Trabajador/empleo temporal o pasantes<br>
                                                (O) Personas con capacidades extraordinarias<br>
                                                (P) Atletas, artistas y animadores<br>
                                                (Q) Visitante de intercambio cultural internacional<br>
                                                (R) Trabajador religioso<br>
                                                (L) Empleado transferido dentro de su empresa</td> 
                                                <td class="text-justify">(E1) Ciudadano de país con el cual EE. UU. ha firmado tratados<br>
                                                    (E2) Ciudadano de país con el cual EE. UU. ha firmado tratados y 
                                                    que hubiera realizado inversiones significativas en los EE. UU.<br>
                                                    (E3) Australianos con especialidades profesionales</td>  
                                                <td class="text-justify">(K) Prometido(a) o cónyuge de un(a) ciudadano/a estadounidense</td> 
               
               
              

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
                                
                                        <h2 class="text-dark">Proceso con visas continental: </h2>
                                        <p class="lead text-dark"> Para comenzar el proceso con Visas Continental primero 
                                            se debe realizar un pre diagnóstico con el fin de identificar que probabilidades 
                                            hay de aprobación para dicho cliente. <br>
                                            Una vez arrojados los resultados debe seguir estos pasos:<br>
                                            1. Completar los datos solicitados por la página.<br>
                                            2. Si cumple con cierto porcentaje, se le registrará en la página y un asesor de la empresa se contactara con usted vía correo electrónico o teléfono 
                                            para explicarle el proceso y firmar el contrato para así comenzar con el trámite.
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
                                
                                        <h2 class="text-dark">Tiempo de espera: </h2>
                                        <p class="lead text-dark"> Es importante planificar el viaje con anticipación y solicitar la visa con tiempo. La Embajada y los Consulados estadounidenses tratan de que los tiempos de espera para la emisión de las visas sean lo más cortos posible. Algunos tipos de visas son más populares que otros y 
                                            podrían tener tiempos de espera más largos para la cita de solicitud y procesamiento.<br>
                                            Debido a la pandemia de COVID-19, la Embajada de los Estados Unidos en Bogotá continua 
                                            sin la posibilidad de reanudar las operaciones habituales de visa, las fechas para visas de no inmigrante 
                                            pueden cancelarse si las situaciones del país no permiten brindar dicho servicio.
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


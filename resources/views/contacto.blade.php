@include('header')
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="<?php echo asset('css/requisitos.css')?>" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7bcc179281.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>VISAS CONTINENTAL</title>
</head>
<body>
    

             <!-- contacto -->
              <section class="bg-mix py-3 ">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                            <h2 class="text-dark text-center">{!! trans('messages.contacto1') !!} </h2>
                            <p class="lead text-dark text-center">   

                        <a href ="https://www.facebook.com/visascontinentalcol/" 
                        <button type="button" id="sidebarCollapse" class="btn btn-primary  btn-lg mx-2">
                        <i class="fab fa-facebook-f"></i> 
                        </button>
                        </a>        
                       
                        <button type="button" id="sidebarCollapse" class="btn btn-primary  btn-lg mx-2"style="background: linear-gradient(to bottom, #1441a9,#b4296b,#deb660); border-color: #deb660;">
                        <i class="fab fa-instagram"></i>
                        </button>

                        <a  href="https://api.whatsapp.com/send?phone=573022155592">
                        <button type="button" id="sidebarCollapse" class="btn btn-primary btn-lg mx-2" style="background-color: #41d259; border-color: #41d259;">
                        <i class="fab fa-whatsapp"></i>
                        </button>
                        </a> </p>

                        <h2 class="text-dark text-center">{!! trans('messages.contacto2') !!} </h2>
                        <p class="lead text-dark text-center">
                        Ac. 26 #32 N 92<br>
                        Bogotá, Colombia
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63630.446630533384!2d-74.159343!3d4.611395!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b619d394231%3A0x213f5691e322a2ae!2sAc.%2026%20%2332%20N%2092%2C%20Bogot%C3%A1%2C%20Colombia!5e0!3m2!1ses!2sus!4v1636048800273!5m2!1ses!2sus" 
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                           
                           <!-- <div id="map"></div>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=initMap"></script>
                                <script>
                                    function initMap() {
                                    var myLatLng = {lat: -25.363, lng: 131.044};

                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 4,
                                        center: myLatLng
                                    });

                                    var marker = new google.maps.Marker({
                                        position: myLatLng,
                                        map: map,
                                        title: 'Hello World!'
                                    });
                                    }
                                
                                </script> 
                            </div>-->
                        </div>
                    </div>
                </div>
              </section>
   
   
 </div>

  
   

</body>
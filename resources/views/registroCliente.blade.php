<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISAS CONTINENTAL</title>
    <link  href="<?php echo asset('css/diseño.css')?>" rel="stylesheet" type="text/css">
   
</head>
<body>
<h2 class="titulo">REGISTRO DE USUARIOS</h2>
   <div class="pregu">
     <form class="" action="este.php" method="post">
     <label class="label">NOMBRE</label> 
     <input type="text" name="nombre" class ="nombre" />
     <label class="label">APELLIDO</label> 
     <input type="text" name="apellido" class ="apellido" />
     <br><label class="label">CÉDULA</label> 
     <input type="text" name="cedula" class ="telefono" />
     <label class="label">CORREO</label> 
     <input type="email" name="correo" class ="correo" />
     <label class="label">TIPO DE VISA</label> 
     <BR><select name="visa" class="visas">
    <option>Visa estudiantil</option>
    <option>Visa de turismo</option>
  </select>
  <a href= "{{url ('dashboard')}}" class="btn btn-primary" >Perfil</a>
     <br><input type="submit" name="registrarUser" class ="boton" value="REGISTRAR"/><br>
     

   

</div>
</body>
</html>
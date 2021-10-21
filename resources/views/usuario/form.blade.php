<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link  href="<?php echo asset('css/diseño.css')?>" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<h1 class="titulo">{{$modo}} usuario </h1>
<div class="pregu">
<label class="label">NOMBRE</label> 
 <input type="text" class ="nombre" name="Nombre" value="{{isset($usuario->Nombre)?$usuario->Nombre:''}}" id ="Nombre" />
 <br>

 <label class="label">APELLIDO</label> 
 <input type="text" class ="apellido" name="Apellido" value="{{isset($usuario->Apellido)?$usuario->Apellido:''}}" id ="Apellido" />
 <br>

 <br><label class="label">TELEFONO</label> 
 <input type="text" class ="telefono" name="Telefono" value="{{isset($usuario->Telefono)?$usuario->Telefono:''}}" id ="Telefono" />
 <br>

 <label class="label">EMAIL</label> 
 <input type="text" class ="correo" name="Email" value="{{isset($usuario->Email)?$usuario->Email:''}}" id ="Email" />
 <br>

 <label class="label">TIPO DE VISA -- TURISTA -- ESTUDIANTIL</label> 
 <input type="text" class="visa" name="Visa" value="{{isset($usuario->Visa)?$usuario->Visa:''}}" id ="Visa" />
 <br>


 <br><input class="boton" type="submit" value="{{$modo}}"/>

 <a href="{{url('/usuario/')}}" class="boton_2" style="text-decoration:none" >REGRESAR</a>

 <br>
 </div>
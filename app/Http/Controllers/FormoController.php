<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormoController extends Controller
{
   public function store(Request $request)
    {
        //
       // $datosUsuario = request()-> all();
       $datosUsuario = request()-> except('_token');
       Prediagnostico::insert($datosUsuario);
        return response()->json($datosUsuario);
        
        
    }
    
    public function formula(Request $request){
        $mensaje = "";
    $porcentaje = 0;
    $puntos = 0;
    $pregunta1="";
    $pregunta2="";
    $pregunta3=""; 
    $pregunta4=""; 
    $pregunta5="";
  
    if (isset($_POST['pregunta1'])) {
   $pregunta1=$_POST['pregunta1'];
}
else{
    $pregunta1="";
}
if (isset($_POST['pregunta2'])) {
    $pregunta2=$_POST['pregunta2'];
 }
 else{
     $pregunta2="";
 }   
 if (isset($_POST['pregunta3'])) {
    $pregunta3=$_POST['pregunta3'];
 }
 else{
     $pregunta3="";
 }   
 if (isset($_POST['pregunta4'])) {
    $pregunta4=$_POST['pregunta4'];
 }
 else{
     $pregunta4="";
 }   
 if (isset($_POST['pregunta5'])) {
    $pregunta5=$_POST['pregunta5'];
 }
 else{
     $pregunta5="";
 }  
 
    
    if ($pregunta1 == "f") 
    {
        $puntos = $puntos + 1; 
    }

if ($pregunta2 == "v") 
{
    $puntos = $puntos + 1; 
}

if ($pregunta3 == "v") 
{
    $puntos = $puntos + 1; 
}

if ($pregunta4 == "v") 
{
    $puntos = $puntos + 1; 
}

if ($pregunta5 == "v") {
    $puntos = $puntos + 1; 
}
if ($pregunta1==""||$pregunta2==""||$pregunta3==""||$pregunta4==""||$pregunta5=="") { 
    echo '<script language="javascript">alert("No has contestado todas las preguntas, hay campos vacios.");</script>';

  }
 
 
if (($puntos == 0) || ($puntos == 1) || ($puntos == 2)) {
    $mensaje = "Tu probabilidad de obtener una visa es muy baja";
}elseif (($puntos == 3) || ($puntos == 4)) {
    $mensaje = "Tu probabilidad de obtener una visa es alta";
}elseif (($puntos == 5)) {
    $mensaje = "Tu probabilidad de obtener una visa es muy alta";
}
$porcentaje = ($puntos / 5)  * 100;
/*echo '<script language="javascript">alert("Probabilidad de visa: '.$porcentaje.' % "+"'.$mensaje.'");</script>';*/
/*echo "Resultado prueba prediagnóstica: $porcentaje % de probabilidad. <br> $mensaje <br>"*/

return $request;

}

    
}

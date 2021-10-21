<?php

namespace App\Http\Controllers;

use App\Models\Prediagnostico;
use Illuminate\Http\Request;

class PrediagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['prediagnosticos']=Prediagnostico::paginate(5);
        return view('prediagnostico.preRegistro',$datos);
    }
    public function preReg()
    {
        $datos['prediagnosticos']=Prediagnostico::paginate(5);
        return view('prediagnostico.preRegistro',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prediagnostico.resultado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       // $datosUsuario = request()-> all();
       $datosUsuario = request()-> except('_token');
       Prediagnostico::insert($datosUsuario);
       
      
       return redirect('formulario')->with('alerta','Gracias por completar el formulario.');
        
        
    }
    public function formu(Request $request)
    {
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
         


       $datosUsuario = request()-> except('_token','pregunta1');
     request()->validate([
         'pregunta1'=>'required',
         'pregunta2'=>'required',
         'pregunta3'=>'required',
         'pregunta4'=>'required',
         'pregunta5'=>'required'

     ]);
    return view('prediagnostico/resultado')->with([
        'porcentaje'=>$porcentaje,
        'mensaje'=>$mensaje
                                    ]);
     
     
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prediagnostico  $prediagnostico
     * @return \Illuminate\Http\Response
     */
    public function show(Prediagnostico $prediagnostico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prediagnostico  $prediagnostico
     * @return \Illuminate\Http\Response
     */
    public function edit(Prediagnostico $prediagnostico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prediagnostico  $prediagnostico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prediagnostico $prediagnostico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prediagnostico  $prediagnostico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Prediagnostico:: destroy($id);
        return redirect('prediagnostico')->with('alerta','Pre registro borrado');
       
    }

}
<?php

namespace App\Http\Controllers;

use App\Models\Visas;
use Illuminate\Http\Request;

class VisasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function visas(Request $request)
    {
        $mensaje = "";
        $variable = 0;
        $opcionVisa="";
        
        if (isset($_POST['opcionVisa'])) {
            $opcionVisa=$_POST['opcionVisa'];
         }
         else{
             $opcionVisa="";
         }
         
        
        /************** */    
       

  /************** */       
  if ($opcionVisa == "iniciar") 
  {
       $variable = 0; 
  }    
         if ($opcionVisa == "turismoVisita") 
         {
              $variable = 1; 
         }
         
         else if($opcionVisa == "empleo") 
         {
             $variable =  2; 
         }
         
         else if ($opcionVisa == "estudio") 
         {
             $variable =  3; 
         }
         
         if ($opcionVisa == "viajar") 
         {
             $variable = 4; 
         }
         
      
         if ($variable == 0) {
            $mensaje = "Visa tipo B <br>Turismo y vacaciones <br> Visitar a familiares y amigos. 
           Tratamiento médico 
           Tránsito por los EE.UU.";
          
          
         }else if ($variable == 1) {
             $mensaje = "Visa tipo B: <br> Turismo y vacaciones <br> Visitar a familiares y amigos.
             <br> Tratamiento médico
             <br> Tránsito por los EE.UU.";
         }elseif ($variable == 2) {
             $mensaje = "Visa tipo B o J: <br> Consultoría con socios comerciales. <br>
             Viaje para una convención o conferencia. <br>
             Negociar un contrato.";
         }elseif ($variable == 3) {
             $mensaje = "Visa tipo F, M o J: <br>Ejemplos de este tipo de visa: 
             <br>Estudio académico en una institución académica aprobada, incluida la escuela secundaria (F)
             <br> Estudio vocacional en una institución educativa aprobada (M)
             <br> Estudio académico en una institución educativa aprobada, incluida la escuela secundaria, bajo un programa de intercambio aprobado (J)";
         }
        elseif ($variable == 4) {
            $mensaje = "Visa tipo B o C: <br> Sus transferencias aéreas en los EE. UU., Como parte de un viaje posterior a otro país.";
        }
         /*echo '<script language="javascript">alert("Probabilidad de visa: '.$porcentaje.' % "+"'.$mensaje.'");</script>';*/
         /*echo "Resultado prueba prediagnóstica: $porcentaje % de probabilidad. <br> $mensaje <br>"*/
         


       $datosUsuario = request()-> except('_token','pregunta1');
     request()->validate([
         'opcionVisa'=>'required',
         
     ]);
   return view('resultadoVisa')->with([
        'variable'=>$variable,
        'mensaje'=>$mensaje
                                    ]); 
  

    
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visas  $visas
     * @return \Illuminate\Http\Response
     */
    public function show(Visas $visas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visas  $visas
     * @return \Illuminate\Http\Response
     */
    public function edit(Visas $visas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visas  $visas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visas $visas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visas  $visas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visas $visas)
    {
        //
    }
}

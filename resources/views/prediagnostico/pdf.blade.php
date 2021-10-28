


    
    <h2 >Formulario Prediagnóstico para la aprobación para la visa estadounidense:</h2>

    <form method="POST" action="{{url('prediagnostico')}}"  >
        @csrf
    <h4>Los resultados de su prediagnóstico son: </h4>
  
 
    
</ul>



    

    <br/>
    <br/>
   <table class="table table-light table-bordered table-hover table-condensed">
       <thead >
           <tr >
               <td>#</td> 
               <td>NOMBRE</td>
               <td>APELLIDO</td>
               <td>TELEFONO</td>
               <td>CORREO</td>
               <td>TIPO DE VISA</td>
               <td>PROBABILIDAD DE APROBACIÓN</td>
              
           </tr>
       </thead>
       <tbody>
           <tr>
               @foreach($prediagnosticos as $prediagnostico)

               <td>{{$prediagnostico->id}}</td> 
               <td>{{$prediagnostico->nombreU}}</td> 
               <td>{{$prediagnostico->apellidoU}}</td> 
               <td>{{$prediagnostico->telefonoU}}</td> 
               <td>{{$prediagnostico->correoU}}</td> 
               <td>{{$prediagnostico->visa}}</td> 
               <td>{{$prediagnostico->probabilidad}}</td> 
               
              

           </tr>
           @endforeach

       </tbody>
   </table>


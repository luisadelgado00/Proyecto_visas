



@if (Session::has('alerta'))
{{ Session::get('alerta') }}

@endif



    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link  href="<?php echo asset('css/preguntas.css')?>" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<title>VISAS CONTINENTAL</title>



<h2 class="titulo">{!! trans('messages.prediagClientes') !!} </h2>
    


<br><a href= "{{url ('dashboard')}}" class="btn btn-primary" >{!! trans('messages.perfil') !!}</a>

    <br/>
    <br/>
   <table class="table table-light table-bordered table-hover table-condensed">
       <thead >
           <tr >
               <td>#</td> 
               <td>{!! trans('messages.nombre') !!}</td>
               <td>{!! trans('messages.apellido') !!}</td>
               <td>{!! trans('messages.email') !!}</td>
               <td>{!! trans('messages.probabilidad') !!}</td>
               <td>{!! trans('messages.acciones') !!}</td>
           </tr>
       </thead>
       <tbody>
           <tr>
               @foreach($prediagnosticos as $prediagnostico)

               <td>{{$prediagnostico->id}}</td> 
               <td>{{$prediagnostico->nombreU}}</td> 
               <td>{{$prediagnostico->apellidoU}}</td> 
               <td>{{$prediagnostico->correoU}}</td> 
               <td>{{$prediagnostico->probabilidad}}</td> 
               
               <td> 
                   
                   <form action="{{ url('/prediagnostico/'.$prediagnostico->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('¿Deseas borrar?')"  
                    value="{!! trans('messages.borrar') !!}"class="btn btn-primary">
                    
                    </form>
               </td>

           </tr>
           @endforeach

       </tbody>
   </table>

  

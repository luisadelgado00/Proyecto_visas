@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link  href="<?php echo asset('css/preguntas.css')?>" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<h2 class="titulo">Registro de clientes: </h2>

<br><a href= "{{url ('dashboard')}}" class="btn btn-primary" >PERFIL</a>
<a href= "{{url ('/prediagnostico')}}" class="btn btn-primary" >REGISTRAR NUEVO CLIENTE</a>
</br>
</br>
<table class="table table-light  table-bordered table-hover table-condensed">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Visa</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->Nombre}}</td>
            <td>{{$usuario->Apellido}}</td>
            <td>{{$usuario->Telefono}}</td>
            <td>{{$usuario->Email}}</td>
            <td>{{$usuario->Visa}}</td>
            <td>
                <div class="trans">
                <a class="btn btn-primary" href="{{url('/usuario/'.$usuario->id.'/edit')}}" role="button" id="bEdit">
                EDITAR</a></br></div>
                
                
                <form action="{{url('/usuario/'.$usuario->id)}}"  method="post">
                <div class="trans_2">
                    @csrf
                    {{method_field('DELETE')}}
                   
                    <br><input type="submit" id="bDelete" onclick="return confirm('¿Deseas borrar?')"class="btn btn-primary"
                     value="BORRAR">
                </div>
                </form>
            </td>
        </tr>
        @endforeach 
    </tbody>
</table>


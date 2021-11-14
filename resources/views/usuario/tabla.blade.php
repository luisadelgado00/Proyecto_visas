@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link  href="<?php echo asset('css/preguntas.css')?>" rel="stylesheet" type="text/css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<h2 class="titulo"> {!! trans('messages.clientesR') !!} </h2>

<br><a href= "{{url ('dashboard')}}" class="btn btn-primary" > {!! trans('messages.perfil') !!}</a>

</br>
</br>
<table class="table table-light  table-bordered table-hover table-condensed">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>  {!! trans('messages.nombre') !!}</th>
            <th>{!! trans('messages.apellido') !!}</th>
            <th>{!! trans('messages.acciones') !!}</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $users)
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            
            <td>                
                
                <form action="{{url('/usuario/'.$users->id)}}"  method="post">
                <div class="trans_2">
                    @csrf
                    {{method_field('DELETE')}}
                   
                    <br><input type="submit" id="bDelete" onclick="return confirm('¿Desea eliminar a este cliente?')"class="btn btn-primary"
                     value="{!! trans('messages.borrar') !!}">
                </div>
                </form>
            </td>
        </tr>
        @endforeach 
    </tbody>
</table>

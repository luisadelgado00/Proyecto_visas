

<title>VISAS CONTINENTAL</title>

<form enctype="multipart/form-data" action="{{url('/usuario')}}" method="post">
    @csrf
    @include('usuario.form',['modo'=>'crear']);
    <a href="{{url('/prediagnostico/')}}" class="btn btn-primary">PRE REGISTROS</a>
</form>


<style>

body {


width: 100% !important;
box-sizing: border-box;
font-family: 'Roboto', sans-serif;
background: rgb(187, 183, 252)url(https://www.mactualidad.com/wp-content/uploads/2013/08/new-york-fondos-pantalla-hd-25.jpg);
align-items: center;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;

}

td {
        font-size: 15px;
        line-height: 20px;
        padding: 0 20px;
        text-align: center;
        vertical-align: top;
        width: 50%;
    }

    td.first {
        border-right: 5px solid #4BB495  ;
    }
    td.second{
        font-size: 15px;
        line-height: 20px;
        padding: 0 20px;
        text-align: right;
        vertical-align: top;
        width: 10%;
    }
    .pregu{

        position:absolute;
        top: 55%;
        margin-top: -250px;
        left: 50%;
        margin-left: -250px;
        width: 500px;
        height: 500px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.8);

}


</style>
<body>
    

<x-app-layout>
    
           @can('admin.home')
           <br><br>
            <h1 style="display: flex;justify-content: center; font-weight: bold">{!! trans('messages.funDash1') !!}</h1>
            <div class="py-10" style="display: flex; justify-content: center">
                <div style="margin: auto" class="col text-center>"
                    <br><a href= "{{url ('/prediagnostico')}}" class="boton" ><img  src="{!! asset('images/chequeo.png') !!}" width="200px" height="150px"/>{!! trans('messages.funDash2') !!}</a><br>
                </div>
                <div style="margin: auto" class="col text-center">
                    <a href= "{{url ('/usuario')}}" class="boton" ><img src="{!! asset('images/man.png') !!}" width="200px" height="150px">{!! trans('messages.funDash3') !!}</a></br>
                </div>
            </div>
            @endcan
            @can('user.home')
            <br><br>
            <h1 style="display: flex;justify-content: center; font-weight: bold">{!! trans('messages.funDash4') !!}</h1>
            <div class="py-10" style="display: flex; justify-content: center">
            <a  href= "{{route ('formulario')}}" class="boton"><img src="{!! asset('images/diagnostico.png') !!}" width="200px" height="120px">{!! trans('messages.prediagnostico') !!}</a></br></br>
            </div> 
            @endcan
            
    
</x-app-layout>
</body>

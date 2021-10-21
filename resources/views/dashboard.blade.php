<style>

body {

overflow: hidden;
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
   
            <div class="pregu">

            <form class="" action="admin.php" method="post">
            <table>
                <tr>
            <!--CLICK EN IMAGENES QUE SON BOTONES CON ESCRITURA NORMAL-->   
            <td><br><label class="label">REGISTRO DEL CLIENTE</label><br>
            <br><a href= "{{url ('/prediagnostico')}}" class="boton" ><img  src="{!! asset('images/usuario.png') !!}" width="200px" height="150px"/></a><br></td>
            </tr>
            <tr>
            <td ><br><label class="label">VISUALIZACION REGISTRO DEL CLIENTE</label><br>
            <a href= "{{url ('/usuario')}}" class="boton" ><img src="{!! asset('images/gafas.png') !!}" width="200px" height="120px"></a></br>
            
            
            
            </tr>

            </tr>
            </table>
            </div> 
            </div>
    
</x-app-layout>
</body>

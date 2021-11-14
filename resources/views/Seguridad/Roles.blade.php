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

                        <h1>PERMISOS</h1>
                        <table class="table table-light  table-bordered table-hover table-condensed">
                        <thead class="thead-light">
                            <tr>
                                <th class="px-4 py-3 text-xs">#</th>
                                <th class="px-4 py-3 text-xs">Role</th>
                                <th class="px-4 py-3 text-xs">Permisos</th>
                                <th class="px-4 py-3 text-xs">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $roles)
                            <tr class="text-gray-500 hover:bg-gray-200 dark:hover:bg-grey-600 dark:text-gray-300">
                                <td class="px-4 py-1 text-xs">{{$roles->id}}</td>
                                <td class="px-4 py-1 text-xs">{{$roles->name}}</td>
                                <td class="px-4 py-1 text-xs">{{$roles->permission_id}}</td>
                                
                                <!--<td>
                                    <div class="trans">
                                    <a class="btn btn-primary" href="{{url('/Permisos/'.$roles->id.'/edit')}}" role="button" id="bEdit">
                                    EDITAR</a></br></div>
                                    
                                    
                                    <form action="{{url('/Permisos/'.$roles->id)}}"  method="post">
                                    <div class="trans_2">
                                        @csrf
                                        {{method_field('DELETE')}}
                                       
                                        <br><input type="submit" id="bDelete" onclick="return confirm('¿Deseas borrar?')"class="btn btn-primary"
                                         value="BORRAR">
                                    </div>
                                    </form>
                                </td>-->
                            </tr>
                            @endforeach 
               
               
                      
                           
                
                
                </tr>
    
                </tr>
                </table>
                </div> 
                </div>
        
    </x-app-layout>
    </body>
    
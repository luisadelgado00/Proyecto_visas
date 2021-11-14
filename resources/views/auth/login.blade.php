
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .wrap{
        width: 90%;
        max-width: 1000px;
        margin: auto;
        }
        .pregu{

        position:absolute;
        top: 50%;
        margin-top: -230px;
        left: 50%;
        margin-left: -250px;
        width: 500px;
        height: 520px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.8);
        text-align: center;
        
        }

        .titulo {
        font-family: 'Open Sans Condensed', sans-serif;
        position: relative;
        margin-top: 15px;
        text-align: center;
        font-size: 40px;
        color: rgb(1, 7, 26);
        text-shadow: 3px 3px 10px rgb(3, 89, 146);
        }
        h3{
        font-size: 20px;
        color: rgb(1, 7, 26);
        text-shadow: 3px 3px 10px rgb(3, 89, 146);
        font-family: 'Open Sans Condensed', sans-serif;
        margin-top: 40px;
        }
        .label {
        color:rgb(255, 255, 255);
        display:block;
        padding-bottom:9px;
        text-align: left;
        margin-top: 40px;
        margin-left: 75px;
        font-size: 20px;
        text-shadow: 3px 3px 10px rgb(4, 43, 70);
        font-family: 'Open Sans Condensed', sans-serif;
        }

        .mensaje2 {
            /*color: rgb(255, 255, 255);*/
            display:block;
            margin-top: -14px;
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 20px;
            margin-top: 5px;
            text-shadow: 3px 3px 10px rgb(4, 43, 70);
            -webkit-text-fill-color: rgb(255, 255, 255);
            -webkit-text-stroke: 1.5px black;
            }
        h4{
        font-size: 20px;
        color: rgb(253, 254, 255);
        font-family: 'Open Sans Condensed', sans-serif;
        position: relative;
        margin-top: 40px;
        margin-left: 40px;
        text-align: left;
        }
        .boton{
        margin-left: 50px;
        padding:5px 20px;
        border:1px solid rgba(0,0,0,0.4);
        text-shadow:0 -1px 0 rgba(0,0,0,0.4);
        box-shadow:
        inset 0 1px 0 rgba(255,255,255,0.3),
        inset 0 10px 10px rgba(255,255,255,0.1);
        border-radius:0.3em;
        background:#000f38;
        color:white;
        font-weight:bold;
        cursor:pointer;
        font-size:13px;
        top: 50%;
        margin-top: 60px;
        left: 50%;
        margin-left: -10px;
        font-size: 20px;
        text-decoration: none;
        }
        input[type=password]:hover {
        box-shadow: inset 0 -70px 0 0 rgb(252, 252, 252);
        }
        input[type=email]:hover{
        box-shadow: inset 0 -70px 0 0 rgb(255, 255, 255);
        }
        input[type=submit]:hover {
        box-shadow: inset 0 -70px 0 0 #08B;
        }

        .user{
        background: rgba(255, 255, 255, 0.658);
        border-style: none;
        transition: 0.5s ease-in;
        outline: none;
        height:40px;
        width: 350px;
        box-shadow: none;
        position:absolute;
        top: 50%;
        margin-top: -115px;
        left: 45%;
        margin-left: -150px;
        font-size: 20px;

        }
        .password{
        background: rgba(255, 255, 255, 0.658);
        border-style: none;
        transition: 0.5s ease-in;
        outline: none;
        height:40px;
        width: 350px;
        box-shadow: none;
        position:absolute;
        top: 50%;
        margin-top: 1px;
        left: 45%;
        margin-left: -150px;
        font-size: 20px;
        }
    </style>
</head>
<body>
<h2 class="titulo">{!! trans('messages.welcome') !!}</h2>
  <div class="wrap">
      
  <div class="pregu">

  <x-guest-layout>
   
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label class="label" for="email" value="{!! trans('messages.email') !!}" />
                <x-jet-input class="user" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label class="label" for="password" value="{!! trans('messages.passW') !!}" />
                <x-jet-input class="password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" >
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{!! trans('messages.recDatos') !!}</span>
                </label>
            </div>

            <div >
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {!! trans('messages.olvPass') !!}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                {!! trans('messages.logIn') !!}
                </x-jet-button>
            </div>
        </form>
    
</x-guest-layout>

  
     <h3 class="mensaje2" >{!! trans('messages.mensajeInicio') !!}</h3><br>
     
     
     <a href= "{{url ('welcome')}}" class="boton" >{!! trans('messages.inicio') !!}</a>
</div> 
</div> 
</div>
</div>  
</div>
</form>    
</body>
</html>
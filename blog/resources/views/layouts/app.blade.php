<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="/doozie/css/sweetalert.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')               }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.css')             }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')                   }}">
    <script src="{{asset('js/jquery.min.js')                  }}"></script>
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body 
        {            
            font-family: 'Lato';

            color: black;
            background-color: #5959a6;
                 
        }
        
        h1 
        {
            font-size: 200%;
            color: #9ffea9;
            font-weight: bold;
        }
        h2 
        {
            font-size: 100%;
            color: #5959a6;
            font-weight: bold;
        }
        h3 
        {
            font-size: 90%;
            color: purple;
            text-align: center;
        }
        h4 
        {
            font-size: 75%;
            text-align: center;
        }
        
}
        .fa-btn 
        {

        }

       
    </style>
</head>


<body id="app-layout">

    <ul>
        <h1><center>Mactus Management System</center><h1>
    </ul>
          
    <nav class="navbar navbar-default navbar-static-top">
        <div class="collapse navbar-collapse" id="app-navbar-collapse"  >
            <ul class="nav navbar-nav navbar-top"  >
                <li style= "margin-left: 10px" >
                <h2>
                Mactus
                </h2></li>
                
                 <li ><a href="{{ url('/home') }}"><h2>Home</h2></a></li>

                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><h2>
                       Inventory</h2></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/inventory') }}">Inventory log</a></li>
                        <li><a href="{{ url('/inventory') }}">Report</a></li>
                        
                    </ul>
                </li>
                 

 
 
 
                <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())


                        <li><a href="{{ url('/login') }}" width="50"><h2>Login</h2></a></li>
                       
                        
                    @else

                     <li class="dropdown" >
                       
 

                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><h2>
                                {{ Auth::user()->name }}</h2> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                            
                            </ul>
                        </li>   
                    @endif

                  
                </ul>


        </div>



    </nav>
            
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

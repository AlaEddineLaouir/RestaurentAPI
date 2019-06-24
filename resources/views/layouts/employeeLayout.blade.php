
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                           <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{Auth::guard('employee')->check() ? Auth::guard('employee')->user()->name :'Nope'  }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href=""
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form"

                                        @if (Auth::guard('employee')->check())
                                            action="{{   route('employee.logout') }}"
                                        @else
                                            action="{{   route('logout') }}"
                                        @endif    
                                        method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                                @switch(Auth::guard('employee')->user()->role)
                                    @case('admin')
                                        <div class="card card-default">
                                            <div class="card-header">
                                                Adminstrateur
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group">
                                                
                                                    <li class="list-group-item">
                                                        <a href="{{route('employee.create')}}">Ajouter Employee</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="{{route('employee.index')}}">List Employees</a>
                                                    </li>
                                                        
                                                </ul>
                                            </div>
                                        </div>    

                                        @break
                                    @case('serveur')
                                    
                                        <div class="card card-default">
                                            <div class="card-header">
                                               Serveur
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group">
                                                  
                                                    <li class="list-group-item">
                                                        <a href="{{route('command.create')}}">Ajouter Commande </a>
                                                    </li>
                                                    <li class="list-group-item">
                                                            <a href="{{route('command.servi')}}">List Commnade prete a servir</a>
                                                        </li>
                                                    <li class="list-group-item">
                                                        <a href="{{route('command.table')}}">List Commnade servis a table</a>
                                                    </li>
                                                     
                                                </ul>
                                            </div>
                                        </div>
                                    
                                        @break

                                        @case('cuisinier')

                                            <div class="card card-default">
                                                <div class="card-header">
                                                   Chef cuisinie
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group">
                                                      
                                                        <li class="list-group-item">
                                                            <a href="{{route('command.Atraiter')}}">List Des Nouvelles Commandes </a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="{{route('command.Entraitement')}}">List Des Commandes en Traitement</a>
                                                        </li>
                                                         
                                                    </ul>
                                                </div>
                                            </div>

                                        @break
                                        @case('RC')

                                        <div class="card card-default">
                                                <div class="card-header">
                                                   Gestionaire de Commande
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group">
                                                      
                                                        <li class="list-group-item">
                                                            <a href="{{route('category.create')}}">Ajouter Category</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="{{route('category.index')}}">Menu</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="">Ajouter Une table</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="">List Des Tables</a>
                                                        </li>
                                                        
                                                        <li class="list-group-item">
                                                            <a href="{{route('command.onlineCommand')}}">Commande faite online</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="{{route('command.create')}}">Ajouter commande a livrer</a>
                                                        </li>
                
                                                    </ul>
                                                </div>
                                           </div>
                                        @break
                                        @case('caissier')

                                            <div class="card card-default">
                                                <div class="card-header">
                                                   Caissier
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group">
                                                      
                                                        <li class="list-group-item">
                                                            <a href="{{route('command.caisse')}}">Liste Des Commande Servis </a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        @break

                                        @case('livreur')
                                        <div class="card card-default">
                                                <div class="card-header">
                                                   Livreur
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group">
                                                      
                                                        <li class="list-group-item">
                                                            <a href="{{route('command.Alivrer')}}">Liste Des Commande Prete a Livrer </a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a href="{{route('command.Enlivraison')}}">List Des Commandes A livrer</a>
                                                        </li>
                                                         
                                                    </ul>
                                                </div>
                                           </div>
                                        @break
                                    @default
                                        
                                @endswitch       
                        </div>
                        <div class="col-md-8">
                                @if ($errors->count() > 0)
                                <br>
                                <ul class="list-group">
                                        @foreach ($errors->all() as $error)
                                            <li class="list-group-item text-danger" style="background-color:azure">
                                                {{$error}}
                                            </li>
                                        @endforeach
                                </ul>
                                <br>                               
                            @endif
                            @yield('content')
                        </div>
                    </div>
                
        </div>
    </body>
    </html>
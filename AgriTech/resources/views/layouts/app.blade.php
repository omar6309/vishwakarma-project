<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- JQuery -->
    <script type="text/javascript" src="{{url('assets\add-ons\MDB-4.8.11\js\jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{url('assets\add-ons\MDB-4.8.11\js\popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{url('assets\add-ons\MDB-4.8.11\js\bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{url('\assets\add-ons\MDB-4.8.11\js\mdb.min.js')}}"></script>
    <!-- Font Awesome -->

    <!-- Bootstrap core CSS -->
    <link href="{{url('assets\add-ons\MDB-4.8.11\css\bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{url('assets\add-ons\MDB-4.8.11\css\mdb.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{url('assets/css/index.css')}}" rel="stylesheet">
</head>

<body>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-gray">
            <a class="navbar-brand" href="#"><img src="{{url('assets/images/at.png')}}" alt="Smiley face" height="60" width="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse sticky-top" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{url('/home')}}"><b>Home</b> <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{url('/features')}}"><b>About</b></a>
                <a class="nav-item nav-link" href="{{url('/pricing')}}"><b>Contact</b></a>
                <a class="nav-item nav-link" href="{{url('/pricing')}}"><b>Help</b></a>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <span >
                    @guest
                    <li class="nav-item">
                        <button class="btn btn-sm" type="button"><a href="#login" style="color: black;">LOG IN</a></button>
                        <button class="btn btn-sm" type="button" ><a href="#reg" style="color: black;">REGISTER</a></button>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        
                    </li>
                    @endif
                    @else
                </ul>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    <!--footer-->
    <div>
        <footer class="page-footer font-small grey sticky-bottom" style="margin-top:40px;">
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> Agritech.com</a>
            </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
   
</head>

<body>
    <div class="container-fluid">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                <div class="top-right links justify-content-end d-flex ">
                    @auth
                    <a  href="{{ url('/admin') }}">Home</a>
                    @else
                    <a class='mx-2 mt-1 btn btn-primary' href="{{ route('login') }}">Login</a>
        
                    @if (Route::has('register'))
                    <a class='mx-2 mt-1 btn btn-primary' href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
        
                <div class="content row justify-content-center">
                    <div class="title m-b-md">
                        <h2>IMDB</h2>
                    </div>
                </div>
        </div>
    </div>
</body>

</html>
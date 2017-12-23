<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Wochenessensplaner - erstelle jetzt deinen Plan für die nächste Woche</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/start.css">
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="titleholder">
                  @include('title')                
            </div>
          

            <div class="content">
                @yield('content')
            </div>
        </div> -->

        <div class="grid">
            <div class="title">Title</div>
            <div class="header">Header</div>
            <div class="sidebar">Sidebar</div>
            <div class="content">Content</div>
            <div class="footer">Footer</div>
        </div>
    </body>
</html>

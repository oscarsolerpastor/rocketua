<html>
<head>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <title>@yield('title')</title>
</head>
    <body>
        @section('menu')
            Menú principal
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

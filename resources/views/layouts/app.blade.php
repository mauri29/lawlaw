<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="{{ asset('css/navigator.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">    
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">

        @include('layouts.partials._navigator')
        @yield('content')
        @include('layouts.partials._logos')
        @include('layouts.partials._gallery')
        @include('layouts.partials._footer')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="bower_components/jquery/dist/js/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/bootstrap.min.js"></script>
    
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/navegacion.js') }}"></script>

    @yield('scripts')
</body>
</html>

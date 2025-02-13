<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
    <link href="{{ asset('dist/css/app.css') }}" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        html body{
            margin: 0;
            padding: 0
        }
    </style>
    @yield('css')
</head>

<body class="">
    @include('components.nav')

    @yield('content')

    @include('components.footer')

    <script src="{{ asset('dist/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('mypartials.js')
    @yield('js')
</body>

</html>
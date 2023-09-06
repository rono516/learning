<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learning management system</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-black">

    <!-- NAVBAR COMPONENT -->
    {{-- @yield('nav') --}}
    @include('layouts.inc.topnav')

    {{-- <div class="container mt-5 mx-auto px-2"> --}}


    @yield('maincontent')

    <!-- FOOTER COMPONENT -->


    {{-- @yield('footer') --}}
    @include('layouts.inc.footer')


    {{-- <!Footer end --> --}}

    {{-- </div> --}}
</body>

</html>

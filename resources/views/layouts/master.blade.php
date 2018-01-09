<!DOCTYPE html>
<html>
<head>
    <!-- Styles -->
    <link href="{{ URL::to('css/main.css')}}" rel="stylesheet">
    <link href="{{ URL::to('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Styles -->


  


    <!-- Scripts -->

    <title>@yield('title')</title>
</head>
<body>

@include("includes.header")

    <div class="container">
        @yield('content')
        <script src="{{ URL::asset('script/jquery.js')}}"></script>
        <script src="{{ URL::to('script/app2.js')}}"></script>
        <script src="{{ URL::asset('script/bootstrap.min.js')}}"></script>
    </div>


</body>
</html>
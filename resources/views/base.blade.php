<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <title>Simple Judging</title>
</head>
<body>

    @include('navbar')

    @include('flash-message')

    <div class="container-fluid">
        @yield('content')
    </div>

    @yield('scripts')

</body>
</html>

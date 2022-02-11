<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Icons -->
    <link href='https://cdn.jsdelivr.net/npm/@mdi/font@6.5.95/css/materialdesignicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">

</head>
<body x-data class="mx-auto antialiased flex justify-between">

    @include('layouts.header')

    @include('layouts.sidebar')

    <div class="flex absolute items-center pt-28 pl-72 block md:mx-auto">
        @yield('content')
    </div>


    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/master.js') }}"></script>
    <!-- <script src="{{ asset('js/progress-bar.js') }}"></script> -->
    
</body>
</html>

<style>
    p{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 30px;
    }
</style>


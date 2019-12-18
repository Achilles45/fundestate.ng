<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keyword" content="Real estate crowdfund investment platform in Nigeria">
    <meta name="description" content="a real estate crowdfunding application in Nigeria. Invest in real estate without breaking the bank!">
    <meta name="authour" content="Achilles">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>{{ config('app.name', 'Fundestate - Invest in real estate digitally') }}</title>
</head>
<body>
    @yield('content')
</body>
</html>
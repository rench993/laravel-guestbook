<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <meta http-equil="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.header')

    <div class="alert alert-info">
        <p>@include('inc.messages')</p>
    </div>





</body>
</html>


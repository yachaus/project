<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield ('Title', 'Laracast')</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
    <style>
        .is-completed{
            text-decoration: line-through;
        }
    </style>
</head>
<body>

<h1 style="margin: 20px"><a href="/projects">All Projects</a></h1>
<div class="content" style="margin: 20px">
    @yield('content')
</div>
</body>
</html>

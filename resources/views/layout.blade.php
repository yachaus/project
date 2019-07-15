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
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/projects">
            <img src="https://www.logolynx.com/images/logolynx/29/2904cc5f17a519e7b456ac7b6200dfa7.png" width="180">
        </a>
    </div>
</nav>
<div class="content" style="margin: 20px">
    @yield('content')
</div>
</body>
</html>

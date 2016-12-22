<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>XML</title>

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="/css/app.css" media="screen,projection"/>
    @yield('head')

</head>
<body>


{{--HEADER--}}
<header>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="/" class="brand-logo">XML</a>
                {{--<ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>--}}
            </div>
        </div>
    </nav>
</header>
{{--/HEADER--}}



<main>
    @yield('content')
</main>


<script type="text/javascript" src="/js/app.js"></script>
@yield('foot')


</body>
</html>

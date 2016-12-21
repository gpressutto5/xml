<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="/css/app.css" media="screen,projection"/>
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
    </style>

</head>
<body>
{{--HEADER--}}
<header>
    <nav>
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">XML</a>
                {{--<ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>--}}
            </div>
        </div>
    </nav></header>
{{--/HEADER--}}
<main>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3>Hora do show</h3>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">code</i>
                                <textarea id="xml" class="materialize-textarea"></textarea>
                                <label for="xml">Cole aqui seu xml</label>
                            </div>
                        </div>
                        <div class="row">
                            <a class="waves-effect waves-light btn">button</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
{{--FOOTER--}}
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            Feito com <i class="fa fa-heart" aria-hidden="true"></i> e <i class="fa fa-coffee" aria-hidden="true"></i> por Guilherme Pressutto
            <a class="grey-text text-lighten-4 right" href="https://github.com/gpressutto5">Veja mais</a>
        </div>
    </div>
</footer>
{{--/FOOTER--}}
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>

@extends('layout.main')

@section('head')
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
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3>Hora do show</h3>
                <div class="row">
                    <form class="col s12" method="POST" action="/table">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">code</i>
                                <textarea id="xml" name="xml" class="materialize-textarea"></textarea>
                                <label for="xml">Cole aqui seu xml</label>
                            </div>
                        </div>
                        <div class="row">
                            <button class="waves-effect waves-light btn" type="submit">button</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')

    {{--FOOTER--}}
    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                Feito com <i class="fa fa-heart" aria-hidden="true"></i> e <i class="fa fa-coffee"
                                                                              aria-hidden="true"></i> por Guilherme
                Pressutto
                <a class="grey-text text-lighten-4 right" href="https://github.com/gpressutto5">Veja mais</a>
            </div>
        </div>
    </footer>
    {{--/FOOTER--}}
@endsection
@extends('layout.main')

@section('head')
    <style>
        body {
            height: 100%;
        }
        footer {
            position: relative;
        }
    </style>
@endsection

@section('content')
{{--    <div class="container">
        <div class="row">
            <div class="col s12">
                <h1>Lista</h1>
                <p>Esta é a lista de usuários conectados à rede.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <table class="bordered highlight z-depth-5">
                    <thead>
                    <tr>
                        <th>OUI</th>
                        <th>MAC</th>
                        <th>Rádio</th>
                        <th>SSID</th>
                        <th>Tempo</th>
                        <th>Usuário</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(array_fill(0 ,10,'test') as $test)
                        <tr class="clickable">
                            <td>Apple_70:AD:E7</td>
                            <td>68:FB:7E:70:AD:E7</td>
                            <td>14410201915V0000</td>
                            <td>UNOESTE_PROFESSORES</td>
                            <td>0:01:05</td>
                            <td>26895</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>--}}
<div class="container">
    <div class="row">
        <div class="col s3">
            <div class="collection">
                @foreach(range(26895,26905) as $ra)
                    <a href="#!" class="collection-item"><span class="badge">{{ rand(1, 4) }}</span>{{ $ra }}</a>
                @endforeach
            </div>
        </div>
        <div class="col s9">
            <div class="card-panel" style="width: 100%;">
                Teste
            </div>
        </div>
    </div>
</div>
@endsection
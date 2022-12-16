<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body class="body">
        <header>
            <nav class="navbar navbar-expand-lg navnar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/LOGO.jpeg" alt="CONEPI">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/consulta" class="nav-link">CONSULTAR</a>
                        </li>
                        <li class="nav-item">
                            <a href="cadastrar" class="nav-link">CADASTRAR</a>
                        </li>
                        <li class="nav-item">
                            <a href="/solicitacao" class="nav-link">SOLICITAR</a>
                        </li>
                    </ul>
                </div>
        </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <p>NRTEC &copy; 2022</p>
        </footer>
    </body>
</html>

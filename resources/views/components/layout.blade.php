<!doctype html>
<html lang="pt-BR>
<head>
    <meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ $title }} - Controle de Clientes</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-...sKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .navbar-custom {
        background-color: #DA5C5C;
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
        color: #FFFFFF;
        font-weight: bold;
    }
    .navbar-custom .navbar-nav .nav-link:hover {
        color: #000000;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom mb-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand" href="/">Sistema Buffet</a>
            <div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @auth()
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="/eventos">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="/clientes">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="/como-usar">Ajuda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{ route('logout') }}">Sair</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ $slot }}
</div>
</body>
</html>

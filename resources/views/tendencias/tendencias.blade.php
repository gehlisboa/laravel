<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $tendencia['titulo'] }}</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

<nav class="navbar-fashion">

    <div class="logo">
        FashionLink
    </div>

</nav>

<div class="container mt-5">

    <h1>{{ $tendencia['titulo'] }}</h1>

    <p class="mb-4">
        {{ $tendencia['descricao'] }}
    </p>

    <div class="row">

        @foreach($tendencia['imagens'] as $img)

            <div class="col-md-4 mb-4">

                <img
                    src="{{ $img }}"
                    class="img-fluid rounded"
                    alt="{{ $tendencia['titulo'] }}">

            </div>

        @endforeach

    </div>

    <a href="/" class="btn btn-dark mt-3">
        Voltar para Home
    </a>

</div>

</body>

</html>
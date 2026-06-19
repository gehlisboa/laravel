<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>{{ $tendencia['titulo'] }}</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<div class="container mt-5">

    <h1>{{ $tendencia['titulo'] }}</h1>

    <p>{{ $tendencia['descricao'] }}</p>

    <div class="row mt-4">

        @foreach($tendencia['imagens'] as $img)
            <div class="col-md-4 mb-3">
                <img src="{{ $img }}" class="img-fluid rounded">
            </div>
        @endforeach

    </div>

    <a href="/tendencias" class="btn btn-secondary mt-3">
        Voltar
    </a>

</div>

</body>
</html>
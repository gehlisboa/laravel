<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $tendencia['titulo'] }} | Atelie De Mode</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="navbar-fashion">
    <div class="logo">Atelie De Mode</div>

    <input type="text" placeholder="Buscar projetos, tendências, estilistas...">

    <div class="nav-buttons">
        <a href="/" class="btn-nav">Home
    </a>

    <a href="{{ route('criar-postagem') }}" class="btn-nav">
        Criar Post
    </a>

    <a href="/usuario/1" class="btn-nav">
        Perfil
    </a>
    </div>
</nav>

<!-- HERO DA TENDÊNCIA -->

<section class="featured-profile">

    <div class="profile-right">

        <h2>{{ $tendencia['titulo'] }}</h2>

        <p class="profession">
            Tendência em destaque
        </p>

        <p>
            {{ $tendencia['descricao'] }}
        </p>


        <a href="{{ route('home') }}">
    Voltar para home
</a>

    </div>

</section>

<!-- GALERIA -->

<section class="feed-section">

    <h2>Inspirações de {{ $tendencia['titulo'] }}</h2>

    <div class="masonry">

        @foreach($tendencia['imagens'] as $img)

            <img
                src="{{ $img }}"
                alt="{{ $tendencia['titulo'] }}">

        @endforeach

    </div>

</section>



<footer>

    <h3>Atelie De Mode</h3>
    <p>Conectando criadores de moda.</p>

</footer>

</body>
</html>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pins | Atelie De Mode</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Pinyon+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Prata&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="navbar-fashion">

    <div class="logo-container">
        <span class="titulo">Atelie</span>
        <span class="subtitulo">De Mode</span>
    </div>

    <input type="text" placeholder="Buscar pins, estilos, inspirações...">

    <div class="nav-buttons">
        <a href="/" class="btn-nav">Home</a>

        <a href="{{ route('listar-postagem') }}" class="btn-nav">
            Explorar Posts
        </a>

        <a href="{{ route('usuario.show', 'cecilia') }}" class="btn-nav">
            Perfil
        </a>
    </div>

</nav>

<!-- HERO -->

<section class="featured-profile pagina-tendencia">

    <div class="profile-right conteudo-tendencia">

        <h1 class="nome-tendencia">
            Pins salvos por Cecília
        </h1>

        <p class="destaque-tendencia">
            Inspirações visuais selecionadas
        </p>

        <p>
            Explore ideias, estilos e referências de moda aqui.
        </p>

        <a href="{{ route('usuario.show', 'cecilia') }}" class="btn-home">
            Voltar para perfil
        </a>

    </div>

</section>

<!-- GALERIA -->

<section class="feed-section">

    <div class="masonry">

        @foreach($pins as $pin)

            <img src="{{ $pin }}" alt="Pin">

        @endforeach

    </div>

</section>

<footer>

    <h3>Atelie De Mode</h3>
    <p>Conectando profissionais da moda.</p>

</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Perfil - {{ $usuario['username'] }}</title>

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

    <input type="text" placeholder="Buscar projetos, tendências, estilistas...">

    <div class="nav-buttons">
        <a href="/" class="btn-nav">Home</a>

        <a href="{{ route('criar-postagem') }}" class="btn-nav">
            Criar Post
        </a>

        <a href="/usuario/1" class="btn-nav">
            Perfil
        </a>
    </div>

</nav>

<section class="featured-profile">

    <div class="profile-left">
        <img src="{{ $usuario['foto'] }}" alt="Foto de perfil">
    </div>

    <div class="profile-right">

    <h2 class="username">{{ $usuario['username'] }}</h2>

        <p class="profession">{{ $usuario['profissao'] }}</p>

        <p>{{ $usuario['bio'] }}</p>

        <div class="stats">

            <div>
                <h3>{{ $usuario['stats']['projetos'] }}</h3>
                <span>Projetos</span>
            </div>

            <div>
                <h3>{{ $usuario['stats']['seguidores'] }}</h3>
                <span>Seguidores</span>
            </div>

            <div>
                <h3>{{ $usuario['stats']['conexoes'] }}</h3>
                <span>Conexões</span>
            </div>

        </div>

        <button class="follow-btn">Seguir Perfil</button>
         <a href="{{ route('criar-postagem') }}" class="criar-btn">
        Criar Post
    </a>

    </div>

</section>

<section class="feed-section">

    <h2>Posts</h2>

    <div class="masonry">

        @foreach($usuario['posts'] as $post)
            <img src="{{ $post }}" alt="Post">
        @endforeach

    </div>

</section>

<section class="trabalhos">

    <h2>Trabalhos&Interesses</h2>

    <div class="masonry">

        @foreach($usuario['trabalhos/interesses'] as $trabalhos)
            <img src="{{ $trabalhos }}" alt="trabalhos">
        @endforeach

    </div>

</section>

<footer>

    <h3>Atelie De Mode</h3>
    <p>Conectando profissionais da moda.</p>

</footer>

</body>
</html>